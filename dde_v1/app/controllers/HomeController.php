<?php
class HomeController extends Controller {

    public function index() {
        $dados = [
            'titulo' => 'Duarte Dias Engenharia - Excelência em Projetos'
        ];
        $this->loadTemplate('home/index', $dados);
    }
}
