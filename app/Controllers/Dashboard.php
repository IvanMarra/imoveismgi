<?php

class Dashboard extends Controller{

public $path = "Dashboard";
    
public function __construct()
    {
        
    }


    public function index(){
        $dados = [
            'Titulo'=>$this->path,
            'Sub-Titulo'=>'Widtgets'
        ];
        $this->view('dashboard/index', $dados);
    }

}