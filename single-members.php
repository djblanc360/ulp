<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container memberContainer">
				<p id="singleCustomBreadcrumbs"><a href="<?php the_permalink(); ?>/about/">About</a> » <?php the_title(); ?></p>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-sm-6">
						<h1 class="memberName"><?php the_title(); ?></h1>
						<div class="memberInfoList">
							<ul class="list-unstyled">
								<?php if( get_field('member_title') ): ?>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Title</span>
										</div>
										<div class="col-sm-9">
									 		<?php the_field('member_title'); ?>
										</div>
									</div>
								</li>
								<?php endif; ?>
								<?php if( get_field('member_education') ): ?>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Education</span>
										</div>
										<div class="col-sm-9">
									 		<?php the_field('member_education'); ?>
										</div>
									</div>
								</li>
								<?php endif; ?>
								<?php if( get_field('member_team') ): ?>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Team</span>
										</div>
										<div class="col-sm-9">
									 		<?php the_field('member_team'); ?>
										</div>
									</div>
								</li>
								<?php endif; ?>
								<?php if( get_field('member_focus') ): ?>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Focus</span>
										</div>
										<div class="col-sm-9">
									 		<?php the_field('member_focus'); ?>
										</div>
									</div>
								</li>
								<?php endif; ?>
								<?php if( get_field('member_website') ): ?>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Website</span>
										</div>
										<div class="col-sm-9">
									 		<a href="<?php the_field('member_website'); ?>" target="_blank"><?php the_field('member_website'); ?></a>
										</div>
									</div>
								</li>
								<?php endif; ?>
							</ul>
						</div>
						<div class="memberInfoBio">
							<h2 class="singleCustomHeader">Member Bio</h2>
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'member' );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
