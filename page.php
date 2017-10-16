<?php
    /**
     * Page
     *
     * @package om
     */

?>

<?php $config = \App\Config\ReduxThemeOptions\Initialize::data(); ?>

<?php get_header(); ?>

<?php get_template_part('partials/page/header/full-width'); ?>

	<section class="o-page-content o-single-page">
		<div id="primary" class="content-area">
			<main id="main" class="site-main main-content">

				<div class="container o-container">
					<div class="row o-row">

						<div class="col-xs-12 col-md-9 o-column">
							<section class="o-entry-main">

								<div class="row o-row">
									<div class="col-xs-12 o-column">
                      <?php while (have_posts()) : the_post(); ?>
                          <?php get_template_part('partials/single/entry-content'); ?>
                      <?php endwhile; ?>
									</div>
								</div>

							</section>
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