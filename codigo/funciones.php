<?php

function CrearBD($c){

	$base="LA_PIÑATA_FELIZ";
	$c=mysqli_connect("localhost","administrador","123456");
	mysqli_query ($c, "CREATE DATABASE IF NOT EXISTS $base");
	mysqli_select_db($c,"$base");
	mysli_exist($c);
}
function conexionBD(&$c,&$usuario,&$contraseña){

	$base="LA_PIÑATA_FELIZ";
	$c=mysqli_connect("localhost",$usuario,$contraseña);
	mysli_connect($c,"$base");
}

function CrearTabla(){

	conexionBD($c,$usu,$contra);
	
	//CREAR TABLA ANIMADORES.

	myqli_query($c,"CREATE TABLE IF NOT EXISTS animadores(
		idAnimador INT AUTO_INCREMENT,
		NombreAnimador VARCHAR(20), 
		Especialidad VARCHAR(20), 
		Precio FLOAT(5,2),
		PRIMARY KEY (idAnimador))");
	
	//CREAR TABLA CLIENTE.

	myqli_query($c,"CREATE TABLE IF NOT EXISTS Clientes(
		idCliente INT AUTO_INCREMENT, 
		NombreCliente VARCHAR(20), 
		Direccion VARCHAR(20),
		Email VARCHAR(20), 
		PRIMARY KEY(idCliente))");

	//CREAR TABLA FIESTAS.

    myqli_query($c,"CREATE TABLE IF NOT EXISTS Fiestas(
		idFiesta INT ,
		Fecha DATE,
		Especialidad VARCHAR(20),
		Duraccion INT(3), 
		TipodeFiesta VARCHAR(15), 
		NUMERO INT, 
		EdadMedia INT(2), 
		Importe FLOAT(5,2), 
		IdCliente INT, PRIMARY KEY (idFiesta),
		FOREIGN KEY (IcCliente) REFERENCES CLIENTES(IdCliente),
		FOREIGN KEY (TipodeFiesta) REFERENCES Tipodefiestas(Id)");

	//CREAR TABLA TIPO DE FIESTAS.

	myqli_query($c,"CREATE TABLE IF NOT EXISTS Tipodefiestas(
		Id INT AUTO_INCREMENT,
		Descripcion VARCHAR(30)")
	myqli_exist($c);
}

function NuevosClientes(){

	conexionBD($c,$usu,$contra);
	
	$Usuario=$_POST['usuario'];
	$Nombre=$_POST['nombre'];
	$Direccion=$_POST['direccion'];
	$Email=$_POST['email'];

	mysqli_query($c,"INSERT Clientes(UsuarioCliente,NombreCliente,Direccion,Email) VALUES ('$Usuario','$nombre','$Direccion','$Email')");

}

function logearse(&$username,&$password){

	$Usuario=$_POST['usuario'];
	$password=$_POST['contra'];

		if ($usuario=="admin" && $password=="123456"){

			$usu="adminstrador";
			$contra= "123456";
			conexionBD($c,$usu,$contra);

			
		}else{
			$usu="usuapp";
			$contra= "123";
			conexionBD($c,$usu,$contra);

			$array_Clientes=mysqli_query($c,"SELECT nombreCliente FROM Clientes");

			while ($array_Clientes = mysqli_fetch_row($array_Clientes)){
       
		 
		 
		 
				foreach($array_Clientes  as $clave){

				if($usuario==$clave){
					$usu=$usuario;
					$contra=$password;
					conexionBD($c,$usu,$contra);
				}else{

					echo "Este usuario no esta registrado";
				}
		  }
		 }


		}
		$_SESSION['usuario']=$usuario;

		
}

?>
