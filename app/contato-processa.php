<?php
/**
 * Processa o formulário de contato da página contato.php
 * ---------------------------------------------------------------
 * Por padrão, salva os contatos em app/data/contatos.txt (simples,
 * não depende de servidor SMTP configurado).
 *
 * Para enviar por e-mail em vez de (ou além de) salvar em arquivo,
 * descomente e configure o bloco "ENVIO POR E-MAIL" mais abaixo.
 * Para ambientes de produção, recomenda-se usar PHPMailer + SMTP
 * em vez da função mail() nativa, que costuma cair em spam.
 */

require_once __DIR__ . '/../config.php';

$redirectBase = BASE_URL . '/app/views/pages/contato.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirectBase);
    exit;
}

$nome      = trim($_POST['nome'] ?? '');
$telefone  = trim($_POST['telefone'] ?? '');
$email     = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$servico   = trim($_POST['servico'] ?? 'Não informado');
$mensagem  = trim($_POST['mensagem'] ?? '');

// Validação simples dos campos obrigatórios
if ($nome === '' || $telefone === '' || !$email || $mensagem === '') {
    header('Location: ' . $redirectBase . '?status=erro');
    exit;
}

// ==== SALVAR EM ARQUIVO (padrão) ========================================
$linha = sprintf(
    "[%s] Nome: %s | Telefone: %s | E-mail: %s | Serviço: %s | Mensagem: %s%s",
    date('Y-m-d H:i:s'),
    $nome,
    $telefone,
    $email,
    $servico,
    str_replace(["\r", "\n"], ' ', $mensagem),
    PHP_EOL
);

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0755, true);
}
@file_put_contents($dataDir . '/contatos.txt', $linha, FILE_APPEND | LOCK_EX);

// ==== ENVIO POR E-MAIL (opcional) =======================================
// $assunto = 'Novo contato pelo site - ' . $servico;
// $corpo   = "Nome: $nome\nTelefone: $telefone\nE-mail: $email\nServiço: $servico\n\nMensagem:\n$mensagem";
// $headers = 'From: nao-responda@duartediasengenharia.com.br' . "\r\n" .
//            'Reply-To: ' . $email;
// mail(EMPRESA_EMAIL, $assunto, $corpo, $headers);

header('Location: ' . $redirectBase . '?status=sucesso');
exit;
