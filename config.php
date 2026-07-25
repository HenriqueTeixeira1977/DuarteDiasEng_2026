<?php
/**
 * Configurações globais do site - Duarte Dias Engenharia Civil
 * ---------------------------------------------------------------
 * BASE_URL é detectado automaticamente com base na pasta onde este
 * arquivo (config.php) está localizado em relação à raiz do servidor
 * (DOCUMENT_ROOT). Isso faz o site funcionar tanto em localhost
 * (XAMPP/WAMP, em qualquer subpasta dentro de htdocs) quanto em
 * produção, na raiz do domínio ou dentro de /public, sem precisar
 * editar nada manualmente.
 *
 * Caso o autodetect não funcione no seu ambiente (raro), você pode
 * forçar um valor fixo removendo o bloco abaixo e usando, por exemplo:
 *   define('BASE_URL', '/public');
 */
$__docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/')) : '';
$__projectRoot = str_replace('\\', '/', rtrim(__DIR__, '/'));

if ($__docRoot !== '' && strpos($__projectRoot, $__docRoot) === 0) {
    $__base = substr($__projectRoot, strlen($__docRoot));
} else {
    $__base = '';
}
define('BASE_URL', $__base);
unset($__docRoot, $__projectRoot, $__base);

/**
 * SITE_URL = domínio completo (com https://) usado em tags canonical,
 * Open Graph, Twitter Card e dados estruturados (Schema.org).
 * IMPORTANTE: atualize para o domínio real antes de publicar em produção.
 * Em localhost isso não afeta a navegação normal do site, só as tags
 * de SEO (que não fazem sentido mesmo testar localmente).
 */
define('SITE_URL', 'https://duartediasengenharia.com.br');

// Dados de contato usados em várias páginas do site
define('EMPRESA_NOME', 'Duarte Dias Engenharia Civil');
define('EMPRESA_WHATSAPP', '5519997339148');
define('EMPRESA_WHATSAPP_EXIBE', '(19) 99733-9148');
define('EMPRESA_EMAIL', 'contato@duartediasengenharia.com.br');
define('EMPRESA_CIDADE', 'Campinas - SP');
define('EMPRESA_ENDERECO', 'Campinas e região - SP');

/**
 * MODO MANUTENÇÃO ("Em Breve")
 * ---------------------------------------------------------------
 * Enquanto MODO_MANUTENCAO estiver true, TODAS as páginas do site
 * (index.php, sobre.php, servicos.php, etc.) exibem automaticamente
 * a página comingsoon.php com a contagem regressiva, no lugar do
 * conteúdo normal. Isso acontece porque a verificação foi colocada
 * dentro de app/includes/header.php, que é carregado por todas as
 * páginas do site.
 *
 * O painel administrativo (pasta /admin) NÃO passa por essa
 * verificação, então você continua acessando /admin/login.php
 * normalmente mesmo com o site em modo manutenção.
 *
 * Quando o site estiver pronto para ir ao ar, basta trocar para
 * false abaixo.
 */
define('MODO_MANUTENCAO', false);

/**
 * SENHA DO PAINEL ADMINISTRATIVO (/admin)
 * ---------------------------------------------------------------
 * Por segurança, a senha não fica em texto puro: guardamos o HASH
 * dela. A senha padrão definida abaixo é: duarte@2026
 *
 * Para trocar a senha, gere um novo hash rodando este comando em
 * qualquer página PHP (ou no terminal com "php -a"):
 *     echo password_hash('SUA_NOVA_SENHA', PASSWORD_DEFAULT);
 * e substitua o valor de ADMIN_PASSWORD_HASH pelo resultado.
 */
define('ADMIN_PASSWORD_HASH', '$2b$12$7kFfFiRZoWeSnKzsalg8zOJg2Q3EdcL5DgxafLpA1qUyz/tfwIcLC');
