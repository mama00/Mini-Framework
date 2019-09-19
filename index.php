<?php 
require_once __DIR__.'/vendor/autoload.php';
use Framework\Kernel\AppController;

////Recuperation de l url 
$action=$_GET['action'];
$app=new AppController();//Creation d'une instance de Votre application 
$app->run($action);

