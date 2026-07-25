<?php

class Mensagem {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function salvar($dados) {
        $stmt = $this->db->prepare("
            INSERT INTO mensagens_contato 
            (nome, email, telefone, assunto, mensagem, ip) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        return $stmt->execute([
            $dados['nome'],
            $dados['email'],
            $dados['telefone'] ?? null,
            $dados['assunto'] ?? 'Sem assunto',
            $dados['mensagem'],
            $ip
        ]);
    }

    // Futuro: métodos para listar, marcar como lido, etc.
}