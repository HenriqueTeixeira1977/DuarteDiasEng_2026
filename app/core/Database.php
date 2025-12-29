<?php
class Database {
    protected static $pdo;

    public static function connect() {
        if(!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
                    DB_USER, 
                    DB_PASS, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die("Erro ao conectar: ".$e->getMessage());
            }
        }
        return self::$pdo;
    }
}
