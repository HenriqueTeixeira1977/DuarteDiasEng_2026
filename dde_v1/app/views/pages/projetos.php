<?php include '../../views/partials/header.php'; ?>

<!-- SEUS CSS (CAMINHO ABSOLUTO) -->
<link rel="stylesheet" href="../../../public/assets/css/projetos.css">

<!-- AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- HERO PROJETOS -->
<section class="hero-projetos d-flex align-items-center text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-5 fw-bold">Projetos & Portfólio</h1>
                <p class="lead mt-3">
                    Conheça alguns dos projetos desenvolvidos com excelência técnica e compromisso.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- GRID DE PROJETOS -->
<section class="py-5" id="projetos">
    <div class="container">

        <div class="row text-center mb-5" id="title-projetos">
            <h2 data-aos="fade-up">Projetos em Destaque</h2>
            <p class="text-muted mt-2" data-aos="fade-up" data-aos-delay="100">
                Obras residenciais, comerciais e industriais.
            </p>
        </div>

        <div class="row g-4">

            <!-- Projeto 1 -->
            <div class="col-md-4" data-aos="zoom-in">
                <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#projeto1">
                    <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h5>Edifício Residencial</h5>
                        <span>Projeto Estrutural</span>
                    </div>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#projeto2">
                    <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h5>Galpão Industrial</h5>
                        <span>Estrutura Metálica</span>
                    </div>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#projeto3">
                    <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h5>Reforço Estrutural</h5>
                        <span>Laudo Técnico</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAL PROJETO 1 -->
<div class="modal fade" id="projeto1" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edifício Residencial</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid mb-3">
                <p>
                    Projeto estrutural completo para edifício residencial de múltiplos pavimentos,
                    seguindo rigorosamente as normas técnicas.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PROJETO 2 -->
<div class="modal fade" id="projeto2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Galpão Industrial</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid mb-3">
                <p>
                    Desenvolvimento de estrutura metálica para galpão industrial,
                    com foco em eficiência e segurança.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PROJETO 3 -->
<div class="modal fade" id="projeto3" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reforço Estrutural</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../../public/assets/img/projetos/projeto1.jpg" class="img-fluid mb-3">
                <p>
                    Análise e reforço estrutural com emissão de laudo técnico detalhado.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<section class="cta-section py-5 text-white text-center">
    <div class="container" data-aos="fade-up">
        <h2 class="fw-bold mb-3">Quer ver seu projeto aqui?</h2>
        <p class="mb-4">Fale com nossa equipe e solicite um orçamento.</p>
        <a href="/contato" class="btn btn-light btn-lg px-5">Entrar em Contato</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true
  });
</script>

<?php include '../../views/partials/footer.php'; ?>
