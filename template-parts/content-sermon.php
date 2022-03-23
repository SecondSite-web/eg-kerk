<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SecondPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <header class="entry-header">
        <div class="row pt-5">
            <div class="col-3">
			    <?php secondpress_post_thumbnail(); ?>
            </div>
            <div class="col-9">
                <h2><?php the_field('sermon_title') ?> <small> - </small>  <?php the_field('preacher') ?></h2>
                <p><?php the_field('date'); ?></p>
                <p class="lead">Main Scripture / Hoof Skrif: <?php the_field('scripture_book') ?> <?php the_field('chapter') ?> vs <?php the_field('verse');  ?> </p>
            </div>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content">

		<?php the_content(sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'secondpress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		)); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php secondpress_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
