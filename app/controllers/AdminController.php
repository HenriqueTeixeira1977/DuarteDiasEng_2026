<?php
require_once 'app/models/Admin.php';
require_once 'app/models/Lead.php';

class AdminController extends Controller {

    public function login() {
        // exibe view de login
        $this->loadTemplate('admin/login', ['titulo'=>'Login Admin']);
    }

    public function auth() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $admin = Admin::findByEmail($email);
        if($admin && password_verify($senha, $admin['senha'])) {
            session_start();
            $_SESSION['admin'] = [
                'id' => $admin['id'],
                'nome' => $admin['nome'],
                'email' => $admin['email']
            ];
            header("Location: ".BASE_URL."admin/dashboard");
            exit;
        } else {
            header("Location: ".BASE_URL."admin?error=1");
            exit;
        }
    }

    public function dashboard() {
        session_start();
        if(empty($_SESSION['admin'])) {
            header("Location: ".BASE_URL."admin");
            exit;
        }
        $totalLeads = Lead::countAll();
        $leadsRecentes = Lead::getRecent(8);
        $this->loadTemplate('admin/dashboard', [
            'titulo'=>'Dashboard',
            'totalLeads' => $totalLeads,
            'leadsRecentes' => $leadsRecentes
        ]);
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: ".BASE_URL."admin");
    }
}

