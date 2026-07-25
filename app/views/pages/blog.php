<?php
require_once __DIR__ . '/../../../config.php';
require __DIR__ . '/../../data/blog-posts.php';

$activePage = 'blog';
$pageTitle = 'Blog | Dicas sobre Pintura e Restauração de Fachadas';
$pageDescription = 'Artigos sobre pintura, restauração e manutenção de fachadas prediais. Dicas técnicas para síndicos e moradores de condomínios em Campinas e região.';
require __DIR__ . '/../../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-custom mb-2"><a href="<?php echo BASE_URL; ?>/index.php">Home</a> / Blog</div>
    <h1>Blog</h1>
    <p class="mb-0" style="color:#c7cedb; max-width:600px;">Conteúdo técnico sobre pintura, restauração e manutenção de fachadas para ajudar síndicos e moradores a cuidar melhor do patrimônio do condomínio.</p>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($blogPosts as $post): ?>
      <div class="col-md-6 col-lg-4">
        <a href="<?php echo BASE_URL; ?>/app/views/pages/blog/<?php echo $post['slug']; ?>.php" class="text-decoration-none">
          <div class="blog-card">
            <div class="blog-card-img">
              <img src="<?php echo BASE_URL . htmlspecialchars($post['imagemThumb']); ?>" alt="<?php echo htmlspecialchars($post['titulo']); ?>" loading="lazy">
              <span class="blog-badge"><?php echo htmlspecialchars($post['categoria']); ?></span>
            </div>
            <div class="blog-card-body">
              <span class="blog-card-date"><?php echo $post['dataExibe']; ?></span>
              <h5 class="blog-card-title"><?php echo htmlspecialchars($post['titulo']); ?></h5>
              <p class="blog-card-excerpt"><?php echo htmlspecialchars($post['resumo']); ?></p>
              <span class="fw-semibold text-accent">Ler artigo <i class="bi bi-arrow-right"></i></span>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Precisa de uma avaliação técnica da fachada do seu prédio?</h2>
      <p class="mb-4" style="color:#c7cedb;">Fale com nossa equipe e agende uma vistoria gratuita.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vi%20o%20blog%20do%20site%20e%20gostaria%20de%20uma%20avalia%C3%A7%C3%A3o%20t%C3%A9cnica." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Solicitar avaliação
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
