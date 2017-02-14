<?php

    date_default_timezone_set('America'/'Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/coins.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);

    $app->get('/', function() use ($app) {
      $coin = new Coin;
      echo $coin->find_coins(78);
        return $app['twig']->render('root.html.twig');
    });

    return $app;

?>
