<?php

/**
 * @Author: Quentin MARCUZZI
 * @version : 0.1
 * This file is the entry point of the application.
 * It is used to handle requests and calling the right controller and method.
 */

// Import(s)

// Autoload
use PulsePhpBundle\Routes\Router;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();