<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="es">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Sistema simple de inventario";?>
    </title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left"> TEXTILERÍA - MÓDULOS </div>
      <div class="header-content">
      <div class="header-date pull-left">
      
      <?php date_default_timezone_set("America/Lima");?>
        <strong><?php echo date("d/m/Y  g:i a");?></strong>
        
      </div>
      <div class="pull-right ">
      <a href="logout.php" style="padding-right: 20px;"><b>Cerrar Sesión</b></a>
      </div>
     </div>
    </header>

<?php endif;?>

<div class="page">
  <div class="container-fluid">
