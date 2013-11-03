<?php
//Conectarnos con la base de datos,
//Realizar la inserción de los datos a la tabla empleados, y
//Mediante un include llamar al archivo consulta.php que mostrará los registros incluyendo el nuevo ingresado.

//Configuracion de la conexion a base de datos

  $bd_host = "localhost"; 

  $bd_usuario = "root"; 


  $bd_password = ""; 

  $bd_base = "reumappbasedatos"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 

//variables POST

  $nom=$_POST['nombres'];
  
  $ape=$_POST['apellidos'];
  
  $email=$_POST['emails'];
  
  $pass=$_POST['contraseñas'];
  
  $dep=$_POST['departamento'];

  $suel=$_POST['sexo'];

//registra los datos del empleados

  $sql="INSERT INTO empleados (nombres, apellido, email, password, departamento, sexo) VALUES ('$nom','$ape','$email','$pass','$dep',$suel)";

mysql_query($sql,$con);

include('consulta.php');


  ?>