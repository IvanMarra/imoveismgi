<?php

Class Informacoes extends Controller {
    public function __construct()
    {
        
    }
    public function informacao(){
        $this->view('informacoes/info');
    }
}