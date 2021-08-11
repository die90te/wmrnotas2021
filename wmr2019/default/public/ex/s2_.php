<?php
if ($connect) 

{

			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="40%" cellspacing="0px" align="left" style="float: left; margin-left: 10px;">';

				$consulta="SELECT * from n1 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											

											echo "<tr>";

													//echo "<td width='23%'>ASIGNATURAS</td>";
													echo '<td width="44%">ALUMNO</td>';

													echo "<td width='5%'>N1</td>";

											echo "</tr>"; 

													$a=1;
													$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											$asignatura = $row['asignaturas_nombre'];
    											$nombre = utf8_encode($row['alumnos_nombre']);

    											$n1 = $row['valor2'];

    											$ntn1 = 'n1'.$alumno.$a;

    												echo "<tr onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>";

										
													echo '<td onmouseover=this.style.background="#cc0000" onmouseout=this.style.background="white">'.$nombre.'<br>'.

	"<input type='hidden' size='10' value='$nombre' name='$nombre' id='$nombre'  >";

													echo "</td>";

													echo "<td id='nt1$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n1.'<br>'.

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

		echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n2 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											 

											echo "<tr id='n2'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N2</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n2 = $row['valor2'];

    											$ntn2 = 'n2'.$alumno.$a;

	

    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt2$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n2.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n3 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

				

			



									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											//echo $resultado->num_rows; 

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N3</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;
    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n3 = $row['valor2'];

    											$ntn3 = 'n3'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt3$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n3.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n4 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N4</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;
    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n4 = $row['valor2'];

    											$ntn4 = 'n4'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt4$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n4.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n5 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N5</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;
    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n5 = $row['valor2'];

    											$ntn5 = 'n5'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt5$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n5.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n6 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N6</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n6 = $row['valor2'];

    											$ntn6 = 'n6'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt6$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n6.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

								$consulta="SELECT * from n7 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";


									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{ 

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N7</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n7 = $row['valor2'];

    											$ntn7 = 'n7'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt7$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n7.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n8 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N8</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n8 = $row['valor2'];

    											$ntn8 = 'n8'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt8$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n8.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

								$consulta="SELECT * from n9 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";


									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N9</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n9 = $row['valor2'];

    											$ntn9 = 'n9'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt9$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n9.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left;">';

				$consulta="SELECT * from n10 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";

									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											echo "<tr>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%'>N10</td>";

													echo "</tr>"; 

    										$a=1;
    										$alumno=100;

    										while ($row = $resultado->fetch_assoc()) 

    										{        

    											//$asignatura = $row['asignaturas_nombre'];

    											$n10 = $row['valor2'];

    											$ntn10 = 'n10'.$alumno.$a;



    												echo "<tr>";

													//echo "<td>".$asignatura.'<br>'.

	//"<input type='hidden' size='10' value='$asignatura' name='$asignatura' id='$asignatura'  >";

													//echo "</td>";

													echo "<td id='nt10$a' onmouseover=this.style.background='#cc0000' onmouseout=this.style.background='white' style='height: 14px;'>".$n10.'<br>'.

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



			echo '<div id="datagrid"  style="font-size:10px;">

			<form method="post" id="formulariop">



				 



				<table border="1" width="5%" cellspacing="0px" align="left" style="float: left; font-size:10px">';

								$consulta="SELECT * from n10 where asignaturas_nombre = '$asignatura' and cursos_grado='$curso' ORDER BY alumnos_nombre ASC";




									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) 

									{

										if ($resultado->num_rows > 0) 

										{

											 

											 

											echo "<tr cellspacing='0px'>";

													 //echo "<td>ASIGNATURAS</td>";

													echo "<td width='5%' cellspacing='0px' style='background-color: #f2cdbc;'>PROM</td>";

													echo "</tr>"; 

											$a=1;

    										while ($row = $resultado->fetch_assoc()) 

    										{     

    												$curso = $row['cursos_grado'];

    												$pasig=$row['asignaturas_nombre']; 



    												echo "<tr>";

													echo "<td style='background-color: #f2cdbc; height: 14px;'>";

							echo "<input readonly='true' style='text-align: center; height: 10px; border: none; background-color: #f2cdbc; font-weight: bold' 

							type='text' size='2' value='' name='promedio$a' id='promedio$a' >";

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

		 

			///////////////////////////

			echo '<div id="datagrid"  style="font-size:20px;">

				<table border="0" width="85%" cellspacing="0px" style="float: left;">';

				 echo "<tr>";

				 echo "<td style='text-align: right; width: 93%'>Promedio Final: </td>";

				 echo "<td><input readonly='true' type='text' height='20px' name='pfinal1s' id='pfinal1s' 

				 style='text-align: center; font-weight: bold; font-size: 20px; border: none;' value='' size='4'></td>";

				 echo "</tr>";

			echo '</table></div>';



									 

}			



?>

						
