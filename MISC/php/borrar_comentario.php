<?php
$link=conectar(NOMBRE_BD);
$consulta="DELETE FROM libro_visitas WHERE id_comentario=$id_comentario";
if(mysql_query($consulta,$link)) echo "Se borraron los datos!!";
else echo "No se borraron los datos!!";
?>
