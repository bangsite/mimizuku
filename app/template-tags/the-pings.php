<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Callback function of the each pings
 *
 * @return void
 */
function mimizuku_the_pings() {
	?>
	<li <?php comment_class( [ 'c-trackbacks__item' ] ); ?> id="li-comment-<?php comment_ID(); ?>">
		<?php wpvc_get_template_part( 'template-parts/trackback' ); ?>
	<?php
}