<?php
//Connexión al servidor MySQL
$link=mysql_connect("mysql3.000webhost.com", 
"a2501538_CP","jolisoleil$");
if (!$link) {
die ("Error al intentar conectar con la base de datos Contacte con el administrador:"  .mysql_error());
}
//Selección de la base de datos
$db_link=mysql_select_db("a2501538_libroCP", $link);
if (!$db_link) {
die ("Error al intentar seleccionar la base de datos". mysql_error());
}
//Verificación si se ha enviado el formulario
if (isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar'){
//Verificamos que el formulario no viene vacío
if (!empty($_POST['Name']) && !empty ($_POST['Comment']))
{
     $name=htmlentities(trim($_POST['Name']));
     $email=htmlentities(trim($_POST['Email']));
     $website=htmlentities(trim($_POST['Website']));
     $comment=htmlentities(trim($_POST['Comment']));

     // Insertar comentario
$query="INSERT INTO libro_visitas_CP (`Id`, `Name`, `Email`, `Website`, `Comment`, `Marker`, `Date`)
     VALUES 
      (NULL,'$name', '$email', '$website', '$comment', '0000-00-00', CURRENT_TIMESTAMP)";
echo $query;
 $sqlInsert=mysql_query ($query,$link)
      or die (mysql_error());
}
else
{
    echo "Debe llenar por lo menos el campo 'Nombre' y el  campo 'Comentario' los campos";
}
}
// fin del proceso de datos
// Mostrando los registros
$sqlQuery=mysql_query("SELECT * FROM libro_visitas_CP LIMIT 0,30", $link)
or die (mysql_error());
$totalFirmas = mysql_num_rows($sqlQuery);
if ($totalFirmas == 0) 
{
    echo "Nadie se ha animado a firmar este libro :(";
}
else
{
   while ($row = mysql_fetch_array($sqlQuery))
   {
     echo "<p><b>$row[Name]</b> dijo: <br/>". nl2br($row[Comment])."</p><hr />";
}
}
?>
<form name="html" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<p>
Nombre:<input type="text" name="Name" />
</p>
<p>
Email: <input type="text" name="Email" />
</p>
<p>
WebSite: <input type="text" name="Website" />
</p>
<p>
Fecha: <input type="text" name="Date" />
</p>
<p>
Comentario: <textarea name="Comment" cols="35" rows="15"></textarea>
</p>
<input type="submit" name="enviar" value="Enviar">
<
/form>