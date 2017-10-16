<?php
    /**
     * Site Footer
     *
     * @package om
     */

?>
</div>
<!--!site-content__inner -->

</section>
<!--!site-content -->

<footer id="colophon" class="site-footer layout-1">
	<div class="site-footer__inner">
		<div class="container o-container">
			<div class="row o-row">
				<div class="col-xs-12 o-column">
					<section id="o-sidebar" class="o-sidebar">
						<div id="footer-sidebar" class="footer-sidebar" role="complementary">
                <?php
                    if (is_active_sidebar('o_footer_sidebar')) {
                        dynamic_sidebar('o_footer_sidebar');
                    }
                ?>
						</div>
					</section>
					<!--!footer-sidebar-->
				</div>
			</div>
			<div class="row o-row">
				<div class="col-xs-12 o-column">
            <?php get_template_part('partials/navigation/footer-menu/layout', 1) ?>
				</div>
				<!--!footer-menu-->
			</div>
		</div>
	</div>
</footer><!--!site-footer-->

</div><!-- !.o-wrapper-->
</div><!-- !.o-page-->

<?php wp_footer(); ?>
</body>
</html>