<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SecondPress
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <main id="primary" class="site-main">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title">Sermons / Preke</h1>
                    </header><!-- .page-header -->

                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-striped table-active" id="sermons-table">
                                    <thead>
                                        <tr>
                                            <th>Date/Datum</th>
                                            <th>Preacher/Prediker</th>
                                            <th>Scripture/Skrif</th>
                                            <th>Chapter/Hoofstuk</th>
                                            <th>Verse/Vers</th>
                                            <th>Title/Titel</th>
                                            <th>Link/Skakel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    /* Start the Loop */
                                    while ( have_posts() ) :
	                                    the_post();
                                        ?>
                                    <tr>
                                        <td><?php the_field('date'); ?></td>
                                        <td><?php the_field('preacher'); ?></td>
                                        <td><?php the_field('scripture_book'); ?></td>
                                        <td><?php the_field('chapter'); ?></td>
                                        <td><?php the_field('verse'); ?></td>
                                        <td><?php the_field('sermon_title'); ?></td>
                                        <td><a class="table-link" href="<?php esc_url( the_permalink() ) ?>" rel="bookmark"><i class="fa fa-soundcloud"></i> Listen/Luister </a></td>
                                    </tr>

                                    <?php endwhile;

                                    the_posts_navigation();

                                    else :

	                                    get_template_part( 'template-parts/content', 'none' );

                                    endif;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </main><!-- #main -->
        </div>

    </div>
</div>


<?php

get_footer();
