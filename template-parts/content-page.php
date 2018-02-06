<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="grid-x title-area hide-for-small-only">
		<div class="medium-5 large-4 cell"><h1><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/hundatwork/logo.png" /></h1></div>
		<div class="medium-7 large-8 cell"><h3 class="entry-title"><?php the_title(); ?></h3></div>
	</header>
	<header class="title-area show-for-small-only">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
