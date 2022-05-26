<?php

    // Xử lý PHP ROOT
    define('FILE_ROOT', str_replace('\\', '/', __DIR__));

    // Xử lý HTTP ROOT
    define('HTTP_ROOT', $_SERVER['HTTP_REFERER']); 
    
    echo $http_root;

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    require_once 'core/Route.php';          // Load routes class
    require_once 'core/Database.php';       // Load Database Connection
    require_once 'core/Model.php';          // Load Base Model
    require_once 'core/Controller.php';     // Load Base Controller
    require_once 'core/Request.php';        // Load Request
    require_once 'core/Response.php';       // Load Response
    require_once 'app/App.php';             // Load App