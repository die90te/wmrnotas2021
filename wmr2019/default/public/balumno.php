 <?php error_reporting (0);?>

<?php 
$rut = $_POST["alumnos_rut"];
$dv = $_POST["alumnos_dvrut"];
//echo $rut.'-'.$dv.'<br>';
?>
<?php 
include ('cone.php'); 

if ($connect) 

{
	$consulta="SELECT * from alumnos where alumnos_rut = '$rut' and alumnos_dvrut ='$dv' ";

	$resultado=mysqli_query($connect,$consulta);

	if ($resultado) 
	{
		if ($resultado->num_rows > 0) 
		{
			while ($row = $resultado->fetch_assoc()) 
			{    
				$idalum = $row['id'];
				$nombre = utf8_encode($row['alumnos_nombre']);
				echo $rut.'-'.$dv.'<br>';
				echo $nombre.'<br>';
				$curso = $row['cursos_grado'];
				$letra = $row['cursos_letra'];
				echo $row['cursos_grado'].'° '.$row['cursos_letra'].'<br>';
				echo "<button id='baa' onclick='ver();' title='Actualizar Registro'><img width='35' height='35' src='https://cdn1.iconfinder.com/data/icons/basic-ui-elements-color-round/3/52-512.png'></button>";

				echo "<form id='fba' name='fba' style='float: left;'>";
				echo '<input type="hidden" id="idalum" name="idalum" value="'.$idalum.'">';		
				echo "</form>";

				echo "<form id='fbe' name='fbe' style='float: left;' action='http://localhost/wmr/default/public/edicionalumno.php' method='post'>";
				echo '<input type="hidden" id="idalumE" name="idalumE" value="'.$idalum.'">';
				echo "<button title='Eliminar'><img width='35' height='35' src='http://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/256/Close-icon.png'></button>";
		
				echo "</form>";

			
			echo '<div id="fact" style="display: none;">';
			echo "<p>";
				echo "Actualizar Registro: ";
				echo "<form id='faalumno' name='faalumno' action='http://localhost/wmr/default/public/edicionalumno.php' method='post'>";
				echo '<input type="hidden" id="idalumA" name="idalumA" value="'.$idalum.'">';			
				echo '<table style="width: 80%;" border="0">
						<tbody>
						<tr>
						<td style="width: 10%;">RUT</td>
						<td style="width: 1%;">:</td>
						<td style="width: 85%;">
						<input style="border: none; text-align: right" readonly type="text" value="'.$rut.'" size="6" name="rutA"> 
						- <input style="border: none;" readonly="true" type="text" value="'.$dv.'" size="2" name="dvA"></td>
						</tr>
						<td style="width: 10%;">NOMBRE</td>
						<td style="width: 1%;">:</td>
						<td style="width: 85%;"><input name="nombreA" required type="text" size="50%" value="'.utf8_encode($nombre).'"></td>
						</tr>
						<tr>
						<td style="width: 10%;">CURSO</td>
						<td style="width: 1%;">:</td>
						<td style="width: 85%;">
						<select name="cursoA" id="cursoA" required>;
				          <option value="'.$curso.'">'.$curso.'°</option>
				          <option value=" ">-</option>
				          <option value="1">1°</option>
				          <option value="2">2°</option>
				          <option value="3">3°</option>
				          <option value="4">4°</option>
				          <option value="5">5°</option>
				          <option value="6">6°</option>
				          <option value="7">7°</option>
				          <option value="8">8°</option>
	        			</select>
						<select name="letraA" id="letraA" required>;			          
				          <option value="'.$letra.'">'.$letra.'</option>
				          <option value=" ">-</option>
				          <option value="A">A</option>
				          <option value="B">B</option>
				          <option value="C">C</option>
				        </select></td>
						</tr>
						</tbody>
						</table>';
				//echo "<button title='Eliminar' onclick='window.submit();'>Guardar</button>";
				echo  "<input type='submit' value='Guardar'>";
				echo "</form>";
			echo "</p>";
			echo "</div>";
			}
		}
		else
		{
			echo "Alumno: ".$rut.'-'.$dv." NO Registrado";
			echo '<p><div style="border: solid 1px #DFDCCD; width: 100%"></div></p>';
			echo "<p>";
			echo "Nuevo Registro: ";
			echo "<form id='fnalumno' name='fnalumno' action='http://localhost/wmr/default/public/newalumno.php' method='post'>";
			echo '<input type=hidden id="idalum" name="idalum">';			
			echo '<table style="width: 80%;" border="0">
					<tbody>
					<tr>
					<td style="width: 10%;">RUT</td>
					<td style="width: 1%;">:</td>
					<td style="width: 85%;">
					<input style="border: none; text-align: right" readonly type="text" name="rut" id="rut" value="'.$rut.'" size="6"> 
					- <input style="border: none;" readonly="true" type="text" id="dv" name="dv" value="'.$dv.'" size="2"></td>
					</tr>
					<td style="width: 10%;">NOMBRE</td>
					<td style="width: 1%;">:</td>
					<td style="width: 85%;"><input required name="nomalum" type="text" size="50%"></td>
					</tr>
					<tr>
					<td style="width: 10%;">CURSO</td>
					<td style="width: 1%;">:</td>
					<td style="width: 85%;">
					<select name="curso" id="curso" required>;
			          <option value="">CURSO</option>
			          <option value="1">1°</option>
			          <option value="2">2°</option>
			          <option value="3">3°</option>
			          <option value="4">4°</option>
			          <option value="5">5°</option>
			          <option value="6">6°</option>
			          <option value="7">7°</option>
			          <option value="8">8°</option>
        			</select>
					<select name="letra" id="letra" required>;			          
			          <option value="A">A</option>
			          <option value="B">B</option>
			          <option value="C">C</option>
			        </select></td>
					</tr>
					</tbody>
					</table>';
			echo "<input type='submit' id='bina' value='Guardar'>";
			echo "</form>";
			echo "</p>";
			 
		}
	}
	else 
	{
		echo "error en la ejecución de la consulta. <br />";
	}
}



?>

