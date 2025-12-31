<?php

require_once '../app/models/Contato.php';

class ContatoController extends Controller {

    public function enviar() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        $dados = [
            'nome'     => $_POST['nome'] ?? '',
            'email'    => $_POST['email'] ?? '',
            'telefone' => $_POST['telefone'] ?? '',
            'servico'  => $_POST['servico'] ?? null,
            'mensagem' => $_POST['mensagem'] ?? '',
            'origem'   => $_POST['origem'] ?? 'home'
        ];

        $contato = new Contato();

        if ($contato->salvar($dados)) {
            header('Location: /obrigado');
            exit;
        }

        die('Erro ao salvar contato');
    }
}
?>  
