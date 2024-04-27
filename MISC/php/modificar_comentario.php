<<?php
$link=conectar(NOMBRE_BD);
$consulta="UPDATE libro_visitas SET nombre='$nombre', comentario='$comentario' WHERE id_comentario=$id_comentario";
if(mysql_query($consulta,$link)) echo "Se modificaron los datos!!";
else echo "No se modificaron los datos!!";
?>

