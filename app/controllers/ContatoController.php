<?php

require_once __DIR__ . '/../models/Contato.php';

class ContatoController
{
    public function enviar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        $dados = [
            'nome'     => trim($_POST['nome'] ?? ''),
            'email'    => trim($_POST['email'] ?? ''),
            'telefone' => trim($_POST['telefone'] ?? ''),
            'servico'  => trim($_POST['servico'] ?? ''),
            'mensagem' => trim($_POST['mensagem'] ?? ''),
            'origem'   => trim($_POST['origem'] ?? 'desconhecida')
        ];

        if (empty($dados['nome']) || empty($dados['telefone'])) {
            header('Location: /erro');
            exit;
        }

        Contato::salvar($dados);

        header('Location: /obrigado');
        exit;
    }
}
?>