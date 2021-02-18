<?php

/*
Plugin Name: Custom Car Finance Calculator
Description: This is custom car loan calculator
Author: Riyaka Artem
Version: 1.0
Author URI: https://www.linkedin.com/in/artem-riyaka/
*/

/* ==== add CSS, JS ====== */
add_action( 'wp_enqueue_scripts', 'plugin_add_scripts' );

function plugin_add_scripts() {
	// additional styles
	wp_enqueue_style( 'jq-ui-calc-styles',     "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css");
	// main STYLE file of finance plugin
	wp_enqueue_style( 'finance-style', plugin_dir_url(__FILE__).'css/finance.css');

	// additional scripts 
	wp_enqueue_script( 'ui-min-calculator',       "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js");
	wp_enqueue_script( 'ui-calculator',           "//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js");
	wp_enqueue_script( 'touch-mobile-calculator', "//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js");
	// main calculator script
	wp_enqueue_script( 'finance-script-calculator', plugin_dir_url(__FILE__).'js/main.js');
}

add_action( 'wp_head', 'hook_css' );
function hook_css(){
	echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";
}


// ======== SHORTCODE =========
/* insert this shortcode in 
*  page / post / widget: 
*  [car_finance_calculator_shortcode]
*/

add_shortcode('car_finance_calculator_shortcode', 'add_calculator_on_page');

function add_calculator_on_page() {
	// add calculator frontend
	include_once 'calculator-frontend.php';
}