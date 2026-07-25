<?php
require_once __DIR__ . '/../../../../config.php';
require __DIR__ . '/../../../data/blog-posts.php';

$activePage = 'blog';
$pageTitle = 'Trincas e Fissuras na Fachada: Quais São Perigosas? | Blog Duarte Dias';
$pageDescription = 'Nem toda rachadura é motivo de pânico, mas algumas indicam problema estrutural. Aprenda a diferenciar trincas superficiais de fissuras graves.';
$pageImage = '/assets/img/blog/trincas-fissuras-fachada.jpg';
require __DIR__ . '/../../../includes/header.php';
?>

<section class="page-hero pb-5">
  <div class="container">
    <div class="breadcrumb-custom mb-2">
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a> /
      <a href="<?php echo BASE_URL; ?>/app/views/pages/blog.php">Blog</a> / Restauração
    </div>
    <h1>Trincas e fissuras na fachada: quais são perigosas?</h1>
    <div class="article-meta mt-3"><i class="bi bi-calendar3 me-1"></i> 16 de junho de 2026 &nbsp;·&nbsp; <i class="bi bi-tag me-1"></i> Restauração</div>
  </div>
</section>

<div class="container">
  <div class="article-cover">
    <img src="<?php echo BASE_URL; ?>/assets/img/blog/trincas-fissuras-fachada.jpg" alt="Fachada predial em processo de restauração de trincas e fissuras">
  </div>
</div>

<section class="pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="article-body">

          <p>É comum o síndico receber uma foto de morador preocupado com uma rachadura na parede. Mas nem toda trinca representa risco estrutural — a maioria, na verdade, é superficial. O desafio é saber diferenciar uma da outra, e é exatamente isso que vamos explicar aqui.</p>

          <h2>Trincas superficiais (capilares)</h2>
          <p>São rachaduras finas, geralmente com menos de 0,5 mm de largura, que aparecem na camada de reboco ou pintura. Costumam surgir por retração natural do material ou pequenas movimentações térmicas do edifício. Embora não representem risco estrutural imediato, elas comprometem a impermeabilização da fachada e devem ser tratadas antes da repintura, para não virarem porta de entrada de água.</p>

          <h2>Fissuras de acomodação</h2>
          <p>Costumam aparecer nos primeiros anos após a construção do prédio, resultado do próprio processo de acomodação da estrutura. Geralmente seguem um padrão diagonal perto de cantos de janelas e portas. Merecem acompanhamento, mas raramente indicam problema grave se estabilizarem com o tempo.</p>

          <h2>Fissuras estruturais: o sinal de alerta</h2>
          <p>Aqui está o que realmente exige atenção imediata. Fique atento a:</p>
          <ul>
            <li><strong>Largura maior que 1 mm</strong> e que continua aumentando ao longo dos meses;</li>
            <li><strong>Formato em "degrau"</strong>, acompanhando as juntas de alvenaria de forma escalonada;</li>
            <li><strong>Fissuras que atravessam de um lado a outro da parede</strong> (visíveis tanto por dentro quanto por fora da unidade);</li>
            <li><strong>Deslocamento visível</strong> entre duas partes da fachada, como se uma parte estivesse "afundando" em relação à outra.</li>
          </ul>
          <p>Esses sinais podem indicar problemas de fundação, sobrecarga estrutural ou falhas no projeto original — e exigem avaliação de um engenheiro estrutural antes de qualquer intervenção estética.</p>

          <blockquote>Regra prática: trinca fina e estável, sem sinais de crescimento, normalmente é questão de manutenção. Trinca larga, em degrau ou que cresce com o tempo, é questão de engenharia estrutural.</blockquote>

          <h2>Como fazer o acompanhamento</h2>
          <p>Uma técnica simples e usada por profissionais é o "selo testemunha": aplica-se um pequeno traço de gesso sobre a fissura. Se o gesso rachar em poucas semanas, significa que a fissura ainda está em movimento e precisa de avaliação estrutural antes de qualquer reparo estético.</p>

          <div class="article-cta-box">
            <h3 class="mb-2">Tem dúvidas sobre uma rachadura no seu prédio?</h3>
            <p class="mb-3">Fazemos o diagnóstico técnico da fachada, com laudo e ART, para identificar se o problema é estético ou estrutural.</p>
            <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Tenho%20uma%20d%C3%BAvida%20sobre%20trincas%20na%20fachada%20do%20meu%20pr%C3%A9dio." target="_blank" rel="noopener" class="btn btn-accent px-4">
              <i class="bi bi-whatsapp me-1"></i> Solicitar diagnóstico técnico
            </a>
          </div>

          <p>Em qualquer um dos casos, o mais importante é não simplesmente "tapar" a fissura com massa e tinta sem entender a causa. Isso mascara o problema temporariamente, mas ele volta a aparecer — e muitas vezes pior. Nosso processo de <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao">restauração de fachada</a> sempre começa pelo diagnóstico da origem, não apenas pelo reparo visual.</p>

        </div>

        <div class="share-icons mt-4 pt-4 border-top">
          <span class="me-2 fw-semibold">Compartilhar:</span>
          <a href="https://wa.me/?text=Confira%20este%20artigo%20sobre%20trincas%20e%20fissuras%20em%20fachadas" target="_blank" rel="noopener" title="Compartilhar no WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($canonicalUrl); ?>" target="_blank" rel="noopener" title="Compartilhar no Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Identificou uma trinca preocupante na fachada?</h2>
      <p class="mb-4" style="color:#c7cedb;">Fale com nossa equipe técnica e agende uma avaliação.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20uma%20avalia%C3%A7%C3%A3o%20t%C3%A9cnica%20de%20trincas%20na%20fachada." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Falar com um especialista
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
