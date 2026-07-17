<?php
/**
 * Página "Em Construção / Em Breve" - Duarte Dias Engenharia
 * ------------------------------------------------------------
 * Como usar:
 * 1) Ajuste a variável $dataLancamento abaixo para a data/hora real de lançamento.
 * 2) Coloque este arquivo na raiz do projeto (ou onde preferir) e aponte o domínio
 *    para ele enquanto o site principal está em construção.
 * 3) O formulário de e-mail salva os cadastros em "inscritos.txt" (mesma pasta).
 *    Se quiser enviar por e-mail em vez de salvar em arquivo, veja o bloco
 *    "PROCESSAMENTO DO FORMULÁRIO" mais abaixo.
 */

// ==== CONFIGURAÇÕES ====================================================
$dataLancamento = '2026-09-01 00:00:00'; // ajuste a data prevista de lançamento
$emailContato   = 'contato@duartediasengenharia.com.br';
$whatsapp       = '5519997339148';
$whatsappExibe  = '(19) 99733-9148';
$cidade         = 'Campinas - SP';
$instagram      = 'https://instagram.com/duartediasengenharia'; // ajuste se necessário
$linkedin       = 'https://linkedin.com/company/duartediasengenharia'; // ajuste se necessário
$arquivoEmails  = __DIR__ . '/inscritos.txt';

// ==== PROCESSAMENTO DO FORMULÁRIO ======================================
$mensagem = '';
$sucesso  = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

    if ($email) {
        // Salva o e-mail em arquivo local (simples, sem depender de servidor SMTP)
        $linha = date('Y-m-d H:i:s') . ' - ' . $email . PHP_EOL;
        @file_put_contents($arquivoEmails, $linha, FILE_APPEND | LOCK_EX);

        // Se preferir enviar por e-mail em vez de (ou além de) salvar em arquivo,
        // descomente as linhas abaixo e configure um servidor de e-mail (ex: PHPMailer/SMTP):
        // $assunto = 'Novo cadastro - Página Em Breve';
        // $corpo   = "Novo e-mail cadastrado: $email";
        // mail($emailContato, $assunto, $corpo);

        $sucesso  = true;
        $mensagem = 'Obrigado! Avisaremos você assim que o site estiver pronto.';
    } else {
        $mensagem = 'Por favor, informe um e-mail válido.';
    }
}

// ==== CÁLCULO DA CONTAGEM REGRESSIVA (usado só como fallback inicial) ==
$timestampLancamento = strtotime($dataLancamento);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Em Breve | Duarte Dias Engenharia</title>
<meta name="description" content="O novo site da Duarte Dias Engenharia está em construção. Em breve, novidades sobre projetos, laudos e consultoria técnica.">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>
  :root{
    --dd-dark:#0d1b2a;
    --dd-accent:#c9a24b; /* dourado sóbrio, remete a "excelência/engenharia" */
    --dd-accent-hover:#b8912f;
    --dd-text-light:#f5f5f5;
  }

  html,body{ height:100%; }

  body{
    font-family:'Poppins', sans-serif;
    color:var(--dd-text-light);
    background:
      linear-gradient(180deg, rgba(13,27,42,.82) 0%, rgba(13,27,42,.90) 60%, rgba(13,27,42,.96) 100%),
      url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1920&auto=format&fit=crop')
      center/cover no-repeat fixed;
    min-height:100vh;
    display:flex;
    flex-direction:column;
  }

  .brand-box{
    border:2px solid var(--dd-text-light);
    display:inline-block;
    padding:10px 22px;
    letter-spacing:2px;
  }
  .brand-box .brand-eng{
    font-weight:300;
    font-size:1rem;
  }
  .brand-box .brand-name{
    font-family:'Playfair Display', serif;
    font-weight:700;
    font-size:1.4rem;
  }

  h1.title{
    font-family:'Playfair Display', serif;
    font-weight:700;
    font-size:clamp(1.8rem, 4vw, 3rem);
  }

  .subtitle{
    letter-spacing:3px;
    font-size:.8rem;
    color:#c8d0d8;
  }

  .countdown-item{
    min-width:90px;
  }
  .countdown-number{
    font-family:'Playfair Display', serif;
    font-weight:700;
    font-size:clamp(2.2rem, 5vw, 3.5rem);
    line-height:1;
  }
  .countdown-label{
    font-size:.75rem;
    letter-spacing:2px;
    color:#c8d0d8;
  }
  .countdown-sep{
    width:1px;
    background:rgba(255,255,255,.25);
    align-self:stretch;
    margin:0 1.25rem;
  }

  .btn-accent{
    background-color:var(--dd-accent);
    border-color:var(--dd-accent);
    color:#1a1a1a;
    font-weight:600;
    letter-spacing:1px;
  }
  .btn-accent:hover{
    background-color:var(--dd-accent-hover);
    border-color:var(--dd-accent-hover);
    color:#1a1a1a;
  }

  .form-control-dark{
    background-color:rgba(255,255,255,.08);
    border:1px solid rgba(255,255,255,.35);
    color:#fff;
  }
  .form-control-dark::placeholder{ color:#d7d7d7; }
  .form-control-dark:focus{
    background-color:rgba(255,255,255,.14);
    border-color:var(--dd-accent);
    color:#fff;
    box-shadow:0 0 0 .2rem rgba(201,162,75,.25);
  }

  .social-icon{
    width:40px; height:40px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border:1px solid rgba(255,255,255,.5);
    border-radius:50%;
    color:#fff;
    transition:all .2s ease-in-out;
    text-decoration:none;
  }
  .social-icon:hover{
    background-color:var(--dd-accent);
    border-color:var(--dd-accent);
    color:#1a1a1a;
  }

  footer.contact-line{
    font-size:.85rem;
    color:#c8d0d8;
  }

  .alert-inscricao{
    max-width:480px;
    margin:0 auto 1rem auto;
  }
</style>
</head>
<body>

<main class="container flex-grow-1 d-flex flex-column align-items-center justify-content-center text-center py-5">

  <!-- Logo / marca -->
  <div class="brand-box mb-4">
    <span class="brand-eng">DUARTE DIAS</span> <span class="brand-name">ENGENHARIA</span>
  </div>

  <h1 class="title mb-2">Nosso novo site está quase pronto</h1>
  <p class="subtitle text-uppercase mb-5">Tempo restante para o lançamento</p>

  <!-- Contador regressivo -->
  <div class="d-flex align-items-start justify-content-center mb-5" id="countdown">
    <div class="countdown-item">
      <div class="countdown-number" id="days">00</div>
      <div class="countdown-label text-uppercase">Dias</div>
    </div>
    <div class="countdown-sep d-none d-sm-block"></div>
    <div class="countdown-item">
      <div class="countdown-number" id="hours">00</div>
      <div class="countdown-label text-uppercase">Horas</div>
    </div>
    <div class="countdown-sep d-none d-sm-block"></div>
    <div class="countdown-item">
      <div class="countdown-number" id="minutes">00</div>
      <div class="countdown-label text-uppercase">Minutos</div>
    </div>
    <div class="countdown-sep d-none d-sm-block"></div>
    <div class="countdown-item">
      <div class="countdown-number" id="seconds">00</div>
      <div class="countdown-label text-uppercase">Segundos</div>
    </div>
  </div>

  <p class="subtitle text-uppercase mb-3">Avise-me quando estiver pronto</p>

  <?php if ($mensagem): ?>
    <div class="alert-inscricao alert <?php echo $sucesso ? 'alert-success' : 'alert-warning'; ?>">
      <?php echo htmlspecialchars($mensagem); ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="" class="row g-2 justify-content-center mb-5" style="max-width:480px; width:100%;">
    <div class="col-8 col-sm-8">
      <input type="email" name="email" class="form-control form-control-dark form-control-lg" placeholder="SEU E-MAIL" required>
    </div>
    <div class="col-4 col-sm-4 d-grid">
      <button type="submit" class="btn btn-accent btn-lg text-uppercase">Inscrever</button>
    </div>
  </form>

  <!-- Redes sociais e contato -->
  <div class="d-flex gap-3 justify-content-center mb-4">
    <a href="https://wa.me/<?php echo $whatsapp; ?>" target="_blank" rel="noopener" class="social-icon" title="WhatsApp">
      <i class="bi bi-whatsapp"></i>
    </a>
    <a href="<?php echo htmlspecialchars($instagram); ?>" target="_blank" rel="noopener" class="social-icon" title="Instagram">
      <i class="bi bi-instagram"></i>
    </a>
    <a href="<?php echo htmlspecialchars($linkedin); ?>" target="_blank" rel="noopener" class="social-icon" title="LinkedIn">
      <i class="bi bi-linkedin"></i>
    </a>
    <a href="mailto:<?php echo htmlspecialchars($emailContato); ?>" class="social-icon" title="E-mail">
      <i class="bi bi-envelope"></i>
    </a>
  </div>

</main>

<footer class="text-center contact-line pb-4">
  <div><?php echo htmlspecialchars($whatsappExibe); ?> &nbsp;·&nbsp; <?php echo htmlspecialchars($emailContato); ?> &nbsp;·&nbsp; <?php echo htmlspecialchars($cidade); ?></div>
  <div class="mt-1" style="font-size:.75rem; color:#8a97a3;">&copy; <?php echo date('Y'); ?> Duarte Dias Engenharia — Todos os direitos reservados.</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Data de lançamento vinda do PHP (timestamp em segundos, convertido para ms)
  const dataLancamento = <?php echo $timestampLancamento; ?> * 1000;

  function atualizarContador() {
    const agora = new Date().getTime();
    let diff = dataLancamento - agora;

    if (diff < 0) diff = 0;

    const dias = Math.floor(diff / (1000 * 60 * 60 * 24));
    const horas = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutos = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const segundos = Math.floor((diff % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = String(dias).padStart(2, '0');
    document.getElementById('hours').textContent = String(horas).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutos).padStart(2, '0');
    document.getElementById('seconds').textContent = String(segundos).padStart(2, '0');
  }

  atualizarContador();
  setInterval(atualizarContador, 1000);
</script>

</body>
</html>
