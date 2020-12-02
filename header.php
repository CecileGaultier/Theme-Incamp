<?php
/**
 * Theme Header.
 *
 * See also inc/template-parts/header.php.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Polices Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B2Z41YHRVZ"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'G-B2Z41YHRVZ');
</script>

</head>

<body <?php body_class(); ?> <?php wpbf_body_schema_markup(); ?> onload="initCarte()">

	<a class="screen-reader-text skip-link" href="#content" title="<?php echo esc_attr__( 'Skip to content', 'page-builder-framework' ); ?>"><?php _e( 'Skip to content', 'page-builder-framework' ); ?></a>

	<?php do_action( 'wp_body_open' ); ?>

	<?php do_action( 'wpbf_body_open' ); ?>

	<div class="hfeed wpbf-page">

		<?php do_action( 'wpbf_before_header' ); ?>

		<?php do_action( 'wpbf_header' ); ?>

		<?php do_action( 'wpbf_after_header' ); ?>

