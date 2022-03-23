<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SecondPress
 */

?>
<tr></tr>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php


		the_field('scripture_book');
		the_field('chapter');
		the_field('verse');
		the_field('sermon_title');

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', the_field( 'preacher' )
			.'</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				secondpress_posted_on();
				secondpress_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <

	<?php secondpress_post_thumbnail(); ?>



	<footer class="entry-footer">
		<?php secondpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
