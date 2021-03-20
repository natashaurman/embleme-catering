<?php

/* conectar con el servidor */
$host="localhost";
$user="root";
$pass="";
$db="contacto";

$conectar=mysqli_connect($host,$user,$pass,$db)or die("problemas al conectar");


mysqli_select_db($conectar,$db)or die("problemas al conectar con la base de datos");


/* recuperar las variables */
$nombre=$_POST ['nombre'];
$mail=$_POST ['mail'];
$telefono=$_POST ['telefono'];

/* hacemos la sentencia de SQL */
$sql="INSERT INTO datos VALUES('$nombre', '$mail', '$telefono')";

/* ejecutamos la sentencia sql */
$ejecutar=mysqli_query($sql);

/* verificamos la ejecución */
if(!$ejecutar) {
    echo"hubo algun error";
} else {
    echo"datos guardados correctamente <br><a href='index.html'>volver</a>";
}

?>