<div id="o-footer-menu" class="o-footer-menu layout-1">
	<div class="o-footer-menu__inner">
		<nav id="footer-navigation" class="navbar navbar-inverse footer-menu">
			<ul class="nav navbar-nav">
          <?php if (has_nav_menu('footer_menu')) { ?>
              <?php wp_nav_menu(array(
                  'theme_location' => 'footer_menu',
                  'container'      => false,
                  'items_wrap'     => '%3$s',
              )); ?>
          <?php } ?>
			</ul>
		</nav>
	</div>
</div>
<!--!footer-menu-->