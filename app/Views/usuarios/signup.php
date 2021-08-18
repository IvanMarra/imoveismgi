<link rel="stylesheet" href="<?= URL ?>/css/style.css">
<link rel="stylesheet" href="<?= URL ?>/plugins/fontawesome-free/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?= URL ?>/plugins/animation/css/animate.css">
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <!-- <img src="<?= URL ?>/img/logo-dark.png" alt="" class="img-fluid mb-4"> -->
                        <h1>MGI Participações S.A.</h1>
                        <h4 class="mb-3 f-w-400">Cadastro de Usuários ERP MGi</h4>
                        <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/cadastrar" class="mt-4">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?>" placeholder="Seu nome" name="nome">
                                <div class="invalid-feedback"><?= $dados['nome_erro'] ?></div>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input type="email" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?> " placeholder="Email Institucional" name="email">
                                <div class="invalid-feedback"><?= $dados['email_erro'] ?></div>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control <? $dados['senha_erro'] ? 'is-invalid': '' ?>" placeholder="Senha" id="senha" name="senha">
                                <div class="invalid-feedback"><?= $dados['senha_erro'] ?></div>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control <? $dados['confirma_senha_erro'] ? 'is-invalid': '' ?>" placeholder="Confirmar a senha" id="confirma_senha" name="confirma_senha">
                                <div class="invalid-feedback"><?= $dados['confirma_senha_erro'] ?></div>
                            </div>

                            <div class="form-group text-left mt-2" style="display: none;">
                                <div class="checkbox checkbox-primary d-inline">
                                    
                                </div>
                            </div>
                            <button class="btn btn-primary mb-4">Cadastrar</button>
                            <p class="mb-2">Possui cadastro ? <a href="<?= URL ?>/usuarios/login" class="f-w-400">Fazer Login</a></p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="<?= URL ?>/img/auth-bg.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>