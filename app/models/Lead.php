<?php
require_once 'app/core/Database.php';

class Lead {
    public static function salvar($data) {
        $pdo = Database::connect();
        $sql = $pdo->prepare("INSERT INTO leads (nome, email, telefone, mensagem, serviço, origem, utm_source, utm_medium) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $sql->execute([
            $data['nome'] ?? null,
            $data['email'] ?? null,
            $data['telefone'] ?? null,
            $data['mensagem'] ?? null,
            $data['servico'] ?? null,
            $data['origem'] ?? 'site',
            $data['utm_source'] ?? null,
            $data['utm_medium'] ?? null
        ]);
    }

    public static function countAll() {
        $pdo = Database::connect();
        $sql = $pdo->query("SELECT COUNT(*) as total FROM leads");
        $r = $sql->fetch(PDO::FETCH_ASSOC);
        return $r['total'] ?? 0;
    }

    public static function getRecent($limit = 10) {
        $pdo = Database::connect();
        $sql = $pdo->prepare("SELECT * FROM leads ORDER BY created_at DESC LIMIT ?");
        $sql->bindValue(1, (int)$limit, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
