<?php
require_once __DIR__ . '/../../../config.php';
$activePage = 'sobre';
$pageTitle = 'Sobre Nós | Duarte Dias Engenharia Civil - Campinas/SP';
$pageDescription = 'Conheça a Duarte Dias Engenharia Civil: especialistas em restauração e pintura de fachadas prediais em Campinas, com equipe certificada para trabalho em altura (NR-35).';
require __DIR__ . '/../../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-custom mb-2"><a href="<?php echo BASE_URL; ?>/index.php">Home</a> / Sobre</div>
    <h1>Sobre a Duarte Dias Engenharia Civil</h1>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="row align-items-center gy-4 mb-5">
      <div class="col-lg-6">
        <span class="section-eyebrow">Nossa história</span>
        <h2 class="mt-2 mb-3">Engenharia que evoluiu para cuidar da fachada do seu patrimônio</h2>
        <p class="text-muted">A Duarte Dias nasceu como uma empresa de engenharia civil e, com o tempo, identificou no mercado uma demanda crescente por especialização: a restauração e pintura de fachadas prediais. Hoje concentramos nossa expertise técnica exatamente nesse segmento, oferecendo um serviço mais completo, seguro e especializado para condomínios residenciais, comerciais e industriais.</p>
        <p class="text-muted">Unimos o conhecimento técnico de engenharia — fundamental para diagnosticar patologias como trincas, infiltrações e destacamento de reboco — à experiência prática de uma equipe treinada para trabalho em altura, garantindo resultado estético e durabilidade estrutural.</p>
      </div>
      <div class="col-lg-6">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-14.jpg" alt="Equipe da Duarte Dias em serviço de fachada" loading="lazy">
        </div>
      </div>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="valor-item">
          <h5>Missão</h5>
          <p class="text-muted mb-0">Proteger e valorizar o patrimônio de nossos clientes por meio de serviços técnicos de excelência em fachadas prediais.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="valor-item">
          <h5>Visão</h5>
          <p class="text-muted mb-0">Ser referência em restauração e pintura de fachadas em Campinas e região, reconhecida pela qualidade e segurança.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="valor-item">
          <h5>Valores</h5>
          <p class="text-muted mb-0">Segurança, ética, transparência com o síndico e compromisso com prazos e qualidade de execução.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SEGURANÇA E EQUIPE ===================== -->
<section class="section-padding bg-gray">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6 order-lg-2">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-06.jpg" alt="Técnico em acesso por corda realizando pintura de fachada" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <span class="section-eyebrow">Segurança em primeiro lugar</span>
        <h2 class="mt-2 mb-3">Equipe qualificada para trabalho em altura</h2>
        <p class="text-muted mb-4">Todos os nossos profissionais são treinados conforme as normas de segurança para trabalho em altura (NR-35), utilizando equipamentos de acesso por corda (técnica de rapel) e proteção individual certificados. Isso garante um serviço ágil, seguro para a equipe e sem transtornos para o dia a dia do condomínio — sem necessidade de andaimes que ocupem grandes áreas comuns.</p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Equipe certificada NR-35</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Equipamentos de proteção individual (EPIs)</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Responsável técnico registrado no CREA</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i>Seguro e ART em todos os projetos</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section-padding">
  <div class="container text-center">
    <span class="section-eyebrow">Certificação</span>
    <h2 class="mt-2 mb-4">Responsabilidade técnica registrada</h2>
    <img src="<?php echo BASE_URL; ?>/assets/img/logos/crea-certificacao.png" alt="Certificação CREA" style="max-height:120px;" class="mb-3">
    <p class="text-muted mx-auto" style="max-width:560px;">Todos os projetos são conduzidos com Anotação de Responsabilidade Técnica (ART), garantindo segurança jurídica e técnica para o seu condomínio.</p>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Quer conhecer nosso portfólio de obras?</h2>
      <p class="mb-4" style="color:#c7cedb;">Veja projetos de restauração e pintura já entregues por nossa equipe.</p>
      <a href="<?php echo BASE_URL; ?>/app/views/pages/projetos.php" class="btn btn-accent btn-lg px-4">Ver Projetos</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
