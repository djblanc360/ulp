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

      <?php  $image = get_children( array(

            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image'
        ));

        $video = get_children( array(

            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'video'

        ));

        $audio= get_children( array(

            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'audio'

        ));

        $gallery= get_children( array(

            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'gallery'

        ));

        if ( has_post_format( 'video' ) ) {

            foreach ( $video as $attachment_id => $attachment ) {
                echo '<video style="width:300px;margin:auto;" controls loop src="' . wp_get_attachment_url( $attachment_id ) . '"></video>';
        }

        }
        else if ( has_post_format( 'gallery' ) ) {

          foreach ( $gallery as $attachment_id => $attachment ) {
              echo '<image style="" controls loop src="' . wp_get_attachment_url( $attachment_id ) . '"></image>';
        }

        }
        else if ( has_post_format( 'audio' ) ) {

            foreach ( $audio as $attachment_id => $attachment ) {
                echo '<audio style="" controls loop src="' . wp_get_attachment_url( $attachment_id ) . '"></audio>';
        }

        }
        else {
            echo the_post_thumbnail();
        }
        ?>

            <h6 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h6>
						<P>
							<?php the_author(); ?>  |	<span class="post-link">
                <?php
                  foreach (get_categories() as $category){
                  echo $category->name;
                  } ?>
               </span>
						</P>
						<hr>
        <div class="post-text"> <?php the_excerpt(); ?> </div>
				<a href="<?php the_permalink(); ?>" class="btn btn-green btn-block read-more-button">Read More</a>
				    <div class="clearfix"></div>
				<hr>
				<p>
				<?php comments_number( $zero, $one, $more ); ?>comments  |	<?php the_date(); ?>
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
<!--paginationn functions here -->
<div class="news-navigation">
	<span class="pagination-buttons">
			<a href="<?php echo site_url(); ?>/news/"><img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/home-icon.png" alt="home icon"></a>
	</span>
	<span class="nav-previous pagination-buttons"><?php previous_posts_link( '<' ); ?></span>
	<span class="nav-next pagination-buttons"><?php next_posts_link( '>' ); ?></span>
</div>
<?php get_footer(); ?>
