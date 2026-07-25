<?php
require_once __DIR__ . '/../../../config.php';
$activePage = 'servicos';
$pageTitle = 'Serviços: Pintura e Restauração de Fachadas | Duarte Dias';
$pageDescription = 'Pintura de fachadas, restauração de fachadas e assessoria condominial em Campinas e região. Conheça os serviços da Duarte Dias Engenharia Civil.';
require __DIR__ . '/../../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-custom mb-2"><a href="<?php echo BASE_URL; ?>/index.php">Home</a> / Serviços</div>
    <h1>Nossos Serviços</h1>
  </div>
</section>

<section class="section-padding pb-3">
  <div class="container text-center">
    <p class="text-muted mx-auto" style="max-width:680px;">Atuamos em todo o ciclo de cuidado da fachada predial: diagnóstico técnico, restauração estrutural, pintura de alta performance e assessoria completa ao síndico.</p>
  </div>
</section>

<!-- ===================== PINTURA DE FACHADAS ===================== -->
<section id="pintura" class="section-padding pt-3">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-07.jpg" alt="Pintura de fachada predial" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-icon mb-3"><i class="bi bi-brush"></i></div>
        <h2 class="mb-3">Pintura de Fachadas</h2>
        <p class="text-muted mb-3">Realizamos a pintura completa de fachadas prediais com técnica de acesso por corda, agilidade e mínimo impacto na rotina do condomínio. Utilizamos tintas de alta performance, resistentes a intempéries, com opções de textura e acabamento conforme o projeto.</p>
        <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Lavagem e preparo prévio da superfície</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Selador e fundo preparador</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Tintas acrílicas de alta performance</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Acesso por corda (sem necessidade de andaimes)</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Garantia de serviço</li>
        </ul>
        <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento%20de%20pintura%20de%20fachada." target="_blank" rel="noopener" class="btn btn-accent px-4">
          <i class="bi bi-whatsapp me-1"></i> Solicitar orçamento
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== RESTAURAÇÃO DE FACHADAS ===================== -->
<section id="restauracao" class="section-padding bg-gray">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6 order-lg-2">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-01.jpg" alt="Restauração de fachada predial" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="service-icon mb-3"><i class="bi bi-tools"></i></div>
        <h2 class="mb-3">Restauração de Fachadas</h2>
        <p class="text-muted mb-3">Antes de repintar, é essencial tratar a causa dos problemas. Nossa equipe identifica e recupera trincas, fissuras, infiltrações, bolhas e destacamento de reboco, devolvendo a integridade estrutural da fachada antes da pintura final.</p>
        <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Diagnóstico técnico das patologias</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Tratamento de trincas e fissuras</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Recuperação de reboco e argamassa</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Impermeabilização de áreas críticas</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Laudo técnico com ART</li>
        </ul>
        <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento%20de%20restaura%C3%A7%C3%A3o%20de%20fachada." target="_blank" rel="noopener" class="btn btn-accent px-4">
          <i class="bi bi-whatsapp me-1"></i> Solicitar orçamento
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== ASSESSORIA CONDOMINIAL ===================== -->
<section id="assessoria" class="section-padding">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-11.jpg" alt="Assessoria técnica condominial" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-icon mb-3"><i class="bi bi-clipboard-check"></i></div>
        <h2 class="mb-3">Assessoria Condominial</h2>
        <p class="text-muted mb-3">Sabemos que o síndico precisa de segurança técnica e transparência para tomar decisões. Por isso, oferecemos assessoria completa: da vistoria inicial ao acompanhamento da obra, com relatórios claros para prestação de contas em assembleia.</p>
        <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Vistoria e diagnóstico predial</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Elaboração de orçamento e cronograma</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Apoio na apresentação em assembleia</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Acompanhamento e fiscalização da obra</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Relatórios periódicos para o síndico</li>
        </ul>
        <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20assessoria%20t%C3%A9cnica%20para%20meu%20condom%C3%ADnio." target="_blank" rel="noopener" class="btn btn-accent px-4">
          <i class="bi bi-whatsapp me-1"></i> Falar com um especialista
        </a>
      </div>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Não sabe qual serviço seu condomínio precisa?</h2>
      <p class="mb-4" style="color:#c7cedb;">Fale com a gente e agende uma avaliação técnica gratuita.</p>
      <a href="<?php echo BASE_URL; ?>/app/views/pages/contato.php" class="btn btn-accent btn-lg px-4">Entrar em contato</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
