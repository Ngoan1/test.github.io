<?php
/**
 * Helper functions related to customizer and options.
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_get_global_layout_options' ) ) :

	/**
	 * Returns global layout options.
	 *
	 * @since 1.0.0 
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_global_layout_options() {

		$choices = array(
			'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'ecommerce-store-elementor' ),
			'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'ecommerce-store-elementor' ),
			'three-columns' => esc_html__( 'Three Columns', 'ecommerce-store-elementor' ),
			'four-columns' => esc_html__( 'Four Columns', 'ecommerce-store-elementor' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'ecommerce-store-elementor' ),
		);
		$output = apply_filters( 'ecommerce_store_elementor_filter_layout_options', $choices );
		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_archive_layout_options' ) ) :

	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_archive_layout_options() {

		$choices = array(
			'full'    => esc_html__( 'Full Post', 'ecommerce-store-elementor' ),
			'excerpt' => esc_html__( 'Post Excerpt', 'ecommerce-store-elementor' ),
		);
		$output = apply_filters( 'ecommerce_store_elementor_filter_archive_layout_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_image_sizes_options' ) ) :

	/**
	 * Returns image sizes options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool  $add_disable True for adding No Image option.
	 * @param array $allowed Allowed image size options.
	 * @return array Image size options.
	 */
	function ecommerce_store_elementor_get_image_sizes_options( $add_disable = true, $allowed = array(), $show_dimension = true ) {

		global $_wp_additional_image_sizes;
		$get_intermediate_image_sizes = get_intermediate_image_sizes();
		$choices = array();
		if ( true === $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'ecommerce-store-elementor' );
		}
		$choices['thumbnail'] = esc_html__( 'Thumbnail', 'ecommerce-store-elementor' );
		$choices['medium']    = esc_html__( 'Medium', 'ecommerce-store-elementor' );
		$choices['large']     = esc_html__( 'Large', 'ecommerce-store-elementor' );
		$choices['full']      = esc_html__( 'Full (original)', 'ecommerce-store-elementor' );

		if ( true === $show_dimension ) {
			foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
				$choices[ $_size ] = $choices[ $_size ] . ' (' . get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
			}
		}

		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {
			foreach ( $_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key;
				if ( true === $show_dimension ){
					$choices[ $key ] .= ' ('. $size['width'] . 'x' . $size['height'] . ')';
				}
			}
		}

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( ! in_array( $key, $allowed ) ) {
					unset( $choices[ $key ] );
				}
			}
		}

		return $choices;

	}

endif;


if ( ! function_exists( 'ecommerce_store_elementor_get_image_alignment_options' ) ) :

	/**
	 * Returns image options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_image_alignment_options() {

		$choices = array(
			'none'   => _x( 'None', 'alignment', 'ecommerce-store-elementor' ),
			'left'   => _x( 'Left', 'alignment', 'ecommerce-store-elementor' ),
			'center' => _x( 'Center', 'alignment', 'ecommerce-store-elementor' ),
			'right'  => _x( 'Right', 'alignment', 'ecommerce-store-elementor' ),
		);
		return $choices;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_featured_slider_transition_effects' ) ) :

	/**
	 * Returns the featured slider transition effects.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_featured_slider_transition_effects() {

		$choices = array(
			'fade'       => _x( 'fade', 'transition effect', 'ecommerce-store-elementor' ),
			'fadeout'    => _x( 'fadeout', 'transition effect', 'ecommerce-store-elementor' ),
			'none'       => _x( 'none', 'transition effect', 'ecommerce-store-elementor' ),
			'scrollHorz' => _x( 'scrollHorz', 'transition effect', 'ecommerce-store-elementor' ),
		);
		$output = apply_filters( 'ecommerce_store_elementor_filter_featured_slider_transition_effects', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_featured_slider_content_options' ) ) :

	/**
	 * Returns the featured slider content options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_featured_slider_content_options() {

		$choices = array(
			'home-page' => esc_html__( 'Static Front Page Only', 'ecommerce-store-elementor' ),
			'disabled'  => esc_html__( 'Disabled', 'ecommerce-store-elementor' ),
		);
		$output = apply_filters( 'ecommerce_store_elementor_filter_featured_slider_content_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_featured_slider_type' ) ) :

	/**
	 * Returns the featured slider type.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_featured_slider_type() {

		$choices = array(
			'featured-page' => __( 'Featured Pages', 'ecommerce-store-elementor' ),
		);

		$output = apply_filters( 'ecommerce_store_elementor_filter_featured_slider_type', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_numbers_dropdown_options' ) ) :

	/**
	 * Returns numbers dropdown options.
	 *
	 * @since 1.0.0
	 *
	 * @param int $min Min.
	 * @param int $max Max.
	 * @param string $prefix Prefix.
	 * @param string $suffix Suffix.
	 *
	 * @return array Options array.
	 */
	function ecommerce_store_elementor_get_numbers_dropdown_options( $min = 1, $max = 4, $prefix = '', $suffix = '' ) {

		$output = array();

		if ( $min <= $max ) {
			for ( $i = $min; $i <= $max; $i++ ) {
				$string = $prefix . $i . $suffix;
				$output[ $i ] = $string;
			}
		}

		return $output;

	}

endif;