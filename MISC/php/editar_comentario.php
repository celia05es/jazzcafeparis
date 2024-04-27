<?php
$link = conectar(NOMBRE_BD);
$consulta_edicion = "select * from libro_visitas WHERE id_comentario=$id_comentario";
if(!($query_edicion = mysql_query($consulta_edicion,$link))) echo "Error!!";
$id_comentario = mysql_result($query_edicion,0,0);
$nombre = mysql_result($query_edicion,0,1);
$comentario = mysql_result($query_edicion,0,2);
$fecha = mysql_result($query_edicion,0,3);
echo "<form action='modificar_comentario.php' method='get'>
<input type='hidden' name='id_comentario' value='$id_comentario'>
<p>
nombre: <input type='text' name='nombre' size='30' value='$nombre' Class='campo'></p>
<p>
comentario:<br><textarea name='comentario' cols='40' rows='5' Class='campo'>$comentario</textarea></p>
<p>
<input type='submit' value='modificar' Class='boton'></p>
</form>";
?> 
