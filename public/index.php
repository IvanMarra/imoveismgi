<?php
    ob_end_clean();
    session_start();
    include './../app/configuracao.php';
    include './../app/autoload.php';
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= URL ?>/img/favicon.png" rel="icon">
    <title><?= APP_NOME ?></title>
</head>
<link rel="stylesheet" href="<?= URL ?>/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="<?= URL ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="<?= URL ?>/dist/css/adminlte.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    
        <?php
        include '../app/Views/header.php';
        $rotas = new Rota();
        include '../app/Views/footer.php';
        ?>
    
</body>
<script src="<?= URL ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?= URL ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= URL ?>/dist/js/adminlte.js"></script>
<script src="<?= URL ?>/dist/js/demo.js"></script>
<script src="<?= URL ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= URL ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?= URL ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= URL ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="<?= URL ?>/plugins/chart.js/Chart.min.js"></script>
<script src="<?= URL ?>/dist/js/pages/dashboard2.js"></script>
</html>