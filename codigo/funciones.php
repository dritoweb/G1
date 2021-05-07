<?php

function CrearBD($c){

	$base="LA_PIÑATA_FELIZ";
	$c=mysqli_connect("localhost","administrador","123456");
	mysqli_query ($c, "CREATE DATABASE IF NOT EXISTS $base");
	mysqli_select_db($c,"$base");
}
function conexionBD(&$c,&$usuario,&$contraseña){

	$base="LA_PIÑATA_FELIZ";
	$c=mysqli_connect("localhost",$usuario,$contraseña);
	mysli_connect($c,"$base");
}

function CrearTabla(){

	conexionBD($c,$usu,$contra);

	myqli_query($c,"CREATE TABLE IF NOT EXISTS animadores(idAnimador CHAR(3), NombreAnimador VARCHAR(20), Especialidad VARCHAR(20), Precio FLOAT(5,2),
		PRIMARY KEY (idAnimador))");

	myqli_query($c,"CREATE TABLE IF NOT EXISTS Clientes(idCliente CHAR(3), NombreCliente VARCHAR(20), Direccion VARCHAR(20),Email VARCHAR(20), PRIMARY KEY(idCliente))");
    myqli_query($c,"CREATE TABLE IF NOT EXISTS Fiestas(idFiesta CHAR(3), Fecha DATE, Especialidad VARCHAR(20), Duraccion INT(3), TipodeFiesta VARCHAR(15), Numero , EdadMedia INT(2), Importe FLOAT(5,2), IdCliente, PRIMARY KEY (idFiesta))");
}

function NuevosClientes(){

	conexionBD($c,$usu,$contra);
	
	$Usuario=$_POST['usuario'];
	$Nombre=$_POST['nombre'];
	$Direccion=$_POST['direccion'];
	$Email=$_POST['email']

	mysqli_query($c,"INSERT Clientes(UsuarioCliente,NombreCliente,Direccion,Email) VALUES ($Usuario,$nombre,$Direccion,$Email)")

}

function logearse(&$username,&$password){

	$Usuario=$_POST['usuario']
	$password=$_POST['contra']

		if ($usuario=="admin"){

			$usu="adminstrador"
			$contra= "123456"
			conexionBD($c,$usu,$contra);
			
		}else{
			
			$usu="usuario"
			$contra= "usuario"
			conexionBD($c,$usu,$contra);

		}
		$_SESSION['usuario']=$usuario;
		
}

?>
