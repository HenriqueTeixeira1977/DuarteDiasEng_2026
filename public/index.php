<?php
// public/index.php - Ponto de entrada e roteamento simples

require_once __DIR__ . '/../config.php';
session_start();  // Para sessões de erros/sucesso

// Roteamento básico (adicione mais rotas conforme precisar)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

if ($uri === 'contato') {
    $controller = new ContactController();
    $controller->index();
} elseif ($uri === 'contato/submit') {
    $controller = new ContactController();
    $controller->submit();
} else {
    // Página inicial ou 404
    echo 'Página não encontrada';
}
?>