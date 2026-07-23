<?php

include("conexion.php");


$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);


$sql="INSERT INTO usuarios (nombre,correo,usuario,contraseña) VALUES ('$nombre','$correo','$usuario','$contraseña')";


if($conexion->query($sql)){

echo "<script> alert('Usuario registrado'); window.location='inicio_sesion.html'; </script>
";

}else{

echo "Error: ".$conexion->error;

}


?>