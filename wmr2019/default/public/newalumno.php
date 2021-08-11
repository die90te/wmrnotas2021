<?php error_reporting (0);?>
<?php 
$idalum=$_POST['idalum'];
$rut=$_POST['rut'];
$dv=$_POST['dv'];
$nomalum=utf8_decode($_POST['nomalum']);
$curso=$_POST['curso'];
$letra=$_POST['letra'];
//echo $idalum;
//echo $rut.'-'.$dv;
//echo $nomalum;
//echo $curso;
//echo $letra; 
?>
<?php 


if(isset($rut))
{
include ('cone.php'); 

if ($connect) 

{
	if($curso<'7')
	{
		//echo "1° - 6°<br>";
		$consulta="INSERT INTO alumnos (id, alumnos_rut, alumnos_dvrut, alumnos_nombre, cursos_grado, cursos_letra) 
					VALUES ('$rut', '$rut', '$dv', '$nomalum', '$curso', '$letra');";
		$consultada="INSERT INTO datosalumnos (id, alumnos_nombre, religion1s, religion2s, observaciones1s, observaciones2s, asistencia1s, asistencia2s, orientacion1s, orientacion2s, fe1s1, fe2s1, fe3s1, cap1s1, cap2s1, cap3s1, rce1s1, rce2s1, fe1s2, fe2s2, fe3s2, cap1s2, cap2s2, cap3s2, rce1s2, rce2s2) 
				   VALUES ('', '$nomalum', '-', '-', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
		$consultan1="INSERT INTO n1 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";
		$consultan2="INSERT INTO n2 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan3="INSERT INTO n3 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan4="INSERT INTO n4 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan5="INSERT INTO n5 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan6="INSERT INTO n6 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan7="INSERT INTO n7 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan8="INSERT INTO n8 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan9="INSERT INTO n9 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan10="INSERT INTO n10 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENG. Y COMUNIC.','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ARTES VISUALES', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MUSICA', '7', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultaprom="INSERT INTO promedios (id, alumnos_nombre, asignaturas_nombre, orden, valorp1, valorp2, valorf) 
		VALUES 
('', '$nomalum', 'LENG. Y COMUNIC.', '1', '0', '0', '0'), 
('', '$nomalum', 'MATEMATICA', '2', '0', '0', '0'), 
('', '$nomalum', 'CS. NATURALES', '3', '0', '0', '0'), 
('', '$nomalum', 'HISTORIA', '4', '0', '0', '0'), 
('', '$nomalum', 'TECNOLOGIA', '5', '0', '0', '0'), 
('', '$nomalum', 'ARTES VISUALES', '6', '0', '0', '0'), 
('', '$nomalum', 'MUSICA', '7', '0', '0', '0'), 
('', '$nomalum', 'ED. FISICA', '8', '0', '0', '0'), 
('', '$nomalum', 'INGLES', '9', '0', '0', '0');";



		//$resultado=mysqli_query($connect,$consulta,$consultada,$consultan1,$consultan2,$consultan3,$consultan4,$consultan5,$consultan6,$consultan7,$consultan8,$consultan9,$consultan10,$consultaprom);
		$resultado=mysqli_query($connect,$consulta);		
		$resultadoda=mysqli_query($connect,$consultada);
		$resultadon1=mysqli_query($connect,$consultan1);
		$resultadon2=mysqli_query($connect,$consultan2);
		$resultadon3=mysqli_query($connect,$consultan3);
		$resultadon4=mysqli_query($connect,$consultan4);
		$resultadon5=mysqli_query($connect,$consultan5);
		$resultadon6=mysqli_query($connect,$consultan6);
		$resultadon7=mysqli_query($connect,$consultan7);
		$resultadon8=mysqli_query($connect,$consultan8);
		$resultadon9=mysqli_query($connect,$consultan9);
		$resultadon10=mysqli_query($connect,$consultan10);
		$resultadoprom=mysqli_query($connect,$consultaprom);
		

		if ($resultado and $resultadoda and $resultadon1 and $resultadon2 and $resultadon3 and $resultadon4 and $resultadon5 and $resultadon6 and $resultadon7 and $resultadon8 and $resultadon9 and $resultadon10 and $resultadoprom) 
		{
			//echo "alumno registrado :)".'<br>';
			?>
			<script>
		alert('Alumno Registrado Ok!');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
		<?php
			
		}
		else
		{
			echo "error ingreso";
		}
	}
	else
	{
		//echo "7° y 8°".'<br>';
		$consulta="INSERT INTO alumnos (id, alumnos_rut, alumnos_dvrut, alumnos_nombre, cursos_grado, cursos_letra) 
					VALUES ('$rut', '$rut', '$dv', '$nomalum', '$curso', '$letra');";
		$consultada="INSERT INTO datosalumnos (id, alumnos_nombre, religion1s, religion2s, observaciones1s, observaciones2s, asistencia1s, asistencia2s, orientacion1s, orientacion2s, fe1s1, fe2s1, fe3s1, cap1s1, cap2s1, cap3s1, rce1s1, rce2s1, fe1s2, fe2s2, fe3s2, cap1s2, cap2s2, cap3s2, rce1s2, rce2s2) 
				   VALUES ('', '$nomalum', '-', '-', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
		$consultan1="INSERT INTO n1 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";
		$consultan2="INSERT INTO n2 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan3="INSERT INTO n3 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan4="INSERT INTO n4 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan5="INSERT INTO n5 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan6="INSERT INTO n6 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan7="INSERT INTO n7 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan8="INSERT INTO n8 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan9="INSERT INTO n9 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultan10="INSERT INTO n10 (id, cursos_grado, cursos_letra, asignaturas_nombre, orden, alumnos_nombre, valor, valor2) 
		VALUES 
('', '$curso', '$letra', 'LENGUA Y LITERATURA','1', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'MATEMATICA', '2', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'CS. NATURALES', '3', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'HISTORIA', '4', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'TECNOLOGIA', '5', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. ARTISTICA', '6', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'ED. FISICA', '8', '$nomalum', '0', '0'), 
('', '$curso', '$letra', 'INGLES', '9', '$nomalum', '0', '0');";

		$consultaprom="INSERT INTO promedios (id, alumnos_nombre, asignaturas_nombre, orden, valorp1, valorp2, valorf) 
		VALUES 
('', '$nomalum', 'LENGUA Y LITERATURA', '1', '0', '0', '0'), 
('', '$nomalum', 'MATEMATICA', '2', '0', '0', '0'), 
('', '$nomalum', 'CS. NATURALES', '3', '0', '0', '0'), 
('', '$nomalum', 'HISTORIA', '4', '0', '0', '0'), 
('', '$nomalum', 'TECNOLOGIA', '5', '0', '0', '0'), 
('', '$nomalum', 'ED. ARTISTICA', '6', '0', '0', '0'), 
('', '$nomalum', 'ED. FISICA', '8', '0', '0', '0'), 
('', '$nomalum', 'INGLES', '9', '0', '0', '0');";



		//$resultado=mysqli_query($connect,$consulta,$consultada,$consultan1,$consultan2,$consultan3,$consultan4,$consultan5,$consultan6,$consultan7,$consultan8,$consultan9,$consultan10,$consultaprom);
		$resultado=mysqli_query($connect,$consulta);		
		$resultadoda=mysqli_query($connect,$consultada);
		$resultadon1=mysqli_query($connect,$consultan1);
		$resultadon2=mysqli_query($connect,$consultan2);
		$resultadon3=mysqli_query($connect,$consultan3);
		$resultadon4=mysqli_query($connect,$consultan4);
		$resultadon5=mysqli_query($connect,$consultan5);
		$resultadon6=mysqli_query($connect,$consultan6);
		$resultadon7=mysqli_query($connect,$consultan7);
		$resultadon8=mysqli_query($connect,$consultan8);
		$resultadon9=mysqli_query($connect,$consultan9);
		$resultadon10=mysqli_query($connect,$consultan10);
		$resultadoprom=mysqli_query($connect,$consultaprom);
		

		if ($resultado and $resultadoda and $resultadon1 and $resultadon2 and $resultadon3 and $resultadon4 and $resultadon5 and $resultadon6 and $resultadon7 and $resultadon8 and $resultadon9 and $resultadon10 and $resultadoprom) 
		{
			//echo "alumno registrado :)".'<br>';
			?>
			<script>
		alert('Alumno Registrado Ok!');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
		<?php
			
		}
		else
		{
			echo "error ingreso";
		}
	}
		
}
}
else
{
?>
<script>
		alert('anda a Laaar!!');
		window.location.href='http://localhost/wmr/default/sistema/admin';
		</script>
<?php
mysqli_close($connect);	
}
?>