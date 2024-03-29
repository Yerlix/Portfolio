<?php

/**
 * This filter adds query for post search only.
 *
 * @param object $query
 * @return object
 */
function yer_exclude_search_pages($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}

	return $query;
}
if( !is_admin() ) add_filter('pre_get_posts', 'yer_exclude_search_pages');

/**
 * Load needed options & translations into template.
 */
function yer_init_js_vars() {
	wp_localize_script(
		'yer_scripts',
		'ale',
		array(
			'template_dir'      => THEME_URL,
			'ajax_load_url'     => site_url('/wp-admin/admin-ajax.php'),
			'ajax_comments'     => (int) yer_get_option('ajax_comments'),
			'ajax_posts'        => (int) yer_get_option('ajax_posts'),
			'ajax_open_single'  => (int) yer_get_option('load_single_post'),
			'is_mobile'         => (int) is_mobile(),
			'msg_thankyou'  => __('Thank you for your comment!', 'yerlix'),
		)
	);
}
add_action('wp_print_scripts', 'yer_init_js_vars');

/**
 * Enqueue Theme Styles
 */
function yer_enqueue_styles() {

	// add general css file
	wp_register_style( 'yerlix_general_css', THEME_URL . '/css/general.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '1', THEME_URL . '/css/preview/1.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '2', THEME_URL . '/css/preview/2.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '3', THEME_URL . '/css/preview/3.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '4', THEME_URL . '/css/preview/4.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '5', THEME_URL . '/css/preview/5.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '6', THEME_URL . '/css/preview/6.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '7', THEME_URL . '/css/preview/7.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '8', THEME_URL . '/css/preview/8.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '9', THEME_URL . '/css/preview/9.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '10', THEME_URL . '/css/preview/10.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '11', THEME_URL . '/css/preview/11.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '12', THEME_URL . '/css/preview/12.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '13', THEME_URL . '/css/preview/13.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '14', THEME_URL . '/css/preview/14.css', array(), YERLIX_THEME_VERSION, 'all');
    wp_register_style( '15', THEME_URL . '/css/preview/15.css', array(), YERLIX_THEME_VERSION, 'all');

    wp_enqueue_style('yerlix_general_css');

    //Check if User have styles cookie, if no show the color from Theme Options.
    if(!isset($_COOKIE["orquideacolor"])) {
        wp_enqueue_style(yer_get_option('color_style'));
    } else {
        wp_enqueue_style($_COOKIE["orquideacolor"]);
    }

}
add_action( 'wp_enqueue_scripts', 'yer_enqueue_styles' );

/**
 * Custom Css
 */
function yer_customcss(){
    yer_part('css-option');
    if(yer_get_option('customcsscode')){ echo '<style type="text/css">'.yer_get_option('customcsscode').'</style>';}
}
add_action('wp_head', 'yer_customcss');

/**
 * Check if is Blog
 */
function is_blog () {
    global  $post;
    $posttype = get_post_type($post );
    return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/**
 * Enqueue Theme Scripts
 */
function yer_enqueue_scripts() {

	// add html5 for old browsers.
	wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), YERLIX_THEME_VERSION, false );
	// add modernizr
	wp_register_script( 'yer_modernizr', THEME_URL . '/js/libs/modernizr-2.5.3.min.js', array( 'jquery' ), YERLIX_THEME_VERSION, false );
	

    wp_register_script( 'yer_modules', THEME_URL . '/js/modules.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'yer_scripts', THEME_URL . '/js/scripts.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );

	
	wp_enqueue_script( 'jquery-form' );
	wp_enqueue_script( 'yer_modernizr' );
	wp_enqueue_script( 'html5-shim' );
    wp_register_script( 'jquery.nicescroll.min', THEME_URL . '/js/libs/jquery.nicescroll.min.js', array( 'jquery' ), YERLIX_THEME_VERSION, false );
    wp_register_script( 'jquery.mousewheel', THEME_URL . '/js/libs/jquery.mousewheel.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'mwheelIntent', THEME_URL . '/js/libs/mwheelIntent.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'jquery.jscrollpane.min', THEME_URL . '/js/libs/jquery.jscrollpane.min.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'jquery.isotope.min', THEME_URL . '/js/libs/jquery.isotope.min.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'scrollable', THEME_URL . '/js/libs/scrollable.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'jquery.nivo.slider.pack', THEME_URL . '/js/libs/jquery.nivo.slider.pack.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'jquery.fullscreen-min', THEME_URL . '/js/libs/jquery.fullscreen-min.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );
    wp_register_script( 'jquery.cookie', THEME_URL . '/js/libs/jquery.cookie.js', array( 'jquery' ), YERLIX_THEME_VERSION, true );

    wp_enqueue_script( 'jquery.cookie' );

    global $post;
    if($post->post_type == "gallery"){
        wp_enqueue_script( 'scrollable' );
        wp_enqueue_script( 'jquery.isotope.min' );
    }

    if(is_blog () or is_search() or is_page_template('template-home-two.php') or is_page_template('template-gallery-twocol.php') or is_page_template('template-gallery-threecol.php') or is_page_template('template-gallery-fourcol.php') or is_page_template('template-blog-twocol.php') or is_page_template('template-blog-fourcol.php') or is_page_template('template-home-three.php') or is_page_template('template-home-four.php') or is_page_template('template-home-five.php')){
        wp_enqueue_script( 'jquery.isotope.min' );
    }

    if(is_single()){
        wp_enqueue_script( 'jquery.mousewheel' );
        wp_enqueue_script( 'mwheelIntent' );
        wp_enqueue_script( 'jquery.jscrollpane.min' );
    }

    if(is_page_template('template-about.php')) {
        wp_enqueue_script( 'scrollable' );
    }

    if(yer_get_option('sitecustomscrollbar')==1){
        wp_enqueue_script( 'jquery.nicescroll.min' );
    }

    wp_enqueue_script( 'yer_modules' );
	wp_enqueue_script( 'yer_scripts' );
}
add_action( 'wp_enqueue_scripts', 'yer_enqueue_scripts');

/**
 * Add header information 
 */
function yer_head() {
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" href="<?php yer_favicon(); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php yer_rss(); ?>" />
	<?php
}
add_action('wp_head', 'yer_head');

/**
 * Comment callback function 
 * @param object $comment
 * @param array $args
 * @param int $depth 
 */
function yerlix_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> data-comment-id="<?php echo $comment->comment_ID?>">
		<div id="comment-<?php comment_ID(); ?>">
			<header class="comment-author vcard cf">
				<?php printf(__('<cite class="fn">%s</cite>', 'yerlix'), get_comment_author_link()); ?> /
				<time datetime="<?php echo comment_date('c'); ?>"><?php printf(__('%1$s', 'yerlix'), get_comment_date('d M-Y'),  get_comment_time()); ?></time>
				<?php edit_comment_link(__('(Edit)', 'yerlix'), '', ''); ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
			<p><?php _e('Your comment is awaiting moderation.', 'yerlix'); ?></p>
			<?php endif; ?>
			<section class="comment-body"><?php comment_text() ?></section>
		</div>
<?php }

/**
 * Comment callback function
 * @param object $comment
 * @param array $args
 * @param int $depth
 */
function yerlix_comment_default($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
    <div class="avatarbox">
        <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
    </div>
    <div class="commentbody">
        <div class="comment-author vcard">
            <span class="login"><?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?></span>
        <span class="date"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
            <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s','yerlix'), get_comment_date(),  get_comment_time()) ?></a>
         /
            <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </span>
            <div class="cf"></div>
            <div class="commenttext">
                <?php if ($comment->comment_approved == '0') : ?>
                <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','yerlix') ?></em>
                <br />
                <?php endif; ?>
                <?php comment_text() ?>
            </div>
        </div>
    </div>
    <div class="cf"></div>
    <?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
    <?php
}

/**
 * Custom password form
 * @global object $post
 * @return string 
 */
function yerlix_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$html = '<form class="protected-post-form" action="' . site_url('wp-login.php?action=postpass') . '" method="post">
	<p>' . __( "This post is password protected. To view it please enter your password below:", 'yerlix') . '</p>
	<p><label for="' . $label . '">' . __( "Password:", 'yerlix' ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit", 'yerlix' ) . '" /><input type="hidden" name="_wp_http_referer" value="' . get_permalink() . '" /></p>
	</form>
	';
	return $html;
}
add_filter( 'the_password_form', 'yerlix_password_form' );

/**
 * Add footer information
 * Social Services Init 
 */
function yer_footer() {
	$info = trim(yer_get_option('footer_info'));
	if ($info) {
		echo $info;
	}
	?>
	<script type="text/javascript">
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <?php if(yer_get_option('comments_style')=='fb' and is_single()){ ?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <?php }
        if(yer_get_option('gallerycomments_style')=='fb' and get_post_type()=='gallery'){ ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <?php }
}

add_action('wp_footer', 'yer_footer');

/**
 * Add Google Analytics Code
 */
function yer_google_analytics() {
	$analytics_id = trim(yer_get_option('ga'));
	
	if ($analytics_id) {
		echo "\n\t<script>\n";
		echo "\t\tvar _gaq=[['_setAccount','$analytics_id'],['_trackPageview'],['_trackPageLoadTime']];\n";
		echo "\t\t(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];\n";
		echo "\t\tg.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';\n";
		echo "\t\ts.parentNode.insertBefore(g,s)}(document,'script'));\n";
		echo "\t</script>\n";
	}
}
add_action('wp_footer', 'yer_google_analytics');

/**
 * Add Open Graph Tags to <head> 
 */
function yer_og_meta() {
	if (yer_get_option('og_enabled')) {
		
	$og_type='article';
	$og_locale = get_locale();
	
	$og_image = '';
	
	// single page
	if (is_singular()) {
		global $post;
		$og_title = esc_attr(strip_tags(stripslashes($post->post_title)));
		$og_url = get_permalink();
		if (trim($post->post_excerpt) != '') {
			$og_desc = trim($post->post_excerpt);
		} else {
			$og_desc = yer_truncate(strip_tags($post->post_content), 240, '...');
		}
		
		$og_image = yer_get_og_meta_image();
		
		if (is_front_page()) {
			$og_type = 'website';
		}
		
	} else {
		global $wp_query;
		
		$og_title = get_bloginfo('name');
		$og_url = site_url();
		$og_desc = get_bloginfo('description');
		
		if (is_front_page()) {
			$og_type = 'website';
			
		} elseif (is_category()) {
			$og_title = esc_attr(strip_tags(stripslashes(single_cat_title('', false))));
			$term = $wp_query->get_queried_object();
			$og_url = get_term_link($term, $term->taxonomy);
			$cat_desc = trim(esc_attr(strip_tags(stripslashes(category_description()))));
			if ($cat_desc) {
				$og_desc = $cat_desc;
			}
			
		} elseif(is_tag()) {
			$og_title = esc_attr(strip_tags(stripslashes(single_tag_title('', false))));
			$term = $wp_query->get_queried_object();
			$og_url = get_term_link($term, $term->taxonomy);
			$tag_desc = trim(esc_attr(strip_tags(stripslashes(tag_description()))));
			if (trim($tag_desc) != '') {
				$og_desc = $tag_desc;
			}
			
		} elseif (is_tax()) {	
			$og_title = esc_attr(strip_tags(stripslashes(single_term_title('', false))));
			$term = $wp_query->get_queried_object();
			$og_url = get_term_link($term, $term->taxonomy);
			
		} elseif(is_search()) {
			$og_title = esc_attr(strip_tags(stripslashes(__('Search for', 'yerlix') . ' "' . get_search_query() . '"')));
			$og_url = get_search_link();
			
		} elseif (is_author()) {
			$og_title = esc_attr(strip_tags(stripslashes(get_the_author_meta('display_name', get_query_var('author')))));
			$og_url = get_author_posts_url(get_query_var('author'), get_query_var('author_name'));
			
		} elseif (is_archive()) {
			if (is_post_type_archive()) {
				$og_title = esc_attr(strip_tags(stripslashes(post_type_archive_title('', false))));
				$og_url = get_post_type_archive_link(get_query_var('post_type'));
			} elseif (is_day()) {
				$og_title = esc_attr(strip_tags(stripslashes(get_query_var('day') . ' ' . single_month_title(' ', false) . ' ' . __('Archives', 'yerlix'))));
				$og_url = get_day_link(get_query_var('year'), get_query_var('monthnum'), get_query_var('day'));
			} elseif (is_month()) {
				$og_title = esc_attr(strip_tags(stripslashes(single_month_title(' ', false) . ' ' . __('Archives', 'yerlix'))));
				$og_url = get_month_link(get_query_var('year'), get_query_var('monthnum'));
			} elseif (is_year()) {
				$og_title = esc_attr(strip_tags(stripslashes(get_query_var('year') . ' ' . __('Archives', 'yerlix'))));
				$og_url = get_year_link(get_query_var('year'));
			}
			
		} else {
			// other situations
		}
	}
	
	if (!$og_desc) {
		$og_desc = $og_title;
	}
	?>
	
	<?php if (yer_get_option('fb_id')) : ?>
		<meta property="fb:app_id" content="<?php yer_option('fb_id')?>" />
	<?php endif; ?>
	<?php if ($og_image) : ?>
		<meta property="og:image" content="<?php echo $og_image ?>" />
	<?php endif; ?>
	<meta property="og:locale" content="<?php echo $og_locale ?> " />
	<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
	<meta property="og:title" content="<?php echo $og_title ?>" />
	<meta property="og:url" content="<?php echo $og_url ?>" />	
	<meta property="og:type" content="<?php echo $og_type ?>" />
	<meta property="og:description" content="<?php echo $og_desc ?>" />
	<?php }
}
add_action('wp_head', 'yer_og_meta');

/**
 * Add OpenGraph attributes to html tag
 * @param type $output
 * @return string 
 */
function yer_add_opengraph_namespace($output) {
	if (yer_get_option('og_enabled')) {
		if (!stristr($output, 'xmlns:og')) {
			$output = $output . ' xmlns:og="http://ogp.me/ns#"';
		}
		if (!stristr($output, 'xmlns:fb')) {
			$output = $output . ' xmlns:fb="http://ogp.me/ns/fb#"';
		}
	}
	
	return $output;
}
add_filter('language_attributes', 'yer_add_opengraph_namespace',9999);

/**
 * Get image for Open Graph Meta 
 * 
 * @return string
 */
function yer_og_meta_image() {
	echo yer_get_og_meta_image();
}
function yer_get_og_meta_image() {
	global $post;
	$thumbdone=false;
	$og_image='';
	
	//Featured image
	if (function_exists('get_post_thumbnail_id')) {
		$attachment_id = get_post_thumbnail_id($post->ID);
		if ($attachment_id) {
			$og_image = wp_get_attachment_url($attachment_id, false);
			$thumbdone = true;
		}
	}
	
	//From post/page content
	if (!$thumbdone) {
		$image = yer_parse_first_image($post->post_content);
		if ($image) {
			preg_match('~src="([^"]+)"~si', $image, $matches);
			if (isset($matches[1])) {
				$image = $matches[1];
				$pos = strpos($image, site_url());
				if ($pos === false) {
					if (stristr($image, 'http://') || stristr($image, 'https://')) {
						$og_image = $image;
					} else {
						$og_image = site_url() . $image;
					}
				} else {
					$og_image = $image;
				}
				$thumbdone=true;
			}
		}
	}
	
	//From media gallery
	if (!$thumbdone) {
		$image = yer_get_first_attached_image($post->ID);
		if ($image) {
			$og_image = wp_get_attachment_url($image->ID, false);
			$thumbdone = true;
		}
	}
	
	return $og_image;
}

/**
 * Load Post AJAX Hook
 */
function yer_load_post() {
	global $withcomments;
	$query = new WP_Query(array(
		'post_type'     => 'post',
		'p'             => (int) $_POST['id'],
		'post_status'   => 'publish',
	));
	while($query->have_posts()){
		$query->the_post();
		yer_part( 'postcontent', 'single');
		yer_part( 'postactions', 'single');
		# force inserting comments in index
		$withcomments = 1;
		comments_template();
	};
	exit;
}
add_action('wp_ajax_yerlix_load_post', 'yer_load_post');
add_action('wp_ajax_nopriv_yerlix_load_post', 'yer_load_post');



/**
 * AJAXify comments
 * @global object $user
 * @param int $comment_ID
 * @param int $comment_status 
 */
function yer_post_comment_ajax($comment_ID, $comment_status) {
	global $user;
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		$comment = get_comment($comment_ID);
		
        switch($comment_status){  
            case '0':  
                //notify moderator of unapproved comment  
                wp_notify_moderator($comment_ID);  
            case '1': //Approved comment  
                $post=&get_post($comment->comment_post_ID); //Notify post author of comment  
                if ( get_option('comments_notify') && $comment->comment_approved && $post->post_author != $comment->user_id )  
                    wp_notify_postauthor($comment_ID, $comment->comment_type);  
                break;  
            default:  
                echo json_encode(array(
					'error' => 1,
					'msg'	=> __('Something went wrong. Please refresh page and try again.', 'yerlix'),
				));exit;				
        }
		// save cookie for non-logged user.
		if ( !$user->ID ) {
			$comment_cookie_lifetime = apply_filters('comment_cookie_lifetime', 30000000);
			setcookie('comment_author_' . COOKIEHASH, $comment->comment_author, time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
			setcookie('comment_author_email_' . COOKIEHASH, $comment->comment_author_email, time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
			setcookie('comment_author_url_' . COOKIEHASH, esc_url($comment->comment_author_url), time() + $comment_cookie_lifetime, COOKIEPATH, COOKIE_DOMAIN);
		}
		
		// load a comment to variable
		ob_start();
		yerlix_comment($comment, array('max_depth' => 1), 1);
		$html = ob_get_clean();
		
		echo json_encode(array(
			'html'		=> $html,
			'success'	=> 1,
		));
		exit;
    }  
}
if( !is_admin() ) {
	add_action('comment_post', 'yer_post_comment_ajax', 20, 2);
}

/**
 * Change Wordpress Login Logo 
 */
function yer_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
			background:#fff url(<?php echo get_template_directory_uri() ?>/css/images/admin-logo.png) 50% 50% no-repeat;
			height:100px;
            width:190px;
			background-size: auto auto;
        }
		body.login div#login {
			background:#fff;
		}
		body.login {
			background:#fff
		}
		body.login #backtoblog {
			display:none;
		}
		body.login #nav {
			text-align:center;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'yer_login_logo' );

/**
 * Change login logo URL
 * @return string 
 */
function yer_login_logo_url() {
    return home_url('/');
}
add_filter( 'login_headerurl', 'yer_login_logo_url' );

/**
 * Change login logo title
 * @return string 
 */
function yer_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'yer_login_logo_url_title' );
