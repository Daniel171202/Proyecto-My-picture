<?php
	// Conexión con la base de datos

	$conexion = mysqli_connect('localhost', 'root', '', 'mypicture');

	$total=$_POST['monto'];
	$nombre=$_POST['nombre'];
	

	// INSERT INTO 

	$sql="INSERT INTO ventas (nombre, total)
			values ('$nombre', '$total')";
					
	echo mysqli_query($conexion, $sql);
	header('Location: index.html');
?>