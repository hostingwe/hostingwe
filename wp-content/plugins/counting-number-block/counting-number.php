<?php
/**
 * Plugin Name:       Counting Number Block
 * Description:       An animated number counting effect block.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.7
 * Author:            Phi Phan
 * Author URI:        https://boldblocks.net
 *
 * @package counting-number
 * @copyright Copyright(c) 2022, Phi Phan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function counting_number_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'counting_number_block_init' );
