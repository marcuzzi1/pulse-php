<?php

namespace PulsePhp\Utils\Routes;

use Exception;
use PulsePhp\Utils\DirectoryScanner\DirectoryScanner;

/**
 * @Author: Quentin MARCUZZI
 * @version : 0.1
 * This class is used to register and handle routes.
 */
class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    /**
     * This method scans the controllers' directory and register all routes.
     * @throws Exception
     */
    public function load(): void
    {
        // Empty the routes list
        $this->routes = [];

        // Getting the files list in "Controller" directory
        $scannedFiles = DirectoryScanner::scanDirectory(__DIR__ . '/../../Controller');

        // Verifying that the controllers' directory exists
        if (!is_dir(__DIR__ . '/../../src/Controller')) {
            throw new Exception('The directory "Controller" does not exist.');
        }

        // Iterating over the files list
        foreach ($scannedFiles as $scannedFile) {
            // TODO : complete this function
        }
    }
}