<html>
<?php

extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	$id = $_POST['id_pro'];
	require("connect_db.php");

	$sentendiaelimina = "delete from producto where id_pro = '$id'";
	echo $sentencia;
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentenciaelimina);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: conpro.php");

		echo "<script>location.href='conpro.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ELIMINADO")</script> ';

		echo "<script>location.href='conpro.php'</script>";


	}
?>
</html>