<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'layout' );

$customizer->section( 'layout', [
	'title'    => __( 'Page Layout', 'mimizuku' ),
	'priority' => 120,
] );
