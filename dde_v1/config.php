<?php
// config.php - Configurações globais e conexão com DB

// Defina constantes para caminhos
define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . '/app');
define('PUBLIC_PATH', ROOT_PATH . '/public');

// Configurações do banco de dados (altere com seus dados reais)
define('DB_HOST', 'localhost');
define('DB_NAME', 'duartediasengenharia2026');
define('DB_USER', 'root');  // Seu usuário MySQL
define('DB_PASS', '');      // Sua senha MySQL (deixe vazio se não tiver)

// Função para conectar ao banco com PDO (seguro contra SQL injection)
function getDB() {
    static $db = null;
    if ($db === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $db = new PDO($dsn, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
    return $db;
}

// Outras configs (ex.: timezone)
date_default_timezone_set('America/Sao_Paulo');
?>