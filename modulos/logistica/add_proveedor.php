<?php
  $page_title = 'Agregar proveedor';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
  $proveedores=find_all('proveedor');
  date_default_timezone_set("America/Lima");
?>
<?php
 if(isset($_POST['add_proveedor'])){
   $req_fields = array('Empresa','Direccion','Telefono');
   validate_fields($req_fields);
   if(empty($errors)){
     $empresa  = remove_junk($db->escape($_POST['Empresa']));
     $direccion   = remove_junk($db->escape($_POST['Direccion']));
     $telefono   = remove_junk($db->escape($_POST['Telefono']));
    
     $query  = "INSERT INTO proveedor (";
     $query .=" Empresa,Direccion,Telefono";
     $query .=") VALUES (";
     $query .=" '{$empresa}', '{$direccion}', '{$telefono}'";
     $query .=")";
     $query .=" ON DUPLICATE KEY UPDATE Empresa='{$empresa}'";
     if($db->query($query)){
       $session->msg('s',"Proveedor agregado exitosamente. ");
       redirect('add_proveedor.php', false);
     } else {
       $session->msg('d',' Lo siento, registro falló.');
       redirect('proveedor.php', false);
     }

   } else{
     $session->msg("d", $errors);
     redirect('add_proveedor.php',false);
   }

 }

?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
  <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-phone-alt"></span>
            <span>Agregar proveedor</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-7">
           <form method="post" action="add_proveedor.php">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-user"></i>
                  </span>
                  <input type="text" class="form-control" name="Empresa" placeholder="Ingresar Nombre del Proveedor">
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-globe"></i>
                  </span>
                  <input type="text" class="form-control" name="Direccion" placeholder="Ingresar la dirección">
              </div>
              </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-phone-alt"></i>
                  </span>
                  <input type="text" class="form-control" name="Telefono" placeholder="Ingresar Telefono">
              
                  </div>
                </div>
              </div>

               </div>
              </div>
              <button type="submit" name="add_proveedor" class="btn btn-danger">Agregar proveedor</button>
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
