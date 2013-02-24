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

require_once '../phplib/Dashboard.php';

$graphs = array(
    'Prod Page Performance Average Response time by tier (ms)' => array(
        //PUR eventV2/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/bcy2S04HhBV'),
        ),
        //PUR delivery/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/jCa04uyVvHe'),
        ),
        //PUR offers/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/lt94njhzF8g'),
        ),
        //PUR login/loginComplete
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/iJSFoQ5RdlH'),
        ),
        //PUR payment/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/7OhkvFD5m0h'),
        ),
        //PUR review/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '30m', 'url' => 'https://rpm.newrelic.com/public/charts/duZUdWvFLpf'),
        ),
        //PUR eventV2/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/4rP9XoTniGX'),
        ),
        //PUR delivery/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lyAsEm9Fqsi'),
        ),
        //PUR offers/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lqkOBiop6qn'),
        ),
        //PUR login/loginComplete
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/3s59rlWPDD6'),
        ),
        //PUR payment/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/eUAvJSataKO'),
        ),
        //PUR review/index
        array(
            'type' => 'newrelic',
            'metric' => array('time' => '1h', 'url' => 'https://rpm.newrelic.com/public/charts/lOebPmGGdbg'),
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

$tabs = Dashboard::$APP_TABS;
$tab_url = Dashboard::getTabUrl(__FILE__);

include '../phplib/template.php';
