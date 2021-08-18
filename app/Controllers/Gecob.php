<?php
class Gecob extends Controller
{
    public $path = "Gecob";
    public function __construct()
    {
        if (!isset($_SESSION['usuario_id'])) :
            URL::redirecionar('./');
        endif;
    }


    public function index()
    {

        $dados = [
            'Titulo' => $this->path,
            'Sub-Titulo' => 'Incluir-Imóvel'
        ];
        $this->view('gecob/incluir-imovel', $dados);
    }
    public function pesquisarImovel()
    {
        $dados = [
            'Titulo' => $this->path,
             'Sub-Titulo' => 'Pesquisar-Imóvel'
            ];
        $this->view('gecob/pesquisar-imovel', $dados);
    }
    public function pedidoDePagamento()
    {
        $dados = [
            'Titulo' => $this->path,
            'Sub-Titulo' => 'Pedido-de-Pagamento'
        ];
        $this->view('gecob/pedido-de-pagamento', $dados);
    }
    public function relatoriosGecob()
    {
        $dados = [
            'Titulo' => $this->path,
            'Sub-Titulo' => 'Relatórios-de-Imóveis'
        ];
        $this->view('gecob/relatorios-gecob', $dados);
    }
    public function gerencial()
    {
        $dados = [
            'Titulo'=>$this->path,
        'Sub-Titulo'=>'Gerencial'
    ];
        $this->view('gecob/gerencial', $dados);
    }
    public function situacaoFisica()
    {
        $dados = [
            'Titulo'=>$this->path,
        'Sub-Titulo'=>'Situação-Fisica'
    ];
        $this->view('gecob/situacao-fisica', $dados);
    }
}
