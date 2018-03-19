<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

/**
 * Created by PhpStorm.
 * User: Rodrigo Araujo
 * Date: 16/03/18
 * Time: 18:17
 */

require_once('vendor/autoload.php');

use Aspect\ApplicationAspectKernel;
use Aspect\ClasseA;



$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(array(
    'cacheDir' => '/tmp/',
    'includePaths' => array(
        __DIR__ . '/src/'
    ),
    'debug' => true
));


$a = new ClasseA();
$a->executa();


