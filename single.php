<?php

    /**
     * Single Post
     *
     * @package om
     */

?>

<?php $config = \App\Config\ReduxThemeOptions\Initialize::data(); ?>

<?php get_header(); ?>

<?php get_template_part('partials/page/header/full-width'); ?>

	<section class="o-page-content o-single-post">
		<div id="primary" class="content-area">
			<main id="main" class="site-main main-content">

				<div class="container o-container">
					<div class="row o-row">

						<div class="col-xs-12 col-md-9 o-column">
							<div class="o-entry-main">
								<article <?php post_class(); ?>>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('partials/single/entry-featured-image'); ?>

                        <?php get_template_part('partials/single/entry-header'); ?>

                        <?php get_template_part('partials/single/entry-content'); ?>

                        <?php get_template_part('partials/single/entry-footer'); ?>

                        <?php get_template_part('partials/single/related'); ?>

                        <?php get_template_part('partials/single/entry-comments'); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || '0' != get_comments_number()) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
								</article>
							</div>
						</div>
						<!--!entry-main-->

						<div class="col-xs-12 col-md-3 o-column">
                <?php get_sidebar(); ?>
						</div>
						<!--!sidebar-->

					</div>
				</div>
			</main>
			<!-- !main -->
		</div>
		<!-- !primary -->

	</section>
	<!-- !#o-page-content -->

<?php get_footer(); ?>