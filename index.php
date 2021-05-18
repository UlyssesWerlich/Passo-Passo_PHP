<?php
    date_default_timezone_set('America/Sao_Paulo');

    if (isset($_GET['c']) && isset($_GET['m'])) {
        $controller = $_GET['c'];
        $method = $_GET['m'];
    } else {
        $controller = 'home';
        $method = 'index';
    }
    
    require "controllers/{$controller}.controller.php";
    
    call_user_func([ ucfirst($controller) . "Controller", $method]);
?>