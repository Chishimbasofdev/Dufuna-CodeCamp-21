<?php

    use Slim\Factory\AppFactory;
    use Dotenv\Dotenv;
 
    require __DIR__  . '/../vendor/autoload.php';

    $dotenv = Dotenv::createImmutable (__DIR__ . '../../');
    $dotenv->load();

    require 'web.php';
    require 'database.php';

    # Instantiate the App
    $app = AppFactory::create();    

    
    require __DIR__ . './../routes/api.php';