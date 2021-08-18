<?php

class Engenharia extends Controller{
    public $path = "Engenharia";
public function __construct()
{
    if(!isset($_SESSION['usuario_id'])):
        Url::redirecionar('./');
    endif;
}

public function index(){
$dados =[
    'Titulo'=>$this->path,
'Sub-Titulo'=>'Pesquisa-de-Imóveis'
];
    $this->view('engenharia/pesquisa-engenharia', $dados);
}

public function relatoriosEngenharia(){
    $dados=[
        'Titulo'=>$this->path,
        'Sub-Titulo'=>'Relatórios-da-Engenharia'
    ];
        $this->view('engenharia/relatorios-engenharia', $dados);
}

}