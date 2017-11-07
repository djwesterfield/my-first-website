<?php
/**
 * General template tags that can go anywhere in a template.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Load header template.
 *
 * Includes the header template for a theme or if a name is specified then a
 * specialised header will be included. If the theme contains no header.php file
 * then the header from the default theme will be included.
 *
 * For the parameter, if the file is called "header-special.php" then specify
 * "special".
 *
 * @uses locate_template()
 * @since 1.5.0
 * @uses do_action() Calls 'get_header' action.
 *
 * @param string $name The name of the specialised header.
 */
function get_header( $name = null ) {
	do_action( 'get_header' );

	$templates = array();
	if ( isset($name) )
		$templates[] = "header-{$name}.php";

	$templates[] = "header.php";

	if ('' == locate_template($templates, true))
		load_template( get_theme_root() . '/default/header.php');
}

/**
 * Load footer template.
 *
 * Includes the footer template for a theme or if a name is specified then a
 * specialised footer will be included. If the theme contains no footer.php file
 * then the footer from the default theme will be included.
 *
 * For the parameter, if the file is called "footer-special.php" then specify
 * "special".
 *
 * @uses locate_template()
 * @since 1.5.0
 * @uses do_action() Calls 'get_footer' action.
 *
 * @param string $name The name of the specialised footer.
 */
function get_footer( $name = null ) {
	do_action( 'get_footer' );

	$templates = array();
	if ( isset($name) )
		$templates[] = "footer-{$name}.php";

	$templates[] = "footer.php";

	if ('' == locate_template($templates, true))
		load_template( get_theme_root() . '/default/footer.php');
}

/**
 * Load sidebar template.
 *
 * Includes the sidebar template for a theme or if a name is specified then a
 * specialised sidebar will be included. If the theme contains no sidebar.php
 * file then the sidebar from the default theme will be included.
 *
 * For the parameter, if the file is called "sidebar-special.php" then specify
 * "special".
 *
 * @uses locate_template()
 * @since 1.5.0
 * @uses do_action() Calls 'get_sidebar' action.
 *
 * @param string $name The name of the specialised sidebar.
 */
function get_sidebar( $name = null ) {
	do_action( 'get_sidebar' );

	$templates = array();
	if ( isset($name) )
		$templates[] = "sidebar-{$name}.php";

	$templates[] = "sidebar.php";

	if ('' == locate_template($templates, true))
		load_template( get_theme_root() . '/default/sidebar.php');
}

/**
 * Display search form.
 *
 * Will first attempt to locate the searchform.php file in either the child or
 * the parent, then load it. If it doesn't exist, then the default search form
 * will be displayed.
 *
 * @since 2.7.0
 */
function get_search_form() {
	d