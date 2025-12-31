<?php

class Contato {

    public function salvar($dados) {

        global $pdo;

        $stmt = $pdo->prepare("
            INSERT INTO contatos (nome, email, telefone, servico, mensagem, origem)
            VALUES (:nome, :email, :telefone, :servico, :mensagem, :origem)
        ");

        return $stmt->execute([
            ':nome'     => $dados['nome'],
            ':email'    => $dados['email'],
            ':telefone' => $dados['telefone'],
            ':servico'  => $dados['servico'],
            ':mensagem' => $dados['mensagem'],
            ':origem'   => $dados['origem']
        ]);
    }
}
