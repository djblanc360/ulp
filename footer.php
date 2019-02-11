<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Lab_Partners
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-nav">
			<nav class="navbar navbar-expand-lg">
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav mx-auto">
			      <li class="nav-item active">
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
			</nav>
		</div>
		<div id="site-columns">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						    <div id="secondary" class="widget-area" role="complementary">
						    <?php dynamic_sidebar( 'sidebar-2' ); ?>
						    </div>
						<?php endif; ?>
					</div>
					<div class="col-sm-4">
						<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
						    <div id="secondary" class="widget-area" role="complementary">
						    <?php dynamic_sidebar( 'sidebar-3' ); ?>
						    </div>
						<?php endif; ?>
					</div>
					<div class="col-sm-4">
						<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						    <div id="secondary" class="widget-area" role="complementary">
						    <?php dynamic_sidebar( 'sidebar-4' ); ?>
						    </div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			&copy; University Lab Partners 2018
			<span class="sep"> | </span>
				Website Design & Development by <a href="https://brytdesigns.com" target="_blank">BrytDesigns.com</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
