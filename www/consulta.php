<?php

//Configuracion de la conexion a base de datos

  $bd_host = "localhost"; 


  $bd_usuario = "root"; 

  $bd_password = ""; 

  $bd_base = "ribosomatic"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 


//consulta todos los empleados

$sql=mysql_query("SELECT * FROM empleados",$con);

//muestra los datos consultados

  //haremos uso de tabla para tabular los resultados

  ?>

  <table style="border:1px solid #FF0000; color:#000099;width:400px;">


  <tr style="background:#99CCCC;">

  <td>Nombres</td>

  <td>Departamento</td>

  <td>Sueldo</td>


  </tr>

<?php

  while($row = mysql_fetch_array($sql)){

  echo "        <tr>";

  echo "                <td>".$row['nombres']."</td>";


  echo "                <td>".$row['departamento']."</td>";

  echo "                <td>".$row['sueldo']."</td>";

  echo "        </tr>";


  }

  ?>

  </table>