<div class="o-top-menu layout-1">
	<div class="o-top-menu__inner">
		<nav id="top-navigation" class="navbar navbar-inverse top-menu">
			<ul class="nav navbar-nav">
          <?php if (has_nav_menu('top_menu')) { ?>
              <?php wp_nav_menu(array(
                  'theme_location' => 'top_menu',
                  'container'      => false,
                  'items_wrap'     => '%3$s',
              )) ?>
          <?php } ?>
			</ul>
		</nav>
	</div>
</div>
<!--!top-menu-->