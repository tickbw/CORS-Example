<?php

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormError;

$app->get('/', function () use ($app) {
	$body = $app['twig']->render('layout.html.twig');
	return new Response($body, 200, array(
		'Cache-Control' => 's-maxage=3600, public'
		)
	);
});


$app->match('/data.json', function() use ($app) {
	
	$post = array(
			'title' => 'php - this is a title',
			'body'  => 'php - this is a description'
	);

	$json = json_encode($post);
	return new Response($json, 201, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
});

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message, $code);
});

return $app;
