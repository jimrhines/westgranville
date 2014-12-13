<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Something | <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'name' ); ?>" />
		<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-57615437-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<header id="site-header" role="banner">
				<div class="row app-bar">
					<div class="col">
						<h6 id="site-title" class="h1"><a href="/home.php"><span><?php bloginfo( 'name' ); ?></span></a></h6>

						<button type="button" class="btn btn-link show-for-sm" id="nav-toggle" data-toggle="off-canvas">
							<span class="fa fa-bars fa-2x"></span>
							<span class="assistive-text">Menu</span>
						</button> 

						<button type="button" class="btn btn-link show-for-sm" id="search-toggle">
							<span class="fa fa-search fa-2x"></span>
							<span class="assistive-text">Search</span>
						</button> 
					</div>
				</div>

				<nav id="site-nav" class="nav-bar collapsed" role="navigation">
					<h6 class="assistive-text h2">Main navigation</h6>
					<a href="#content" class="skip-link assistive-text">Skip to content</a>
					<ul class="nav row">
						<li class="nav-item nav-item-home"><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">About West Granville</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Pastor&#8217;s Message</a></li>
						<li class="nav-item">
							<a href="<?php echo home_url( '/' ); ?>" class="nav-link dropdown-toggle" data-toggle="hover" aria-haspopup="true">Youth Education <span class="fa fa-caret-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo home_url( '/' ); ?>">Nursery</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>">Scholarships</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<nav class="utility-bar hide-for-sm">
					<h6 class="assistive-text h2">Utility navigation</h6>
					<div class="row">
						<div class="col">
							<ul class="inline-list piped">
								<li><a href="<?php echo home_url( '/' ); ?>">Contact Us</a></li>
							</ul>							
						</div>
					</div>
				</nav>

				<div class="search-bar">
					<div class="row">
						<div class="col">
							<form>
								<label for="site-search-input">Search</label>
								<input type="search" id="site-search-input" placeholder="Enter keywords" maxlength="150" />
								<button class="btn btn-primary">
									<span class="fa fa-search"></span>
									<span class="assistive-text">Go <span class="fa fa-caret-right"></span></span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</header>

			<main id="content" role="main">