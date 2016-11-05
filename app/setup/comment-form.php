<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

namespace Mimizuku\App\Setup;

class Comment_Form {

	public function __construct() {

		/**
		 * Sets up default fields html
		 *
		 * @param array $fields The default comment fields
		 * @return array
		 */
		add_action( 'comment_form_default_fields', function( $fields ) {
			foreach ( $fields as $key => $field ) {
				$fields[ $key ] = $this->_add_class_attribute( $field );
			}
			return $fields;
		} );

		/**
		 * Sets up the comment field html
		 *
		 * @param string $fields The content of the comment textarea field
		 * @return string
		 */
		add_action( 'comment_form_field_comment', function( $comment_field ) {
			return $this->_add_class_attribute( $comment_field );
		} );

		/**
		 * Sets up submtit button
		 *
		 * @param string $submit_field HTML markup for the submit field
		 * @return string
		 */
		add_action( 'comment_form_submit_field', function( $submit_field ) {
			return str_replace( 'class="submit"', 'class="_c-btn"', $submit_field );
		} );
	}

	/**
	 * Add class attribute for the field
	 *
	 * @param $field The field html
	 */
	protected function _add_class_attribute( $field ) {
		return preg_replace( '/(id=".+?")/', '$1 class="_c-form-control"', $field );
	}
}
