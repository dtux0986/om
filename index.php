<?php
    /**
     * Index Page
     *
     * @package om
     */
?>

<?php $config = \App\Config\ReduxThemeOptions\Initialize::data(); ?>

<?php get_header(); ?>

<?php get_template_part('partials/page/header/full-width'); ?>

	<section class="o-page-content o-index">
		<div id="primary" class="content-area">
			<main id="main" class="site-main main-content">

				<div class="container o-container">
					<div class="row o-row">

						<div class="col-xs-12 col-md-9 o-column">
							<div class="o-entry-main">
								<section id="o-blog" class="o-blog layout-1">
									<div class="o-blog__inner">

										<div class="row o-row">
											<div class="col-xs-12 o-column">
                          <?php if (have_posts()) : ?>
														<div id="o-loop-content">
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php get_template_part('partials/loop/content', 1); ?>
                                <?php endwhile; ?>
														</div>
                          <?php else : ?>
                              <?php get_template_part('partials/loop/content', 'none'); ?>
                          <?php endif; ?>
											</div>
										</div>

									</div>
								</section>
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
	<!--!o-page-content-->

<?php get_footer(); ?>