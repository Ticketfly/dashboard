<?php

require_once '../phplib/Dashboard.php';

/** sections and graphs to be shown on the page */
$graphs = array(
    'core01' => array(
        array(
            'type' => 'fitb',
            'host' => 'core01',    # The name of the host
            'portname' => 'core01-GigabitEthernet-0-0',    # The name of the RRD
            'graphtype' => 'bits',    # bits / ucastpkts / errors
            'title' => 'Core 01 GE Port 0-0'    # Free text title
        ),
        array(
            'type' => 'fitb',
            'host' => 'core01',    # The name of the host
            'portname' => 'core01-GigabitEthernet-0-0',    # The name of the RRD
            'graphtype' => 'ucastpkts',    # bits / ucastpkts / errors
            'title' => 'Core 01 GE Port 0-0'    # Free text title
        ),
    ),
    'core02' => array(
        array(
            'type' => 'fitb',
            'host' => 'core02',    # The name of the host
            'portname' => 'core02-GigabitEthernet-0-0',    # The name of the RRD
            'graphtype' => 'bits',    # bits / ucastpkts / errors
            'title' => 'Core 01 GE Port 0-0'    # Free text title
        ),
        array(
            'type' => 'fitb',
            'host' => 'core02',    # The name of the host
            'portname' => 'core02-GigabitEthernet-0-0',    # The name of the RRD
            'graphtype' => 'ucastpkts',    # bits / ucastpkts / errors
            'title' => 'Core 01 GE Port 0-0'    # Free text title
        ),
    ),
);


/** actually draws the page */
include '../phplib/template.php';
