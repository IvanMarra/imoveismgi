<?php
if(!isset($_SESSION['usuario_id'])):
else:
?>

<footer class="main-footer">
    <strong>Copyright &copy; <?php new DateTime(); ?> <a href="http://adminlte.io">MGi Participações S.A.</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.0.1
    </div>
  </footer>
  <?php endif;
  ?>