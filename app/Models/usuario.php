<?php

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function verificarEmail($email)
    {
        $this->db->query("SELECT email FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);
        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
    }

    public function armazenar($dados)
    {
        $this->db->query("INSERT INTO usuarios(user, email, pass) VALUES (:nome, :email, :senha)");

        $this->db->bind("user", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("pass", $dados['senha']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function verificarLogin($email, $senha)
    {
        $this->db->query("SELECT * FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);

        if ($this->db->resultado()) : 
            $resultado = $this->db->resultado();
            if(password_verify($senha, $resultado->pass)): 
                return $resultado;
            else:
                return false;
            endif;
        else :
            return false;
        endif;
    }
}
