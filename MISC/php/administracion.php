<?php
include("validar.php");
include("adm.php");
?>
<html>
<head><title>Libro de Visitas: Ver Comentarios</title>
<link rel="Stylesheet" href="estilos.css" type="text/css">
</head>
<body bgcolor="#FFFFFF">
<TABLE BORDER=0 WIDTH="100%" CELLPADDING=5>
<TR>
<TD VALIGN=TOP WIDTH="20%" Class="opciones">
<? include("opciones.php"); ?>
</TD>
<TD>&#160;&#160;&#160;</TD>
<TD VALIGN=TOP Class="contenido">
<center><h1>Lista de Comentarios</h1></center>
<?php
$link = conectar(NOMBRE_BD);
$consulta = "select * from libro_visitas_cp";
if(!($query=mysql_query($consulta,$link))) echo "Error!!";
$filas = mysql_num_rows($query);
for($i=0;$i<$filas;$i++)
{
$id = mysql_result($query,$i,0);
$name = mysql_result($query,$i,1);
$comment = mysql_result($query,$i,2);
$date = mysql_result($query,$i,3);
echo "<hr><p>id_comentario: $id <br>
Nombre: $name<br>
Comentarios:<br>$comment</p>
<p><a href='editar_comentario.php?id_comentario=$id'>Editar comentario</a> --- <a href='borrar_comentario.php?id_comentario=$id'>Borrar comentario</a></p>";
}
?>
</TD>
</TR>
</TABLE>
</body>
</html>
