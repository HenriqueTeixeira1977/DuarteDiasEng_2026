<?php
require_once 'app/core/Database.php';

class Admin {
    public static function findByEmail($email) {
        $pdo = Database::connect();
        $sql = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
        $sql->execute([$email]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }
}
