<?php
/**
 * Login do Painel Administrativo - Duarte Dias Engenharia
 * ---------------------------------------------------------------
 * Autenticação simples por senha (sem usuário/login), usando sessão
 * PHP. A senha é validada contra o hash definido em config.php
 * (constante ADMIN_PASSWORD_HASH).
 */
session_start();
require_once __DIR__ . '/../config.php';

$erro = '';

// Se já estiver logado, vai direto para o painel
if (!empty($_SESSION['admin_logado'])) {
    header('Location: painel.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senha = $_POST['senha'] ?? '';

    if ($senha !== '' && password_verify($senha, ADMIN_PASSWORD_HASH)) {
        // Regenera o ID de sessão por segurança após autenticar
        session_regenerate_id(true);
        $_SESSION['admin_logado'] = true;
        header('Location: painel.php');
        exit;
    }

    $erro = 'Senha incorreta. Tente novamente.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Painel Administrativo | Duarte Dias Engenharia</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
  body{
    font-family:'Poppins', sans-serif;
    background:#101d34;
    min-height:100vh;
    display:flex;
    align-items:center;
  }
  .login-card{
    background:#fff;
    border-radius:16px;
    padding:2.5rem;
    max-width:400px;
    width:100%;
    margin:0 auto;
    box-shadow:0 10px 40px rgba(0,0,0,.25);
  }
  .login-icon{
    width:56px; height:56px;
    border-radius:50%;
    background:#f4f5f7;
    display:flex; align-items:center; justify-content:center;
    font-size:1.5rem;
    color:#d9622b;
    margin:0 auto 1.2rem auto;
  }
  .btn-entrar{
    background:#d9622b;
    border-color:#d9622b;
    font-weight:600;
  }
  .btn-entrar:hover{
    background:#b94f1f;
    border-color:#b94f1f;
  }
</style>
</head>
<body>

<div class="container">
  <div class="login-card">
    <div class="login-icon"><i class="bi bi-lock-fill"></i></div>
    <h5 class="text-center mb-1">Painel Administrativo</h5>
    <p class="text-center text-muted small mb-4">Duarte Dias Engenharia</p>

    <?php if ($erro): ?>
      <div class="alert alert-danger py-2 small"><?php echo htmlspecialchars($erro); ?></div>
    <?php endif; ?>

    <form method="POST" action="">
      <label class="form-label small fw-semibold">Senha de acesso</label>
      <input type="password" name="senha" class="form-control form-control-lg mb-3" required autofocus>
      <button type="submit" class="btn btn-entrar btn-lg w-100 text-white">Entrar</button>
    </form>
  </div>
</div>

</body>
</html>
