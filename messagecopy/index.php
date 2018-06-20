<?php
header("content-type:text/html;charset=utf-8");
define('APP_HOST',$_SERVER['HTTP_HOST']);

$controller = isset($_GET['c'])?ucfirst($_GET['c']):'User';
$action = isset($_GET['a'])?$_GET['a']:'login';

$config = include("./config.php");
include("./function.php");

use Controller\Controller;

$controller = 'Controller\Home\\'.$controller;
$obj = new $controller();

$obj->$action();