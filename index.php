<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/navbar-fixed-top/ -->

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Diseño y Publicidad" content="">
        <meta name="Central de Diseño" content="">
        <link rel="icon" href="img/favicon.ico">
        <title>Central de Diseño - Login</title>
        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
         </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8"><font color="#000"><center><strong><h1>BUY-ME</h1></strong><h3>EMPRESAS PEQUEÑAS</h3></center></font></div>
                    <div class="col-md-2"></div>
                </div>
                </div>
    <h3>    
        <p class="bg-danger" align="center">
        <b>
            <?php
            session_start();
            ob_start();
                if(isset($_SESSION['sesion_exito']))
                {
                    //if($_SESSION['sesion_exito']==0) Como dije en el video, esto no es estrictamente necesario
                    // {echo "inicie sesion por favor";} Ya que si lo dejamos, siempre que accedemos a index arroja error.
                    if($_SESSION['sesion_exito']==2)
                        {echo "Los campos SON OBLIGATORIOS";}
                    if($_SESSION['sesion_exito']==3)
                        {echo "DATOS INCORRECTOS";}
                }
                else
                {
                    $_SESSION['sesion_exito']=0;
                }
                
            ?>
        </b>
        </p>
        <p class="bg-success" align="center">
        <b>
            <?php
                if($_SESSION['sesion_exito']==4)
                    {echo "GRACIAS POR USAR NUESTROS SERVICIOS";}
                $_SESSION['sesion_exito']=0; //Despues de confirmar el error, igualo lo variable a 0
            ?>
        </b>
        </p>
    </h3>
                <!--Inicio del formulario de Iniciar sesion-->
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="well"> <!--hace un sombreado a la columna-->
                            <center>
                                <h3><strong>INICIAR SESION</strong></h3><br>
                                <img src="usuario.png" class="img-circle" width="150" height="150">
                                
                                <br><br><br>
                                
                                <form class="form-inline" method="POST" action="registro.php" name="login">
                                    <div class="form-group">
                                      <label for="usuario">USUARIO</label>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="user">
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                      <label for="pass">CONTRASEÑA</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">   
                                    </div>  
                                    <br><br>
                                    <input type="hidden" name="envio">
                                    <p><input type="submit" id="enviar" class="btn btn-success" value="INICIAR SESIÓN" name="btn_index">
                                </form>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
              </div>
            </div>
           
      </body>
  </html>
