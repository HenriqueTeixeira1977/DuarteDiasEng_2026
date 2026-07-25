<?php include '../../views/partials/header.php'; ?>

<link rel="stylesheet" href="../../../public/assets/css/sobre.css">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- HERO SOBRE -->
<section class="hero-sobre text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-5 fw-bold">Engenharia com responsabilidade e precisão</h1>
                <p class="lead mt-3">
                    Atuamos com foco em segurança estrutural, excelência técnica e soluções inteligentes
                    para obras residenciais, comerciais e industriais.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- QUEM SOMOS -->
<section class="sobre-conteudo">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-md-6" data-aos="fade-right">
                <img src="../../../public/assets/img/sobre/sobre.jpg"
                     class="img-fluid sobre-img"
                     alt="Equipe Duarte Dias Engenharia">
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h2 class="mb-4">Quem Somos</h2>

                <p>
                    A <strong>Duarte Dias Engenharia</strong> é especializada em projetos estruturais,
                    consultoria técnica, laudos e acompanhamento de obras, atuando com rigor técnico
                    e total conformidade com as normas vigentes.
                </p>

                <p>
                    Nosso compromisso é entregar soluções seguras, eficientes e economicamente viáveis,
                    sempre priorizando a qualidade e a tranquilidade dos nossos clientes.
                </p>

                <ul class="mt-4 list-unstyled">
                    <li class="mb-2">✔ Engenheiros qualificados e experientes</li>
                    <li class="mb-2">✔ Atendimento técnico personalizado</li>
                    <li class="mb-2">✔ Uso de tecnologia e softwares profissionais</li>
                    <li class="mb-2">✔ Responsabilidade técnica em todos os projetos</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- MISSÃO | VISÃO | VALORES -->
<section class="mvv-section">
    <div class="container">
        <div class="row text-center mb-5">
            <h2 data-aos="fade-up">Nossa Essência</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4" data-aos="fade-up">
                <div class="mvv-card">
                    <i class="bi bi-bullseye"></i>
                    <h5>Missão</h5>
                    <p>
                        Desenvolver soluções de engenharia com alto padrão técnico,
                        promovendo segurança, qualidade e confiança.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="mvv-card">
                    <i class="bi bi-eye"></i>
                    <h5>Visão</h5>
                    <p>
                        Ser referência regional em engenharia civil,
                        reconhecida pela excelência, inovação e credibilidade.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="mvv-card">
                    <i class="bi bi-award"></i>
                    <h5>Valores</h5>
                    <p>
                        Ética profissional, responsabilidade técnica,
                        transparência, comprometimento e foco em resultados.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- LINHA DO TEMPO -->
<section class="timeline-section">
    <div class="container">
        <div class="row text-center mb-5">
            <h2 data-aos="fade-up">Nossa Trajetória</h2>
            <p class="text-muted mt-2" data-aos="fade-up" data-aos-delay="100">
                Uma história construída com responsabilidade, técnica e evolução constante.
            </p>
        </div>

        <div class="timeline">

            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-content">
                    <span class="timeline-year">2015</span>
                    <p>Fundação da Duarte Dias Engenharia com foco em projetos estruturais.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-content">
                    <span class="timeline-year">2018</span>
                    <p>Expansão dos serviços para consultorias técnicas e laudos especializados.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-content">
                    <span class="timeline-year">2021</span>
                    <p>Atuação em obras de médio e grande porte em diferentes segmentos.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-content">
                    <span class="timeline-year">2024</span>
                    <p>Consolidação como referência regional em engenharia civil.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CTA FINAL -->
<section class="sobre-cta">
    <div class="container" data-aos="zoom-in">
        <h2>Seu projeto merece segurança e precisão</h2>
        <p>
            Fale com a Duarte Dias Engenharia e tenha um acompanhamento técnico completo,
            do planejamento à execução.
        </p>
        <a href="/contato" class="btn btn-light btn-lg px-5">Solicitar Contato</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    duration: 900,
    once: true,
    easing: 'ease-out-cubic'
});
</script>

<?php include '../../views/partials/footer.php'; ?>


