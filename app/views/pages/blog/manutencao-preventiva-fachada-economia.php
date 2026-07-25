<?php
require_once __DIR__ . '/../../../../config.php';
require __DIR__ . '/../../../data/blog-posts.php';

$activePage = 'blog';
$pageTitle = 'Manutenção Preventiva de Fachada: Como Evitar Gastos Grandes | Blog Duarte Dias';
$pageDescription = 'Pequenos reparos feitos a tempo evitam obras caras mais adiante. Entenda por que a manutenção preventiva é o investimento mais inteligente.';
$pageImage = '/assets/img/blog/manutencao-preventiva-fachada.jpg';
require __DIR__ . '/../../../includes/header.php';
?>

<section class="page-hero pb-5">
  <div class="container">
    <div class="breadcrumb-custom mb-2">
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a> /
      <a href="<?php echo BASE_URL; ?>/app/views/pages/blog.php">Blog</a> / Manutenção
    </div>
    <h1>Manutenção preventiva de fachada: como evitar gastos grandes no futuro</h1>
    <div class="article-meta mt-3"><i class="bi bi-calendar3 me-1"></i> 17 de julho de 2026 &nbsp;·&nbsp; <i class="bi bi-tag me-1"></i> Manutenção</div>
  </div>
</section>

<div class="container">
  <div class="article-cover">
    <img src="<?php echo BASE_URL; ?>/assets/img/blog/manutencao-preventiva-fachada.jpg" alt="Fachada predial bem conservada após manutenção preventiva">
  </div>
</div>

<section class="pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="article-body">

          <p>Existe um padrão que se repete em praticamente todos os condomínios: problemas pequenos são adiados até virarem problemas grandes — e caros. Com a fachada do prédio, essa lógica custa especialmente caro, porque a exposição constante ao tempo faz qualquer patologia evoluir rápido. A boa notícia é que manutenção preventiva é, de longe, o investimento mais barato que existe nesse quesito.</p>

          <h2>Por que esperar sai mais caro</h2>
          <p>Uma trinca capilar não tratada, por exemplo, permite entrada de água a cada chuva. Em poucos anos, essa água pode comprometer a armadura de concreto, causando corrosão e um problema estrutural que exige recuperação muito mais complexa (e cara) do que o simples tratamento da fissura no início.</p>

          <p>O mesmo vale para pintura desgastada: o que seria uma repintura simples pode virar necessidade de <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao">restauração completa</a> se a água conseguir penetrar por tempo suficiente.</p>

          <h2>O que entra em um plano de manutenção preventiva</h2>
          <ul>
            <li><strong>Inspeção visual periódica</strong> da fachada, idealmente a cada 6 a 12 meses, registrando fotograficamente pontos de atenção;</li>
            <li><strong>Limpeza regular</strong>, removendo sujeira, fungos e poluição acumulada que aceleram o desgaste da pintura;</li>
            <li><strong>Reparo pontual de fissuras</strong> assim que identificadas, antes que se tornem porta de entrada de água;</li>
            <li><strong>Verificação de rejuntes e juntas de dilatação</strong>, pontos comuns de infiltração;</li>
            <li><strong>Repintura dentro do ciclo recomendado</strong> (geralmente entre 5 e 7 anos), mesmo sem sinais visíveis de desgaste.</li>
          </ul>

          <h2>Laudo técnico periódico: uma prática que compensa</h2>
          <p>Muitos condomínios já adotam a prática de contratar uma vistoria técnica anual ou bianual, independente de haver uma obra prevista. Esse laudo serve como registro histórico do estado da fachada, ajuda o síndico a planejar orçamentos futuros com antecedência e, principalmente, evita ser pego de surpresa por um problema que já vinha se desenvolvendo havia tempo.</p>

          <blockquote>Um metro quadrado de fachada tratado preventivamente custa uma fração do que custaria depois de uma infiltração estrutural se instalar naquele mesmo ponto.</blockquote>

          <div class="article-cta-box">
            <h3 class="mb-2">Que tal colocar a manutenção preventiva no planejamento do condomínio?</h3>
            <p class="mb-3">Oferecemos vistorias técnicas periódicas com relatório fotográfico, ideais para o síndico acompanhar o estado da fachada ano a ano.</p>
            <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20vistorias%20preventivas%20de%20fachada." target="_blank" rel="noopener" class="btn btn-accent px-4">
              <i class="bi bi-whatsapp me-1"></i> Saber mais sobre vistorias preventivas
            </a>
          </div>

          <p>Se o seu condomínio ainda não tem um plano de manutenção de fachada, esse é o momento certo de começar — mesmo que a fachada pareça estar em bom estado hoje. Conheça também nossa <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#assessoria">Assessoria Condominial</a>, que ajuda o síndico a estruturar esse planejamento de forma simples.</p>

        </div>

        <div class="share-icons mt-4 pt-4 border-top">
          <span class="me-2 fw-semibold">Compartilhar:</span>
          <a href="https://wa.me/?text=Confira%20este%20artigo%20sobre%20manuten%C3%A7%C3%A3o%20preventiva%20de%20fachada" target="_blank" rel="noopener" title="Compartilhar no WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($canonicalUrl); ?>" target="_blank" rel="noopener" title="Compartilhar no Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Comece hoje a proteger o patrimônio do seu condomínio</h2>
      <p class="mb-4" style="color:#c7cedb;">Agende uma vistoria técnica preventiva com nossa equipe.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20vistoria%20preventiva%20de%20fachada." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Agendar vistoria
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
