<?php
/**
 * Plugin Name:       Dakonte Blocks
 * Description:       Blocks for Dakonte Product Group
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dakonte-blocks
 *
 * @package Dh
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block using a `blocks-manifest.php` file, which improves the performance of block type registration.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
add_action( 'init', function () {
	register_block_type( __DIR__ . '/build/blocks/dakonte-blocks' );
	register_block_type( __DIR__ . '/build/blocks/dakonte-introduction' );
	wp_enqueue_script('wp-api');
});
