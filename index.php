<?php
require 'config.php';
require 'app/core/Core.php';
require 'app/core/Controller.php';
require 'app/core/Database.php';

// Autoload dos controllers e models
spl_autoload_register(function($class){
    if(file_exists("app/controllers/$class.php")){
        include "app/controllers/$class.php";
    } elseif(file_exists("app/models/$class.php")){
        include "app/models/$class.php";
    }
});

$core = new Core();
$core->run();

$router->post('/contato/enviar', 'ContatoController@enviar');
