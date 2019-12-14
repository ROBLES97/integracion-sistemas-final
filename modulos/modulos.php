<?php
    $rubro=$_GET['rubro'];
?>
<!DOCTYPE html>
  <html> 
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="icon.png"/>
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/307f0535c9.js"></script>
      <link rel="stylesheet" href="logistica/css/modulos.css">
      <title>EMPRESA</title>
      <style>
        .page {
            position: relative;
            display: block;
            top: 0px !important;
            left: 0;
            padding: 0px 0px 0px 0px !important;
        }
      </style>
    </head>
<?php
  $page_title = 'Modulos';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('../index.php', false);}
?>
<?php include_once('layouts/header_principal.php'); ?>
    <input type="hidden" id="rubro" value="<?php echo $rubro; ?>">
    <div class="row contenidocards margen">
        <div class="col s12 m6 l3">
            <div class="card c1">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu1 activator act" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4ZAXpQH6e7htcCbNt4CUmtshvlMpmiIH5MGI3o7CZCcUtiKAa&s">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu1 activator grey-text text-darken-4">Logística<i class="material-icons right">more_vert</i></span>
                    <button class="btn blue darken-4 bloqBtn1" onclick="window.location='logistica/admin.php'">Ingresar</button>  
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Logística<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card c2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu2 activator act" src="https://www.estrategiamagazine.com/wp-content/uploads/2014/10/sistemas-de-informacion-y-tecnologias-de-informacion.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu2 activator grey-text text-darken-4">Legal y Sistemas<i class="material-icons right">more_vert</i></span>
                    <button class="btn blue darken-4 bloqBtn2" onclick="window.location='#'">Ingresar</button>   
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Legal y Sistemas<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card c3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu3 activator act" src="https://concepto.de/wp-content/uploads/2012/03/finanzas-e1552605926805.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu3 activator grey-text text-darken-4">Finanzas<i class="material-icons right">more_vert</i></span>
                    <form action=""> 
                        <input type="submit" class="btn blue darken-4 bloqBtn3" name="submit" value="Ingresar">  
                     </form>  
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Finanzas<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card c4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu4 activator act" src="https://sinergiaformacion.es/wp-content/uploads/2014/10/proactividad-comercial-sector-financiero.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu4 activator grey-text text-darken-4">Comercial<i class="material-icons right">more_vert</i></span>
                    <form action=""> 
                        <input type="submit" class="btn blue darken-4 bloqBtn4" name="submit" value="Ingresar">  
                     </form>  
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Comercial<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row contenidocards">
        <div class="col s12 m6 l3"></div>        
        <div class="col s12 m6 l3">
            <div class="card c5">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu5 activator act" src="https://www.razon.com.mx/wp-content/uploads/2018/07/1-4.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu5 activator grey-text text-darken-4">Marketing<i class="material-icons right">more_vert</i></span>
                    <input type="submit" class="btn blue darken-4 bloqBtn5" name="submit" value="Ingresar">  
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Marketing<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card c6">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="bloqImgMenu6 activator act" src="https://www.unilatina.edu.co/blog/wp-content/uploads/2019/04/Gestion.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title bloqImgMenu6 activator grey-text text-darken-4">Soporte y calidad<i class="material-icons right">more_vert</i></span>
                    <input type="submit" class="btn blue darken-4 bloqBtn6" name="submit" value="Ingresar">  
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Soporte y calidad<i class="material-icons right">close</i></span>
                    <p>Aquí hay más información sobre este modulo que solo se revela una vez que se hace clic "Ingresar".</p>
                </div>
            </div>
        </div>
    </div>
<?php include_once('layouts/footer.php'); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
        <script>
        var rubro=$("#rubro").val();
        $(document).ready(function(){
            $('.card').addClass("desactivar");
            $('.act').removeClass("activator");
            $('.card-title').removeClass("activator");
            $('.btn').addClass("disabled");
            indicar_modulo(rubro);   
        });
        function indicar_modulo(variable){
            if (variable=="logistica") {
                $('.c1').removeClass("desactivar");
                $('.bloqBtn1').removeClass("disabled");
                $('.bloqImgMenu1').addClass("activator");
            }
            if (variable=="legal") {
                $('.c2').removeClass("desactivar");
                $('.bloqBtn2').removeClass("disabled");
                $('.bloqImgMenu2').addClass("activator");
            }
            if (variable=="finanzas") {
                $('.c3').removeClass("desactivar");
                $('.bloqBtn3').removeClass("disabled");
                $('.bloqImgMenu3').addClass("activator");
            }
            if (variable=="comercial") {
                $('.c4').removeClass("desactivar");
                $('.bloqBtn4').removeClass("disabled");
                $('.bloqImgMenu4').addClass("activator");
            }
            if (variable=="marketing") {
                $('.c5').removeClass("desactivar");
                $('.bloqBtn5').removeClass("disabled");
                $('.bloqImgMenu5').addClass("activator");
            }
            if (variable=="soporte") {
                $('.c6').removeClass("desactivar");
                $('.bloqBtn6').removeClass("disabled");
                $('.bloqImgMenu6').addClass("activator");
            }                                   
        };
        </script>

    </body>
  </html>