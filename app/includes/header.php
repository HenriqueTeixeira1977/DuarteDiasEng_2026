<?php
/**
 * Cabeçalho / Navbar - incluído em todas as páginas.
 * Espera que a página que o incluiu já tenha:
 *   - require_once 'config.php' (ou caminho equivalente)
 *   - $pageTitle, $pageDescription (opcionais)
 *   - $activePage = 'home' | 'sobre' | 'servicos' | 'projetos' | 'contato'
 */

// ==== MODO MANUTENÇÃO ("Em Breve") =====================================
// Enquanto MODO_MANUTENCAO (definido em config.php) estiver true, qualquer
// página do site que inclua este header exibe a página comingsoon.php no
// lugar do conteúdo normal. Para liberar o site, mude o valor em config.php.

if (defined('MODO_MANUTENCAO') && MODO_MANUTENCAO === true) {
    require __DIR__ . '/../../comingsoon.php';
    exit;
}

if (!defined('BASE_URL')) {
    // fallback de segurança caso o config não tenha sido carregado
    define('BASE_URL', '');
}
$activePage = $activePage ?? '';
$pageTitle = $pageTitle ?? EMPRESA_NOME;
$pageDescription = $pageDescription ?? 'Especialistas em pintura e restauração de fachadas, com assessoria técnica completa para condomínios em Campinas e região.';
$pageImage = $pageImage ?? BASE_URL . '/assets/img/projetos/hero-fachada.jpg';
// Permite tanto caminhos locais (ex: /assets/img/foo.jpg) quanto URLs externas completas
// (ex: fotos do Pexels/Unsplash usadas no blog) para a imagem de Open Graph / Twitter Card.
$pageImageUrl = (strpos($pageImage, 'http://') === 0 || strpos($pageImage, 'https://') === 0)
    ? $pageImage
    : SITE_URL . $pageImage;
$canonicalUrl = SITE_URL . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MBF6YN7RGF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-MBF6YN7RGF');
</script>

<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta name="theme-color" content="#101d34">

<!-- Favicons -->
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/assets/img/logos/favicon-32.png">
<link rel="icon" type="image/png" sizes="48x48" href="<?php echo BASE_URL; ?>/assets/img/logos/favicon-48.png">
<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/assets/img/logos/apple-touch-icon.png">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars(EMPRESA_NOME); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($pageImageUrl); ?>">
<meta property="og:locale" content="pt_BR">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($pageImageUrl); ?>">

<!-- Dados estruturados (Schema.org) - ajuda o Google a exibir a empresa como negócio local -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "name": "<?php echo addslashes(EMPRESA_NOME); ?>",
  "image": "<?php echo SITE_URL . BASE_URL; ?>/assets/img/logos/dde-logo-dark.png",
  "url": "<?php echo SITE_URL . BASE_URL; ?>/index.php",
  "telephone": "+<?php echo EMPRESA_WHATSAPP; ?>",
  "email": "<?php echo EMPRESA_EMAIL; ?>",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Campinas",
    "addressRegion": "SP",
    "addressCountry": "BR"
  },
  "areaServed": "Campinas e região - SP",
  "description": "Pintura e restauração de fachadas prediais, com assessoria técnica completa para condomínios.",
  "sameAs": []
}
</script>

<!-- Bootstrap 5 (servido localmente, sem dependência de CDN) -->
<link href="<?php echo BASE_URL; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.min.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
<!-- CSS do site -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>

<a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vim%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" rel="noopener" class="whatsapp-float" title="Fale conosco no WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<header class="site-header sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php">
        <img src="<?php echo BASE_URL; ?>/assets/img/logos/dde-logo-white.png" alt="<?php echo EMPRESA_NOME; ?>" height="48">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item">
            <a class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $activePage === 'sobre' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/app/views/pages/sobre.php">Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo $activePage === 'servicos' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php" id="servicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="servicosDropdown">
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#pintura">Pintura de Fachadas</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao">Restauração de Fachadas</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#assessoria">Assessoria Condominial</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $activePage === 'projetos' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/app/views/pages/projetos.php">Projetos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $activePage === 'blog' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/app/views/pages/blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $activePage === 'contato' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/app/views/pages/contato.php">Contato</a>
          </li>
          <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
            <a class="btn btn-accent btn-sm px-3" href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vim%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" rel="noopener">
              <i class="bi bi-whatsapp me-1"></i> Orçamento
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
