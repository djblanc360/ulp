<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				ulp_posted_on();
				ulp_posted_by();
				?>
			</div><!-- .entry-meta -->

			<footer class="entry-footer">
				<?php ulp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
				
				<?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

		<?php
	    $postID = get_the_ID();
	    $audio = get_field( "audio_thumbnail" );
	    $video = get_field( "video_thumbnail" );

	    if( $audio ) {

	        echo '<div class="post-thumbnail"><audio style="" controls loop src="' . $audio . '"></audio></div>';

	    }
	    else if ($video) {


	        echo '<div class="post-thumbnail"><video style="width:100%;margin:auto;" controls loop src="' . $video . '"></video></div>';


	    }
	    else {
            ulp_post_thumbnail();
	    }
	    ?>

	    <?php $images = get_field('slider_thumbnail');

	    if( $images ): ?>
	    	<div class="post-thumbnail">
	        <div class="news-gallery-post">
	            <div class="news-slider">
	                <?php foreach( $images as $image ): ?>
	                    <div>
	                        <img id="<?php $i ?>" class="news-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    </div>
	                    <?php $i++; ?>
	                <?php endforeach; ?>
	            </div>
	                <button class="left-news-slider-arrow"><i class="fas fa-angle-left"></i></button>
	                <button class="right-news-slider-arrow"><i class="fas fa-angle-right"></i></button>

	        </div>
	       </div>
	    <?php endif; ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ulp' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ulp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
