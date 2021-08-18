<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }
    public function cadastrar()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirma_senha'])) :
                    $dados['confirma_senha_erro'] = 'Confirme a Senha';
                endif;
            else :
                if (Verifica::verificaNome($formulario['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';
                elseif (Verifica::verificaEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';

                elseif ($this->usuarioModel->VerificarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado já está cadastrado';
                elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif ($formulario['senha'] != $formulario['confirma_senha']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else :
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);

                    if ($this->usuarioModel->armazenar($dados)) :
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');
                        URL::redirecionar('usuarios/login');
                    else :
                        die("Erro ao armazenar usuario no banco de dados");
                    endif;

                endif;

            endif;
        else :
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => '',
            ];

        endif;
        $this->view('usuarios/signup', $dados);
    }

    public function login()
    {
           $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;
            else :
                if (Verifica::verificaEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                else :
                    $usuario = $this->usuarioModel->verificarLogin($formulario['email'], $formulario['senha']);
                    if ($usuario) :
                        $this->criarSessaoUsuario($usuario);
                    else :
                        Sessao::mensagem('usuario', 'Usuario ou senha invalidos', 'alert alert-danger');
                    endif;
                endif;
            endif;
        else :

            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => ''
            ];
        endif;
        //define a view de login
        $this->view('usuarios/login', $dados);
    }


    private function criarSessaoUsuario($usuario)
    {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->user;
        $_SESSION['usuario_email'] = $usuario->email;
        $dados=[
            'Usuario'=>$usuario->user,
            'Email'=>$usuario->email
        ];
        URL::redirecionar(URL.'/paginas/home', $dados);
        }


    public function sair()
    {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        session_destroy();
        URL::redirecionar(URL.'/usuarios/login');
    }
}
