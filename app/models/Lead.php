<?php
// app/models/Lead.php - Model para tabela leads

require_once __DIR__ . '../../../config.php';  // Inclui config global

class Lead {
    public static function create($data) {
        $db = getDB();
        $stmt = $db->prepare("
            INSERT INTO leads (nome, email, telefone, origem, servico, mensagem, utm_source, utm_medium)
            VALUES (:nome, :email, :telefone, :origem, :servico, :mensagem, :utm_source, :utm_medium)
        ");
        $stmt->execute([
            ':nome' => $data['nome'],
            ':email' => $data['email'] ?? null,
            ':telefone' => $data['telefone'] ?? null,
            ':origem' => $data['origem'] ?? 'site',
            ':servico' => $data['servico'] ?? null,
            ':mensagem' => $data['mensagem'] ?? null,
            ':utm_source' => $data['utm_source'] ?? null,
            ':utm_medium' => $data['utm_medium'] ?? null
        ]);
        return $db->lastInsertId();
    }
}
?>