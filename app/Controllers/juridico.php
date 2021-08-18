<?php

class Juridico extends Controller{
    public $path = "Juridico";
    public function __construct()
    {
        if(!isset($_SESSION['usuario_id'])):
        URL::redirecionar('./');
        endif;
        
    }
    
public function index(){
$dados=[
    'Titulo'=>$this->path,
    'Sub-Titulo'=>'Pesquisa-do-Juridico'
];
    $this->view('juridico/pesquisa-juridico', $dados);
}

public function relatorioJuridico(){
    $dados=[
        'Titulo'=>$this->path,
        'Sub-Titulo'=>'Relatório-do-Jurídico'
    ];

    $this->view('juridico/relatorio-juridico',$dados);
}

}