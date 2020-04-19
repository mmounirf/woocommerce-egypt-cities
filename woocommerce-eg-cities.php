<?php
/**
 * Plugin Name: WooCommerce Egypt Cities
 * Plugin URI: https://wordpress.org/plugins/woocommerce-egypt-cities/
 * Description: A short plugin that adds Egypt cities to WooCommerce's list of states. The list is taken from Wikipedia - no responsibility for accuracy is made!
 * Version: 2.0.0
 * Author: Mohamed Mounir
 * Author URI: https://mounir.io/
 * Developer: Mou
 * Developer URI: https://mounir.io/
 * Text Domain: wc-eg-cities
 * Domain Path: /languages
 *

 * WC requires at least: 2.2
 * WC tested up to: 4.0.1
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Copyright (c) 2013 M.Mounir. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function  wc_eg_cities_add_cities( $states ) {
	/**
	 * Check if WooCommerce is active
	 **/
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    $states['EG'] = array(
        __( '10th of Ramadan', 'wc-eg-cities' ) => __( '10th of Ramadan', 'wc-eg-cities' ),
        __( '6th of October', 'wc-eg-cities' ) => __( '6th of October', 'wc-eg-cities' ),
        __( 'Abu Kabir', 'wc-eg-cities' ) => __( 'Abu Kabir', 'wc-eg-cities' ),
        __( 'Akhmim', 'wc-eg-cities' ) => __( 'Akhmim', 'wc-eg-cities' ),
        __( 'Al Mansura', 'wc-eg-cities' ) => __( 'Al Mansura', 'wc-eg-cities' ),
        __( 'Al Minya', 'wc-eg-cities' ) => __( 'Al Minya', 'wc-eg-cities' ),
		__( 'Al Sharqia', 'wc-eg-cities' ) => __( 'Al Sharqia', 'wc-eg-cities' ),
        __( 'Al Wahat', 'wc-eg-cities' ) => __( 'Al Wahat', 'wc-eg-cities' ),
        __( 'Alexandria', 'wc-eg-cities' ) => __( 'Alexandria', 'wc-eg-cities' ),
        __( 'Arish', 'wc-eg-cities' ) => __( 'Arish', 'wc-eg-cities' ),
        __( 'Aswan', 'wc-eg-cities' ) => __( 'Aswan', 'wc-eg-cities' ),
        __( 'Asyut', 'wc-eg-cities' ) => __( 'Asyut', 'wc-eg-cities' ),
        __( 'Banha', 'wc-eg-cities' ) => __( 'Banha', 'wc-eg-cities' ),
		__( 'Beheira', 'wc-eg-cities' ) => __( 'Beheira', 'wc-eg-cities' ),
        __( 'Beni Suef', 'wc-eg-cities' ) => __( 'Beni Suef', 'wc-eg-cities' ),
        __( 'Bilbais', 'wc-eg-cities' ) => __( 'Bilbais', 'wc-eg-cities' ),
        __( 'Cairo', 'wc-eg-cities' ) => __( 'Cairo', 'wc-eg-cities' ),
        __( 'Damietta', 'wc-eg-cities' ) => __( 'Damietta', 'wc-eg-cities' ),
        __( 'Damanhur', 'wc-eg-cities' ) => __( 'Damanhur', 'wc-eg-cities' ),
        __( 'Desouk', 'wc-eg-cities' ) => __( 'Desouk', 'wc-eg-cities' ),
        __( 'El Hawamdeyya', 'wc-eg-cities' ) => __( 'El Hawamdeyya', 'wc-eg-cities' ),
        __( 'El Mahalla El Kubra', 'wc-eg-cities' ) => __( 'El Mahalla El Kubra', 'wc-eg-cities' ),
        __( 'Fayyum', 'wc-eg-cities' ) => __( 'Fayyum', 'wc-eg-cities' ),
		__( 'Gharbia', 'wc-eg-cities' ) => __( 'Gharbia', 'wc-eg-cities' ),
        __( 'Girga', 'wc-eg-cities' ) => __( 'Girga', 'wc-eg-cities' ),
        __( 'Giza', 'wc-eg-cities' ) => __( 'Giza', 'wc-eg-cities' ),
        __( 'Hurghada', 'wc-eg-cities' ) => __( 'Hurghada', 'wc-eg-cities' ),
		__( 'Helwan', 'wc-eg-cities' ) => __( 'Helwan', 'wc-eg-cities' ),
        __( 'Idfu', 'wc-eg-cities' ) => __( 'Idfu', 'wc-eg-cities' ),
        __( 'Ismailia', 'wc-eg-cities' ) => __( 'Ismailia', 'wc-eg-cities' ),
        __( 'Kafr El Dawwar', 'wc-eg-cities' ) => __( 'Kafr El Dawwar', 'wc-eg-cities' ),
        __( 'Kafr El Sheikh', 'wc-eg-cities' ) => __( 'Kafr El Sheikh', 'wc-eg-cities' ),
        __( 'Luxor', 'wc-eg-cities' ) => __( 'Luxor', 'wc-eg-cities' ),
        __( 'New Valley', 'wc-eg-cities' ) => __( 'New Valley', 'wc-eg-cities' ),
        __( 'Northern Coast', 'wc-eg-cities' ) => __( 'Northern Coast', 'wc-eg-cities' ),
        __( 'Mallawi', 'wc-eg-cities' ) => __( 'Mallawi', 'wc-eg-cities' ),
        __( 'Marsa Matruh', 'wc-eg-cities' ) => __( 'Marsa Matruh', 'wc-eg-cities' ),
        __( 'Matareya', 'wc-eg-cities' ) => __( 'Matareya', 'wc-eg-cities' ),
        __( 'Mit Ghamr', 'wc-eg-cities' ) => __( 'Mit Ghamr', 'wc-eg-cities' ),
		__( 'Monofeya', 'wc-eg-cities' ) => __( 'Monofeya', 'wc-eg-cities' ),
        __( 'Port Said', 'wc-eg-cities' ) => __( 'Port Said', 'wc-eg-cities' ),
        __( 'Qalyub', 'wc-eg-cities' ) => __( 'Qalyub', 'wc-eg-cities' ),
        __( 'Qena', 'wc-eg-cities' ) => __( 'Qena', 'wc-eg-cities' ),
		__( 'Red Sea', 'wc-eg-cities' ) => __( 'Red Sea', 'wc-eg-cities' ),
		__( 'Shibin El Kom', 'wc-eg-cities' ) => 'Shibin El Kom',
        __( 'Shubra El Kheima', 'wc-eg-cities' ) => 'Shubra El Kheima',
        __( 'Sinai', 'wc-eg-cities' ) => __( 'Sinai', 'wc-eg-cities' ),
		__( 'Sohag', 'wc-eg-cities' ) => __( 'Sohag', 'wc-eg-cities' ),
        __( 'Suez', 'wc-eg-cities' ) => __( 'Suez', 'wc-eg-cities' ),
        __( 'Tanta', 'wc-eg-cities' ) => __( 'Tanta', 'wc-eg-cities' ),
        __( 'Zagazig', 'wc-eg-cities' ) => __( 'Zagazig', 'wc-eg-cities' ),
       );
    return $states;

	}
}

add_filter( 'woocommerce_states', 'wc_eg_cities_add_cities' );