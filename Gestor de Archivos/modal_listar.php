<!--https://getbootstrap.com/docs/3.3/javascript/#modals-->


<!-- Small modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">Listar Documentos</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <?php include('./listar.php')?>
    </div>
  </div>
</div>


<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Descarga .ZIP</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <?php include('zip.php')?>
    </div>
  </div>
</div>

<!--Botón purga de carpeta-->
<button type="button" href="#" class="btn btn-danger" onclick="ir()">Purgar Carpeta</button>

<script>
  function ir(){
   window.location="purgar.php";//pagina donde tienes tus consultas para borrar 
}

/*<input type="button" value="Borrar" onclick="ir()"/>*/
</script>
