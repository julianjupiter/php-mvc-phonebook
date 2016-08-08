<?php

require_once __DIR__ . '/../config/appConfig.php';
require_once __DIR__ . '/../application/autoload.php';

use Core\Application;

$app = new Application();

$app->addRoute('GET', '/', 'Controller\HomeController', 'index');
$app->addRoute('GET', '/contact', 'Controller\ContactController', 'index');
$app->addRoute('GET', '/contact/add', 'Controller\ContactController', 'add');
$app->addRoute('POST', '/contact/add', 'Controller\ContactController', 'add');
$app->addRoute('GET', '/contact/view/{num}', 'Controller\ContactController', 'view');
$app->addRoute('GET', '/contact/edit/{num}', 'Controller\ContactController', 'edit');
$app->addRoute('POST', '/contact/edit', 'Controller\ContactController', 'edit');
$app->addRoute('GET', '/contact/delete/{num}', 'Controller\ContactController', 'delete');

$app->run();