<?php

include("connect.php");

$curso = addslashes(htmlspecialchars($_POST["caja_texto1"]));

$asign = addslashes(htmlspecialchars($_POST["caja_texto2"]));

$nota = addslashes(htmlspecialchars($_POST["caja_texto3"]));

?>

<!DOCTYPE html>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset= utf8" />

<meta name="robots" content="noindex,nofollow" />

    <title> WMR - Notas</title>   

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">

</head>

<body>



    <div class="container" style="width: 40%;">    

		<div style="text-align:center;width:100%;font-size:24px;margin-bottom:20px;color: #2875BB;"> </div>

                <div class="row">
<div style="width: 100%; text-align: center;">
                    <p><br><input type="button" value="Volver a Registrar Nota" name="Back2" onclick="history.back()" />
                    <a href="http://www.wmr.skn1.com/default/sistema/index"><button>Inicio</button></a>
                    </p>
                    </div>
                    <table class= "table table-striped table-bordered table-hover">

                        <thead>

                            <tr>

                            	<input type="hidden" id="vn"  value="<?php echo $nota;?>" name="vn" /><br>



                                <th colspan="1" rowspan="1" style="width: 80%;" tabindex="0">NOMBRE</th>



                                <th colspan="1" rowspan="1" style="width: 20%;" tabindex="0">NOTA</th>



                                

                            </tr>

                        </thead>



                        <tbody>

                        <?php

                        if($nota==='n1')

                        {

                        	 

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br>";

                        	$query = mysql_query("SELECT * from n1 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							 

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n2')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n2 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n3')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n3 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n4')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n4 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n5')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n5 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n6')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n6 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n7')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n7 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n8')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n8 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n9')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n9 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

                        if($nota==='n10')

                        {

                        	echo "Curso:".$curso." Basico - "; 

                        	echo "Asignatura: ".$asign." - ";

                        	echo "Nota: ".$nota."<br><p><br></p>";

                        	$query = mysql_query("SELECT * from n10 where cursos_grado='$curso' AND asignaturas_nombre='$asign' ORDER BY alumnos_nombre ASC");

							$i=0;

							while($fetch = mysql_fetch_array($query))

							{

								if($i%2==0) $class = 'even'; else $class = 'odd';

								

								echo'<tr class="'.$class.'">



	                                <td id="'.$fetch['id'].'" >'.utf8_encode($fetch['alumnos_nombre']).'</td>

									<td class="xedit" id="'.$fetch['id'].'" key="valor">'.$fetch['valor'].'</td>



	                            </tr>';							

							}

                        }

						

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

						var key = $(this).closest('.editable-container').prev().attr('key');

			var x = $(this).closest('.editable-container').prev().attr('id');

			var y = $('.input-sm').val();

			var z = $(this).closest('.editable-container').prev().text(y);



							if(document.getElementById("vn").value == "n1")

							{

							$.ajax({

								url: "processn1.php?id="+x+"&data="+y+'&key='+key,

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

							}

							if(document.getElementById("vn").value == "n2")

							{

							$.ajax({

								url: "processn2.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n3")

							{

							$.ajax({

								url: "processn3.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n4")

							{

							$.ajax({

								url: "processn4.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n5")

							{

							$.ajax({

								url: "processn5.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n6")

							{

							$.ajax({

								url: "processn6.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n7")

							{

							$.ajax({

								url: "processn7.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n8")

							{

							$.ajax({

								url: "processn8.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n9")

							{

							$.ajax({

								url: "processn9.php?id="+x+"&data="+y+'&key='+key,

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

							}



							if(document.getElementById("vn").value == "n10")

							{

							$.ajax({

								url: "processn10.php?id="+x+"&data="+y+'&key='+key,

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

							}



										

								

									

								

								

					});

			});

			</script>



    </div>

</body>

</html>