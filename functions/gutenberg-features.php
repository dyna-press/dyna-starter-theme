<?php
/**
 * Gutenberg Features
 *
 * @package Dyna
 * @subpackage Dyna Starter Theme
 * @version 1.0.0
 * @author Alf Drollinger
 * @copyright 2018 https://dyna.press
 * @license GPL V2 https://www.gnu.org/licenses/gpl
 *
 * @link https://dyna.press/docs/functions/theme-setup/gutenberg-features
 */

Namespace Dyna;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly!
}

/**
 * Add support for core block visual styles
 * @since 1.0.0
 */
add_theme_support( 'wp-block-styles' );

/**
 * Add support for full and wide align images
 * @since 1.0.0
 */
add_theme_support( 'align-wide' );