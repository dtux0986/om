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

		<header id="masthead" class="site-header" role="banner">
			<div class="o-header__wrapper">
				<div class="o-header__inner">
					<div class="o-main-navigation">
						<div class="o-main-navigation__inner">

						</div>
					</div>

					<?php get_template_part('partials/navigation/main/layout', 1);?>
					<!-- !main-navigation-1-->

				</div>
			</div>
		</header><!--!site-header-->

		<section id="content" class="site-content">