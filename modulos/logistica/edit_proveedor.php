<?php
  $page_title = 'Editar proveedor';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
?>
<?php
$proveedor = find_by_id('proveedor',(int)$_GET['id']);
$all_categories = find_all('categories');
$all_photo = find_all('media');
$proveedores=find_all('proveedor');
date_default_timezone_set("America/Lima");
if(!$proveedor){
  $session->msg("d","No se encontró el id del proveedor.");
  redirect('proveedor.php');
}
?>
<?php
 if(isset($_POST['proveedor'])){
    $req_fields = array('Empresa','Direccion','Telefono' );
    validate_fields($req_fields);

   if(empty($errors)){
       $p_name  = remove_junk($db->escape($_POST['Empresa']));
       $p_buy   = remove_junk($db->escape($_POST['Telefono']));
       $p_sale  = remove_junk($db->escape($_POST['Direccion']));
      
       $query   = "UPDATE proveedor SET";
       $query  .=" Empresa ='{$p_name}', Direccion ='{$p_sale}',";
       $query  .=" Telefono ='{$p_buy}'";
       $query  .=" WHERE id ='{$proveedor['id']}'";
       $result = $db->query($query);
               if($result && $db->affected_rows() === 1){
                 $session->msg('s',"El proveedor ha sido actualizado. ");
                 redirect('proveedor.php', false);
               } else {
                 $session->msg('d',' Lo siento, la actualización falló.');
                 redirect('edit_proveedor.php?id='.$proveedor['id'], false);
               }

   } else{
       $session->msg("d", $errors);
       redirect('edit_proveedor.php?id='.$proveedor['id'], false);
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
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Editar proveedor</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-7">
           <form method="post" action="edit_proveedor.php?id=<?php echo (int)$proveedor['id'] ?>">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-user"></i>
                  </span>
                  <input type="text" class="form-control" name="Empresa" value="<?php echo remove_junk($proveedor['Empresa']);?>">
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
                  <input type="text" class="form-control" name="Direccion" value="<?php echo remove_junk($proveedor['Direccion']);?>">
              </div>
              </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-phone-alt"></i>
                  </span>
                  <input type="text" class="form-control" name="Telefono" value="<?php echo remove_junk($proveedor['Telefono']);?>">
              
                  </div>
                </div>
              </div>


               </div>
              </div>
              <button type="submit" name="proveedor" class="btn btn-danger">Actualizar</button>
          </form>
         </div>
        </div>
      </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
