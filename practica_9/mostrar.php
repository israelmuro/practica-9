<meta charset="utf8"/>
<body background="LIBRERIA.jpg">
<center>
<h1> <font color="White">Libros en Existencia</h1>
<?php
   include("cone.php");
   $consulta=mysql_query("select * from libros")or die(mysql_error());
   $registro=mysql_fetch_array($consulta);
   echo "<table border>";
   echo "<th> autor";
   echo "<th> titulo";
   echo "<th> editorial";
   echo "<th> fecha edicion";
   echo "<th> SBN";

   do{
   	$a=$registro['autor'];
    $t=$registro['titulo'];
    $e=$registro['editorial'];
    $f=$registro['fecha_edicion'];
    $s=$registro['SBN'];
    echo "<tr><center><td> $a </td> <td> $t </td>  <td> $e </td>  <td> $f </td>  <td> $s </td></center> </tr>";
   } while ($registro=mysql_fetch_array($consulta));
   echo"</table>";
   ?> 

<form  action="indice.html" method="post">
<br/>
<input  type="submit" name="regresar" value ="regresar a indice"><br><br>
</form>

    