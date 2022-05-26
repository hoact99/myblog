<?php

    // Xử lý PHP ROOT
    define('FILE_ROOT', str_replace('\\', '/', __DIR__));

    // Xử lý HTTP ROOT
    $http_root = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
    $http_root .= $_SERVER['HTTP_HOST'];
    $http_root .= str_replace($_SERVER['DOCUMENT_ROOT'], '', FILE_ROOT);
    define('HTTP_ROOT', $http_root); 
    
    require_once 'core/Route.php';          // Load routes class
    require_once 'core/Database.php';       // Load Database Connection
    require_once 'core/Model.php';          // Load Base Model
    require_once 'core/Controller.php';     // Load Base Controller
    require_once 'core/Request.php';        // Load Request
    require_once 'core/Response.php';       // Load Response
    require_once 'app/App.php';             // Load App