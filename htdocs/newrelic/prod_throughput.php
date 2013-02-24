<?php

/** NewRelic's graphs cannot be constructed progamatically. Each graph you want 
 * added here, has to manually be made "public" and then the URL for the graph 
 * added below. Not only that, but you need to get a separate URL for each time 
 * frame you want to make visible. Excellent!
 * And if that wasn't enough, you must general a graph URL for each of the 
 * following time frames which the dashboard uses. If you don't, your users will 
 * see the "1 hour" graph, or a broken graph, when choosing a timeframe for 
 * which graphs don't exist:
 *     '1h' => '1 hour',
 *     '2h' => '2 hours',
 *     '4h' => '4 hours',
 *     '12h' => '12 hours',
 *     '1d' => '1 day',
 *     '2d' => '2 days',
 *     '3d' => '3 days',
 *     '1w' => '1 week',
 *     '1m' => '1 month',
 *     '2m' => '2 months'
 * Finally, NewRelic's graph time ranges don't match up exactly with our 
 * dashboard times. For times like "4h", you will have to pick if you want to 
 * display NewRelic's 3 hour or 6 hour view.
 */

if (!isset($time)) {
    $time = !empty($_GET['time']) ? $_GET['time'] : '1h';
}

require_once 'phplib/Dashboard.php';

$graphs = array(
    'Prod response time and throughput' => array(
	//USR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lDoBa4CTLch'),
        ),
	//PUR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/jghsqytUqcU'),
        ),
	//BKS
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/fNJvv93KFJh'),
        ),
	//BKL
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lAZKWxCz72L'),
        ),
	//INV
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/8R3OlwXyW4m'),
        ),
	//API
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/ag2fNLgKMLb'),
        ),
	//LNG
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/5tY1pyGSAqJ'),
        ),
	//WPMU
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/aRhO6TkZgQd'),
        ),
    ),
/*
*    'Apdex score' => array (
*        array(
*            'type' => 'newrelic',
*            'metric' => array('time' => '1h', 'url' => 'http://rpm.newrelic.com/...'),
*        ),
*        array(
*            'type' => 'newrelic',
*            'metric' => array('time' => '2h', 'url' => 'http://rpm.newrelic.com/...'),
*        ),
*        array(
*            'type' => 'newrelic',
*            'metric' => array('time' => '4h', 'url' => 'http://rpm.newrelic.com/...'),
*        ),
*    ),
*/
);

$tabs = Dashboard::$DEPLOY_TABS;
$tab_url = Dashboard::getTabUrl(__FILE__);

include 'phplib/template.php';
