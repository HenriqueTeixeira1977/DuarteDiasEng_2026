<?php
require_once __DIR__ . '/../../../config.php';
$activePage = 'projetos';
$pageTitle = 'Projetos e Obras Realizadas | Duarte Dias Engenharia Civil';
$pageDescription = 'Confira os projetos de restauração e pintura de fachadas realizados pela Duarte Dias Engenharia Civil em condomínios de Campinas e região.';
$pageImage = '/assets/img/projetos/projeto-09.jpg';
require __DIR__ . '/../../includes/header.php';

// Galeria de projetos: imagem + legenda + categoria (para os filtros)
$projetos = [
    ['img' => 'projeto-01.jpg', 'legenda' => 'Restauração de fachada predial', 'categoria' => 'restauracao'],
    ['img' => 'projeto-02.jpg', 'legenda' => 'Pintura em condomínio residencial', 'categoria' => 'pintura'],
    ['img' => 'projeto-03.jpg', 'legenda' => 'Acesso por corda para pintura', 'categoria' => 'pintura'],
    ['img' => 'projeto-04.jpg', 'legenda' => 'Restauração de reboco e trincas', 'categoria' => 'restauracao'],
    ['img' => 'projeto-05.jpg', 'legenda' => 'Pintura de fachada predial', 'categoria' => 'pintura'],
    ['img' => 'projeto-06.jpg', 'legenda' => 'Equipe em técnica de rapel', 'categoria' => 'pintura'],
    ['img' => 'projeto-07.jpg', 'legenda' => 'Pintura de fachada em altura', 'categoria' => 'pintura'],
    ['img' => 'projeto-08.jpg', 'legenda' => 'Restauração predial em andamento', 'categoria' => 'restauracao'],
    ['img' => 'projeto-09.jpg', 'legenda' => 'Equipe qualificada em ação', 'categoria' => 'pintura'],
    ['img' => 'projeto-10.jpg', 'legenda' => 'Restauração de fachada comercial', 'categoria' => 'restauracao'],
    ['img' => 'projeto-11.jpg', 'legenda' => 'Assessoria e execução de obra', 'categoria' => 'assessoria'],
    ['img' => 'projeto-12.jpg', 'legenda' => 'Fachada em fase de restauração', 'categoria' => 'restauracao'],
    ['img' => 'projeto-13.jpg', 'legenda' => 'Pintura condominial completa', 'categoria' => 'pintura'],
    ['img' => 'projeto-14.jpg', 'legenda' => 'Equipe certificada NR-35', 'categoria' => 'pintura'],
    ['img' => 'projeto-16.jpg', 'legenda' => 'Restauração de fachada residencial', 'categoria' => 'restauracao'],
    ['img' => 'projeto-17.jpg', 'legenda' => 'Pintura de fachada predial', 'categoria' => 'pintura'],
    ['img' => 'projeto-18.jpg', 'legenda' => 'Detalhe de acabamento de pintura', 'categoria' => 'pintura'],
    ['img' => 'projeto-19.jpg', 'legenda' => 'Restauração estrutural de fachada', 'categoria' => 'restauracao'],
    ['img' => 'projeto-20.jpg', 'legenda' => 'Condomínio - fachada finalizada', 'categoria' => 'pintura'],
    ['img' => 'projeto-21.jpg', 'legenda' => 'Obra de restauração predial', 'categoria' => 'restauracao'],
    ['img' => 'projeto-22.jpg', 'legenda' => 'Pintura de fachada em altura', 'categoria' => 'pintura'],
    ['img' => 'projeto-23.jpg', 'legenda' => 'Equipe em acesso por corda', 'categoria' => 'pintura'],
];
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-custom mb-2"><a href="<?php echo BASE_URL; ?>/index.php">Home</a> / Projetos</div>
    <h1>Nossos Projetos</h1>
  </div>
</section>

<section class="section-padding pb-3">
  <div class="container text-center">
    <p class="text-muted mx-auto" style="max-width:680px;">Confira alguns dos condomínios e edificações onde já realizamos serviços de pintura e restauração de fachadas.</p>
  </div>

  <div class="container">
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4" id="filtrosProjetos">
      <button class="btn btn-outline-navy btn-sm filtro-btn active" data-filtro="todos">Todos</button>
      <button class="btn btn-outline-navy btn-sm filtro-btn" data-filtro="pintura">Pintura</button>
      <button class="btn btn-outline-navy btn-sm filtro-btn" data-filtro="restauracao">Restauração</button>
      <button class="btn btn-outline-navy btn-sm filtro-btn" data-filtro="assessoria">Assessoria</button>
    </div>

    <div class="row g-3" id="gridProjetos">
      <?php foreach ($projetos as $p): ?>
      <div class="col-6 col-md-4 col-lg-3 item-projeto" data-categoria="<?php echo $p['categoria']; ?>">
        <div class="gallery-item"
             data-lightbox
             data-full="<?php echo BASE_URL; ?>/assets/img/projetos/<?php echo $p['img']; ?>"
             data-caption="<?php echo htmlspecialchars($p['legenda']); ?>">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['legenda']); ?>" loading="lazy">
          <div class="gallery-overlay"><span><?php echo htmlspecialchars($p['legenda']); ?></span></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Seu prédio precisa de um projeto assim?</h2>
      <p class="mb-4" style="color:#c7cedb;">Solicite uma avaliação técnica gratuita para o seu condomínio.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vi%20o%20portf%C3%B3lio%20no%20site%20e%20gostaria%20de%20um%20or%C3%A7amento." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Solicitar orçamento
      </a>
    </div>
  </div>
</section>

<!-- Modal Lightbox -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark border-0">
      <div class="modal-header border-0">
        <span class="text-white small" id="lightboxCaption"></span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body text-center pt-0">
        <img id="lightboxImg" src="" alt="" class="img-fluid rounded">
      </div>
    </div>
  </div>
</div>

<script>
  // Filtro simples de categoria da galeria
  document.querySelectorAll('.filtro-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.filtro-btn').forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var filtro = btn.getAttribute('data-filtro');
      document.querySelectorAll('.item-projeto').forEach(function (item) {
        if (filtro === 'todos' || item.getAttribute('data-categoria') === filtro) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
</script>

<style>
  .filtro-btn.active{ background-color:var(--navy); color:#fff; }
</style>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
