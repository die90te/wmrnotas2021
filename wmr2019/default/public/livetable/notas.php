<?php

include("connect.php");

if(isset($_POST['nota']))
{
	$nota=$_POST['nota'];
	$curso=$_POST['curso'];
	$letra=$_POST['letra'];
	$asignatura=$_POST['asignatura'];

	$tabla = 'g'.$curso.'s1';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf8" />
    <title> WMR - Notas</title>   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container" style="">    
		<div style="text-align:center;width:100%;font-size:24px;margin-bottom:30px;color: #2875BB;"> </div>
                <div class="row">			 
                    <table style="text-align: center;" border="1" class= "table table-striped table-bordered table-hover">
                        <thead style="text-align: center;">
                            <tr style="text-align: center;">
                            	<?php
                            		echo "<h4>";	
									echo $nota.' - ';
									echo $curso.'° '.$letra.' - ';
									echo $asignatura.' - ';
									echo $tabla.'<br>';
									echo "</h4>";
								?>
                            	<input type="hidden" id="vn"  value="<?php echo $tabla;?>" name="vn" /><br>
                                <th  colspan="1" rowspan="1" style="width: 65%; text-align: center;">NOMBRE</th>
                                <th colspan="1" rowspan="1" style="width: 35%; text-align: center;">NOTA</th>                          
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        	 
                        	if($nota==='n1')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysqli_query($connect, "SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

 

								$i=0;
								while($fetch = mysqli_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.$fetch['alumnos_nombre'].'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n1">'.$fetch['n1'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
                        	if($nota==='n2')
                        	{
                        		//echo "NOTA 2".'<br>';

                        		$query = mysqli_query($connect, "SELECT * from $tabla
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysqli_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n2">'.$fetch['n2'].'</td>
		                            </tr>';							
								}
                        	}
                        	////////////////////////////////////////////////////////
                        	if($nota==='n3')
                        	{
                        		//echo "NOTA 3".'<br>';

                        		$query = mysqli_query($connect, "SELECT * from $tabla
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysqli_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n3">'.$fetch['n3'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////////
                        	if($nota==='n4')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n4">'.$fetch['n4'].'</td>
		                            </tr>';							
								}
                        	}
                        	//////////////////////////////////////////////////////
                        	if($nota==='n5')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n5">'.$fetch['n5'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
                        	if($nota==='n6')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n6">'.$fetch['n6'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
							if($nota==='n7')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n7">'.$fetch['n7'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
                        	if($nota==='n8')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n8">'.$fetch['n8'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
                        	if($nota==='n9')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n9">'.$fetch['n9'].'</td>
		                            </tr>';							
								}
                        	}
                        	///////////////////////////////////////////////////
                        	if($nota==='n10')
                        	{
                        		//echo "NOTA 1".'<br>';

                        		$query = mysql_query("SELECT * from $tabla 
	                        	where cursos_grado= '$curso' AND cursos_letra = '$letra' AND asignaturas_nombre= '$asignatura' 
	                        	ORDER BY alumnos_nombre ASC");

								$i=0;
								while($fetch = mysql_fetch_array($query))
								{
									if($i%2==0) $class = 'even'; else $class = 'odd';				
									echo'<tr class="'.$class.'">
		                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>
										<td class="xedit" id="'.$fetch['id'].'" key="n10">'.$fetch['n10'].'</td>
		                            </tr>';							
								}
                        	}
                        	//////////////////////////////////////////////////
						?>



                        </tbody>

                    </table>
                    
        </div>

		

		<script src="assets/js/jquery.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-editable.js" type="text/javascript"></script> 

			<script type="text/javascript">
			jQuery(document).ready(function() {  
			        $.fn.editable.defaults.mode = 'popup';
			        $('.xedit').editable();		
					$(document).on('click','.editable-submit',function(){
						var t = $('#vn').val();
						var key = $(this).closest('.editable-container').prev().attr('key');
						var x = $(this).closest('.editable-container').prev().attr('id');
						var y = $('.input-sm').val();
						var z = $(this).closest('.editable-container').prev().text(y);
							
							$.ajax({
								url: "processn1.php?id="+x+"&data="+y+'&key='+key+"&vn="+t,
									type: 'GET',
									success: function(s)
									{
										if(s == 'status')
										{
											$(z).html(y);
										}
												if(s == 'error') 
												{
													alert('Error Processing your Request!');
												}
									},
									error: function(e)
									{
										alert('Error Processing your Request!!');
									}
									});						 
					});
			});
			</script>



    </div>

</body>

</html>