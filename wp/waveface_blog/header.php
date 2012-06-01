<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php
	
		$site_description = get_bloginfo( 'description', 'display' );
	
		wp_title( '|', true, 'right' );
	
		bloginfo( 'name' );
	
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		?>
	</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/waveface.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<script src="<?php bloginfo('template_directory'); ?>/js/html5.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/app.js" type="text/javascript"></script>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="root">
	<header id="header">
		<div id="header-inner">
		<div id="brand">
			<h1 id="site-title">
				<a href="https://waveface.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</h1>
		</div>

		<?php 

		if (get_bloginfo('language') == 'zh-TW') { 

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
	  			<li><a href="https://waveface.com/tw/features/index.html">功能</a></li>
	  			<li><a href="https://waveface.com/tw/download.html">下載</a></li>
	  			<li><a href="http://support.waveface.com/tw">常見問題</a></li>
	  	<?php else: ?>
	  			<li><a href="https://waveface.com/en/index.html">Home</a></li>
	  			<li><a href="https://waveface.com/en/features/index.html">Features</a></li>
	  			<li><a href="https://waveface.com/en/download.html">Download</a></li>
	  			<li><a href="http://blog.waveface.com/">Blog</a></li>
	  			<li><a href="http://support.waveface.com/">FAQ</a></li>

	  	<?php endif ?>
	  		</ul>

	  	</nav>
		</div>
	</header>

	<div id="blog" class="copy">