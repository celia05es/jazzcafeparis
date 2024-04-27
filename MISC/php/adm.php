<?php
define("a2501538_libro_CP","libro_visitas_CP");  
function conectar($nombre_base)
{
if ($link=my_sql_connect("mysql3.000webhost.com", "a2501538_CP","jolisoleil$"))
{
echo "Error al conectar con la base de datos. Mande un email al administrador");
exit();
}
if (mysql_select_db("a2501538_libro_CP"))
{
echo "Error al seleccionar la base de datos. Contactar con el administrador"):
exit();
}
return $link;
}
?>
