<?php

// respond to preflights
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
// 	// return only the headers and not the content
// 	// only allow CORS if we're doing a GET - i.e. no saving for now.
// 	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']) && $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'] == 'GET') {
// 		header('Access-Control-Allow-Origin: *');
// 		header('Access-Control-Allow-Headers: X-Requested-With');
// 	}
// 	exit;
// }


// Autoload
require_once __DIR__.'/../src/autoload.php';

// Silex
$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../src/controllers.php';
$app->run();
