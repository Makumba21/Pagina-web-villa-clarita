<?php
include("php/conexion.php");

session_start();

if (!empty($_POST{"register"})) {
    if (!empty($_POST["name"]) and !empty($_POST["password"]) ) {
        
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
    
       $sql =$conex-> query("select *from cliente where nomCliente='$name' and contraCliente='$password' ");


       if ($datos=$sql->fetch_object()) {
        $_SESSION ["idCliente"]=$datos->idCliente;
        $_SESSION ["nomCliente"]=$datos->nomCliente;
        $_SESSION [""]=$datos->id;
        header("location: inicio.php");
       } else{
        echo "<div id='ok'>Acceso denegado, Verifica que tu contraseña o nombre de usuario esten correctos</div>";
       }
    
      
    } 
}
        
    
    


?>