<?php
require_once __DIR__ . '/../../../config.php';
$activePage = 'contato';
$pageTitle = 'Contato | Orçamento de Pintura e Restauração de Fachada';
$pageDescription = 'Entre em contato com a Duarte Dias Engenharia Civil e solicite um orçamento gratuito para pintura ou restauração de fachada do seu condomínio em Campinas e região.';

// Mensagens de retorno do formulário (via querystring, definidas por contato-processa.php)
$statusEnvio = $_GET['status'] ?? '';

require __DIR__ . '/../../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-custom mb-2"><a href="<?php echo BASE_URL; ?>/index.php">Home</a> / Contato</div>
    <h1>Fale com a gente</h1>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="row g-4">
      <!-- Informações de contato -->
      <div class="col-lg-4">
        <div class="contact-card mb-4">
          <h5 class="mb-4">Informações de contato</h5>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="bi bi-whatsapp"></i></div>
            <div>
              <div class="fw-semibold">WhatsApp</div>
              <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>" target="_blank" rel="noopener" class="text-muted"><?php echo EMPRESA_WHATSAPP_EXIBE; ?></a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="bi bi-envelope"></i></div>
            <div>
              <div class="fw-semibold">E-mail</div>
              <a href="mailto:<?php echo EMPRESA_EMAIL; ?>" class="text-muted"><?php echo EMPRESA_EMAIL; ?></a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="bi bi-geo-alt"></i></div>
            <div>
              <div class="fw-semibold">Área de atendimento</div>
              <span class="text-muted"><?php echo EMPRESA_ENDERECO; ?></span>
            </div>
          </div>

          <div class="contact-info-item mb-0">
            <div class="contact-info-icon"><i class="bi bi-clock"></i></div>
            <div>
              <div class="fw-semibold">Horário</div>
              <span class="text-muted">Seg. a Sex.: 08h às 18h<br>Sáb.: 08h às 12h</span>
            </div>
          </div>
        </div>

        <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vim%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" rel="noopener" class="btn btn-accent w-100 py-3">
          <i class="bi bi-whatsapp me-1"></i> Falar agora no WhatsApp
        </a>
      </div>

      <!-- Formulário -->
      <div class="col-lg-8">
        <div class="contact-card">
          <h5 class="mb-4">Solicite um orçamento</h5>

          <?php if ($statusEnvio === 'sucesso'): ?>
            <div class="alert alert-success">Mensagem enviada com sucesso! Em breve entraremos em contato.</div>
          <?php elseif ($statusEnvio === 'erro'): ?>
            <div class="alert alert-danger">Não foi possível enviar sua mensagem. Verifique os dados e tente novamente.</div>
          <?php endif; ?>

          <form id="formContato" action="<?php echo BASE_URL; ?>/app/contato-processa.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label class="form-label">Nome completo</label>
              <input type="text" name="nome" class="form-control form-control-custom" required>
              <div class="invalid-feedback">Informe seu nome.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Telefone / WhatsApp</label>
              <input type="tel" name="telefone" class="form-control form-control-custom" required>
              <div class="invalid-feedback">Informe um telefone para contato.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control form-control-custom" required>
              <div class="invalid-feedback">Informe um e-mail válido.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Tipo de serviço</label>
              <select name="servico" class="form-select form-control-custom">
                <option value="Pintura de Fachadas">Pintura de Fachadas</option>
                <option value="Restauração de Fachadas">Restauração de Fachadas</option>
                <option value="Assessoria Condominial">Assessoria Condominial</option>
                <option value="Outro">Outro / Não sei ainda</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Mensagem</label>
              <textarea name="mensagem" rows="5" class="form-control form-control-custom" placeholder="Conte um pouco sobre o seu condomínio e a necessidade..." required></textarea>
              <div class="invalid-feedback">Escreva uma breve mensagem.</div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-accent px-4 py-2">
                <i class="bi bi-send me-1"></i> Enviar mensagem
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Mapa -->
    <div class="mt-4">
      <iframe class="map-frame" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps?q=Campinas,SP&output=embed">
      </iframe>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
