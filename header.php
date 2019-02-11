<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Lab_Partners
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ulp' ); ?></a>

	<?php if(is_page('home')) { ?>

		<section id="homeIntro" class="d-flex align-items-center justify-content-center parallax-window" data-parallax="scroll" data-image-src="<?php echo site_url(); ?>/wp-content/uploads/2018/11/ulp-page-header.jpg" data-parallax-speed="0.5">
			<div class="homeIntroInner text-center">
				<img src="<?php the_field('home_intro_img'); ?>" alt="University Lab Partners at UC Irvine" class="mx-auto">
				<div class="homeIntroTag">
					<?php the_field('intro_tagline'); ?>
				</div>
				<p><a href="<?php echo site_url(); ?>/facility/" class="button white">Learn More</a> <a href="<?php echo site_url(); ?>/apply-now/" class="button cta">Apply Now</a></p>
			</div>
		</section>

	<?php } elseif (is_home()) { ?>

		<section id="pageIntro" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo site_url(); ?>/wp-content/uploads/2018/11/ulp-page-header.jpg" data-parallax-speed="0.5">
			<header class="entry-header container">
				<h1 class="entry-title">News</h1>
				<p class="pageBread"><a href="<?php echo site_url(); ?>/">University Lab Partners</a> / News</p>
			</header><!-- .entry-header -->
		</section>

	<?php } elseif (is_singular( array( 'events', 'members' ) )) { ?>

	<?php } else { ?>

		<section id="pageIntro" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo site_url(); ?>/wp-content/uploads/2018/11/ulp-page-header.jpg" data-parallax-speed="0.5">
			<header class="entry-header container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p class="pageBread"><a href="<?php echo site_url(); ?>/">University Lab Partners</a> / <?php the_title(); ?></p>
			</header><!-- .entry-header -->
		</section>

	<?php } ?>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			  <a class="navbar-brand" href="<?php echo site_url(); ?>">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/11/ULP-Logo.png" alt="University Lab Partners Navigation Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/about/">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/facility/">Facility</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/news/">News</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/our-events/">Events</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/contact/">Contact</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-cta" href="<?php echo site_url(); ?>/apply-now/">Apply Now</a>
			      </li>
			    </ul>
			  </div>
			 </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content"></div>
