<?php

/**
 * implements Special:Prefixindex1 );

# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
# http://www.gnu.org/copyleft/gpl.html

/**
 * Wrapper object for MediaWiki's localization functions,
 * to be passed to the template engine.
 *
 * @private
 * @ingroup Skins
 */
class MediaWiki_I18N {
	var $_context = array();

	function set( $varName, $value ) {
		$this->_context[$varName] = $value;
	}

	function translate( $value ) {
		wfProfileIn( __METHOD__ );

		// Hack for i18n:attributes in PHPTAL 1.0.0 dev version as of 2004-10-23
		$value = preg_replace( '/^string:/', '', $value );

		$value = wfMsg( $value );
		// interpolate variables
		$m = array();
		while( preg_match( '/\$([0-9]*?)/sm', $value, $m ) ) {
			list( $src, $var ) = $m;
			wfSuppressWarnings();
			$varValue = $this->_context[$var];
			wfRestoreWarnings();
			$value = str_replace( $src, $varValue, $value );
		}
		wfProfileOut( __METHOD__ );
		return $value;
	}
}

/**
 * Template-filler skin base class
 * Formerly generic PHPTal (http://phptal.sourceforge.net/) skin
 * Based on Brion's smarty skin
 * @copyright Copyright © Gabriel Wicke -- http://www.aulinx.de/
 *
 * @todo Needs some serious refactoring into functions that correspond
 * to the computations individual esi snippets need. Most importantly no body
 * parsing for most of those of course.
 *
 * @ingroup Skins
 */
class SkinTemplate extends Skin {
	/**#@+
	 * @private
	 */

	/**
	 * Name of our skin, it probably needs to be all lower case.  Child classes
	 * should override the default.
	 */
	var $skinname = 'monobook';

	/**
	 * Stylesheets set to use.  Subdirectory in skins/ where various stylesheets
	 * are located.  Child classes should override the default.
	 */
	var $stylename = 'monobook';

	/**
	 * For QuickTemplate, the name of the subclass which will actually fill the
	 * template.  Child classes should override the default.
	 */
	var $template = 'QuickTemplate';

	/**
	 * Whether this skin use OutputPage::headElement() to generate the <head>
	 * tag
	 */
	var $useHeadElement = false;

	/**#@-*/

	/**
	 * Add specific styles for this skin
	 *
	 * @param $out OutputPage
	 */
ace = NS_MAIN, $prefix, $from = null ) {
		global $wgOut, $wgUser, $wgContLang, $wgLang;

		$sk = $wgUser->getSkin();

		if (!isset($from)) $from = $prefix;

		$fromList = $this->getNamespaceKeyAndText($namespace, $from);
		$prefixList = $this->getNamespaceKeyAndText($namespace, $prefix);
		$namespaces = $wgContLang->getNamespaces();

		if ( !$prefixList || !$fromList ) {
			$out = wfMsgWikiHtml( 'allpagesbadtitle' );
		} elseif ( !in_array( $namespace, array_keys( $namespaces ) ) ) {
			// Show errormessage and reset to NS_MAIN
			$out = wfMsgExt( 'allpages-bad-ns', array( 'parseinline' ), $namespace );
			$namespace = NS_MAIN;
		} else {
			list( $namespace, $prefixKey, $prefix ) = $prefixList;
			list( /* $fromNs */, $fromKey, $from ) = $fromList;

			### FIXME: should complain if $fromNs != $namespace

			$dbr = wfGetDB( DB_SLAVE );

			$res = $dbr->select( 'page',
				array( 'page_namespace', 'page_title', 'page_is_redirect' ),
				array(
					'page_namespace' => $namespace,
					'page_title' . $dbr->buildLike( $prefixKey, $dbr->anyString() ),
					'page_title >= ' . $dbr->addQuotes( $fromKey ),
				),
				__METHOD__,
				array(
					'ORDER BY'  => 'page_title',
					'LIMIT'     => $this->maxPerPage + 1,
					'USE INDEX' => 'name_title',
				)
			);

			### FIXME: side link to previous

			$n = 0;
			if( $res->numRows() > 0 ) {
				$out = Xml::openElement( 'table', array( 'border' => '0', 'id' => 'mw-prefix