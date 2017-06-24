<?php

    /**
     * Search Results
     *
     * @package om
     */


    get_header(); ?>

	<div class="container o-container">
		<section class="o-page-content o-page-search">
			<div id="primary" class="content-area">
				<main id="main" class="site-main main-content">

					<div class="row o-row">
						<div class="col-xs-12 col-sm-12 o-column">

							<section id="c-blog" class="o-entry-main">
								<div class="c-blog__inner">
									<div class="row o-row">
										<div class="col-xs-12 col-md-12 o-column">
											<div class="block">
												<div class="search-header">

												</div>
											</div>
										</div>

                      <?php if (have_posts()) : ?>

												<div id="o-loop-content" class="block-group">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php get_template_part('partials/loop/content', 1); ?>

                            <?php endwhile; ?>

												</div>

                      <?php else : ?>

                          <?php get_template_part('partials/loop/content', 'none'); ?>

                      <?php endif; ?>
									</div>
								</div>
							</section>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 o-column col-2">
                <?php get_sidebar(); ?>
						</div>

					</div>
				</main>
			</div>
		</section>
		<!--!o-page-content-->

		</section>
		<!--!site-content-->
	</div>

<?php get_footer();