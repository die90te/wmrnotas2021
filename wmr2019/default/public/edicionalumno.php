
<?php error_reporting (0);?>
<?php


$idalumE = $_POST['idalumE'];
$idalumA = $_POST['idalumA'];
$rut= $_POST['rutA'];
$dv= $_POST['dvA'];
$nombre= $_POST['nombreA'];
$curso= $_POST['cursoA'];
$letra= $_POST['letraA'];

//echo $idalum;

if(isset($idalumE)) // BORRAR ALUMNO
{
	//echo "variable de eliminacion alumno enviada: ".$idalumE;
	include ('cone.php'); 

	if ($connect) 

	{
		$consulta="DELETE FROM alumnos WHERE id = '$idalumE'";

		$resultado=mysqli_query($connect,$consulta);

		if ($resultado) 
		{
			?>
		<script>
		alert('Alumno Eliminado');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
		<?php 
		}
		else
		{
			echo "error eliminar :(";
		}
	}
	else
	{
		echo "error conect";
	}
	mysqli_close($connect);
}

if(isset($idalumA)) //ACTUALIZAR A LUMNO
	{
		/*echo "variable de actualizar alumno enviada ID: ".$idalumA;
		echo $rut;
		echo $dv;
		echo $nombre;
		echo $curso;
		echo $letra;*/
		include ('cone.php'); 

	if ($connect) 

	{
		$consulta="UPDATE alumnos SET alumnos_nombre = '$nombre', `cursos_grado` = '$curso', `cursos_letra` = '$letra' 
		WHERE id = '$idalumA';";
		$consulta1="UPDATE n1 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta2="UPDATE n2 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta3="UPDATE n3 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta4="UPDATE n4 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta5="UPDATE n5 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta6="UPDATE n6 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta7="UPDATE n7 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta8="UPDATE n8 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta9="UPDATE n9 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";
		$consulta10="UPDATE n10 SET cursos_grado = '$curso' WHERE alumnos_nombre = '$nombre' ";



		$resultado=mysqli_query($connect,$consulta);
		$resultado1=mysqli_query($connect,$consulta1);
		$resultado2=mysqli_query($connect,$consulta2);
		$resultado3=mysqli_query($connect,$consulta3);
		$resultado4=mysqli_query($connect,$consulta4);
		$resultado5=mysqli_query($connect,$consulta5);
		$resultado6=mysqli_query($connect,$consulta6);
		$resultado7=mysqli_query($connect,$consulta7);
		$resultado8=mysqli_query($connect,$consulta8);
		$resultado9=mysqli_query($connect,$consulta9);
		$resultado10=mysqli_query($connect,$consulta10);

		if ($resultado) 
		{
			?>
		<script>
		alert('Registro de datos Actualizado');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
		<?php 
		}
		else
		{
			echo "error actualziar :(";
		}
	}
	else
	{
		echo "error conect";
	}
	mysqli_close($connect);
	}



?>
<script>
		alert('Anda a laar!!!');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>