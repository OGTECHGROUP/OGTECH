<?php
$files = glob('subidas/*'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
echo "Elementos eliminados correctamente!!";
}
?>

<script>window.location.replace("./index.php");</script>//Redirección