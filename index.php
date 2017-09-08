<?php

define('KEY', 'API_KEY');

require 'vendor/autoload.php';

function render($name, \Slim\App $app){
    ob_start();
    if(file_exists("app/View/pages/$name.php"))
        include "app/View/pages/$name.php";
    else
        include 'app/View/errors/404.php';
    $content_for_template = ob_get_clean();
    include 'app/View/templates/default.php';
}

$app = new \Slim\App();
$app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware());
$app->get('/', function()use($app){
    return render('index', $app);
});
$app->get('/alexcan', function()use($app){
    return render('alexcan', $app);
});
$app->get('/cremi', function()use($app){
    return render('cremi', $app);
});
$app->get('/grafikart', function()use($app){
    return render('grafikart', $app);
});
$app->get('/primfx', function()use($app){
    return render('primfx', $app);
});
$app->get('/graven', function()use($app){
    return render('graven', $app);
});
$app->run();