<?php include '../app/views/partials/header.php'; ?>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- SEUS CSS (CAMINHO ABSOLUTO) -->
    <link rel="stylesheet" href="assets/css/variable.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/sobre.css">
    <link rel="stylesheet" href="assets/css/servicos.css">
    <link rel="stylesheet" href="assets/css/projetos.css">


<!-- HERO -->
<!--
<section class="hero d-flex align-items-center text-white">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3 fade-in">Duarte Dias Engenharia</h1>
        <p class="lead mb-4 fade-in-delay">Excelência em projetos, soluções estruturais e consultoria técnica.</p>
        <a href="#servicos" class="btn btn-primary btn-lg px-5 py-3 shadow-lg">Conheça nossos serviços</a>
    </div>
</section>
-->
<section class="hero d-flex align-items-center text-white">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3">Duarte Dias Engenharia</h1>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
            Excelência em projetos, soluções estruturais e consultoria técnica.
        </p>
        <a href="#servicos"
        class="btn btn-primary btn-lg px-5 py-3 shadow-lg"
        data-aos="zoom-in"
        data-aos-delay="400">
        Conheça nossos serviços
        </a>
    </div>
</section>

<!-- FEATURES -->
<section class="features py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <h2 class="fw-bold text-secondary">Por que escolher a Duarte Dias?</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-shield-check display-5 text-primary"></i>
                    <h4 class="mt-3 fw-bold">Segurança e Confiabilidade</h4>
                    <p>Projetos executados com precisão, responsabilidade e certificações.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-gear-wide-connected display-5 text-primary"></i>
                    <h4 class="mt-3 fw-bold">Tecnologia</h4>
                    <p>Soluções modernas para garantir eficiência e resultados superiores.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-award display-5 text-primary"></i>
                    <h4 class="mt-3 fw-bold">Equipe Especializada</h4>
                    <p>Profissionais experientes e qualificados para atender a qualquer demanda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVIÇOS -->
<section id="servicos" class="servicos py-5">   
    <div class="container">
        <div class="row text-center mb-5">
            <h2 class="fw-bold">Nossos Serviços</h2>
            <p class="text-muted">Soluções completas para sua obra ou projeto</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <img src="assets/img/projeto1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Projetos Estruturais</h5>
                        <p>Desenvolvimento de projetos completos e detalhados para obras residenciais e comerciais.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <img src="assets/img/projeto2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Consultoria Técnica</h5>
                        <p>Orientações especializadas para execução, regularização e análise de estruturas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <img src="assets/img/projeto3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Laudos e Vistorias</h5>
                        <p>Inspeções completas com emissão de relatórios técnicos detalhados.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- BANNER PARALLAX -->
<section class="banner-parallax d-flex align-items-center text-center text-white">
    <div class="container">
        <h2 class="display-6 fw-bold mb-3">Compromisso com qualidade e precisão</h2>
        <p class="lead">A segurança da sua obra começa com um projeto bem executado.</p>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Pronto para iniciar seu projeto?</h2>
        <p class="text-muted mb-4">Entre em contato e receba uma avaliação especializada.</p>
        <a href="#contato" class="btn btn-primary btn-lg px-5 py-3 shadow">Fale Conosco</a>
    </div>
</section>

<!-- SEÇÃO: NÚMEROS ANIMADOS -->
<section class="py-5 bg-light" id="numeros">
    <div class="container text-center">
        <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="fw-bold display-5 text-primary" data-counter="50">0</h2>
                    <p class="text-muted">Projetos Entregues</p>
                </div>                
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-box">
                        <h2 class="fw-bold display-5 text-primary" data-counter="15">0</h2>
                        <p class="text-muted">Anos de Experiência</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-box">
                        <h2 class="fw-bold display-5 text-primary" data-counter="80">0</h2>
                        <p class="text-muted">Clientes Atendidos</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-box">
                        <h2 class="fw-bold display-5 text-primary" data-counter="40">0</h2>
                        <p class="text-muted">Certificações</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- SERVIÇOS PREMIUM -->
<section class="py-5" id="servicos-premium">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Soluções de Engenharia</h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="premium-card p-4 shadow-sm h-100">
                    <i class="bi bi-rulers fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold">Projeto Estrutural Avançado</h5>
                    <p class="text-muted">Cálculos, análise e modelagem com softwares profissionais.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="premium-card p-4 shadow-sm h-100">
                    <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold">Avaliação e Laudos Técnicos</h5>
                    <p class="text-muted">Perícias, inspeções e documentação técnica completa.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="premium-card p-4 shadow-sm h-100">
                    <i class="bi bi-tools fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold">Execução e Acompanhamento</h5>
                    <p class="text-muted">Gestão e direção de obras com foco em qualidade.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SLIDER DE PROJETOS (SWIPER) -->
<section class="py-5 bg-light" id="slider-projetos">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Projetos em Destaque</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/img/projeto_001.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_002.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_003.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_004.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_005.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_006.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_007.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_008.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_009.png">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/projeto_010.png">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="contato py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <h2 class="fw-bold">Contato</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/contato/enviar" method="POST" class="p-4 shadow rounded bg-white">

                    <input type="hidden" name="origem" value="home">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" name="telefone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensagem</label>
                        <textarea name="mensagem" class="form-control" rows="4" required></textarea>
                    </div>

                    <button class="btn btn-primary w-100 py-2">Enviar</button>
                </form>

                <form action="/contato/enviar" method="POST">
                    <input type="hidden" name="origem" value="home">

                    <input type="text" name="nome" class="form-control" required>
                    <input type="text" name="telefone" class="form-control" required>
                    <input type="email" name="email" class="form-control">
                    <textarea name="mensagem" required></textarea>

                    <button type="submit">Enviar</button>
                </form>

            </div>

        </div>
    </div>
</section>

<!-- PARALLAX PROFISSIONAL -->
<section class="parallax-section d-flex align-items-center text-center text-white">
    <div class="container">
        <h2 class="display-6 fw-bold mb-3">Excelência em Engenharia Estrutural</h2>
        <p class="lead">Tecnologia, precisão e responsabilidade em cada projeto</p>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/animations.js"></script>

<?php include '../app/views/partials/footer.php'; ?>
