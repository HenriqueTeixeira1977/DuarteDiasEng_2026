<?php

require_once __DIR__ . '/../app/core/Database.php';
require_once __DIR__ . '/../app/controllers/ContatoController.php';

$database = new Database();
$db = $database->getConnection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$contatoController = new ContatoController($db);

if ($uri === '/contato' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $contatoController->index();
} elseif ($uri === '/contato/enviar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $contatoController->enviar();
} else {
    // Outras rotas ou página 404
    echo "Página não encontrada";
}