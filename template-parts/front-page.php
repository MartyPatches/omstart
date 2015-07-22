<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Omstart
 */

?>
<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="">
			<div class="col-md-4">
				<img style="width: 50%" src="<?php echo get_stylesheet_directory_uri(); ?>/UI/assets/media/icons/art3.png" alt="Art icon">
				Nummer 1</div>
			<div class="col-md-4">Nummer 2</div>
			<div class="col-md-4">Nummer 3</div>
		</div>

		<?php //the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'omstart' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'omstart' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div> <!-- .container -->
