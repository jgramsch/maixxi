<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<?php include '../head.php' ?>
</head>
<body classs='cuerpo'>
	<?php include '../cabecera1.php' ?>
	<?php include '../menu.php' ?>
	<!-- Contenido-->
	<div class="container">
	<img src="../Modelo_gestion2.png" alt="Modelo Gestion" usemap="#linkspower">

	<map name="linkspower">
  		<area shape="rect" coords="18,226,232,340" href="#edereserva" alt="Edereserva">
  		<area shape="rect" coords="256,142,442,340" href="#parque" alt="Parque">
  		<area shape="rect" coords="76,606,386,696" href="#inversionreemplazo" alt="inversionreemplazo">
  		<area shape="rect" coords="738,238,992,312" href="#disponibilidad" alt="Disponibilidad">
  		<area shape="rect" coords="888,466,1084,530" href="#mantenibilidad" alt="Mantenibilidad">
  		<area shape="rect" coords="728,542,878,610" href="#prevderiesgos" alt="prevencionderiesgos">
  		<area shape="rect" coords="1068,328,1140,412" href="#politicas" alt="politicas">
  		<area shape="rect" coords="1110,156,1232,212" href="#confiabilidad" alt="confiabilidad">
  		<area shape="rect" coords="1308,148,1530,274" href="#stock" alt="stockderepuestos">
  		<area shape="rect" coords="1184,394,1428,482" href="#areamanten" alt="AreaMantenimiento">
  		<area shape="rect" coords="1008,568,1222,674" href="#stockdecom" alt="stockreparable">
	</map>
	</div>
	<?php include '../Powers/1inversion en equipos.php' ?>
	<?php include '../Powers/1disponibilidad.php' ?>
	<?php include '../Powers/1Equipos de reserva.php' ?>
	<?php include '../Powers/1parque de equipos.php' ?>
	<?php include '../Powers/1politicasdem.php' ?>
	<?php include '../Powers/1prevderiesgos.php' ?>
	<?php include '../Powers/1stockrep.php' ?>
	<?php include '../Powers/Mantenibilidad.php' ?>
	<?php include '../Powers/politicasdem.php' ?>
	<!-- contenido antes del footer-->
	<?php include '../futer.php' ?>
</body>
</html>