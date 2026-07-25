<?php
require_once __DIR__ . '/../../../../config.php';
require __DIR__ . '/../../../data/blog-posts.php';

$activePage = 'blog';
$pageTitle = 'Como Identificar Infiltração e Umidade na Fachada | Blog Duarte Dias';
$pageDescription = 'Manchas, bolhas na pintura e reboco solto podem ser sinais de infiltração. Veja como identificar o problema antes que ele avance.';
$pageImage = '/assets/img/blog/infiltracao-umidade-fachada.jpg';
require __DIR__ . '/../../../includes/header.php';
?>

<section class="page-hero pb-5">
  <div class="container">
    <div class="breadcrumb-custom mb-2">
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a> /
      <a href="<?php echo BASE_URL; ?>/app/views/pages/blog.php">Blog</a> / Restauração
    </div>
    <h1>Como identificar infiltração e umidade na fachada do prédio</h1>
    <div class="article-meta mt-3"><i class="bi bi-calendar3 me-1"></i> 02 de junho de 2026 &nbsp;·&nbsp; <i class="bi bi-tag me-1"></i> Restauração</div>
  </div>
</section>

<div class="container">
  <div class="article-cover">
    <img src="<?php echo BASE_URL; ?>/assets/img/blog/infiltracao-umidade-fachada.jpg" alt="Fachada predial com sinais de infiltração antes da restauração">
  </div>
</div>

<section class="pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="article-body">

          <p>A infiltração é um dos problemas mais comuns — e mais subestimados — em fachadas prediais. Quando não tratada a tempo, ela compromete não só a estética do edifício, mas também a estrutura da alvenaria e a segurança dos moradores. O primeiro passo para evitar uma obra grande e cara é saber reconhecer os sinais no estágio inicial.</p>

          <h2>1. Manchas escuras ou esverdeadas na parede</h2>
          <p>Manchas de umidade costumam aparecer primeiro em tons acinzentados ou amarelados e, com o tempo, evoluem para manchas escuras com presença de mofo ou bolor esverdeado. Elas geralmente se concentram perto de janelas, platibandas, juntas de dilatação e pontos onde a água da chuva se acumula.</p>

          <h2>2. Bolhas e descascamento da pintura</h2>
          <p>Quando a água consegue penetrar pela camada de pintura e fica retida entre a tinta e o reboco, ela forma bolhas. Com o tempo, essas bolhas estouram e a tinta começa a descascar em placas — um sinal claro de que a umidade já está instalada há algum tempo.</p>

          <h2>3. Reboco solto ou com som "oco"</h2>
          <p>Bata levemente na parede com os dedos ou com o cabo de uma ferramenta. Se o som for oco em vez de firme, é sinal de que o reboco perdeu aderência à alvenaria — normalmente causado por infiltração continuada naquele ponto. Esse é um estágio mais avançado e requer atenção rápida, pois há risco de queda de material.</p>

          <h2>4. Eflorescência (manchas brancas salinas)</h2>
          <p>Aquelas manchas brancas, parecidas com um "pó" seco na superfície da parede, são chamadas de eflorescência. Elas acontecem quando a água que penetrou na alvenaria evapora e deixa para trás os sais minerais que carregava. É um indício confiável de infiltração ativa.</p>

          <h2>5. Umidade aparente nas unidades internas próximas à fachada</h2>
          <p>Em muitos casos, o morador percebe o problema primeiro dentro do próprio apartamento: mofo no canto da parede, cheiro de mofo persistente ou manchas próximas a janelas e paredes externas. Se isso vem acontecendo em várias unidades da mesma fachada, é um forte indicativo de que o problema está na fachada, não na unidade isolada.</p>

          <div class="article-cta-box">
            <h3 class="mb-2">Identificou algum desses sinais no seu condomínio?</h3>
            <p class="mb-3">Nossa equipe faz uma vistoria técnica para identificar a origem exata da infiltração e apresentar o diagnóstico completo antes de qualquer obra.</p>
            <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Li%20o%20artigo%20sobre%20infiltra%C3%A7%C3%A3o%20e%20gostaria%20de%20agendar%20uma%20vistoria." target="_blank" rel="noopener" class="btn btn-accent px-4">
              <i class="bi bi-whatsapp me-1"></i> Agendar vistoria técnica
            </a>
          </div>

          <h2>Por que agir cedo faz diferença</h2>
          <p>Quanto mais tempo a infiltração permanece ativa, maior a área afetada e maior o custo do reparo. O que começaria como um <a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao">tratamento pontual de restauração de fachada</a> pode evoluir para a necessidade de recuperação estrutural de uma área muito maior, incluindo troca de reboco, tratamento de armaduras expostas e impermeabilização completa.</p>

          <p>Se o seu condomínio já apresenta algum desses sinais, o ideal é solicitar uma vistoria técnica o quanto antes. Um diagnóstico correto evita que o síndico leve à assembleia um orçamento subdimensionado — ou, pior, que o problema seja resolvido apenas na aparência, sem tratar a causa.</p>

        </div>

        <div class="share-icons mt-4 pt-4 border-top">
          <span class="me-2 fw-semibold">Compartilhar:</span>
          <a href="https://wa.me/?text=Confira%20este%20artigo%20sobre%20infiltra%C3%A7%C3%A3o%20em%20fachadas" target="_blank" rel="noopener" title="Compartilhar no WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($canonicalUrl); ?>" target="_blank" rel="noopener" title="Compartilhar no Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="cta-banner text-center">
      <h2 class="text-white mb-3">Cuide da fachada do seu condomínio antes que o problema cresça</h2>
      <p class="mb-4" style="color:#c7cedb;">Solicite uma vistoria técnica gratuita com nossa equipe.</p>
      <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>?text=Ol%C3%A1!%20Gostaria%20de%20uma%20vistoria%20t%C3%A9cnica%20de%20fachada." target="_blank" rel="noopener" class="btn btn-accent btn-lg px-4">
        <i class="bi bi-whatsapp me-1"></i> Falar com um especialista
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
