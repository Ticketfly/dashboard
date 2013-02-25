<?php

// the title used for the page
$title = 'Cacti - Database Stats';

require_once '../phplib/Dashboard.php';

$db_graphs = array(
    'fudata01-counters' => array(
            'type' => 'cacti',
            'metric' => 851,
            'width' => 581,
            'height' => 336,
    ),
    'fudata02-counters' => array(
            'type' => 'cacti',
            'metric' => '893',
            'width' => 581,
            'height' => 336
    ),
    'fuINVdata01-counters' => array(
            'type' => 'cacti',
            'metric' => '935',
            'width' => 581,
            'height' => 336
    ),
    'fuINVdata02-counters' => array(
            'type' => 'cacti',
            'metric' => '977',
            'width' => 581,
            'height' => 336
    ),
    'fuDIVAdata01-counters' => array(
            'type' => 'cacti',
            'metric' => '1019',
            'width' => 581,
            'height' => 336
    ),
    'fuDIVAdata02-counters' => array(
            'type' => 'cacti',
            'metric' => '1061',
            'width' => 581,
            'height' => 336
    ),
);

// this next commented out, but i'll leave here as an example if we want to add more -- thor
$network_graphs = array(
    'system01-link01' => array(
        'type' => 'fitb',
        'host' => 'router1',
        'portname' => 'router1-port1',
        'graphtype' => 'bits',
        'title' => 'router1 uplink to system01'
    ),
    'system01-link02' => array(
        'type' => 'fitb',
        'host' => 'router2',
        'portname' => 'router2-port1',
        'graphtype' => 'bits',
        'title' => 'router2 uplink to system02'
    ),
   'system02-link01' => array(
        'type' => 'fitb',
        'host' => 'router1',
        'portname' => 'router1-port2',
        'graphtype' => 'bits',
        'title' => 'router1 uplink to system02'
    ),
    'system02-link02' => array(
        'type' => 'fitb',
        'host' => 'router2',
        'portname' => 'router2-port2',
        'graphtype' => 'bits',
        'title' => 'router2 uplink to system02'
    ),

);

$graphs = array(
    'Fusion DB Stats' => $db_graphs,
//    'Network Activity' => $network_graphs,
);

include '../phplib/template.php';
