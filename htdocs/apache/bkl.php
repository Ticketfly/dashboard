<?php
require_once '../phplib/Dashboard.php';

/** the title used for the page */
$title = 'Backline apache';

/** a short alphanumeric string (used for CSS) */
$namespace = 'apache';


/** sections and graphs to be shown on the page */
$graphs = array(

    'Backline Apache' => array(
        array(
            'type' => 'graphite',
            'title' => 'Apache Backline pages hits per second',
            'metrics' => array(
               "sumSeries(bks03_sc_tfly-internal_com.apache_barcode_hit, bks04_sc_tfly-internal_com.apache_barcode_hit, bks05_sc_tfly-internal_com.apache_barcode_hit)",
               "sumSeries(bks03_sc_tfly-internal_com.apache_printApi_hit, bks04_sc_tfly-internal_com.apache_printApi_hit, bks05_sc_tfly-internal_com.apache_printApi_hit)",
               "sumSeries(bks03_sc_tfly-internal_com.apache_sendgrid_hit, bks04_sc_tfly-internal_com.apache_sendgrid_hit, bks05_sc_tfly-internal_com.apache_sendgrid_hit)"
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
               "sumSeries(bks03_sc_tfly-internal_com.apache_200, bks04_sc_tfly-internal_com.apache_200, bks05_sc_tfly-internal_com.apache_200)",
               "sumSeries(bks03_sc_tfly-internal_com.apache_300, bks04_sc_tfly-internal_com.apache_300, bks05_sc_tfly-internal_com.apache_300)",
               "sumSeries(bks03_sc_tfly-internal_com.apache_400, bks04_sc_tfly-internal_com.apache_400, bks05_sc_tfly-internal_com.apache_400)",
               "sumSeries(bks03_sc_tfly-internal_com.apache_500, bks04_sc_tfly-internal_com.apache_500, bks05_sc_tfly-internal_com.apache_500)"
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
