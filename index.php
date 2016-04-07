<?php
/**
 * User: GerBawn
 * Date: 2016/4/5 23:46
 */
use System\Core\Application;

define('BASEDIR', __DIR__);

include BASEDIR . '/System/Core/Loader.php';
include BASEDIR . '/configs/constants.php';

spl_autoload_register('\System\Core\Loader::autoload');

$app = Application::getInstance(BASEDIR);
if($app->config['debug'])
    error_reporting(E_ALL);
else
    error_reporting(0);
ini_set('date.timezone', $app->config['timezone']);
//date_default_timezone_set($th)
$app->run();