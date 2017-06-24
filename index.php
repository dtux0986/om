<?php
    /**
     * Index Page
     *
     * @package om
     */

    get_header(); ?>

	<div class="container">

		<section class="o-page-content o-index">
			<div id="primary" class="content-area">
				<main id="main" class="site-main main-content">

					<div class="row o-row">

						<div class="col-xs-12 col-sm-12 o-column col-1">

							<section id="o-blog" class="o-entry-main o-blog">
								<div class="o-blog__inner">

									<div class="block-group">
										<div class="row o-row">

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

						<div class="col-xs-12 col-sm-12 col-md-3 o-column col-2">
                <?php get_sidebar(); ?>
						</div>
					</div>
				</main>
			</div>
		</section>
		<!--!o-page-content-->
	</div>

<?php get_footer();