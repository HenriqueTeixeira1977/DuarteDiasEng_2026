<?php

require_once __DIR__ . '/../models/Mensagem.php';

class ContatoController {
    private $mensagemModel;

    public function __construct($db) {
        $this->mensagemModel = new Mensagem($db);
    }

    public function index() {
        // Carrega a view do formulário (você já deve ter)
        require __DIR__ . '/../views/contato.php';
    }

    public function enviar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validação básica
            $erros = [];
            if (empty($_POST['nome'])) $erros[] = 'Nome é obrigatório';
            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $erros[] = 'Email válido é obrigatório';
            if (empty($_POST['mensagem'])) $erros[] = 'Mensagem é obrigatória';

            if (empty($erros)) {
                $dados = [
                    'nome' => trim($_POST['nome']),
                    'email' => trim($_POST['email']),
                    'telefone' => trim($_POST['telefone'] ?? ''),
                    'assunto' => trim($_POST['assunto'] ?? ''),
                    'mensagem' => trim($_POST['mensagem'])
                ];

                if ($this->mensagemModel->salvar($dados)) {
                    $sucesso = "Mensagem enviada com sucesso! Entraremos em contato em breve.";
                } else {
                    $erros[] = "Erro ao enviar. Tente novamente.";
                }
            }
        }

        // Recarrega a view com mensagens de erro/sucesso
        require __DIR__ . '/../views/contato.php';
    }
}