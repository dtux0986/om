<?php
    /**
     * Page
     *
     * @package om
     */

    get_header(); ?>

	<!-- #site-navigation -->
	<div class="container o-container">
		<section class="o-page-content o-single-page">
			<div id="primary" class="content-area">
				<main id="main" class="site-main main-content">

					<div id="main-content" class="row o-row">
						<div class="col-xs-12 o-column">
							<section class="o-entry-main">
                  <?php while (have_posts()) : the_post(); ?>
                      <?php get_template_part('partials/single/entry-content', ''); ?>
                  <?php endwhile; ?>
							</section>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 o-column col-2">
                <?php get_sidebar(); ?>
						</div>

					</div>

				</main>
				<!-- main -->
			</div>
			<!-- primary -->

		</section>
		<!-- #o-page-content -->
	</div>

<?php get_footer();