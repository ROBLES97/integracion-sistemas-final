<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php
  $page_title = 'Lista de imagenes';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php $media_files = find_all('media');?>
<?php
  if(isset($_POST['submit'])) {
  $photo = new Media();
  $photo->upload($_FILES['file_upload']);
    if($photo->process_media()){
        $session->msg('s','Imagen subida al servidor.');
        redirect('media.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('media.php');
    }

  }

?>
<?php include_once('layouts/header.php'); ?>
      <CENTER><div class="row">
        <div class="col-md-6">
         

          <?php echo display_msg($msg); ?>
        </div>

<iframe width="98%" height="98%" src="https://app.powerbi.com/view?r=eyJrIjoiODA4MTZlOTItOGRmNy00NDE1LTg0OTAtZGZlMDAxZmQxMzk0IiwidCI6IjhkYmQ2NzExLTMwNTEtNGE2OS1iYjVlLTg3MTQ2MDY3MTFkNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>


</div>

</CENTER>


<?php include_once('layouts/footer.php'); ?>
