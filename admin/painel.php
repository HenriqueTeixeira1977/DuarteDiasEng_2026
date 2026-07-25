<?php
/**
 * Painel Administrativo - Contatos recebidos pelo site
 * ---------------------------------------------------------------
 * Lê e exibe em tabela os contatos salvos por app/contato-processa.php
 * em app/data/contatos.txt. Não depende de banco de dados.
 *
 * Próximo passo (ainda não ativado): enviar cada novo contato também
 * por e-mail para contato@duartediasengenharia.com.br. Isso será
 * ligado futuramente em app/contato-processa.php.
 */
session_start();
require_once __DIR__ . '/../config.php';

if (empty($_SESSION['admin_logado'])) {
    header('Location: login.php');
    exit;
}

// ==== LEITURA E PARSE DO ARQUIVO DE CONTATOS ============================
$arquivoContatos = __DIR__ . '/../app/data/contatos.txt';
$contatos = [];

if (is_file($arquivoContatos)) {
    $linhas = file($arquivoContatos, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($linhas as $linha) {
        // Formato: [DATA] Nome: X | Telefone: X | E-mail: X | Serviço: X | Mensagem: X
        if (preg_match('/^\[(.*?)\]\s*Nome:\s*(.*?)\s*\|\s*Telefone:\s*(.*?)\s*\|\s*E-mail:\s*(.*?)\s*\|\s*Serviço:\s*(.*?)\s*\|\s*Mensagem:\s*(.*)$/u', $linha, $m)) {
            $contatos[] = [
                'data'     => $m[1],
                'nome'     => $m[2],
                'telefone' => $m[3],
                'email'    => $m[4],
                'servico'  => $m[5],
                'mensagem' => $m[6],
            ];
        }
    }
}

// Mais recentes primeiro
$contatos = array_reverse($contatos);
$totalContatos = count($contatos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Contatos | Painel Administrativo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
  body{ font-family:'Poppins', sans-serif; background:#f4f5f7; }
  .topbar{
    background:#101d34;
    color:#fff;
    padding:1rem 0;
  }
  .badge-total{
    background:#d9622b;
  }
  .table-card{
    background:#fff;
    border-radius:14px;
    padding:1.5rem;
    box-shadow:0 2px 12px rgba(16,29,52,.06);
  }
  .msg-cell{
    max-width:260px;
    white-space:normal;
  }
  .btn-sair{
    color:#fff;
  }
</style>
</head>
<body>

<div class="topbar">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <strong>Painel Administrativo</strong>
      <span class="text-white-50 ms-2 small">Duarte Dias Engenharia</span>
    </div>
    <a href="logout.php" class="btn-sair small text-decoration-none">
      <i class="bi bi-box-arrow-right me-1"></i> Sair
    </a>
  </div>
</div>

<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <h5 class="mb-0">Contatos recebidos pelo formulário do site</h5>
    <span class="badge badge-total text-white px-3 py-2">Total: <?php echo $totalContatos; ?></span>
  </div>

  <div class="table-card">
    <?php if ($totalContatos === 0): ?>
      <p class="text-muted mb-0">Ainda não há contatos recebidos pelo formulário do site.</p>
    <?php else: ?>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>Data/Hora</th>
              <th>Nome</th>
              <th>Telefone</th>
              <th>E-mail</th>
              <th>Serviço</th>
              <th>Mensagem</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($contatos as $c): ?>
              <tr>
                <td class="text-nowrap"><?php echo htmlspecialchars($c['data']); ?></td>
                <td><?php echo htmlspecialchars($c['nome']); ?></td>
                <td class="text-nowrap">
                  <a href="https://wa.me/55<?php echo preg_replace('/\D/', '', $c['telefone']); ?>" target="_blank" rel="noopener">
                    <?php echo htmlspecialchars($c['telefone']); ?>
                  </a>
                </td>
                <td><a href="mailto:<?php echo htmlspecialchars($c['email']); ?>"><?php echo htmlspecialchars($c['email']); ?></a></td>
                <td><?php echo htmlspecialchars($c['servico']); ?></td>
                <td class="msg-cell"><?php echo nl2br(htmlspecialchars($c['mensagem'])); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>

  <p class="text-muted small mt-3">
    <i class="bi bi-info-circle me-1"></i>
    No momento os contatos são apenas salvos aqui. O envio automático para
    <?php echo htmlspecialchars(EMPRESA_EMAIL); ?> por e-mail será adicionado em breve.
  </p>

</div>

</body>
</html>
