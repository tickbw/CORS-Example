<?php

// Databases
$app['db.config.driver']    = 'pdo_mysql';
$app['db.config.dbname']    = 'silex';
$app['db.config.host']      = 'localhost';
$app['db.config.user']      = 'jweb';
$app['db.config.password']  = 'vert1902';

// Debug
$app['debug'] = true;

// Local
$app['locale'] = 'en';
$app['session.default_locale'] = $app['locale'];
$app['translator.messages'] = array(
    'fr' => __DIR__.'/../Resources/locales/en.yml',
);
