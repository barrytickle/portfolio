<?php
  get_header();
?>

<!--
  =========================================
                INDEX.PHP
  =========================================
  The fallback page for wordpress, by default wordpress will use
  this template for everything, this will be the homepage
  of the blog where all the blog posts are generated.
-->
<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<section class="blog--group">
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
      <div class="blog">
        <div class="thumbnail" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo the_post_thumbnail_url(); ?>');"></div><!-- The blog post thumbnail -->
        <div class="hero--image">
          <h2><a style="text-decoration: none; color:inherit;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!-- The blog post title -->
          <span>      <?php the_time( get_option( 'date_format' ) ); ?></span> <!-- Fixes the date not being shown on all posts -->
          <p><?php the_excerpt(); ?> </p><!-- The blog post text extract -->
          <a class="btn btn-outline" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </div>
    <?php endwhile; ?>
</section>



<?php
  get_footer();
?>
