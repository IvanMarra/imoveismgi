<link rel="stylesheet" href="<?= URL ?>/css/style.css">
<link rel="stylesheet" href="<?= URL ?>/plugins/fontawesome-free/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?= URL ?>/plugins/animation/css/animate.css">

<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body">
						<?= Sessao::mensagem('usuario') ?>
						<p class="card-text"><small class="text-muted">Informe seus dados para fazer login!</small></p>
						<form name="login" method="POST" action="<?= URL ?>/usuarios/login" class="mt-4">
							<!-- <img src="<?= URL ?>/img/logo-dark.png" alt="" class="img-fluid mb-4"> -->
							<h1>MGI Participações S.A.</h1>
							<h4 class="mb-3 f-w-400">Acesso restrito</h4>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="feather icon-mail"></i></span>
								</div>
								<input type="email" name="email" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>" placeholder="Seu email" autocomplete="true" autofocus >
								<div class="invalid-feedback"><?= $dados['email_erro'] ?></div>
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="feather icon-lock"></i></span>
								</div>

								<input type="password" name="senha" class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : ''  ?>" placeholder="Sua Senha" autocomplete="true" >
								<div class="invalid-feedback"><?= $dados['senha_erro'] ?></div>
							</div>

							<div class="form-group text-left mt-2" style="display: none;">
								<div class="checkbox checkbox-primary d-inline">

								</div>

							</div>
							<button class="btn btn-primary mb-4">Logar</button>
							<p class="mb-2 text-muted">Esqueceu sua senha ? <a href="auth-reset-password.html" class="f-w-400">Recuperar</a></p>
							<p class="mb-0 text-muted">Não tem cadastro ? <a href="<?= URL ?>/usuarios/cadastrar" class="f-w-400">Fazer seu cadastro</a></p>
					</div>
					</form>
				</div>
				<div class="col-md-6 d-none d-md-block">
					<img src="<?= URL ?>/img/auth-bg.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-fab">
	<div class="b-bg">
		<i class="fas fa-question"></i>
	</div>
	<div class="fab-hover">
		<ul class="list-unstyled">
			<li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
			<li><a href="../doc/index.html" target="_blank" data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a></li>
		</ul>
	</div>