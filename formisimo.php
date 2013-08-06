<?php
/**
 * Plugin Name: Formisimo Integration
 * Plugin URI: https://github.com/BFTrick/formisimo-integration
 * Description: Integrate Formisimo with your WordPress site
 * Version: 1.0.0
 * Author: Patrick Rauland
 * Author URI: http://www.patrickrauland.com
 * Text Domain: formisimo-integration
 * Domain Path: /languages/
 * License: GPLv2
 */

/**
 * Copyright 2013  Patrick Rauland
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if( !class_exists( 'Formisimo' ) ) {
	require 'classes/class-formisimo-settings-api.php';
	require 'classes/class-formisimo-settings-screen.php';
	require 'classes/class-formisimo-settings.php';
	require 'classes/class-formisimo.php';

	global $Formisimo;
	$Formisimo = new Formisimo( __FILE__ );

	load_plugin_textdomain( 'formisimo-integration', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}