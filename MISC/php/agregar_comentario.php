<?php
function calcula_fecha() /* esta funcion la utilizaremos para calcular la fecha */
{
$dia = date ("d");
$me = date ("m");
$agno = date ("Y");
$mes="";
if($me=="01") $mes="enero";
if($me=="02") $mes="febrero";
if($me=="03") $mes="marzo";
if($me=="04") $mes="abril";
if($me=="05") $mes="mayo";
if($me=="06") $mes="junio";
if($me=="07") $mes="julio";
if($me=="08") $mes="agosto";
if($me=="09") $mes="septiembre";
if($me=="10") $mes="octubre";
if($me=="11") $mes="noviembre";
if($me=="12") $mes="diciembre";
$cadena = "$dia de ";
$cadena .= "$mes de ";
$cadena .= "$agno";
return $cadena;
}
$fecha = calcula_fecha();
$link = conectar(NOMBRE_BD);
$consulta = "INSERT INTO libro_visitas (nombre, comentario, fecha) values('$nombre', '$comentario', '$fecha')";
if(mysql_query($consulta,$link)) echo "Se agregaron los datos!!";
else echo "No se agregaron los datos!!";
?>
