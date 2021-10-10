<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="lets_talk">
		<svg width="162" height="120" viewBox="0 0 162 120" fill="#fff" xmlns="http://www.w3.org/2000/svg">
			<g filter="url(#filter0_d)">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M48.7551 22C33.9787 22 22 33.9787 22 48.7551C22 63.5315 33.9787 75.5102 48.7551 75.5102H99.8503L126.803 98V71.8257C134.7 67.1745 140 58.5837 140 48.7551C140 33.9787 128.021 22 113.245 22H48.7551Z" fill="white" />
				<path d="M45.238 55V53.32H41.08V45.2H39.26V55H45.238ZM54.4772 55V53.32H50.0952V50.618H53.4972V48.938H50.0952V46.88H54.3372V45.2H48.2752V55H54.4772ZM59.9522 46.88V55H61.7722V46.88H64.4882V45.2H57.2362V46.88H59.9522ZM68.688 48.504L70.774 45.088H68.492L67.4 48.504H68.688ZM72.5685 52.368C72.8625 53.866 74.1645 55.112 75.9425 55.112C77.8185 55.112 79.0785 53.964 79.0785 52.06C79.0785 49.162 74.8925 49.372 74.8925 47.664C74.8925 47.146 75.2845 46.768 75.8305 46.768C76.4045 46.768 76.8105 47.076 77.1885 47.804L78.6585 46.866C78.1125 45.732 77.1325 45.088 75.8305 45.088C74.3045 45.088 73.1565 46.264 73.1565 47.748C73.1565 50.856 77.2585 50.548 77.2585 52.158C77.2585 53.054 76.7545 53.432 75.9845 53.432C74.9065 53.432 74.3465 52.508 74.0385 51.444L72.5685 52.368ZM88.6987 46.88V55H90.5187V46.88H93.2347V45.2H85.9827V46.88H88.6987ZM96.2323 55L96.9463 52.69H100.054L100.768 55H102.728L99.4103 45.2H97.5903L94.2723 55H96.2323ZM98.5003 47.608L99.5363 51.01H97.4643L98.5003 47.608ZM111.331 55V53.32H107.173V45.2H105.353V55H111.331ZM116.188 55V50.324L119.744 55H122.054L117.798 49.582L121.774 45.2H119.534L116.188 48.84V45.2H114.368V55H116.188Z" fill="#1F1F1F" />
			</g>
			<defs>
				<filter id="filter0_d" x="0" y="0" width="162" height="120" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix" />
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
					<feOffset />
					<feGaussianBlur stdDeviation="11" />
					<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
				</filter>
			</defs>
		</svg>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>
		<div class="site-header-wrapper">
			<?php get_template_part('template-parts/header/site-header'); ?>
		</div>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
