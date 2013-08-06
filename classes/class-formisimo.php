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
		$this->version = '1.0.0';

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

		// load script if the user provided a `foid`
		if ( isset($this->settings['formisimo']['foid']) && !empty($this->settings['formisimo']['foid']) ) {
			// load formisimo loading script
			wp_enqueue_script( "load-formisimo", plugins_url( 'formisimo-integration/assets/scripts/load-formisimo.js' ), array(), $this->version, true );

			// pass variable into the load-formisimo script
			wp_localize_script( "load-formisimo", "foid_", $this->settings['formisimo']['foid'] );	
		}
	}
}