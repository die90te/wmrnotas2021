<div style="text-align: center; height: 215px; border: none;" >
<?php header( 'Content-type: hidden/html; charset=UTF-8' );?>
 
<?php 

$alumno = $_POST["ff"];
$al2 = utf8_decode($alumno);
$rut = $_POST["rut"];
$curso = $_POST['cursoal'];
//echo $rut;
//echo "<br>";
//echo utf8_encode($al2);
//echo "<p><br></p>";
//noooooooooooo echo $al2;
//echo "<br>";
//$asign = addslashes(htmlspecialchars($_POST["valorCaja2"]));

//$nota = addslashes(htmlspecialchars($_POST["valorCaja3"]));



//echo $alumno;
include ('cone.php');

if ($connect) 

{

			echo '<div id="datagrid"  style="font-size:12px;">

				<table border="1" width="30%" cellspacing="0px" align="center" style="float: left;">';

				
				$consulta="SELECT * FROM promedios WHERE alumnos_nombre LIKE '$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											

											echo "<tr style='background-color: coral; font-weight: bold'>";

													//echo "<td width='50%'>ASIGNATURAS</td>";

													echo "<td>P. 1° SM.</td>";

													echo "</tr>"; 

													$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											$asignatura = $row['asignaturas_nombre'];

    											$n1 = $row['valorp1'];

    											$ntn1 = 'n1'.$rut.$a;

    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt11$a' style=''>".$n1.'<br>'.

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

				<table border="1" width="30%" cellspacing="0px" style="float: left;">';

				$consulta="SELECT * FROM promedios WHERE alumnos_nombre LIKE '$al2' ORDER BY orden ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											 

											echo "<tr id='n2' style='background-color: coral; font-weight: bold'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td>P. 2° SM.</td>";

													echo "</tr>"; 

    										$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n2 = $row['valorp2'];

    											$ntn2 = 'n2'.$rut.$a;

	

    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt12$a' style=''>".$n2.'<br>'.

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



			
			 



			 



			 



			 
			 



			 

			//////////////////////////promedio de notass/////////////////////////////////



			echo '<div id="datagrid"  style="font-size:12px;">
			<form method="post" id="formulariop" name="formulariop" acept-charset="UTF-8">

				<input type="hidden" size="50" name="nomalum" value="'.utf8_encode($al2).'" >
				<table border="1" width="30%"  cellspacing="0px" style="float: left; font-size:12px">';
				$consulta="SELECT * from n10 where alumnos_nombre='$al2' ORDER BY id desc";
									$resultado=mysqli_query($connect,$consulta);
									if ($resultado) 
									{
										if ($resultado->num_rows > 0) 
										{	
											echo "<tr cellspacing='0px' style='background-color: coral; font-weight: bold'>";
													 //echo "<td>ASIGNATURAS</td>";
													echo "<td cellspacing='0px'>P. F.</td>";
													echo "</tr>"; 
											$a=1;
    										while ($row = $resultado->fetch_assoc()) 
    										{     

    												//$curso = $row['cursos_grado'];
    												$pasig=$row['asignaturas_nombre']; 
    												echo "<tr>";
													//echo "<td>";

							echo "<input type='hidden' name='pasig$a' id='pasig$a' value='$pasig' 

							style='text-align: center; height: 10px; font-size: 11px; ' >";

													//echo "</td>";



													echo "<td>";

						echo "<input readonly='true' style='text-align: center; height: 10px; 
				border: none; font-weight: bold ' type='text' size='4' value='' name='promediof$a' id='promediof$a' >";

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

				<table border="0" width="90%" cellspacing="0px" align="left">';

				 echo "<tr>";

				 echo "<td align='center'>Prom. Final:  

				 
				 <input readonly='true' type='text' height='16px' name='pfinalanual' id='pfinalanual' 

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

	var alum = '<?php echo $rut;?>';

	var lenguaje = ["n1"+alum+"1", "n2"+alum+"1"];



	var n1 = document.getElementById(lenguaje[0]).value;

	var n2 = document.getElementById(lenguaje[1]).value;

		



	var suma = parseFloat(n1)+parseFloat(n2);



		if(n1!='0')

		{

			cont=1;

			 

		}

		if(n2!='0')

		{

			cont=2;

			 

		}

			 

		

		 



	var prom = suma/cont;

	document.getElementById("promediof1").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 2--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig2 = ["n1"+alum+"2", "n2"+alum+"2"];

	var n1a2 = document.getElementById(asig2[0]).value;

	var n2a2 = document.getElementById(asig2[1]).value;

	

	var suma = parseFloat(n1a2)+parseFloat(n2a2);

		if(n1a2!='0')

		{

			cont=1;

			 

		}

			 

		if(n2a2!='0')

		{

			cont=2;

			 

		}

			 

		

		 

	var prom = suma/cont;

	document.getElementById("promediof2").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 3--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig3 = ["n1"+alum+"3", "n2"+alum+"3"];



	var n1a3 = document.getElementById(asig3[0]).value;

	var n2a3 = document.getElementById(asig3[1]).value;

	 



	var suma = parseFloat(n1a3)+parseFloat(n2a3);



		if(n1a3!='0')

		{

			cont=1;

			 

		}

			if(n2a3!='0')

		{

			cont=2;

			 

		}

		 
	var prom = suma/cont;

	document.getElementById("promediof3").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 4--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig4 = ["n1"+alum+"4", "n2"+alum+"4"];



	var n1a4 = document.getElementById(asig4[0]).value;

	var n2a4 = document.getElementById(asig4[1]).value;

	 



	var suma = parseFloat(n1a4)+parseFloat(n2a4);



		if(n1a4!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a4!='0')

		{

			cont=2;

			 

		}

		 

		 
	var prom = suma/cont;

	document.getElementById("promediof4").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 5--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig5 = ["n1"+alum+"5", "n2"+alum+"5"];



	var n1a5 = document.getElementById(asig5[0]).value;

	var n2a5 = document.getElementById(asig5[1]).value;

	



	var suma = parseFloat(n1a5)+parseFloat(n2a5);



		if(n1a5!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a5!='0')

		{

			cont=2;

			 

		}

		 

		
		 

	var prom = suma/cont;

	document.getElementById("promediof5").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 6--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig6 = ["n1"+alum+"6", "n2"+alum+"6"];



	var n1a6 = document.getElementById(asig6[0]).value;

	var n2a6 = document.getElementById(asig6[1]).value;

	



	var suma = parseFloat(n1a6)+parseFloat(n2a6);



		if(n1a6!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a6!='0')

		{

			cont=2;

			 

		}

		 


	var prom = suma/cont;

	document.getElementById("promediof6").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 7--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig7 = ["n1"+alum+"7", "n2"+alum+"7"];



	var n1a7 = document.getElementById(asig7[0]).value;

	var n2a7 = document.getElementById(asig7[1]).value;

	



	var suma = parseFloat(n1a7)+parseFloat(n2a7);



		if(n1a7!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a7!='0')

		{

			cont=2;

			 

		}

		 

	



	var prom = suma/cont;

	document.getElementById("promediof7").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 8--> 

<script>

	var alum = '<?php echo $rut;?>';

	var asig8 = ["n1"+alum+"8", "n2"+alum+"8"];



	var n1a8 = document.getElementById(asig8[0]).value;

	var n2a8 = document.getElementById(asig8[1]).value;

	



	var suma = parseFloat(n1a8)+parseFloat(n2a8);



		if(n1a8!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a8!='0')

		{

			cont=2;

			 

		}

		

	var prom = suma/cont;

	document.getElementById("promediof8").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 9--> 
<script>



	var cursoalum = "<?php echo $curso;?>";

	



	if(cursoalum < '7')

	{

		//document.getElementById('pfinal1s').value = cursoalum;

		var alum = '<?php echo $rut;?>';

		var asig9 = ["n1"+alum+"9", "n2"+alum+"9"];



	var n1a9 = document.getElementById(asig9[0]).value;

	var n2a9 = document.getElementById(asig9[1]).value;

	



	var suma = parseFloat(n1a9)+parseFloat(n2a9);



		if(n1a9!='0')

		{

			cont=1;

			 

		}

		 

		if(n2a9!='0')

		{

			cont=2;

			 

		}

		 
 

	var prom = suma/cont;

	document.getElementById("promediof9").value = Math.round(prom);



	var p1 = document.getElementById('promediof1').value;

	var p2 = document.getElementById('promediof2').value;

	var p3 = document.getElementById('promediof3').value;

	var p4 = document.getElementById('promediof4').value;

	var p5 = document.getElementById('promediof5').value;

	var p6 = document.getElementById('promediof6').value;

	var p7 = document.getElementById('promediof7').value;

	var p8 = document.getElementById('promediof8').value;

	var p9 = document.getElementById('promediof9').value;



	var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)

		  	  +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9);



	var promp = sumap/9;

	document.getElementById("pfinalanual").value = Math.round(promp);



	}

	else

	{

		//document.getElementById('pfinal1s').value = cursoalum;

	var p1 = document.getElementById('promediof1').value;

	var p2 = document.getElementById('promediof2').value;

	var p3 = document.getElementById('promediof3').value;

	var p4 = document.getElementById('promediof4').value;

	var p5 = document.getElementById('promediof5').value;

	var p6 = document.getElementById('promediof6').value;

	var p7 = document.getElementById('promediof7').value;

	var p8 = document.getElementById('promediof8').value;

	 



	var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)

		  	  +parseFloat(p6)+parseFloat(p7)+parseFloat(p8);



	var promp = sumap/8;

	document.getElementById("pfinalanual").value = Math.round(promp);



	}

</script>

<!-- PROMEDIO FINAL-->

<script>

	/*var cursoalum = "<?php echo $curso;?>";

	document.getElementById('pfinal1s').value = cursoalum;

	if(cursoalum == "7")

	{

		document.getElementById('pfinal1s').value = '7basico';

	}

	else

	{

		document.getElementById('pfinal1s').value = cursoalum;	

	}*/

</script>





</head>

<body>

</body>

</html>

