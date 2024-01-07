<?php
  session_start(); 
  include './model/class_mysql.php';
  include './model/config.php';
  header('Content-Type: text/html; charset=UTF-8');
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar</title>
        <?php include "./view/links.php"; ?>       
    </head>
    <body>
      <?php include "./view/navbar.php"; ?>
        <div class="container">
          <br><br><br>
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="img/delete.png" alt="">
              <h1 class="text-danger">Su cuenta ha sido eliminada exitosamente</h1>
              <h3 class="text-primary">Todos los datos asociados a tu cuenta han sido eliminados exitosamente, si deseas volver a ser usuario de LinuxMaster puedes registrarte nuevamente.</h3>
            </div>
          </div>
          <br><br>
        </div>
      <?php include './view/footer.php'; ?>
    </body>
</html>