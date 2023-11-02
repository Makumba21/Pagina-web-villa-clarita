<?php 
include("php/conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 2 && strlen($_POST['email']) >= 2 && strlen($_POST['password']) >= 2 && strlen($_POST['telphone']) >= 2 ) {
	    $name = trim($_POST['name']);
        $email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$telphone = trim($_POST['telphone']);
	    $fecha = date("d/m/y");

     $consulta = "INSERT INTO cliente(nomCliente, contraCliente, emailCliente, telCliente,fecha) VALUES ('$name','$password','$email','$telphone','$fecha')";
	    $resultado = mysqli_query($conex,$consulta);
     header("location: inicio.php");
		
		

   
    }
    
}



?>