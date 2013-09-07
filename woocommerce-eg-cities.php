<?php

/*
Plugin Name: WooCommerce Egypt Cities
Plugin URI: 
Description: A short plugin that adds Egypt cities to WooCommerce's list of states. The list is taken from Wikipedia - no responsibility for accuracy is made!
Version: 1.0
Author: M.Mounir
Author URI: http://graphicriver.net/user/mmounirf/
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


function  wc_eg_cities_add_cities( $states ) {

    $states['EG'] = array(
                            '10th of Ramadan' => '10th of Ramadan',
                            '6th of October' => '6th of October City',
                            'Abu Kabir' => 'Abu Kabir',
                            'Akhmim' => 'Akhmim',
                            'Al Mansura' => 'Al Mansura',
                            'Al Minya' => 'Al Minya',
			    'Al Sharqia' => 'Al Sharqia',
		  	    'Al Wahat' => 'Al Wahat',
                            'Alexandria' => 'Alexandria',
                            'Arish' => 'Arish',
                            'Aswan' => 'Aswan',
                            'Asyut' => 'Asyut',
                            'Banha' => 'Banha',
			    'Beheira' => 'Beheira',
                            'Beni Suef' => 'Beni Suef',
                            'Bilbais' => 'Bilbais',
                            'Cairo' => 'Cairo',
                            'Damietta' => 'Damietta',
                            'Damanhur' => 'Damanhur',
                            'Desouk' => 'Desouk',
                            'El Hawamdeyya' => 'El Hawamdeyya',
                            'El Mahalla El Kubra' => 'El Mahalla El Kubra',
                            'Fayyum' => 'Fayyum',
			    'Gharbia' => 'Gharbia',
                            'Girga' => 'Girga',
                            'Giza' => 'Giza',
                            'Hurghada' => 'Hurghada',
			    'Helwan' => 'Helwan',
                            'Idfu' => 'Idfu',
                            'Ismailia' => 'Ismailia',
                            'Kafr El Dawwar' => 'Kafr El Dawwar',
                            'Kafr El Sheikh' => 'Kafr El Sheikh',
                            'Luxor' => 'Luxor',
			    'New Valley' => 'New Valley',
			    'Northern Coast' => 'Northern Coast',
                            'Mallawi' => 'Mallawi',
                            'Marsa Matruh' => 'Marsa Matruh',
                            'Matareya' => 'Matareya',
                            'Mit Ghamr' => 'Mit Ghamr',
			    'Monofeya' => 'Monofeya',
                            'Port Said' => 'Port Said',
                            'Qalyub' => 'Qalyub',
                            'Qena' => 'Qena',
			    'Red Sea' => 'Red Sea',
			    'Shibin El Kom' => 'Shibin El Kom',
                            'Shubra El Kheima' => 'Shubra El Kheima',
                            'Sinai' => 'Sinai',
			    'Sohag' => 'Sohag',
                            'Suez' => 'Suez',
                            'Tanta' => 'Tanta',
                            'Zagazig' => 'Zagazig',
                           );
    return $states;

}

add_filter( 'woocommerce_states', 'wc_eg_cities_add_cities' );
