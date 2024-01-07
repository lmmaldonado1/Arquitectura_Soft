<?php
session_start();
include './model/class_mysql.php';
include './model/config.php';
header('Content-Type: text/html; charset=UTF-8');  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LinuxMaster</title>
        <?php include "./view/links.php"; ?>        
    </head>
    <body>   
        <?php include "./view/navbar.php"; ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="page-header">
                <h1 class="animated lightSpeedIn">LinuxMaster <small>Ecuador</small></h1>
                <span class="label label-danger">LinuxMaster S.A</span>
                <p class="pull-right text-primary">
                  <strong>
                  <?php include "./view/timezone.php"; ?>
                 </strong>
               </p>
              </div>
            </div>
          </div>
        </div>
        <?php
            if(isset($_GET['view'])){
                $content=$_GET['view'];
                $WhiteList=["index","productos","soporte","ticket","ticketcon","registro","configuracion"];
                if(in_array($content, $WhiteList) && is_file("./view/".$content."-view.php")){
                    include "./view/".$content."-view.php";
                }else{
        ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="./img/Stop.png" alt="Image" class="img-responsive"/><br>
                            <img src="./img/SadTux.png" alt="Image" class="img-responsive"/>
                            
                        </div>
                        <div class="col-sm-7 text-center">
                            <h1 class="text-danger">Lo sentimos, la opción que ha seleccionado no se encuentra disponible</h1>
                            <h3 class="text-info">Por favor intente nuevamente</h3>
                        </div>
                        <div class="col-sm-1">&nbsp;</div>
                    </div>
                </div>
        <?php
                }
            }else{
                include "./view/index-view.php";
            }
        ?>

        
      <?php include './view/footer.php'; ?>
    </body>
</html>
