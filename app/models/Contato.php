<?php
class Contato extends Database {

    public static function salvarLead($nome, $email, $telefone, $mensagem) {
        $pdo = self::connect();
        $sql = $pdo->prepare("INSERT INTO leads SET nome=?, email=?, telefone=?, mensagem=?");
        return $sql->execute([$nome, $email, $telefone, $mensagem]);
    }
}
