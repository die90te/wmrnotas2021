


<?php error_reporting (0);?> 
<center>
<p><br></p> 
<div> 

<?php

include("cone.php");

if(isset($_POST['semestre']))
{
	//$nota=$_POST['nota'];
	$s1=utf8_decode($_POST['s1']);
	$curso=$_POST['cs1'];
	$letra=$_POST['letra'];
	$asignatura=$_POST['asignatura'];
	$semestre=$_POST['semestre'];

	$tabla = 'g'.$curso.$semestre;


	/*
	//echo $nota.'<br>';
	echo "Curso: ".$curso.'° '.$letra.'<br>';
	echo $asignatura.'<br>';
	echo "Tabla/semestre: ".$tabla.'<br>';
	echo "<p><br></p>";
	//echo $semestre;
	*/
}

?>
 
<?php

	$consulta="SELECT * FROM $tabla 
	WHERE alumnos_nombre = '$s1'
	ORDER BY orden ASC";
	$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado->num_rows > 0) 
		{
			$ta=$resultado->num_rows;
			$totalalumnos=$ta+1;
			//echo $totalalumnos-1;
			echo "<form id='formularioprom1s' metho='post'>";
			echo "<input type='hidden' readonly name='nombre' value='".utf8_encode($s1)."'>";
			echo "<input type='hidden' readonly name='curso' value='".$curso."'>";
			echo "<input type='hidden' readonly name='s1' value='s1'>";

			echo "<table class='table-bordered' border='0' cellspacing='1' width:'100%' align='center' style='text-align: center; font-size: 12px;'>";
			echo "<tr>";
			echo "<td>ASIGNATURAS</td>";
			echo "<td id='tdn1'>N1</td>";
			echo "<td id='tdn2'>N2</td>";
			echo "<td id='tdn3'>N3</td>";
			echo "<td id='tdn4'>N4</td>";
			echo "<td id='tdn5'>N5</td>";
			echo "<td id='tdn6'>N6</td>";
			echo "<td id='tdn7'>N7</td>";
			echo "<td id='tdn8'>N8</td>";
			echo "<td id='tdn9'>N9</td>";
			echo "<td id='tdn10'>N10</td>";
			echo "<td>SUMA</td>";
			echo "<td>CONT</td>";
			echo "<td>PROMEDIO</td>";
			echo "<td>PROMEDIO-BD</td>";
			echo "</tr>";

			//$consultaprom = "SELECT avg(n1,n2,n3,n4,n5,n6,n7,n8,n9,n10) from $tabla 
			//WHERE asignaturas_nombre = '$asignatura' and cursos_grado='$curso' and cursos_letra='$letra' 
			//ORDER BY alumnos_nombre ASC";
			$c=1;
			while ($row = $resultado->fetch_assoc()) 
			{        
				$alumnos = utf8_encode($row['asignaturas_nombre']);
				$n1 = $row['n1'];
				$n2 = $row['n2'];
				$n3 = $row['n3'];
				$n4 = $row['n4'];
				$n5 = $row['n5'];
				$n6 = $row['n6'];
				$n7 = $row['n7'];
				$n8 = $row['n8'];
				$n9 = $row['n9'];
				$n10 = $row['n10'];
				$promedio = $row['promedio'];

				//echo $alumnos.'<br>';	
				/*
				echo "<td>".$n2."</td>";
				echo "<td>".$n3."</td>";
				echo "<td>".$n4."</td>";
				echo "<td>".$n5."</td>";
				echo "<td>".$n6."</td>";
				echo "<td>".$n7."</td>";
				echo "<td>".$n8."</td>";
				echo "<td>".$n9."</td>";
				echo "<td>".$n10."</td>";
				*/
				echo "<tr>";
				//echo "<td>".$alumnos."</td>";
echo "<td><input style='border:none; text-align:center;' readonly id='asig".$c."' name='asig".$c."' value='".$alumnos."'></td>";

echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n1' value='".$n1."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n2' value='".$n2."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n3' value='".$n3."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n4' value='".$n4."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n5' value='".$n5."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n6' value='".$n6."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n7' value='".$n7."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n8' value='".$n8."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n9' value='".$n9."'></td>";
echo "<td><input class='white' style='border:none; text-align:center;' readonly size='4' id='alu".$c."n10' value='".$n10."'></td>";
				
				echo "<td>";
				echo "<input type='text' style='border:none; text-align:center;' readonly size='2' id='salum".$c."'>";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' style='border:none; text-align:center;' readonly size='2' id='calum".$c."'>";
				echo "</td>";
				echo "<td><input style='border:none; text-align:center;' readonly size='2' name='palum".$c."' id='palum".$c."'></td>";
				
				echo "<td><input style='border:none; text-align:center;' readonly size='2' value='".$promedio."'></td>";
				 
				echo "</tr>";
				$c++;
			}
			echo "</tr>";
			echo "</table>";
			echo "</form>";
		}
		else
		{
			echo "no hay datos";
		}

?>

</div>
</center>
<p><br></p>
<!--alu".$c."n1-->
<script type="text/javascript">
	$(document).ready(function() {

		var totalu = <?php echo $totalalumnos; ?>;
		//alert(totalu);
		
		for (i = 1; i < totalu; i=i+1) 
		{
			//alert(totalu);
			for(i2 = 1; i2 < 11; i2=i2+1)
			{
				
				if(i2==1)
				{
					var suma = $('#alu'+i+'n'+i2).val();
					if($('#alu'+i+'n'+i2).val()!=0)
					{
						var c = i2;

						var sumada = $('#alu'+i+'n'+i2).val();
						
						$("#calum"+i).val(c);
						$("#salum"+i).val(sumada);
						var prom = sumada/c;
						$("#palum"+i).val(Math.round(prom));

					}
					 
				 	
				}

				else
				{
					var suma = sumada;
					if($('#alu'+i+'n'+i2).val()!=0)
					{
						var c = i2;

						var sumada = parseInt(suma)+parseFloat($('#alu'+i+'n'+i2).val());
						
						$("#calum"+i).val(c);

						var prom = sumada/c;
						$("#salum"+i).val(sumada);
						$("#palum"+i).val(Math.round(prom));
						
					
					}
					 

				}
				

				

			}
			
			
		} 
		
		//alert("cantidad: "+c);	 
		 
	});
		
</script>


 

