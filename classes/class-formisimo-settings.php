<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * Formisimo Settings
 *
 * All functionality pertaining to the subscribe settings screen.
 *
 * @package WordPress
 * @subpackage Formisimo_Settings
 * @category Admin
 * @author bftrick
 * @since 1.0.0
 */
class Formisimo_Settings extends Formisimo_Settings_API {
	
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct () {
		global $Formisimo;
		parent::__construct( $Formisimo->name, 'formisimo' ); // Required in extended classes.
	} // End __construct()

	/**
	 * init_sections function.
	 * 
	 * @access public
	 * @since 1.0.0
	 * @return void
	 */
	public function init_sections () {
		$sections = array();

		$sections['general'] = array(
			'name' => __('General Settings' , 'formisimo-integration'),
		);

		$this->sections = $sections;
	} // End init_sections()
	
	/**
	 * init_fields function.
	 * 
	 * @access public
	 * @since 1.0.0
	 * @return void
	 */
	public function init_fields () {
		$fields = array();

		$fields['foid'] = array(
			'name' => __( 'Foid', 'formisimo-integration' ),
			'description' => 'This can be <a href="' . plugins_url( 'formisimo-integration/assets/images/foid.png' ) . '" target="_blank">found</a> at <a href="https://app.formisimo.com/tracking-code/" target="_blank">app.formisimo.com/tracking-code/</a>.',
			'type' => 'text',
			'default' => '',
			'section' => 'general'
		);
		
		$this->fields = $fields;
	} // End init_fields()
	
} // End Class
?>