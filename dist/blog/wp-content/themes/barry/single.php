<?php
  get_header();
?>
<!--
  =========================================
                SINGLE.PHP
  =========================================

  This page is the default template file for all blog posts
  if you need to make a page for a full theme website it's
  "page.php". All the code is the exact same, but both files
  are for different purposes.

  We need a slightly different loop for this page,
  otherwise it will pull in all the other blog posts.
  The loop will check the database to see if there
  is a blog post which matches the url, then
  the loop will loop through all the content in the
  db.
-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="case--study_bar">
    <div class="prev--study">
      Previous: <?php previous_post_link('%link');?>
    </div>
    <div class="website--visit">
      &nbsp;
    </div>
    <div class="next--study">
      Next: <?php next_post_link('%link'); ?>
    </div>
  </div>
  <section class="case--study_block blog--block">
    <div class="container-lrg">
      <div class="case--study_hero">
        <h1><?php the_title(); ?></h1>
        <span><?php the_time( get_option( 'date_format' ) ); ?></span> <!-- Fixes the date not being shown on all posts -->
      </div>
    </div>
    <div class="large--banner" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');"></div>
    <div class="container-sml">
      <?php the_content(); ?> <!-- The blog post text extract -->
    </div>
  </section>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
  get_footer();
?>
