<div style="text-align: center; height: 215px; border: none;" >
<?php header( 'Content-type: hidden/html; charset=UTF-8' );?>

<?php 

$alumno = $_POST["s2"];
$al2 = utf8_decode($alumno);
//echo $alumno;
//echo "<br>";
//echo utf8_encode($al2);
//$asign = addslashes(htmlspecialchars($_POST["valorCaja2"]));

//$nota = addslashes(htmlspecialchars($_POST["valorCaja3"]));



//echo $alumno;

include ('cone.php');

if ($connect) 

{

			echo '<div id="datagrid"  style="font-size:12px; margin-left: 0,5cm;">

				<table border="1" width="30%" cellspacing="0px" align="center" style="float: left;">';

				$consulta="SELECT * from n1 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											

											echo "<tr style='font-weight: bold;'>";

													echo "<td width='24%'>ASIGNATURAS</td>";

													echo "<td width='5%'>N1</td>";

													echo "</tr>"; 

													$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											$asignatura = $row['asignaturas_nombre'];

    											$n1 = $row['valor2'];

    											$ntn1 = 'n1'.$al2.$a;

    												echo "<tr>";

													echo "<td>".$asignatura.'<br>'.

	"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													echo "</td>";

													echo "<td id='nt1$a' style=''>".$n1.'<br>'.

	"<input type='hidden' size='2' value='$n1' name='$ntn1' id='$ntn1' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

				echo "</table>";

				echo "</div>";

		echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n2 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											 

											echo "<tr style='font-weight: bold;' id='n2'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N2</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n2 = $row['valor2'];

    											$ntn2 = 'n2'.$al2.$a;

	

    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt2$a' style=''>".$n2.'<br>'.

	"<input type='hidden' size='2' value='$n2' name='$ntn2' id='$ntn2' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n3 where alumnos_nombre='$al2' ORDER BY orden ASC";

				

			



									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											//echo $resultado->num_rows; 

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N3</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n3 = $row['valor2'];

    											$ntn3 = 'n3'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt3$a' style=''>".$n3.'<br>'.

	"<input type='hidden' size='2' value='$n3' name='$ntn3' id='$ntn3' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n4 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N4</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n4 = $row['valor2'];

    											$ntn4 = 'n4'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt4$a' style=''>".$n4.'<br>'.

	"<input type='hidden' size='2' value='$n4' name='$ntn4' id='$ntn4' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n5 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N5</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n5 = $row['valor2'];

    											$ntn5 = 'n5'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt5$a' style=''>".$n5.'<br>'.

	"<input type='hidden' size='2' value='$n5' name='$ntn5' id='$ntn5' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n6 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N6</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n6 = $row['valor2'];

    											$ntn6 = 'n6'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt6$a' style=''>".$n6.'<br>'.

	"<input type='hidden' size='2' value='$n6' name='$ntn6' id='$ntn6' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n7 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{ 

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N7</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n7 = $row['valor2'];

    											$ntn7 = 'n7'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt7$a' style=''>".$n7.'<br>'.

	"<input type='hidden' size='2' value='$n7' name='$ntn7' id='$ntn7' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n8 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N8</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n8 = $row['valor2'];

    											$ntn8 = 'n8'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt8$a' style=''>".$n8.'<br>'.

	"<input type='hidden' size='2' value='$n8' name='$ntn8' id='$ntn8' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n9 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N9</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n9 = $row['valor2'];

    											$ntn9 = 'n9'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt9$a' style=''>".$n9.'<br>'.

	"<input type='hidden' size='2' value='$n9' name='$ntn9' id='$ntn9' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';	



			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n10 where alumnos_nombre='$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr style='font-weight: bold;'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='4%'>N10</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n10 = $row['valor2'];

    											$ntn10 = 'n10'.$al2.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt10$a' style=''>".$n10.'<br>'.

	"<input type='hidden' size='2' value='$n10' name='$ntn10' id='$ntn10' >";

													echo "</td>";

													echo "</tr>";    

													$a++;  

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></div>';

			//////////////////////////promedio de notass/////////////////////////////////



			echo '<div id="datagrid"  style="font-size:12px;">
			<form method="post" id="formulariop2" name="formulariop">

				<input type="hidden" size="50" name="nomalum" value="'.utf8_encode($al2).'" >
				<table border="1" width="6%" cellspacing="0px" align="left" style="float: left; font-size:12px">';
				$consulta="SELECT * from n10 where alumnos_nombre='$al2' ORDER BY orden ASC";
									$resultado=mysqli_query($connect,$consulta);
									if ($resultado) 
									{
										if ($resultado->num_rows > 0) 
										{	
											echo "<tr cellspacing='0px'>";
													 //echo "<td>ASIGNATURAS</td>";
													echo "<td width='4%' cellspacing='0px' style='font-weight: bold;'> PROM.</td>";
													echo "</tr>"; 
											$a=1;
    										while ($row = $resultado->fetch_assoc()) 
    										{     

    												$curso = $row['cursos_grado'];
    												$pasig=$row['asignaturas_nombre']; 
    												echo "<tr>";
													//echo "<td>";

							echo "<input type='hidden' name='pasig$a' id='pasig$a' value='$pasig' 

							style='text-align: center; height: 10px; font-size: 11px; ' >";

													//echo "</td>";



													echo "<td>";

						echo "<input readonly='true' style='text-align: center; height: 10px; border: none; font-weight: bold ' 

							type='text' size='4' value='' name='promedio$a' id='promedio$a' >";

													echo "</td>";



													echo "</tr>";   

											$a++;   

    										}

    										 

    									}

    									else

    									{

    										echo "NO HAY ELEMENTOS";

    									}

									}

									else 

									{

										echo "error en la ejecución de la consulta. <br />";

									}

			echo '</table></form></div>';	

		 

			
			echo "<p><br></p>";
			echo '<div id="datagrid"  style="font-size:20px;">

				<table border="0" width="85%" cellspacing="0px" align="center">';

				 echo "<tr>";

				 echo "<td align='right'>Promedio 2° Semestre:  

				 
				 <input readonly='true' type='text' height='20px' name='pfinal2s' id='pfinal2s' 

				 style='text-align: center; font-weight: bold; font-size: 20px; border: none;' value='' size='3'></td>";

				 
				 echo "</tr>";

			echo '</table>';
			echo "<p><br></p>";

			echo '</div>';

			/////////////////////// promedio anual 7////////////////////
			 



									 

}			





						

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<!-- PROMEDIO asignatura 1--> 

<script>

	var alum = '<?php echo $al2;?>';

	var lenguaje = ["n1"+alum+"1", "n2"+alum+"1", "n3"+alum+"1", "n4"+alum+"1", "n5"+alum+"1",

			"n6"+alum+"1", "n7"+alum+"1", "n8"+alum+"1", "n9"+alum+"1", "n10"+alum+"1"];



	var n1 = document.getElementById(lenguaje[0]).value;

	var n2 = document.getElementById(lenguaje[1]).value;

	var n3 = document.getElementById(lenguaje[2]).value;

	var n4 = document.getElementById(lenguaje[3]).value;

	var n5 = document.getElementById(lenguaje[4]).value;

	var n6 = document.getElementById(lenguaje[5]).value;

	var n7 = document.getElementById(lenguaje[6]).value;

	var n8 = document.getElementById(lenguaje[7]).value;

	var n9 = document.getElementById(lenguaje[8]).value;

	var n10 = document.getElementById(lenguaje[9]).value;	



	var suma = parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat(n4)+parseFloat(n5)

		  	  +parseFloat(n6)+parseFloat(n7)+parseFloat(n8)+parseFloat(n9)+parseFloat(n10);



		if(n1!='0')

		{

			cont=1;

			 

		}

		if(n2!='0')

		{

			cont=2;

			 

		}

			 

		if(n3!='0')

		{

			cont=3;

			 
		}

			 

		if(n4!='0')

		{

			cont=4;

			 

		}

			 

		if(n5!='0')

		{

			cont=5;

			 

		}

		 

		if(n6!='0')

		{

			cont=6;

			 

		}

		 

		if(n7!='0')

		{

			cont=7;

			 

		}

		 

		if(n8!='0')

		{

			cont=8;

			 

		}

		 

		if(n9!='0')

		{

			cont=9;

			 

		}

		 

		if(n10!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio1").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 2--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig2 = ["n1"+alum+"2", "n2"+alum+"2", "n3"+alum+"2", "n4"+alum+"2", "n5"+alum+"2",

			"n6"+alum+"2", "n7"+alum+"2", "n8"+alum+"2", "n9"+alum+"2", "n10"+alum+"2"];

	var n1a2 = document.getElementById(asig2[0]).value;

	var n2a2 = document.getElementById(asig2[1]).value;

	var n3a2 = document.getElementById(asig2[2]).value;

	var n4a2 = document.getElementById(asig2[3]).value;

	var n5a2 = document.getElementById(asig2[4]).value;

	var n6a2 = document.getElementById(asig2[5]).value;

	var n7a2 = document.getElementById(asig2[6]).value;

	var n8a2 = document.getElementById(asig2[7]).value;

	var n9a2 = document.getElementById(asig2[8]).value;

	var n10a2 = document.getElementById(asig2[9]).value;	

	var suma = parseFloat(n1a2)+parseFloat(n2a2)+parseFloat(n3a2)+parseFloat(n4a2)+parseFloat(n5a2)

		  	  +parseFloat(n6a2)+parseFloat(n7a2)+parseFloat(n8a2)+parseFloat(n9a2)+parseFloat(n10a2);

		if(n1a2!='0')

		{

			cont=1;

			 

		}

			 

		if(n2a2!='0')

		{

			cont=2;

			 

		}

			 

		if(n3a2!='0')

		{

			cont=3;

			 

		}

			 

		if(n4a2!='0')

		{

			cont=4;

			 

		}

			 

		if(n5a2!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a2!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a2!='0')

		{

			cont=7;

		 
		}

		 

		if(n8a2!='0')

		{

			cont=8;

			 
		}

		 

		if(n9a2!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a2!='0')

		{

			cont=10;

			 

		}

		 

	var prom = suma/cont;

	document.getElementById("promedio2").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 3--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig3 = ["n1"+alum+"3", "n2"+alum+"3", "n3"+alum+"3", "n4"+alum+"3", "n5"+alum+"3",

			"n6"+alum+"3", "n7"+alum+"3", "n8"+alum+"3", "n9"+alum+"3", "n10"+alum+"3"];



	var n1a3 = document.getElementById(asig3[0]).value;

	var n2a3 = document.getElementById(asig3[1]).value;

	var n3a3 = document.getElementById(asig3[2]).value;

	var n4a3 = document.getElementById(asig3[3]).value;

	var n5a3 = document.getElementById(asig3[4]).value;

	var n6a3 = document.getElementById(asig3[5]).value;

	var n7a3 = document.getElementById(asig3[6]).value;

	var n8a3 = document.getElementById(asig3[7]).value;

	var n9a3 = document.getElementById(asig3[8]).value;

	var n10a3 = document.getElementById(asig3[9]).value;	



	var suma = parseFloat(n1a3)+parseFloat(n2a3)+parseFloat(n3a3)+parseFloat(n4a3)+parseFloat(n5a3)

		  	  +parseFloat(n6a3)+parseFloat(n7a3)+parseFloat(n8a3)+parseFloat(n9a3)+parseFloat(n10a3);



		if(n1a3!='0')

		{

			cont=1;

			 

		}

			if(n2a3!='0')

		{

			cont=2;

			 

		}

		

		if(n3a3!='0')

		{

			cont=3;

			 

		}

		if(n4a3!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a3!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a3!='0')

		{

			cont=6;

		 
		}

		 

		if(n7a3!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a3!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a3!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a3!='0')

		{

			cont=10;

			 
		}

		 



	var prom = suma/cont;

	document.getElementById("promedio3").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 4--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig4 = ["n1"+alum+"4", "n2"+alum+"4", "n3"+alum+"4", "n4"+alum+"4", "n5"+alum+"4",

			"n6"+alum+"4", "n7"+alum+"4", "n8"+alum+"4", "n9"+alum+"4", "n10"+alum+"4"];



	var n1a4 = document.getElementById(asig4[0]).value;

	var n2a4 = document.getElementById(asig4[1]).value;

	var n3a4 = document.getElementById(asig4[2]).value;

	var n4a4 = document.getElementById(asig4[3]).value;

	var n5a4 = document.getElementById(asig4[4]).value;

	var n6a4 = document.getElementById(asig4[5]).value;

	var n7a4 = document.getElementById(asig4[6]).value;

	var n8a4 = document.getElementById(asig4[7]).value;

	var n9a4 = document.getElementById(asig4[8]).value;

	var n10a4 = document.getElementById(asig4[9]).value;	



	var suma = parseFloat(n1a4)+parseFloat(n2a4)+parseFloat(n3a4)+parseFloat(n4a4)+parseFloat(n5a4)

		  	  +parseFloat(n6a4)+parseFloat(n7a4)+parseFloat(n8a4)+parseFloat(n9a4)+parseFloat(n10a4);



		if(n1a4!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a4!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a4!='0')

		{

			cont=3;

			 
		}

		 

		if(n4a4!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a4!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a4!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a4!='0')

		{

			cont=7;

		 

		}

		 

		if(n8a4!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a4!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a4!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio4").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 5--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig5 = ["n1"+alum+"5", "n2"+alum+"5", "n3"+alum+"5", "n4"+alum+"5", "n5"+alum+"5",

			"n6"+alum+"5", "n7"+alum+"5", "n8"+alum+"5", "n9"+alum+"5", "n10"+alum+"5"];



	var n1a5 = document.getElementById(asig5[0]).value;

	var n2a5 = document.getElementById(asig5[1]).value;

	var n3a5 = document.getElementById(asig5[2]).value;

	var n4a5 = document.getElementById(asig5[3]).value;

	var n5a5 = document.getElementById(asig5[4]).value;

	var n6a5 = document.getElementById(asig5[5]).value;

	var n7a5 = document.getElementById(asig5[6]).value;

	var n8a5 = document.getElementById(asig5[7]).value;

	var n9a5 = document.getElementById(asig5[8]).value;

	var n10a5 = document.getElementById(asig5[9]).value;	



	var suma = parseFloat(n1a5)+parseFloat(n2a5)+parseFloat(n3a5)+parseFloat(n4a5)+parseFloat(n5a5)

		  	  +parseFloat(n6a5)+parseFloat(n7a5)+parseFloat(n8a5)+parseFloat(n9a5)+parseFloat(n10a5);



		if(n1a5!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a5!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a5!='0')

		{

			cont=3;

			 

		}

		 

		if(n4a5!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a5!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a5!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a5!='0')

		{

			cont=7;
 

		}

		 

		if(n8a5!='0')

		{

			cont=8;

		 
		}

		 

		if(n9a5!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a5!='0')

		{

			cont=10;
 

		}

		 

	var prom = suma/cont;

	document.getElementById("promedio5").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 6--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig6 = ["n1"+alum+"6", "n2"+alum+"6", "n3"+alum+"6", "n4"+alum+"6", "n5"+alum+"6",

			"n6"+alum+"6", "n7"+alum+"6", "n8"+alum+"6", "n9"+alum+"6", "n10"+alum+"6"];



	var n1a6 = document.getElementById(asig6[0]).value;

	var n2a6 = document.getElementById(asig6[1]).value;

	var n3a6 = document.getElementById(asig6[2]).value;

	var n4a6 = document.getElementById(asig6[3]).value;

	var n5a6 = document.getElementById(asig6[4]).value;

	var n6a6 = document.getElementById(asig6[5]).value;

	var n7a6 = document.getElementById(asig6[6]).value;

	var n8a6 = document.getElementById(asig6[7]).value;

	var n9a6 = document.getElementById(asig6[8]).value;

	var n10a6 = document.getElementById(asig6[9]).value;	



	var suma = parseFloat(n1a6)+parseFloat(n2a6)+parseFloat(n3a6)+parseFloat(n4a6)+parseFloat(n5a6)

		  	  +parseFloat(n6a6)+parseFloat(n7a6)+parseFloat(n8a6)+parseFloat(n9a6)+parseFloat(n10a6);



		if(n1a6!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a6!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a6!='0')

		{

			cont=3;

			 

		}

		 

		if(n4a6!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a6!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a6!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a6!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a6!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a6!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a6!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio6").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 7--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig7 = ["n1"+alum+"7", "n2"+alum+"7", "n3"+alum+"7", "n4"+alum+"7", "n5"+alum+"7",

			"n6"+alum+"7", "n7"+alum+"7", "n8"+alum+"7", "n9"+alum+"7", "n10"+alum+"7"];



	var n1a7 = document.getElementById(asig7[0]).value;

	var n2a7 = document.getElementById(asig7[1]).value;

	var n3a7 = document.getElementById(asig7[2]).value;

	var n4a7 = document.getElementById(asig7[3]).value;

	var n5a7 = document.getElementById(asig7[4]).value;

	var n6a7 = document.getElementById(asig7[5]).value;

	var n7a7 = document.getElementById(asig7[6]).value;

	var n8a7 = document.getElementById(asig7[7]).value;

	var n9a7 = document.getElementById(asig7[8]).value;

	var n10a7 = document.getElementById(asig7[9]).value;	



	var suma = parseFloat(n1a7)+parseFloat(n2a7)+parseFloat(n3a7)+parseFloat(n4a7)+parseFloat(n5a7)

		  	  +parseFloat(n6a7)+parseFloat(n7a7)+parseFloat(n8a7)+parseFloat(n9a7)+parseFloat(n10a7);



		if(n1a7!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a7!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a7!='0')

		{

			cont=3;

			 

		}

		 

		if(n4a7!='0')

		{

			cont=4;

			 
		}

		 

		if(n5a7!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a7!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a7!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a7!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a7!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a7!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio7").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 8--> 

<script>

	var alum = '<?php echo $al2;?>';

	var asig8 = ["n1"+alum+"8", "n2"+alum+"8", "n3"+alum+"8", "n4"+alum+"8", "n5"+alum+"8",

			"n6"+alum+"8", "n7"+alum+"8", "n8"+alum+"8", "n9"+alum+"8", "n10"+alum+"8"];



	var n1a8 = document.getElementById(asig8[0]).value;

	var n2a8 = document.getElementById(asig8[1]).value;

	var n3a8 = document.getElementById(asig8[2]).value;

	var n4a8 = document.getElementById(asig8[3]).value;

	var n5a8 = document.getElementById(asig8[4]).value;

	var n6a8 = document.getElementById(asig8[5]).value;

	var n7a8 = document.getElementById(asig8[6]).value;

	var n8a8 = document.getElementById(asig8[7]).value;

	var n9a8 = document.getElementById(asig8[8]).value;

	var n10a8 = document.getElementById(asig8[9]).value;	



	var suma = parseFloat(n1a8)+parseFloat(n2a8)+parseFloat(n3a8)+parseFloat(n4a8)+parseFloat(n5a8)

		  	  +parseFloat(n6a8)+parseFloat(n7a8)+parseFloat(n8a8)+parseFloat(n9a8)+parseFloat(n10a8);



		if(n1a8!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a8!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a8!='0')

		{

			cont=3;

			 

		}

		 

		if(n4a8!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a8!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a8!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a8!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a8!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a8!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a8!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio8").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 9--> 
<script>



	var cursoalum = "<?php echo $curso;?>";

	



	if(cursoalum < '7')

	{

		//document.getElementById('pfinal2s').value = cursoalum;

		var alum = '<?php echo $al2;?>';

		var asig9 = ["n1"+alum+"9", "n2"+alum+"9", "n3"+alum+"9", "n4"+alum+"9", "n5"+alum+"9",

			"n6"+alum+"9", "n7"+alum+"9", "n8"+alum+"9", "n9"+alum+"9", "n10"+alum+"9"];



	var n1a9 = document.getElementById(asig9[0]).value;

	var n2a9 = document.getElementById(asig9[1]).value;

	var n3a9 = document.getElementById(asig9[2]).value;

	var n4a9 = document.getElementById(asig9[3]).value;

	var n5a9 = document.getElementById(asig9[4]).value;

	var n6a9 = document.getElementById(asig9[5]).value;

	var n7a9 = document.getElementById(asig9[6]).value;

	var n8a9 = document.getElementById(asig9[7]).value;

	var n9a9 = document.getElementById(asig9[8]).value;

	var n10a9 = document.getElementById(asig9[9]).value;	



	var suma = parseFloat(n1a9)+parseFloat(n2a9)+parseFloat(n3a9)+parseFloat(n4a9)+parseFloat(n5a9)

		  	  +parseFloat(n6a9)+parseFloat(n7a9)+parseFloat(n8a9)+parseFloat(n9a9)+parseFloat(n10a9);



		if(n1a9!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a9!='0')

		{

			cont=2;

			 

		}

		 

		if(n3a9!='0')

		{

			cont=3;

			 

		}

		 

		if(n4a9!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a9!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a9!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a9!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a9!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a9!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a9!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio9").value = Math.round(prom);



	var p1 = document.getElementById('promedio1').value;

	var p2 = document.getElementById('promedio2').value;

	var p3 = document.getElementById('promedio3').value;

	var p4 = document.getElementById('promedio4').value;

	var p5 = document.getElementById('promedio5').value;

	var p6 = document.getElementById('promedio6').value;

	var p7 = document.getElementById('promedio7').value;

	var p8 = document.getElementById('promedio8').value;

	var p9 = document.getElementById('promedio9').value;



	var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)

		  	  +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9);



	var promp = sumap/9;

	document.getElementById("pfinal2s").value = Math.round(promp);



	}

	else

	{

		//document.getElementById('pfinal2s').value = cursoalum;

	var p1 = document.getElementById('promedio1').value;

	var p2 = document.getElementById('promedio2').value;

	var p3 = document.getElementById('promedio3').value;

	var p4 = document.getElementById('promedio4').value;

	var p5 = document.getElementById('promedio5').value;

	var p6 = document.getElementById('promedio6').value;

	var p7 = document.getElementById('promedio7').value;

	var p8 = document.getElementById('promedio8').value;

	 



	var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)

		  	  +parseFloat(p6)+parseFloat(p7)+parseFloat(p8);



	var promp = sumap/8;

	document.getElementById("pfinal2s").value = Math.round(promp);



	}

</script>

<!-- PROMEDIO FINAL-->

<script>

	/*var cursoalum = "<?php echo $curso;?>";

	document.getElementById('pfinal2s').value = cursoalum;

	if(cursoalum == "7")

	{

		document.getElementById('pfinal2s').value = '7basico';

	}

	else

	{

		document.getElementById('pfinal2s').value = cursoalum;	

	}*/

</script>





</head>

<body>

</body>

</html>

