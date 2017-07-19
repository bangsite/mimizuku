<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$customizer = Inc2734_WP_Customizer_Framework::init();

$section = $customizer->Section(
	'share-buttons',
	[
		'title' => __( 'Share buttons', 'mimizuku' ),
		'description' => __( 'If you want to count of tweet then needs to register to <a href="https://opensharecount.com/" target="_blank">OpenShareCount</a>.', 'mimizuku' ),
	]
);

$customizer->register( $customizer->Control(
	'multiple-checkbox',
	'share-buttons-buttons',
	[
		'label'   => __( 'Display buttons', 'mimizuku' ),
		'default' => '',
		'choices' => [
			'facebook' => __( 'Facebook', 'mimizuku' ),
			'twitter'  => __( 'Twitter', 'mimizuku' ),
			'hatena'   => __( 'Hatena Bookmark', 'mimizuku' ),
			'feedly'   => __( 'Feedly', 'mimizuku' ),
			'line'     => __( 'LINE', 'mimizuku' ),
			'pocket'   => __( 'Pocket', 'mimizuku' ),
			'feed'     => __( 'Feed', 'mimizuku' ),
		],
	]
) )->join( $section );

$customizer->register( $customizer->Control(
	'select',
	'share-buttons-type',
	[
		'label'   => __( 'Type', 'mimizuku' ),
		'default' => 'balloon',
		'choices' => [
			'balloon'    => __( 'Balloon', 'mimizuku' ),
			'horizontal' => __( 'Horizontal', 'mimizuku' ),
			'icon'       => __( 'Icon', 'mimizuku' ),
			'block'      => __( 'Block', 'mimizuku' ),
			'official'   => __( 'Official', 'mimizuku' ),
		],
	]
) )->join( $section );

$customizer->register( $customizer->Control(
	'select',
	'share-buttons-display-position',
	[
		'label'   => __( 'Display position', 'mimizuku' ),
		'default' => 'top',
		'choices' => [
			'top'    => __( 'Top of contents', 'mimizuku' ),
			'bottom' => __( 'Bottom of contents', 'mimizuku' ),
			'both'   => __( 'Both', 'mimizuku' ),
		],
	]
) )->join( $section );

$customizer->register( $customizer->Control(
	'text',
	'share-buttons-cache-seconds',
	[
		'label'   => __( 'Share counts cache time (seconds)', 'mimizuku' ),
		'default' => 300,
	]
) )->join( $section );
