<?php
require_once '../phplib/Dashboard.php';

/** the title used for the page */
$title = 'Inventory apache';

/** a short alphanumeric string (used for CSS) */
$namespace = 'apache';


/** sections and graphs to be shown on the page */
$graphs = array(

    'Inventory Apache' => array(
        array(
            'type' => 'graphite',
            'title' => 'Apache Inventory pages hits per second',
            'metrics' => array(
               "sumSeries(inv01_sc_tfly-internal_com.apache_sale_hit, inv02_sc_tfly-internal_com.apache_sale_hit, inv03_sc_tfly-internal_com.apache_sale_hit, inv04_sc_tfly-internal_com.apache_sale_hit, 
                          admin02_sc_tfly-internal_com.apache_sale_hit, 10_10_4_102.apache_sale_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_scanner_hit, inv02_sc_tfly-internal_com.apache_scanner_hit, inv03_sc_tfly-internal_com.apache_scanner_hit, inv04_sc_tfly-internal_com.apache_scanner_hit, 
                          admin02_sc_tfly-internal_com.apache_scanner_hit, 10_10_4_102.apache_scanner_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_productgroup_hit, inv02_sc_tfly-internal_com.apache_productgroup_hit, inv03_sc_tfly-internal_com.apache_productgroup_hit, inv04_sc_tfly-internal_com.apache_productgroup_hit, 
                          admin02_sc_tfly-internal_com.apache_productgroup_hit, 10_10_4_102.apache_productgroup_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_salemanager_hit, inv02_sc_tfly-internal_com.apache_salemanager_hit, inv03_sc_tfly-internal_com.apache_salemanager_hit, inv04_sc_tfly-internal_com.apache_salemanager_hit, 
                          admin02_sc_tfly-internal_com.apache_salemanager_hit, 10_10_4_102.apache_salemanager_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_salefetch_hit, inv02_sc_tfly-internal_com.apache_salefetch_hit, inv03_sc_tfly-internal_com.apache_salefetch_hit, inv04_sc_tfly-internal_com.apache_salefetch_hit, 
                          admin02_sc_tfly-internal_com.apache_salefetch_hit, 10_10_4_102.apache_salefetch_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_orgmerchant_hit, inv02_sc_tfly-internal_com.apache_orgmerchant_hit, inv03_sc_tfly-internal_com.apache_orgmerchant_hit, inv04_sc_tfly-internal_com.apache_orgmerchant_hit, 
                          admin02_sc_tfly-internal_com.apache_orgmerchant_hit, 10_10_4_102.apache_orgmerchant_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_feeschedule_hit, inv02_sc_tfly-internal_com.apache_feeschedule_hit, inv03_sc_tfly-internal_com.apache_feeschedule_hit, inv04_sc_tfly-internal_com.apache_feeschedule_hit, 
                          admin02_sc_tfly-internal_com.apache_feeschedule_hit, 10_10_4_102.apache_feeschedule_hit)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_hit_hit, inv02_sc_tfly-internal_com.apache_hit_hit, inv03_sc_tfly-internal_com.apache_hit_hit, inv04_sc_tfly-internal_com.apache_hit_hit, 
                          admin02_sc_tfly-internal_com.apache_hit_hit, 10_10_4_102.apache_hit_hit)"
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
               "sumSeries(inv01_sc_tfly-internal_com.apache_200, inv02_sc_tfly-internal_com.apache_200, inv03_sc_tfly-internal_com.apache_200, inv04_sc_tfly-internal_com.apache_200, 
                          admin02_sc_tfly-internal_com.apache_200, 10_10_4_102.apache_200)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_300, inv02_sc_tfly-internal_com.apache_300, inv03_sc_tfly-internal_com.apache_300, inv04_sc_tfly-internal_com.apache_300, 
                          admin02_sc_tfly-internal_com.apache_300, 10_10_4_102.apache_300)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_400, inv02_sc_tfly-internal_com.apache_400, inv03_sc_tfly-internal_com.apache_400, inv04_sc_tfly-internal_com.apache_400, 
                          admin02_sc_tfly-internal_com.apache_400, 10_10_4_102.apache_400)",
               "sumSeries(inv01_sc_tfly-internal_com.apache_500, inv02_sc_tfly-internal_com.apache_500, inv03_sc_tfly-internal_com.apache_500, inv04_sc_tfly-internal_com.apache_500, 
                          admin02_sc_tfly-internal_com.apache_500, 10_10_4_102.apache_500)"
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
