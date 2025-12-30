<?php
require_once __DIR__ . '/../core/Database.php';

class Contato
{
    public static function salvar($dados)
    {
        $sql = "INSERT INTO contatos 
                (nome, email, telefone, servico, mensagem, origem)
                VALUES 
                (:nome, :email, :telefone, :servico, :mensagem, :origem)";

        $stmt = Database::connect()->prepare($sql);

        return $stmt->execute([
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
            ':telefone' => $dados['telefone'],
            ':servico' => $dados['servico'],
            ':mensagem' => $dados['mensagem'],
            ':origem' => $dados['origem']
        ]);
    }
}
?>
