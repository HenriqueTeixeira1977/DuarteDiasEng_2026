<?php
/**
 * Encerra a sessão do painel administrativo.
 */
session_start();
$_SESSION = [];
session_destroy();
header('Location: login.php');
exit;
