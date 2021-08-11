<?php error_reporting (0);?>

<?php
$asignatura=$_POST['asignatura'];
$act=$_POST['act'];
$eli=$_POST['eli'];

if(isset($asignatura) and isset($act))
{
	echo "Actualizacion de Registro: ";
	include ('cone.php'); 
	echo $asignatura;
	mysqli_close($connect);

}

elseif(isset($asignatura) and isset($eli))
{
	echo "Eliminacion de Registro: ";
	include ('cone.php'); 
	echo $asignatura;
	mysqli_close($connect);

}
else
{
	?>
	<script>
		alert('Alumno Eliminado');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
	<?php
}


?>
		

 