<?php
function CrearEstructura(){
	$base="LA_PIÑATA_FELIZ";
	$c=mysqli_connect("localhost","administrador","123456");
	mysqli_query ($c, "CREATE DATABASE IF NOT EXISTS $base");
	mysqli_select_db($c,"$base");
	$crear="CREATE TABLE IF NOT EXISTS animadores(idAnimador CHAR(3), NombreAnimador VARCHAR(20), Especialidad VARCHAR(20), Precio FLOAT(5,2),
		PRIMARY KEY (idAnimador))";
    $crear2="CREATE TABLE IF NOT EXISTS Clientes(idCliente CHAR(3), NombreCliente VARCHAR(20), Direccion VARCHAR(20),Email VARCHAR(20), PRIMARY KEY(idCliente))";
    $crear3="CREATE TABLE IF NOT EXISTS Fiestas(idFiesta CHAR(3), Fecha DATE, Especialidad VARCHAR(20), Duraccion INT(3), TipodeFiesta VARCHAR(15), Numero , EdadMedia INT(2), Importe FLOAT(5,2), IdCliente, PRIMARY KEY (idFiesta), F),)";
}
?>