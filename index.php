<?php
require_once __DIR__ . '/config.php';
$activePage = 'home';
$pageTitle = 'Pintura e Restauração de Fachadas em Campinas | Duarte Dias Engenharia';
$pageDescription = 'Pintura e restauração de fachadas prediais em Campinas e região, com assessoria técnica completa para condomínios. Equipe certificada NR-35, segurança em altura e garantia de serviço.';
require __DIR__ . '/app/includes/header.php';
?>

<!-- ===================== HERO ===================== -->
<section class="hero">
  <div class="container">
    <span class="hero-badge mb-3 d-inline-flex"><i class="bi bi-shield-check"></i> Segurança em altura · Equipe certificada</span>
    <h1 class="mt-3 mb-3">Restauração e Pintura de Fachadas com técnica, segurança e garantia.</h1>
    <p class="lead mb-4">Valorizamos e protegemos o patrimônio do seu condomínio com serviços especializados em pintura predial, restauração de fachadas e assessoria técnica para síndicos.</p>
    <div class="d-flex flex-wrap gap-3">
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vim%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Solicitar Orçamento
      </a>
      <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php" class="btn btn-outline-light-custom btn-lg px-4">
        Conheça nossos serviços
      </a>
    </div>
  </div>
</section>

<!-- ===================== FAIXA DE DIFERENCIAIS ===================== -->
<section class="bg-navy py-4">
  <div class="container">
    <div class="row gy-3 text-center">
      <div class="col-6 col-md-3">
        <div class="stat-number" data-counter="15">0</div>
        <div class="stat-label">Anos de atuação</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number" data-counter="120">0</div>
        <div class="stat-label">Prédios atendidos</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number" data-counter="100">0</div>
        <div class="stat-label">% Equipe com NR-35</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-number" data-counter="98">0</div>
        <div class="stat-label">% Clientes satisfeitos</div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SOBRE RESUMIDO ===================== -->
<section class="section-padding">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="about-photo">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-03.jpg" alt="Equipe realizando restauração de fachada predial" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6">
        <span class="section-eyebrow">Quem somos</span>
        <h2 class="mt-2 mb-3">Engenharia especializada em fachadas, do diagnóstico à entrega final.</h2>
        <p class="text-muted">A Duarte Dias Engenharia Civil ampliou sua atuação para se dedicar à restauração e pintura de fachadas prediais, unindo o rigor técnico da engenharia a uma equipe especializada em acesso por corda (rapel), sempre seguindo as normas de segurança do trabalho em altura.</p>
        <p class="text-muted mb-4">Atuamos lado a lado com síndicos e administradoras, oferecendo assessoria condominial completa: diagnóstico, planejamento, execução e acompanhamento de cada etapa da obra.</p>
        <a href="<?php echo BASE_URL; ?>/app/views/pages/sobre.php" class="btn btn-outline-navy px-4">Saiba mais sobre nós</a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SERVIÇOS ===================== -->
<section class="section-padding bg-gray">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-eyebrow">O que fazemos</span>
      <h2 class="mt-2">Nossos Serviços</h2>
      <p class="text-muted mx-auto" style="max-width:640px;">Soluções completas para proteger, restaurar e valorizar a fachada do seu condomínio ou edificação.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-card">
          <div class="service-icon"><i class="bi bi-brush"></i></div>
          <h5>Pintura de Fachadas</h5>
          <p class="text-muted mb-3">Pintura predial completa com técnica de acesso por corda, tintas de alta performance e acabamento duradouro.</p>
          <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#pintura" class="fw-semibold text-accent">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <div class="service-icon"><i class="bi bi-tools"></i></div>
          <h5>Restauração de Fachadas</h5>
          <p class="text-muted mb-3">Recuperação estrutural de trincas, infiltrações e destacamento de reboco, com impermeabilização antes da repintura.</p>
          <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao" class="fw-semibold text-accent">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card">
          <div class="service-icon"><i class="bi bi-clipboard-check"></i></div>
          <h5>Assessoria Condominial</h5>
          <p class="text-muted mb-3">Suporte técnico completo para síndicos: laudos, diagnóstico predial, planejamento e acompanhamento de obra.</p>
          <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#assessoria" class="fw-semibold text-accent">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== DIFERENCIAIS ===================== -->
<section class="section-padding">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-5">
        <span class="section-eyebrow">Por que nos escolher</span>
        <h2 class="mt-2 mb-3">Segurança, técnica e transparência em cada etapa</h2>
        <p class="text-muted">Do orçamento à entrega da obra, prezamos por processos claros e comunicação constante com o síndico e os moradores.</p>
      </div>
      <div class="col-lg-7">
        <div class="row g-4">
          <div class="col-sm-6">
            <div class="diferencial-item">
              <div class="diferencial-icon"><i class="bi bi-shield-check"></i></div>
              <div>
                <h6 class="mb-1">Segurança NR-35</h6>
                <p class="text-muted small mb-0">Equipe certificada para trabalho em altura e acesso por corda.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="diferencial-item">
              <div class="diferencial-icon"><i class="bi bi-award"></i></div>
              <div>
                <h6 class="mb-1">Materiais de qualidade</h6>
                <p class="text-muted small mb-0">Tintas e argamassas de alta performance, com garantia.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="diferencial-item">
              <div class="diferencial-icon"><i class="bi bi-clock-history"></i></div>
              <div>
                <h6 class="mb-1">Cumprimento de prazos</h6>
                <p class="text-muted small mb-0">Planejamento de obra com cronograma claro e acompanhado.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="diferencial-item">
              <div class="diferencial-icon"><i class="bi bi-chat-dots"></i></div>
              <div>
                <h6 class="mb-1">Comunicação direta</h6>
                <p class="text-muted small mb-0">Atualizações constantes ao síndico durante toda a obra.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PROJETOS EM DESTAQUE ===================== -->
<section class="section-padding bg-gray">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
      <div>
        <span class="section-eyebrow">Portfólio</span>
        <h2 class="mt-2 mb-0">Projetos em Destaque</h2>
      </div>
      <a href="<?php echo BASE_URL; ?>/app/views/pages/projetos.php" class="btn btn-outline-navy">Ver todos os projetos</a>
    </div>
    <div class="row g-3">
      <div class="col-6 col-md-3">
        <div class="gallery-item">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-01.jpg" alt="Restauração de fachada predial" loading="lazy">
          <div class="gallery-overlay"><span>Residencial - Restauração</span></div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="gallery-item">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-06.jpg" alt="Pintura de fachada predial" loading="lazy">
          <div class="gallery-overlay"><span>Condomínio - Pintura</span></div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="gallery-item">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-09.jpg" alt="Equipe em rapel na fachada" loading="lazy">
          <div class="gallery-overlay"><span>Acesso por corda</span></div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="gallery-item">
          <img src="<?php echo BASE_URL; ?>/assets/img/projetos/projeto-20.jpg" alt="Fachada predial finalizada" loading="lazy">
          <div class="gallery-overlay"><span>Condomínio - Finalizado</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FAQ ===================== -->
<section id="faq" class="section-padding bg-gray">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-eyebrow">Dúvidas frequentes</span>
      <h2 class="mt-2">Perguntas Frequentes</h2>
      <p class="text-muted mx-auto" style="max-width:640px;">Reunimos as dúvidas mais comuns de síndicos e moradores sobre pintura e restauração de fachadas. Não encontrou o que procurava? <a href="<?php echo BASE_URL; ?>/app/views/pages/contato.php" class="text-accent fw-semibold">Fale com a gente</a>.</p>
    </div>

    <div class="accordion faq-accordion mx-auto" id="faqAccordion" style="max-width:860px;">

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
            Quanto tempo dura a pintura ou restauração de uma fachada predial?
          </button>
        </h3>
        <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            O prazo varia de acordo com o tamanho do prédio, a extensão dos danos e o tipo de serviço (pintura simples ou restauração com recuperação estrutural). Após a vistoria técnica, apresentamos um cronograma detalhado para que o síndico possa se planejar junto aos moradores.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
            Como funciona o acesso por corda (rapel) na pintura de fachadas?
          </button>
        </h3>
        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            O acesso por corda permite alcançar qualquer ponto da fachada sem a necessidade de andaimes, reduzindo custo, tempo de obra e transtorno para o condomínio. Nossa equipe é certificada na NR-35 (trabalho em altura) e utiliza todos os equipamentos de segurança exigidos pela norma.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
            É necessário interditar áreas comuns ou vagas de garagem durante a obra?
          </button>
        </h3>
        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Buscamos sempre planejar a obra para causar o menor impacto possível na rotina do condomínio. Em alguns pontos específicos pode ser necessário isolar temporariamente áreas de risco (como vagas sob o trecho em execução), o que é combinado previamente com o síndico e sinalizado no local.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
            Como é feito o orçamento da pintura ou restauração de fachada?
          </button>
        </h3>
        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Realizamos uma vistoria técnica gratuita no local para avaliar o estado da fachada, identificar patologias (trincas, infiltrações, destacamento de reboco) e entender as necessidades do condomínio. Com base nisso, elaboramos um orçamento detalhado, sem compromisso.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
            Vocês emitem laudo técnico e assessoria para o síndico apresentar em assembleia?
          </button>
        </h3>
        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Sim. Por sermos uma engenharia civil, oferecemos assessoria técnica completa: diagnóstico predial, laudos e materiais de apoio para que o síndico apresente a proposta com segurança em assembleia, com respaldo técnico da nossa equipe.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
            Em quais cidades vocês atendem?
          </button>
        </h3>
        <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Atendemos condomínios e edificações em <?php echo EMPRESA_CIDADE; ?> e região. Fale com a gente pelo WhatsApp para confirmar o atendimento na sua cidade.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header" id="faqHeading7">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
            Como o síndico deve iniciar a contratação do serviço?
          </button>
        </h3>
        <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            É só entrar em contato pelo WhatsApp ou pelo formulário do site. Agendamos a vistoria técnica gratuita, apresentamos o orçamento e, junto com o síndico, definimos o melhor momento para levar a proposta à assembleia e iniciar a obra.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Dados estruturados FAQPage (Schema.org) - habilita rich snippets de FAQ no Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Quanto tempo dura a pintura ou restauração de uma fachada predial?",
      "acceptedAnswer": { "@type": "Answer", "text": "O prazo varia de acordo com o tamanho do prédio, a extensão dos danos e o tipo de serviço (pintura simples ou restauração com recuperação estrutural). Após a vistoria técnica, apresentamos um cronograma detalhado para que o síndico possa se planejar junto aos moradores." }
    },
    {
      "@type": "Question",
      "name": "Como funciona o acesso por corda (rapel) na pintura de fachadas?",
      "acceptedAnswer": { "@type": "Answer", "text": "O acesso por corda permite alcançar qualquer ponto da fachada sem a necessidade de andaimes, reduzindo custo, tempo de obra e transtorno para o condomínio. Nossa equipe é certificada na NR-35 (trabalho em altura) e utiliza todos os equipamentos de segurança exigidos pela norma." }
    },
    {
      "@type": "Question",
      "name": "É necessário interditar áreas comuns ou vagas de garagem durante a obra?",
      "acceptedAnswer": { "@type": "Answer", "text": "Buscamos sempre planejar a obra para causar o menor impacto possível na rotina do condomínio. Em alguns pontos específicos pode ser necessário isolar temporariamente áreas de risco, o que é combinado previamente com o síndico e sinalizado no local." }
    },
    {
      "@type": "Question",
      "name": "Como é feito o orçamento da pintura ou restauração de fachada?",
      "acceptedAnswer": { "@type": "Answer", "text": "Realizamos uma vistoria técnica gratuita no local para avaliar o estado da fachada e entender as necessidades do condomínio. Com base nisso, elaboramos um orçamento detalhado, sem compromisso." }
    },
    {
      "@type": "Question",
      "name": "Vocês emitem laudo técnico e assessoria para o síndico apresentar em assembleia?",
      "acceptedAnswer": { "@type": "Answer", "text": "Sim. Por sermos uma engenharia civil, oferecemos assessoria técnica completa: diagnóstico predial, laudos e materiais de apoio para que o síndico apresente a proposta com segurança em assembleia." }
    },
    {
      "@type": "Question",
      "name": "Em quais cidades vocês atendem?",
      "acceptedAnswer": { "@type": "Answer", "text": "Atendemos condomínios e edificações em Campinas e região." }
    },
    {
      "@type": "Question",
      "name": "Como o síndico deve iniciar a contratação do serviço?",
      "acceptedAnswer": { "@type": "Answer", "text": "É só entrar em contato pelo WhatsApp ou pelo formulário do site. Agendamos a vistoria técnica gratuita, apresentamos o orçamento e definimos junto com o síndico o melhor momento para levar a proposta à assembleia." }
    }
  ]
}
</script>

<!-- ===================== CTA FINAL ===================== -->
<section class="section-padding">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Pronto para valorizar o patrimônio do seu condomínio?</h2>
      <p class="mb-4" style="color:#c7cedb;">Fale agora com nossa equipe e solicite uma avaliação técnica gratuita.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Vim%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Falar no WhatsApp
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/app/includes/footer.php'; ?>
