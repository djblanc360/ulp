<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

<h2>The latest news from ULP</h2>
<div class="container">
<div class="row" id="ms-container">




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <?php

        $audio = get_field( "audio_thumbnail" );
        $video = get_field( "video_thumbnail" );

        if( $audio ) {

            echo '<audio style="" controls loop src="' . $audio . '"></audio>';

        }
        else if ($video) {


            echo '<video style="width:300px;margin:auto;" controls loop src="' . $video . '"></video>';


        }
        else {
            echo the_post_thumbnail();
        }
        ?>

        <?php $images = get_field('slider_thumbnail');

        if( $images ): ?>
            <div class="news-gallery-post">
                <div class="news-slider">
                    <?php foreach( $images as $image ): ?>
                        <div>
                            <img id="<?php $i ?>" class="news-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <p class="news-slide-caption"><?php echo $image['caption']; ?></p>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                    <button class="left-news-slider-arrow"><i class="fas fa-angle-left"></i></button>
                    <button class="right-news-slider-arrow"><i class="fas fa-angle-right"></i></button>

            </div>
        <?php endif; ?>

            <h6 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h6>
						<P>
							<?php the_author(); ?>  | <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
						</P>

        <div class="post-text"> <?php the_excerpt(); ?> </div>
				<a href="<?php the_permalink(); ?>" class="btn btn-green read-more-button">Read More</a>
				    <div class="clearfix"></div>
				<p>
				<?php echo get_comments_number(); ?> comments  |	<?php echo get_the_date(); ?> | <?php echo get_like_count( $count ); ?> <?php echo   get_post_meta( get_the_ID(), "_post_like_count", true ); ?>
				</p>
    <div class="clearfix"></div>

    </div>

    <?php endwhile; ?>
  <?php  else : ?>

        <article class="no-posts">

            <h1><?php _e('No posts were found.'); ?></h1>

        </article>
    <?php endif; ?>

	</div> <!--end row ms-container -->
<div class="clearfix"></div>

</div><!--end container -->
<hr>
<!--paginationn functions here -->
<div class="news-navigation">
	<span class="pagination-buttons">
			<a href="<?php echo site_url(); ?>/news/"><i class="fas fa-home"></i></a>
	</span>
	<span class="nav-previous pagination-buttons"><?php previous_posts_link( '<i class="fas fa-angle-left"></i>' ); ?></span>
	<span class="nav-next pagination-buttons"><?php next_posts_link( '<i class="fas fa-angle-right"></i>' ); ?></span>
</div>
<div class="news-space"></div>
<?php get_footer(); ?>
