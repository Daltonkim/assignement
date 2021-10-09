<?php

/**
 * This file is a part of the Radium Framework core.
 * Please be cautious editing this file,
 *
 * @category wunderdogs
 * @package  Child theme
 * @author   Dalton Gitonga
 */

namespace WUNDERDOGS;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

class Frontend
{

	/**
	 * Class Construct
	 */
	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_styles'], 15);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts'], 999);
		add_action('wp_enqueue_scripts', [$this, 'dequeue_scripts'], 99999999);



		$this->include_files();
	}

	/**
	 * Get Child Theme Version
	 *
	 * @return void
	 */
	public function get_version()
	{
		$theme = wp_get_theme();
		return $theme->get('Version');
	}



	/**
	 * Load child theme files
	 */
	public function include_files()
	{
		include('inc/cpt/team.php');
		include('inc/isotope.php');
		require_once 'custom-widgets/my-widgets.php';
	}

	/**
	 * Add front end scripts
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts()
	{


		wp_enqueue_script(
			'main',
			get_stylesheet_directory_uri() . '/assets/js/main.js',
			[
				'jquery',
			],
			'',
			false
		);
	}

	/**
	 * Remove front end scripts
	 */
	public function dequeue_scripts()
	{
		wp_dequeue_style('twenty-twenty-one-style-css');
	}

	/**
	 * Add front end stylesheets
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles()
	{
		$css_suffix = is_rtl() ? '-rtl' : null;

		// detect if in developer mode and load appropriate files
		if ((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) || (defined('WP_DEBUG') && WP_DEBUG)) :

			$css_suffix .= '.css';
			$version = time();
		else :

			$css_suffix .= '.min.css';
			$version = $this->get_version();

		endif;

		wp_dequeue_style('twenty-twenty-one-style-css');
        wp_deregister_style( 'twenty-twenty-one-style-css' );

		wp_dequeue_style('google-fonts-1-css');
        wp_deregister_style('google-fonts-1-css' );

		wp_dequeue_style('twenty-twenty-one-print-style-css');
        wp_deregister_style('twenty-twenty-one-print-style-css' );

		wp_dequeue_style( 'screen');
		wp_deregister_style('screen' );

		wp_enqueue_style( 'twenty-twenty-one-style-css-child', get_stylesheet_directory_uri() . '/style.css', '5.0.0', 'all' );
		wp_enqueue_style( 'twenty-twenty-one-style-child-print', get_stylesheet_directory_uri() . '/assets/css/print.css', '5.0.0', 'all' );
		wp_enqueue_style( 'twenty-twenty-one-style-fonts', get_stylesheet_directory_uri() . '/assets/fonts/stylesheet.css', '1.0.0', 'all' );

	}
}

new Frontend;
