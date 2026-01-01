<?php
// app/controllers/ContatoController.php

require_once __DIR__ . '/../../config.php';  // Carrega config e conexão DB

class ContatoController {
    public function enviar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome'] ?? '');
            $telefone = trim($_POST['telefone'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $mensagem = trim($_POST['mensagem'] ?? '');

            if (empty($nome) || empty($telefone) || empty($mensagem)) {
                echo '<script>alert("Preencha os campos obrigatórios!"); history.back();</script>';
                exit;
            }

            // Insere no banco (usando a função getDB() do config.php)
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO leads (nome, email, telefone, mensagem, origem) VALUES (?, ?, ?, ?, 'home')");
            $stmt->execute([$nome, $email, $telefone, $mensagem]);

            echo '<script>alert("Mensagem enviada com sucesso! Entraremos em contato."); location.href="/";</script>';
        }
    }
}

// Executa se for chamada diretamente
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    (new ContatoController())->enviar();
}
?>