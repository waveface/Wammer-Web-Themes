<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/waveface.css">

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
	<header id="header" role="banner">
		<div id="header-inner">
		<hgroup>
			<h1 id="site-title"><a href="https://waveface.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>


		<?php if (get_bloginfo('language') == 'zh-TW') { 

			$t_what_is = "Waveface是什麼?";
			$t_support = "支援服務";
			$t_blog = "部落格";
			$t_product = "產品下載";
			$t_login = "登入";

		} else {
			
			$t_what_is = "What is Waveface?";
			$t_support = "Support";
			$t_blog = "Blog";
			$t_product = "Download";
			$t_login = "Log in";

		}




		?>
				

	  	<nav id="menu">
	  		<ul>
		<?php if (get_bloginfo('language') == 'zh-TW'): ?>
	  			<li><a href="https://waveface.com/tw/index.html">首頁</a></li>
	  			<li><a href="https://waveface.com/tw/feature-photosync.html">功能</a>

				   <ul class="drop-menu">
				      <li><a href="https://waveface.com/tw/feature-photosync.html">照片管理</a></li>
				      <li><a href="https://waveface.com/tw/feature-webclip.html">擷取網頁</a></li>
				    </ul>

	  			</li>
	  			<li><a href="https://waveface.com/tw/download.html">下載</a></li>
	  			<li><a href="http://support.waveface.com/tw">常見問題</a></li>
	  	<?php else: ?>
	  			<li><a href="https://waveface.com/en/index.html">Home</a></li>
	  			<li><a href="https://waveface.com/en/feature-photosync.html">Features</a>

				   <ul class="drop-menu">
				      <li><a href="https://waveface.com/en/feature-photosync.html">Sync Photo</a></li>
				      <li><a href="https://waveface.com/en/feature-webclip.html">Clip Webpages</a></li>
				    </ul>

	  			</li>
	  			<li><a href="https://waveface.com/en/download.html">Download</a></li>
	  			<li><a href="http://blog.waveface.com/">Blog</a></li>
	  			<li><a href="http://support.waveface.com/tw">FAQ</a></li>

	  	<?php endif ?>
	  		</ul>

	  	</nav>
		<div id="action-menu">
			<!-- <a href="/signup">{% trans "Sign up" %}</a> |  -->
			<a href="https://waveface.com/login"><?php echo $t_login ?></a>
		</div>
		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->
		</div>
	</header><!-- #branding -->

	<div class="blog-header">
		<h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a></h1>
	</div>


	<div id="main">

