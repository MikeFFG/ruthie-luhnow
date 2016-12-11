<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package panoramic
 */
global $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" style="background-image: url(<?php header_image(); ?>" class="site-header <?php echo ( get_theme_mod( 'panoramic-header-layout', 'panoramic-header-layout-standard' ) == 'panoramic-header-layout-centered' ) ? sanitize_html_class( 'panoramic-header-layout-centered' ) : sanitize_html_class( 'panoramic-header-layout-standard' ); ?>" role="banner">

        <?php get_template_part( 'library/template-parts/header-image' ); ?>

</header><!-- #masthead -->

<script>
    var panoramicSliderTransitionSpeed = parseInt(<?php echo intval( get_theme_mod( 'panoramic-slider-transition-speed', 450 ) ); ?>);
</script>

<div id="content" class="site-content site-container">