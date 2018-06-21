<?php

namespace WPRaise\Term;

class Term {
	/**
	 * Get a especific term field for a given $post_id.
	 *
	 * @param  integer $post_id  Post ID.
	 * @param  string  $taxonomy Taxonomy slug.
	 * @param  string  $field    Field name.
	 * @return mixed
	 */
	public static function getTermField( $post_id, $taxonomy, $field ) {
		$terms = get_the_terms( $post_id, $taxonomy );

		if ( empty( $terms ) || is_wp_error( $terms ) ) {
			return false;
		}

		$first = array_shift( $terms );

		return $first->$field;
	}

	/**
	 * Get a list of terms field for a given $post_id.
	 *
	 * @param  integer $post_id  Post ID.
	 * @param  string  $taxonomy Taxonomy slug.
	 * @param  string  $field    Field name.
	 * @return array
	 */
	public static function getTermsField( $post_id, $taxonomy, $field ) {
		$terms = get_the_terms( $post_id, $taxonomy );

		if ( empty( $terms ) || is_wp_error( $terms ) ) {
			return false;
		}

		$results = [];

		foreach ( $terms as $term ) {
			$results[] = $term->$field;
		}

		return $results;
	}
}