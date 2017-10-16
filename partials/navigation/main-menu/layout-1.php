<section class="o-main-navigation layout-1">
	<div class="o-main-navigation__inner">
		<div class="container o-container">
			<div class="row o-row">
				<div class="col-xs-12 col-md-3 o-column">
            <?php get_template_part('partials/branding') ?>
				</div>
				<!--branding-->

				<div class="col-xs-12 col-md-9 o-column">

					<div class="o-main-menu">
						<nav id="site-navigation" class="navbar navbar-inverse main-menu">
							<ul class="nav navbar-nav pull-right">
                  <?php if (has_nav_menu('main_menu')) { ?>
                      <?php wp_nav_menu(array(
                          'theme_location' => 'main_menu',
                          'container'      => false,
                          'items_wrap'     => '%3$s',
                          'walker'         => new OmWalkerNavMenu()
                      )) ?>
                  <?php } ?>
							</ul>
						</nav>
					</div>
					<!--!main-menu-->

				</div>
				<!--!main-menu-->
			</div>
		</div>
	</div>
</section>
<!--!main-navigation-->