<?php

/**
 * JPGraph v3.6.20
 */
require_once __DIR__ . '/../../src/config.inc.php';

require_once 'jpgraph/jpgraph_led.php';

// By default each "LED" circle has a radius of 3 pixels. Change to 5 and slghtly smaller margin
$led = new DigitalLED74(6);
$led->SetSupersampling(1);
$led->StrokeNumber('123.', LEDC_RED);
