<?php

session_start();

use Framework\Core\App\App;
use Framework\Core\Route\RouteContainer;
use Framework\Core\Registry\Registry;

// Load config
require_once('../config/config.php');

// Load vendor
require_once('../vendor/autoload.php');

// Bootstrap all Module
foreach(MODULES as $module){
    require_once("../module/$module/bootstrap.php");
}

$url = isset($_GET['url']) ? $_GET['url'] : null;

$arr = explode('/', $url);

// echo '<pre>';
// var_dump($arr);
// echo'</pre>';

if(in_array($arr[0], INFORMATION['auth']['cmd'])){
    print(json_encode(App::getConfig($arr[1])));
}else{
    App::initialize();
    // !!! Route : under experiment
    // $routeContainer = RouteContainer::getInstance();
    // Registry::setInstance('RouteContainer', $routeContainer);
    $app = App::getInstance('App');
    $app->operate($url);
    Registry::setInstance('App', $app);
}
