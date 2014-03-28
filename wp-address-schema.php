<?php

/**
 * @package WP-Address-Schema
 */
/*
Plugin Name: WP Address Schema
Text Domain: wp-address-schema
Plugin URI: http://www.creare.co.uk
Description: A simple plugin for displaying correctly formatted address information, as per the standards set out by http://schema.org/LocalBusiness.
Version: 0.0.4
Author: Creare
Author URI: http://www.creare.co.uk
License: GPLv2 or later
*/
/*
Copyright 2014  Creare  (email : tom.f@creare.co.uk)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if(!class_exists('WP_Adress_Schema')) {
	
	class WP_Address_Schema
	{
		/**
         * Define Constants
         */
		protected $inc_dir;
		protected $plugin_dir;
		protected $plugin_url;
		/**
         * Construct the plugin object
         */
        public function __construct()
        {
			// Set constants
			$this->inc_dir = ABSPATH.'/wp-content/plugins/WP-Address-Schema/inc/';
			$this->plugin_dir = ABSPATH.'/wp-content/plugins/WP-Address-Schema/';
			$this->plugin_url = plugins_url().'/WP-Address-Schema/';
			// Config post type
            require_once $this->inc_dir."wp-address-schema-posttype.php";
			$wp_address_schema_posttype = new WP_Address_Schema_Posttype();
			add_action('init', array(&$this, 'initShortcodes'));
			// PHP 5.2<= function
			add_action('widgets_init',
				create_function('', 'return register_widget("Wp_Address_Schema_Widget");')
			);
			// PHP 5.3>= function
			//add_action('widgets_init', function(){
				//register_widget( 'Creare_Wp_Address_Schema_Widget' );
			//});

        } 
		
		// PHP 4 Support
		public function WP_Address_Schema() {
			$this->__construct();
		}
		
		public function initShortcodes() {
			add_shortcode('address_schema', array(&$this, 'addressShortcode'));
		}
		
		public function addressShortcode($args) {
			extract(shortcode_atts(array('address'=>''), $args, 'address_schema'));
			$code = $address;
			$code_a = explode('_', $code);
			$code_a = array_reverse($code_a);
			$id = $code_a[0];
			
			require_once $this->inc_dir.'wp-address-schema-display.php';
			$display = new Wp_Address_Schema_Display();
			return $display->parseAddress($id);
		}
	
		/**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        }

        /**
         * Deactivate the plugin
         */     
        public static function deactivate()
        {
            // Do nothing
        }
			
	}
	
}

if(class_exists('WP_Address_Schema'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_Address_Schema', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_Address_Schema', 'deactivate'));
	require_once 'inc/wp-address-schema-widget.php';
    // instantiate the plugin class
    $wp_address_schema = new WP_Address_Schema();
}


?>