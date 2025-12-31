<?php
// app/controllers/ContactController.php - Lida com form de contato

require_once __DIR__ . '/../models/Lead.php';

class ContactController {
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validação simples (adicione mais se precisar)
            $errors = [];
            if (empty($_POST['nome'])) $errors[] = 'Nome obrigatório';
            if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Email inválido';

            if (empty($errors)) {
                $data = [
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email'] ?? null,
                    'telefone' => $_POST['telefone'] ?? null,
                    'mensagem' => $_POST['mensagem'] ?? null,
                    // Adicione UTM se capturar via query string
                ];
                Lead::create($data);
                $_SESSION['success'] = 'Mensagem enviada com sucesso!';
                header('Location: /contato');  // Redireciona para página de contato
                exit;
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: /contato');  // Volta com erros
                exit;
            }
        }
    }

    public function index() {
        // Mostra a view de contato (chamado via roteamento)
        require_once __DIR__ . '/../views/contact.php';
    }
}
?>