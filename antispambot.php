<?php

/**
 * Plugin Name: GMT Antispambot
 * Plugin URI: https://github.com/cferdinandi/gmt-antispambot/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-antispambot/
 * Description: Provides a shortcode for the antispambot function that's built into WordPress.
 * Version: 2.0.1
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * License: MIT
 *
 * Learn more in the WordPress Codex.
 * http://codex.wordpress.org/Protection_From_Harvesters
 */

	function emailasb_antispambot( $atts ) {
		extract(shortcode_atts(array(
			'encode' => '',
		), $atts));
		$antispambot = antispambot( $encode );
		return $antispambot;
	}
	add_shortcode( 'email_antispambot', 'emailasb_antispambot' );