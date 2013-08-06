<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Formisimo Plugin class
 *
 * @package WordPress
 * @subpackage Formisimo
 * @author bftrick
 * @since 1.0.0
 */
class Formisimo {

	/**
	 * Construct
	 * 
	 * @param string $file
	 */
	public function __construct( $file ) {
		$this->name = 'Formisimo';
		$this->token = 'formisimo';

		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Init the extension settings
	 * 
	 * @return void
	 */
	public function init() {
		$tabs = array(
			'formisimo' => 'Formisimo_Settings'
		);

		foreach( $tabs as $key => $obj ) {
			if( !class_exists( $obj ) )
				continue;
			$this->settings_objs[ $key ] = new $obj;
			$this->settings[ $key ] = $this->settings_objs[ $key ]->get_settings();
			add_action( 'admin_init', array( $this->settings_objs[ $key ], 'setup_settings' ) );
		}

		$this->settings_screen = new Formisimo_Settings_Screen( array(
			'default_tab' => 'formisimo'
		));
	}
}