<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'app/models/Lead.php';
require_once 'app/core/Database.php';
// require Composer autoload if using composer
// require 'vendor/autoload.php';

class ContatoController extends Controller {

    public function index() {
        $this->loadTemplate('contato/index', ['titulo'=>'Contato']);
    }

    public function enviar() {
        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefone = trim($_POST['telefone'] ?? '');
        $mensagem = trim($_POST['mensagem'] ?? '');

        // salvar no banco
        Lead::salvar([
            'nome'=>$nome,
            'email'=>$email,
            'telefone'=>$telefone,
            'mensagem'=>$mensagem,
            'servico'=>$_POST['servico'] ?? null
        ]);

        // enviar e-mail com PHPMailer
        // Ajuste as credenciais no config.php ou app/config/email.php
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;           // definir em config
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USER;
            $mail->Password = SMTP_PASS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = SMTP_PORT;

            //Recipients
            $mail->setFrom(SMTP_FROM, 'Site Duarte Dias');
            $mail->addAddress('contato@duartediasengenharia.com.br');     // destination

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Novo contato via site: $nome";
            $mail->Body    = "<b>Nome:</b> $nome<br><b>Email:</b> $email<br><b>Telefone:</b> $telefone<br><b>Mensagem:</b><br>".nl2br($mensagem);

            $mail->send();
        } catch (Exception $e) {
            // log or ignore
        }

        header("Location: ".BASE_URL."contato?ok=1");
        exit;
    }
}
