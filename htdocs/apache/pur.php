<?php
require_once '../phplib/Dashboard.php';

/** the title used for the page */
$title = 'Purchase apache';

/** a short alphanumeric string (used for CSS) */
$namespace = 'apache';


/** sections and graphs to be shown on the page */
$graphs = array(

    'Purchase Apache' => array(
        array(
            'type' => 'graphite',
            'title' => 'Apache Purchase pages hits per second',
            'metrics' => array(
               "sumSeries(pur01_sc_tfly-internal_com.apache_event_hit, pur02_sc_tfly-internal_com.apache_event_hit,pur03_sc_tfly-internal_com.apache_event_hit,pur04_sc_tfly-internal_com.apache_event_hit,
			   wpmu02_sc_tfly-internal.com.apache_event_hit, build02_sc_tfly-internal_com.apache_event_hit,10_10_4_105.apache_event_hit,10_10_4_101.apache_event_hit,10_10_4_90.apache_event_hit,10_10_4_91.apache_event_hit,
                           10_10_4_106.apache_event_hit,10_10_4_100.apache_event_hit)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_delivery_hit, pur02_sc_tfly-internal_com.apache_delivery_hit,pur03_sc_tfly-internal_com.apache_delivery_hit,pur04_sc_tfly-internal_com.apache_delivery_hit,
	        	   wpmu02_sc_tfly-internal.com.apache_delivery_hit, build02_sc_tfly-internal_com.apache_delivery_hit,10_10_4_105.apache_delivery_hit,10_10_4_101.apache_delivery_hit,10_10_4_90.apache_delivery_hit,
                           10_10_4_91.apache_delivery_hit, 10_10_4_106.apache_delivery_hit,10_10_4_100.apache_delivery_hit)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_payment_hit, pur02_sc_tfly-internal_com.apache_payment_hit,pur03_sc_tfly-internal_com.apache_payment_hit,pur04_sc_tfly-internal_com.apache_payment_hit,
	        	   wpmu02_sc_tfly-internal.com.apache_payment_hit, build02_sc_tfly-internal_com.apache_payment_hit,10_10_4_105.apache_payment_hit,10_10_4_101.apache_payment_hit,10_10_4_90.apache_payment_hit,
                           10_10_4_91.apache_payment_hit, 10_10_4_106.apache_payment_hit,10_10_4_100.apache_payment_hit)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_review_hit, pur02_sc_tfly-internal_com.apache_review_hit,pur03_sc_tfly-internal_com.apache_review_hit,pur04_sc_tfly-internal_com.apache_review_hit,
	        	   wpmu02_sc_tfly-internal.com.apache_review_hit, build02_sc_tfly-internal_com.apache_review_hit,10_10_4_105.apache_review_hit,10_10_4_101.apache_review_hit,10_10_4_90.apache_review_hit,
                           10_10_4_91.apache_review_hit, 10_10_4_106.apache_review_hit,10_10_4_100.apache_review_hit)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_receipt_hit, pur02_sc_tfly-internal_com.apache_receipt_hit,pur03_sc_tfly-internal_com.apache_receipt_hit,pur04_sc_tfly-internal_com.apache_receipt_hit,
	        	   wpmu02_sc_tfly-internal.com.apache_receipt_hit, build02_sc_tfly-internal_com.apache_receipt_hit,10_10_4_105.apache_receipt_hit,10_10_4_101.apache_receipt_hit,10_10_4_90.apache_receipt_hit,
                           10_10_4_91.apache_receipt_hit, 10_10_4_106.apache_receipt_hit,10_10_4_100.apache_receipt_hit)",
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
               "sumSeries(pur01_sc_tfly-internal_com.apache_200, pur02_sc_tfly-internal_com.apache_200,pur03_sc_tfly-internal_com.apache_200,pur04_sc_tfly-internal_com.apache_200,
			   wpmu02_sc_tfly-internal.com.apache_200, build02_sc_tfly-internal_com.apache_200,10_10_4_105.apache_200,10_10_4_101.apache_200,10_10_4_90.apache_200,10_10_4_91.apache_200,
                           10_10_4_106.apache_200,10_10_4_100.apache_200)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_300, pur02_sc_tfly-internal_com.apache_300,pur03_sc_tfly-internal_com.apache_300,pur04_sc_tfly-internal_com.apache_300,
			   wpmu02_sc_tfly-internal.com.apache_300, build02_sc_tfly-internal_com.apache_300,10_10_4_105.apache_300,10_10_4_101.apache_300,10_10_4_90.apache_300,10_10_4_91.apache_300,
                           10_10_4_106.apache_300,10_10_4_100.apache_300)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_400, pur02_sc_tfly-internal_com.apache_400,pur03_sc_tfly-internal_com.apache_400,pur04_sc_tfly-internal_com.apache_400,
			   wpmu02_sc_tfly-internal.com.apache_400, build02_sc_tfly-internal_com.apache_400,10_10_4_105.apache_400,10_10_4_101.apache_400,10_10_4_90.apache_400,10_10_4_91.apache_400,
                           10_10_4_106.apache_400,10_10_4_100.apache_400)",
               "sumSeries(pur01_sc_tfly-internal_com.apache_500, pur02_sc_tfly-internal_com.apache_500,pur03_sc_tfly-internal_com.apache_500,pur04_sc_tfly-internal_com.apache_500,
			   wpmu02_sc_tfly-internal.com.apache_500, build02_sc_tfly-internal_com.apache_500,10_10_4_105.apache_500,10_10_4_101.apache_500,10_10_4_90.apache_500,10_10_4_91.apache_500,
                           10_10_4_106.apache_500,10_10_4_100.apache_500)"
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
