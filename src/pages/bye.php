<?php
//from (framework/init.php)
require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();
//require_once __DIR__.'/init.php';

$response->setContent('Goodbye!');
$response->send();
