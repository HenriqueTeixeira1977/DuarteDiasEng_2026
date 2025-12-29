<?php include '../../views/partials/header.php'; ?>

<!-- SEUS CSS (CAMINHO ABSOLUTO) -->
<link rel="stylesheet" href="../../../public/assets/css/servicos.css">


<!-- AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- HERO SERVIÇOS -->
<section class="hero-servicos d-flex align-items-center text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-5 fw-bold">Nossos Serviços</h1>
                <p class="lead mt-3">
                    Soluções completas em engenharia civil, com foco em segurança, eficiência e qualidade técnica.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- LISTA DE SERVIÇOS -->
<section class="py-5">
    <div class="container">

        <div class="row text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">O que Fazemos</h2>
            <p class="text-muted mt-2" data-aos="fade-up" data-aos-delay="100">
                Atuamos em todas as etapas do seu projeto.
            </p>
        </div>

        <div class="row g-4">

            <!-- Serviço 1 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="service-card h-100">
                    <div class="icon">🏗️</div>
                    <h4>Projetos Estruturais</h4>
                    <p>
                        Elaboração de projetos estruturais em concreto armado, aço e madeira,
                        seguindo rigorosamente as normas técnicas.
                    </p>
                </div>
            </div>

            <!-- Serviço 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="icon">📐</div>
                    <h4>Consultoria Técnica</h4>
                    <p>
                        Análise técnica especializada para obras, reformas e viabilidade de projetos,
                        garantindo decisões seguras.
                    </p>
                </div>
            </div>

            <!-- Serviço 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="icon">🧾</div>
                    <h4>Laudos e Perícias</h4>
                    <p>
                        Emissão de laudos técnicos, pareceres e perícias judiciais e extrajudiciais,
                        com responsabilidade técnica.
                    </p>
                </div>
            </div>

            <!-- Serviço 4 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="service-card h-100">
                    <div class="icon">🏢</div>
                    <h4>Acompanhamento de Obras</h4>
                    <p>
                        Fiscalização e acompanhamento técnico para garantir a execução conforme
                        projeto e normas vigentes.
                    </p>
                </div>
            </div>

            <!-- Serviço 5 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="icon">🛠️</div>
                    <h4>Reformas e Adequações</h4>
                    <p>
                        Projetos e acompanhamento de reformas estruturais e adequações técnicas
                        para segurança e desempenho.
                    </p>
                </div>
            </div>

            <!-- Serviço 6 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="icon">📊</div>
                    <h4>Regularizações e ART</h4>
                    <p>
                        Regularização de obras, emissão de ART e suporte técnico junto a órgãos
                        competentes.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROCESSO DE TRABALHO -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Nosso Processo</h2>
        </div>

        <div class="row g-4 text-center">

            <div class="col-md-3" data-aos="fade-up">
                <div class="process-step">
                    <span>1</span>
                    <h5>Análise</h5>
                    <p>Entendimento completo das necessidades do cliente.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step">
                    <span>2</span>
                    <h5>Planejamento</h5>
                    <p>Definição das soluções técnicas mais eficientes.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step">
                    <span>3</span>
                    <h5>Execução</h5>
                    <p>Desenvolvimento do projeto com alto padrão técnico.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step">
                    <span>4</span>
                    <h5>Acompanhamento</h5>
                    <p>Suporte e acompanhamento até a conclusão.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5 text-white text-center">
    <div class="container" data-aos="zoom-in">
        <h2 class="fw-bold mb-3">Precisa de um serviço de engenharia?</h2>
        <p class="mb-4">Solicite um orçamento e fale com um especialista.</p>
        <a href="/orcamento" class="btn btn-light btn-lg px-5">Solicitar Orçamento</a>
    </div>
</section>

<!-- AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true
  });
</script>

<?php include '../../views/partials/footer.php'; ?>
