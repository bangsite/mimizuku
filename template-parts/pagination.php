<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

global $wp_query;

if ( empty( $wp_query->max_num_pages ) || $wp_query->max_num_pages < 2 ) {
	return;
}
?>
<div class="_c-pagination">
	<?php
	$pagination = get_the_posts_pagination( [
		'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__( 'Previous', 'mimizuku' ) . '</span>',
		'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__( 'Next', 'mimizuku' ) . '</span>',
	] );

	$pagination = \Mimizuku\App\Models\Pagination::replace_basis_pager_structure( $pagination );

	echo wp_kses(
		$pagination,
		[
			'h2' => [
				'class' => [],
			],
			'div' => [
				'class' => [],
			],
			'span' => [
				'class'        => [],
				'aria-current' => [],
				'aria-hidden'  => [],
			],
			'a' => [
				'class' => [],
				'href'  => [],
			],
			'i' => [
				'class'       => [],
				'aria-hidden' => [],
			],
		]
	);
	?>
</div>
