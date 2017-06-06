<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$header = apply_filters( 'mimizuku_header', 'header' );
$slug   = mimizuku_config( 'app/config/directory', 'header' );
get_template_part( $slug . '/' . $header );
