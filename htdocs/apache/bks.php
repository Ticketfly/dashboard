<?php
require_once '../phplib/Dashboard.php';

/** the title used for the page */
$title = 'Backstage apache';

/** a short alphanumeric string (used for CSS) */
$namespace = 'apache';


/** sections and graphs to be shown on the page */
$graphs = array(

    'Backstage Apache' => array(
        array(
            'type' => 'graphite',
            'title' => 'Apache Backstage pages hits per second',
            'metrics' => array(
               "sumSeries(bks01_sc_tfly-internal_com.apache_backstage_img_hit, bks02_sc_tfly-internal_com.apache_backstage_img_hit)",
               "sumSeries(bks01_sc_tfly-internal_com.apache_barcode_hit, bks02_sc_tfly-internal_com.apache_barcode_hit)"
            ),
            'bg_color' => 'white',
            'fg_color' => 'white',
            'stacked' => 'true',
            //'colors' => array('blue', 'green', 'orange', 'yellow', 'purple','light-blue' ),
            //'template' => 'plain',
            'width' => 1200,
            'height' => 800,
            'line_mode' => 'slope',
	    'show_legend' => 1
        ), 
        array(
            'type' => 'graphite',
            'title' => 'Apache response codes hits per second',
            'metrics' => array(
               "sumSeries(bks01_sc_tfly-internal_com.apache_200, bks02_sc_tfly-internal_com.apache_200)",
               "sumSeries(bks01_sc_tfly-internal_com.apache_300, bks02_sc_tfly-internal_com.apache_300)",
               "sumSeries(bks01_sc_tfly-internal_com.apache_400, bks02_sc_tfly-internal_com.apache_400)",
               "sumSeries(bks01_sc_tfly-internal_com.apache_500, bks02_sc_tfly-internal_com.apache_500)"
            ),
            'bg_color' => 'white',
            'fg_color' => 'white',
            'stacked' => 'true',
            //'colors' => array('blue', 'green', 'orange', 'yellow', 'purple','light-blue' ),
            //'template' => 'plain',
            'width' => 1200,
            'height' => 800,
            'line_mode' => 'slope',
	    'show_legend' => 1
        ), 
    ),


);

/** actually draws the page */
include '../phplib/template.php';
