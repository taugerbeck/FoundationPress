<?php
/*
Template Name: Hundatwork Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header class="row title-area">
          <div class="large-4 columns"><h1><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/hundatwork/logo.png" /></h1></div>
          <div class="large-8 columns"><h3 class="entry-title"><?php the_title(); ?></h3></div>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
