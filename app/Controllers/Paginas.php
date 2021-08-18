<?php

class Paginas extends Controller {

public function __construct()
{
    if(!isset($_SESSION['usuario_id'])):
        URL::redirecionar('usuarios/login');
        var_dump($_SESSION);        
    endif;
}

    public function index(){
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];
        $this->view('paginas/home', $dados);
    }


    
   
}