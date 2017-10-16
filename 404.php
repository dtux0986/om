<?php
    /**
     * 404 Page
     *
     * @package om
     */

?>

<?php $config = \App\Config\ReduxThemeOptions\Initialize::data(); ?>

<?php get_header(); ?>

<?php get_template_part('partials/page/header/full-width'); ?>

	<section class="o-page-content o-page-404">

		<div id="primary" class="content-area">
			<main id="main" class="site-main main-content">

				<div class="container o-container">
					<div class="row o-row">

						<div class="col-xs-12 o-column">
							<div class="o-entry-main">
								<section class="error-404 not-found">
									<header class="entry-header">
										<div class="entry-featured-image">

										</div>
										<div class="entry-title">
											<h1 class="heading">

											</h1>
										</div>
									</header>
									<!-- .entry-header -->

									<div class="entry-content">

									</div>
									<!-- .entry-content -->

									<div class="entry-footer">

									</div>
									<!-- .entry-footer -->


								</section>
							</div>
						</div>
						<!--!entry-main-->

					</div>
				</div>

			</main>
			<!-- !main -->
		</div>
		<!-- !primary -->

	</section>
	<!-- !#o-page-content -->

<?php get_footer(); ?>