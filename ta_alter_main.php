<?php
/**
 * @package TA_Jahre
 * @version 0.1
 */
/*
Plugin Name: TA Jahre
Plugin URI: https://github.com/Byggvir/tawp_alter/archive/master.zip
Description: This plugin calculates the years passed from an given date to now.
Author: Thomas Arend
Version: 0.1
Author URI: http://byggvir.de/
*/

function tajahre($atts) {

       extract(
	  shortcode_atts(
		array(
         		'datum' => 'now',
		),
		$atts
	  )
	);

	try {
		$fromDate = new DateTime($datum);
        }
        catch (Exception $e) { 
		$fromDate = new DateTime();
	}
	$today = new DateTime();
	$diff  = $fromDate->diff($today);
	$jahre = $diff->format('%y');

	return "<!-- Alter -->$jahre";
     
     
}

// Add the shortcode
add_shortcode('alter', 'tajahre');
add_shortcode('jahre', 'tajahre');
?>
