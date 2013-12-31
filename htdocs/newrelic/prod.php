<?php

/** NewRelic's graphs cannot be constructed progamatically. Each graph you want 
 * added here, has to manually be made "public" and then the URL for the graph 
 * added below. Not only that, but you need to get a separate URL for each time 
 * frame you want to make visible. Excellent!
 * And if that wasn't enough, you must general a graph URL for each of the 
 * following time frames which the dashboard uses. If you don't, your users will 
 * see the "1 hour" graph, or a broken graph, when choosing a timeframe for 
 * which graphs don't exist:
 *     '30m' => '30 mins' yes there is a but with it saying 30 months on it
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

require_once '../phplib/Dashboard.php';

$graphs = array(
    'Prod Page Performance Average Response time by tier (ms)' => array(
        //USR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/ciABCF6cpJi'),
        ),
        //PUR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/dElfxwqR1BT'),
        ),
        //BKS
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/6zoZozONyY8'),
        ),
        //BKL
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/eqDoihgOy59'),
        ),
        //BKJ
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/eqmQFKbU8Rd'),
        ),
        //INV
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/av1RmDwmV1R'),
        ),
        //API
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/iDuqFM6jVzr'),
        ),
        //LNG
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/imTU6K0Q9WP'),
        ),
        //WPMU
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/jP7A7ovTtdb'),
        ),
        //PLE
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/bYUJB2T0Yom'),
        ),        
        //USR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/7qzmskpvt4r'),
        ),
        //PUR
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lIimBYFFA7s'),
        ),
        //BKS
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/kEukcS7V6Sw'),
        ),
        //BKL
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/8gSNDM2YwJo'),
        ),
        //BKJ
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/cTINam6HBN3'),
        ),
        //INV
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/S8YPCwQMMt'),
        ),
        //API
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/heuaLjq8pRf'),
        ),
        //LNG
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/z8SxdRvbBD'),
        ),
        //WPMU
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/i7E9oNXUWj6'),
        ),
        //PLE
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/eDETfYFdalM'),
        ),                
    ),
);

$tabs = Dashboard::$APP_TABS;
$tab_url = Dashboard::getTabUrl(__FILE__);

include '../phplib/template.php';
