<section id="o-sidebar" class="o-sidebar">
	<div id="main-sidebar" class="main-sidebar" role="complementary">
      <?php
          if (is_active_sidebar('o_main_sidebar')) {
              dynamic_sidebar('o_main_sidebar');
          }
      ?>
	</div>
</section>