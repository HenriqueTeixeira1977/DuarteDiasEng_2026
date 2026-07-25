<?php
/**
 * Metadados dos artigos do blog.
 * Usado pela listagem (blog.php) e pode ser reaproveitado nos próprios
 * posts para blocos de "artigos relacionados" no futuro.
 *
 * 'imagem'      -> imagem de capa em tamanho maior, usada na página do artigo
 *                  e nas tags de SEO (Open Graph / Twitter Card)
 * 'imagemThumb' -> versão menor (700px), usada apenas no card da listagem
 *                  do blog, para carregar mais rápido
 *
 * Para adicionar um novo artigo:
 * 1) Crie o arquivo em app/views/pages/blog/seu-slug.php (copie um existente como base)
 * 2) Adicione uma entrada abaixo com o mesmo "slug"
 * 3) Adicione a URL correspondente no sitemap.xml
 */

$blogPosts = [
    [
        'slug'        => 'como-identificar-infiltracao-fachada',
        'titulo'      => 'Como identificar infiltração e umidade na fachada do prédio',
        'resumo'      => 'Manchas, bolhas na pintura e reboco solto podem ser sinais de infiltração. Veja como identificar o problema antes que ele avance.',
        'imagem'      => '/assets/img/blog/infiltracao-umidade-fachada.jpg',
        'imagemThumb' => '/assets/img/blog/infiltracao-umidade-fachada-thumb.jpg',
        'categoria'   => 'Restauração',
        'data'        => '2026-06-02',
        'dataExibe'   => '02 de junho de 2026',
    ],
    [
        'slug'        => 'quando-repintar-fachada-predio',
        'titulo'      => 'Quando repintar a fachada do prédio? Sinais e periodicidade ideal',
        'resumo'      => 'Descubra os principais sinais de que é hora de repintar e qual a periodicidade recomendada para manter a fachada do condomínio protegida.',
        'imagem'      => '/assets/img/blog/quando-repintar-fachada.jpg',
        'imagemThumb' => '/assets/img/blog/quando-repintar-fachada-thumb.jpg',
        'categoria'   => 'Pintura',
        'data'        => '2026-06-09',
        'dataExibe'   => '09 de junho de 2026',
    ],
    [
        'slug'        => 'trincas-fissuras-fachada-quando-preocupar',
        'titulo'      => 'Trincas e fissuras na fachada: quais são perigosas?',
        'resumo'      => 'Nem toda rachadura é motivo de pânico, mas algumas indicam problema estrutural. Aprenda a diferenciar trincas superficiais de fissuras graves.',
        'imagem'      => '/assets/img/blog/trincas-fissuras-fachada.jpg',
        'imagemThumb' => '/assets/img/blog/trincas-fissuras-fachada-thumb.jpg',
        'categoria'   => 'Restauração',
        'data'        => '2026-06-16',
        'dataExibe'   => '16 de junho de 2026',
    ],
    [
        'slug'        => 'pintura-fachada-tecnica-rapel-vantagens',
        'titulo'      => 'Pintura de fachada com técnica de rapel: como funciona e vantagens',
        'resumo'      => 'Entenda como funciona o acesso por corda (rapel) na pintura predial e por que essa técnica é mais rápida, segura e barata que o andaime.',
        'imagem'      => '/assets/img/blog/pintura-tecnica-rapel.jpg',
        'imagemThumb' => '/assets/img/blog/pintura-tecnica-rapel-thumb.jpg',
        'categoria'   => 'Pintura',
        'data'        => '2026-06-23',
        'dataExibe'   => '23 de junho de 2026',
    ],
    [
        'slug'        => 'quanto-custa-restauracao-fachada-predial',
        'titulo'      => 'Quanto custa restaurar a fachada de um prédio?',
        'resumo'      => 'Entenda os principais fatores que influenciam o orçamento de restauração de fachada e como planejar esse investimento no condomínio.',
        'imagem'      => '/assets/img/blog/custo-restauracao-fachada.jpg',
        'imagemThumb' => '/assets/img/blog/custo-restauracao-fachada-thumb.jpg',
        'categoria'   => 'Orçamento',
        'data'        => '2026-06-30',
        'dataExibe'   => '30 de junho de 2026',
    ],
    [
        'slug'        => 'como-aprovar-pintura-fachada-assembleia',
        'titulo'      => 'Como aprovar a pintura da fachada em assembleia: guia para o síndico',
        'resumo'      => 'Um passo a passo prático para o síndico apresentar o projeto de pintura ou restauração de fachada e conseguir aprovação dos condôminos.',
        'imagem'      => '/assets/img/blog/aprovar-pintura-assembleia.jpg',
        'imagemThumb' => '/assets/img/blog/aprovar-pintura-assembleia-thumb.jpg',
        'categoria'   => 'Gestão Condominial',
        'data'        => '2026-07-07',
        'dataExibe'   => '07 de julho de 2026',
    ],
    [
        'slug'        => 'nr35-seguranca-trabalho-altura-sindico',
        'titulo'      => 'NR-35: o que o síndico precisa saber antes de contratar um serviço de fachada',
        'resumo'      => 'A norma de segurança para trabalho em altura protege trabalhadores e também o condomínio. Veja o que exigir da empresa contratada.',
        'imagem'      => '/assets/img/blog/nr35-seguranca-altura.jpg',
        'imagemThumb' => '/assets/img/blog/nr35-seguranca-altura-thumb.jpg',
        'categoria'   => 'Segurança',
        'data'        => '2026-07-14',
        'dataExibe'   => '14 de julho de 2026',
    ],
    [
        'slug'        => 'manutencao-preventiva-fachada-economia',
        'titulo'      => 'Manutenção preventiva de fachada: como evitar gastos grandes no futuro',
        'resumo'      => 'Pequenos reparos feitos a tempo evitam obras caras mais adiante. Entenda por que a manutenção preventiva é o investimento mais inteligente.',
        'imagem'      => '/assets/img/blog/manutencao-preventiva-fachada.jpg',
        'imagemThumb' => '/assets/img/blog/manutencao-preventiva-fachada-thumb.jpg',
        'categoria'   => 'Manutenção',
        'data'        => '2026-07-17',
        'dataExibe'   => '17 de julho de 2026',
    ],
];
