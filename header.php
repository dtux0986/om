<?php
    /**
     * Site Header
     *
     * @package om
     */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="o-wrapper">
	<div id="page" class="hfeed site">

		<section id="o-top-links" class="o-top-links">
			<div class="container o-container">
				<div class="row o-row">
					<div class="col-xs-12 col-sm-6 o-column">
              <?php get_template_part('partials/navigation/top-menu/layout', 1)?>
					</div>
					<div class="col-xs-12 col-sm-6 o-column">
						<div class="o-top-socials">

						</div>
					</div>
				</div>
			</div>
		</section>

		<header id="masthead" class="site-header layout-1" role="banner">
			<div class="site-header__inner">
          <?php get_template_part('partials/navigation/main-menu/layout', 1); ?>
			</div>
		</header>
		<!--!site-header-->

		<section id="content" class="site-content">
			<div class="site-content__inner">