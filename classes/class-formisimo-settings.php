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

		$fields['formisimo'] = array(
			'name' => __( 'Enable Formisimo', 'formisimo-integration' ),
			'description' => '',
			'type' => 'checkbox',
			'default' => true,
			'section' => 'general'
		);
		
		$this->fields = $fields;
	} // End init_fields()
	
} // End Class
?>