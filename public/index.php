<?php

require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../.env');
$dotenv->load();
// var_dump($_ENV['DB_HOST']);

// die();

use app\database\Connection;

$connection = Connection::getConnection();

use app\libraries\SiteTemplate;


$blog = new SiteTemplate;


$prepare = $connection->prepare('select * from users');
$prepare->execute();
$users = $prepare->fetchAll();

$blog->assign(['name' => 'Fábio', 'age' => 34, 'users' => $users]);
$blog->display('home.tpl');


// require '../vendor/autoload.php';

// $smarty = new Smarty();
// $smarty->setTemplateDir(VIEWS);
// $smarty->setConfigDir(VIEWS.DIRECTORY_SEPARATOR.'configs');
// $smarty->setCompileDir(VIEWS.DIRECTORY_SEPARATOR.'templates_c');
// $smarty->setCacheDir(VIEWS.DIRECTORY_SEPARATOR.'cache');

// $smarty->assign('name', 'Fabio');
// $smarty->display('index.tpl');