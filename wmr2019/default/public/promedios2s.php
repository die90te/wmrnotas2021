<?php header( 'Content-type: text/html; charset=UTF-8' );?>
<?php include ("livetable/connect.php"); ?>

<?php   

    $nomalum1 = $_POST['nomalum'];     
    $nomalum= utf8_decode($nomalum1);
    //echo $$nomalum.'<p><br></p>';
        //$alumno = $_POST["valorCaja1"];
    //$al2 = utf8_decode($alumno);


    $query = mysql_query("SELECT cursos_grado from alumnos where alumnos_nombre = '$nomalum'");



   while($resultados = mysql_fetch_array($query)) { 



        $curso = $resultados['cursos_grado']; 

        

    } 



    if($curso<'7')

    {



    //$a1 = $_POST['pasig1'];
    $a1 = $_POST['pasig1'];

    //$a2 = $_POST['pasig2'];
    $a2 = $_POST['pasig2'];

    //$a3 = $_POST['pasig3'];
    $a3 = $_POST['pasig3'];

    //$a4 = $_POST['pasig4'];
    $a4 = $_POST['pasig4'];

   // $a5 = $_POST['pasig5'];
    $a5 = $_POST['pasig5'];

    //$a6 = $_POST['pasig6'];
    $a6 = $_POST['pasig6'];

    //$a7 = $_POST['pasig7'];
    $a7 = $_POST['pasig7'];

    //$a8 = $_POST['pasig8'];
    $a8 = $_POST['pasig8'];

    //$a9 = $_POST['pasig9'];
    $a9 = $_POST['pasig9'];



    $p1 = $_POST['promedio1'];

    $p2 = $_POST['promedio2'];

    $p3 = $_POST['promedio3'];

    $p4 = $_POST['promedio4'];

    $p5 = $_POST['promedio5'];

    $p6 = $_POST['promedio6'];

    $p7 = $_POST['promedio7'];

    $p8 = $_POST['promedio8'];

    $p9 = $_POST['promedio9'];

    

  $query1 = mysql_query("UPDATE promedios SET valorp2 = '$p1' WHERE asignaturas_nombre = '$a1' and alumnos_nombre= '$nomalum'");

  $query2 = mysql_query("UPDATE promedios SET valorp2 = '$p2' WHERE asignaturas_nombre = '$a2' and alumnos_nombre= '$nomalum'");

  $query3 = mysql_query("UPDATE promedios SET valorp2 = '$p3' WHERE asignaturas_nombre = '$a3' and alumnos_nombre= '$nomalum'");

  $query4 = mysql_query("UPDATE promedios SET valorp2 = '$p4' WHERE asignaturas_nombre = '$a4' and alumnos_nombre= '$nomalum'");

  $query5 = mysql_query("UPDATE promedios SET valorp2 = '$p5' WHERE asignaturas_nombre = '$a5' and alumnos_nombre= '$nomalum'");

  $query6 = mysql_query("UPDATE promedios SET valorp2 = '$p6' WHERE asignaturas_nombre = '$a6' and alumnos_nombre= '$nomalum'");

  $query7 = mysql_query("UPDATE promedios SET valorp2 = '$p7' WHERE asignaturas_nombre = '$a7' and alumnos_nombre= '$nomalum'");

  $query8 = mysql_query("UPDATE promedios SET valorp2 = '$p8' WHERE asignaturas_nombre = '$a8' and alumnos_nombre= '$nomalum'");

  $query9 = mysql_query("UPDATE promedios SET valorp2 = '$p9' WHERE asignaturas_nombre = '$a9' and alumnos_nombre= '$nomalum'");



  if($query1 and $query2 and $query3 and $query4 and $query5 and $query6 and $query7 and $query8 and $query9)

  {
  	/*
    echo "promedio: ".$p1." asignatura: ".$a1. " actualizado".'<br>';

    echo "promedio: ".$p2." asignatura: ".$a2. " actualizado".'<br>';

    echo "promedio: ".$p3." asignatura: ".$a3. " actualizado".'<br>';

    echo "promedio: ".$p4." asignatura: ".$a4. " actualizado".'<br>';

    echo "promedio: ".$p5." asignatura: ".$a5. " actualizado".'<br>';

    echo "promedio: ".$p6." asignatura: ".$a6. " actualizado".'<br>';

    echo "promedio: ".$p7." asignatura: ".$a7. " actualizado".'<br>';

    echo "promedio: ".$p8." asignatura: ".$a8. " actualizado".'<br>';

    echo "promedio: ".$p9." asignatura: ".$a9. " actualizado".'<br>';
	*/
	echo "Ok, informacion guardada!".'<br>';

  } 

  else

  {
  	/*
    echo "error actualizar".$p1." - ".$a1."-".$nomalum.'<br>';

    echo "error actualizar".$p2." - ".$a2."-".$nomalum.'<br>';

    echo "error actualizar".$p3." - ".$a3."-".$nomalum.'<br>';

    echo "error actualizar".$p4." - ".$a4."-".$nomalum.'<br>';

    echo "error actualizar".$p5." - ".$a5."-".$nomalum.'<br>';

    echo "error actualizar".$p6." - ".$a6."-".$nomalum.'<br>';

    echo "error actualizar".$p7." - ".$a7."-".$nomalum.'<br>';

    echo "error actualizar".$p8." - ".$a8."-".$nomalum.'<br>';

    echo "error actualizar".$p9." - ".$a9."-".$nomalum.'<br>';
	*/
	echo "error";
  }



   
/*
   echo "Alumno: ".$nomalum.'<br>';

   echo "Curso: ".$curso.'° año<br>';

   echo "A1: ".$a1.' - '.$p1.'<br>';

   echo "A2: ".$a2.' - '.$p2.'<br>';

   echo "A3: ".$a3.' - '.$p3.'<br>';

   echo "A4: ".$a4.' - '.$p4.'<br>';

   echo "A5: ".$a5.' - '.$p5.'<br>';

   echo "A6: ".$a6.' - '.$p6.'<br>';

   echo "A7: ".$a7.' - '.$p7.'<br>';

   echo "A8: ".$a8.' - '.$p8.'<br>';

   echo "A9: ".$a9.' - '.$p9.'<br>';

*/



    }

    else

    {

    	if($curso>'6')

    	{

    		$a1 = $_POST['pasig1'];

        $a2 = $_POST['pasig2'];

        $a3 = $_POST['pasig3'];

        $a4 = $_POST['pasig4'];

        $a5 = $_POST['pasig5'];

        $a6 = $_POST['pasig6'];

        $a7 = $_POST['pasig7'];

        $a8 = $_POST['pasig8'];

 

        $p1 = $_POST['promedio1'];

        $p2 = $_POST['promedio2'];

        $p3 = $_POST['promedio3'];

        $p4 = $_POST['promedio4'];

        $p5 = $_POST['promedio5'];

        $p6 = $_POST['promedio6'];

        $p7 = $_POST['promedio7'];

        $p8 = $_POST['promedio8'];



        $query1 = mysql_query("UPDATE promedios SET valorp2 = '$p1' WHERE asignaturas_nombre = '$a1' and alumnos_nombre= '$nomalum'");

        $query2 = mysql_query("UPDATE promedios SET valorp2 = '$p2' WHERE asignaturas_nombre = '$a2' and alumnos_nombre= '$nomalum'");

        $query3 = mysql_query("UPDATE promedios SET valorp2 = '$p3' WHERE asignaturas_nombre = '$a3' and alumnos_nombre= '$nomalum'");

        $query4 = mysql_query("UPDATE promedios SET valorp2 = '$p4' WHERE asignaturas_nombre = '$a4' and alumnos_nombre= '$nomalum'");

        $query5 = mysql_query("UPDATE promedios SET valorp2 = '$p5' WHERE asignaturas_nombre = '$a5' and alumnos_nombre= '$nomalum'");

        $query6 = mysql_query("UPDATE promedios SET valorp2 = '$p6' WHERE asignaturas_nombre = '$a6' and alumnos_nombre= '$nomalum'");

        $query7 = mysql_query("UPDATE promedios SET valorp2 = '$p7' WHERE asignaturas_nombre = '$a7' and alumnos_nombre= '$nomalum'");

        $query8 = mysql_query("UPDATE promedios SET valorp2 = '$p8' WHERE asignaturas_nombre = '$a8' and alumnos_nombre= '$nomalum'");



        if($query1 and $query2 and $query3 and $query4 and $query5 and $query6 and $query7 and $query8)

        {

        /*	
          echo "promedio: ".$p1." asignatura: ".$a1. " actualizado".'<br>';

          echo "promedio: ".$p2." asignatura: ".$a2. " actualizado".'<br>';

          echo "promedio: ".$p3." asignatura: ".$a3. " actualizado".'<br>';

          echo "promedio: ".$p4." asignatura: ".$a4. " actualizado".'<br>';

          echo "promedio: ".$p5." asignatura: ".$a5. " actualizado".'<br>';

          echo "promedio: ".$p6." asignatura: ".$a6. " actualizado".'<br>';

          echo "promedio: ".$p7." asignatura: ".$a7. " actualizado".'<br>';

          echo "promedio: ".$p8." asignatura: ".$a8. " actualizado".'<br>';
			*/
          echo "Ok!, Promedios Guardados";
          //echo '<input class="btnImprimir" type="button" onclick="" value="Imprimir Informe" id="imprimir" />';

        } 

        else

        {
        	/*
          echo "error actualizar".$p1." - ".$a1."-".$nomalum.'<br>';

          echo "error actualizar".$p2." - ".$a2."-".$nomalum.'<br>';

          echo "error actualizar".$p3." - ".$a3."-".$nomalum.'<br>';

          echo "error actualizar".$p4." - ".$a4."-".$nomalum.'<br>';

          echo "error actualizar".$p5." - ".$a5."-".$nomalum.'<br>';

          echo "error actualizar".$p6." - ".$a6."-".$nomalum.'<br>';

          echo "error actualizar".$p7." - ".$a7."-".$nomalum.'<br>';

          echo "error actualizar".$p8." - ".$a8."-".$nomalum.'<br>';
          */
          echo "error";

        }

     

    

    

   /*

       echo "Alumno: ".$nomalum.'<br>';

       echo "Curso: ".$curso.'° año<br>';



       echo "A1: ".$a1.' - '.$p1.'<br>';

       echo "A2: ".$a2.' - '.$p2.'<br>';

       echo "A3: ".$a3.' - '.$p3.'<br>';

       echo "A4: ".$a4.' - '.$p4.'<br>';

       echo "A5: ".$a5.' - '.$p5.'<br>';

       echo "A6: ".$a6.' - '.$p6.'<br>';

       echo "A7: ".$a7.' - '.$p7.'<br>';

       echo "A8: ".$a8.' - '.$p8.'<br>';

 */

    	}

    }





   

 



?>