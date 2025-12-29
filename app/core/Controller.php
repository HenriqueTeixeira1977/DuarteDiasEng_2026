<?php
class Controller {
    public function loadView($viewName, $viewData = []) {
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = []) {
        require 'app/views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = []) {
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }
}

// mail config
define('SMTP_HOST','smtp.hostinger.com'); // ajuste Hostinger ou seu provedor
define('SMTP_USER','contato@duartediasengenharia.com.br');
define('SMTP_PASS','SUA_SENHA_DE_EMAIL');
define('SMTP_PORT',587);
define('SMTP_FROM','contato@duartediasengenharia.com.br');
