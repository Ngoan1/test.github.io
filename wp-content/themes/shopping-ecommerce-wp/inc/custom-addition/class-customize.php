<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class shopping_ecommerce_WP_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/custom-addition/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'shopping_ecommerce_wp_Customize_Section_Pro' );

		// doc sections.
		$manager->add_section(
			new shopping_ecommerce_wp_Customize_Section_Pro(
				$manager,
				'shopping-ecommerce-wp',
				array(
					'title'    => esc_html__( 'Theme Doc', 'shopping-ecommerce-wp' ),
					'pro_text' => esc_html__( 'Click Here', 'shopping-ecommerce-wp' ),
					'pro_url'  => 'https://testerwp.com/docs/shopping-ecommerce-theme-doc/',
					'priority'  => 0
				)
			)
		);

		$manager->add_section(
			new shopping_ecommerce_wp_Customize_Section_Pro(
				$manager,
				'theme-demo',
				array(
					'title'    => esc_html__( 'Theme Demo', 'shopping-ecommerce-wp'),
					'pro_text' => esc_html__( 'Click Here', 'shopping-ecommerce-wp' ),
					'pro_url'  => 'https://testerwp.com/wp/shopping-ecommerce-wp/',
					'priority'  => 0
				)
			)
		);		

					// upgrade sections.
		$manager->add_section(
			new shopping_ecommerce_wp_Customize_Section_Pro(
				$manager,
				'upgrade-pros',
				array(
					'title'    => esc_html__( 'Check Pro', 'shopping-ecommerce-wp'),
					'pro_text' => esc_html__( 'Click Here', 'shopping-ecommerce-wp' ),
					'pro_url'  => 'https://testerwp.com/lp/bizz-ecommerce-pro-preview/',
					'priority'  => 0
				)
			)
		);
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/custom-addition/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/custom-addition/customize-controls.css' );
	}
}
shopping_ecommerce_wp_Customize::get_instance();