<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();
// $app['autoloader']->registerNamespace('CodeTest', __DIR__.'/../lib/CodeTest');
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
          'driver'    => 'pdo_mysql',
          'host'      => 'localhost',
          'dbname'    => 'codetest',
          'user'      => 'root',
          'password'  => 'codetest',
          'charset'   => 'utf8mb4',
    ),
));

// $app->register(new \Dbtlr\MigrationProvider\Provider\MigrationServiceProvider(), array(
//     'db.migrations.path' => __DIR__ . '/../app/migrations',
// ));

return $app;
