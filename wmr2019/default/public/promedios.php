
<?php include ("livetable/connect.php"); ?>

<?php   

    $nomalum1 = $_POST['nombre'];     
    $nomalum= utf8_decode($nomalum1);

    $cursocs1=$_POST['curso'];
    $semestre=$_POST['s1'];

    $tabla='g'.$cursocs1.$semestre;
    
    echo utf8_encode($nomalum).'<br>';
    echo $cursocs1.'<br>';
    echo $semestre.'<br>';
    echo $tabla.'<br>';



    $query = mysqli_query("SELECT cursos_grado from alumnos where alumnos_nombre = '$nomalum'");
   while($resultados = mysqli_fetch_array($query)) 
    {
        $curso = $resultados['cursos_grado'];
    }

    if($curso<'7')
    {

      $a1 = $_POST['asig1'];
      $a2 = $_POST['asig2'];
      $a3 = $_POST['asig3'];
      $a4 = $_POST['asig4'];
      $a5 = $_POST['asig5'];
      $a6 = $_POST['asig6'];
      $a7 = $_POST['asig7'];
      $a8 = $_POST['asig8'];
      $a9 = $_POST['asig9'];

      $p1 = $_POST['palum1'];
      $p2 = $_POST['palum2'];
      $p3 = $_POST['palum3'];
      $p4 = $_POST['palum4'];
      $p5 = $_POST['palum5'];
      $p6 = $_POST['palum6'];
      $p7 = $_POST['palum7'];
      $p8 = $_POST['palum8'];
      $p9 = $_POST['palum9'];

 //UPDATE g1s1 SET promedio = '99' WHERE asignaturas_nombre = 'HISTORIA' and alumnos_nombre= 'CAYUPEL TRIPAYÁN YARITZA ANAHIS'   

  $query1 = mysqli_query("UPDATE $tabla SET promedio = '$p1' WHERE asignaturas_nombre = '$a1' and alumnos_nombre= '$nomalum'");
  $query2 = mysqli_query("UPDATE $tabla SET promedio = '$p2' WHERE asignaturas_nombre = '$a2' and alumnos_nombre= '$nomalum'");
  $query3 = mysqli_query("UPDATE $tabla SET promedio = '$p3' WHERE asignaturas_nombre = '$a3' and alumnos_nombre= '$nomalum'");
  $query4 = mysqli_query("UPDATE $tabla SET promedio = '$p4' WHERE asignaturas_nombre = '$a4' and alumnos_nombre= '$nomalum'");
  $query5 = mysqli_query("UPDATE $tabla SET promedio = '$p5' WHERE asignaturas_nombre = '$a5' and alumnos_nombre= '$nomalum'");
  $query6 = mysqli_query("UPDATE $tabla SET promedio = '$p6' WHERE asignaturas_nombre = '$a6' and alumnos_nombre= '$nomalum'");
  $query7 = mysqli_query("UPDATE $tabla SET promedio = '$p7' WHERE asignaturas_nombre = '$a7' and alumnos_nombre= '$nomalum'");
  $query8 = mysqli_query("UPDATE $tabla SET promedio = '$p8' WHERE asignaturas_nombre = '$a8' and alumnos_nombre= '$nomalum'");
  $query9 = mysqli_query("UPDATE $tabla SET promedio = '$p9' WHERE asignaturas_nombre = '$a9' and alumnos_nombre= '$nomalum'");


        if($query1 and $query2 and $query3 and $query4 and $query5 and $query6 and $query7 and $query8 and $query9)
        {
          echo "Ok-promedios guardados";
        } 
        else
        {
          echo "error";
        }

 

  }
  else
  {

      if($curso>'6')

      {

        $a1 = $_POST['asig1'];
        $a2 = $_POST['asig2'];
        $a3 = $_POST['asig3'];
        $a4 = $_POST['asig4'];
        $a5 = $_POST['asig5'];
        $a6 = $_POST['asig6'];
        $a7 = $_POST['asig7'];
        $a8 = $_POST['asig8'];

        $p1 = $_POST['palum1'];
        $p2 = $_POST['palum2'];
        $p3 = $_POST['palum3'];
        $p4 = $_POST['palum4'];
        $p5 = $_POST['palum5'];
        $p6 = $_POST['palum6'];
        $p7 = $_POST['palum7'];
        $p8 = $_POST['palum8'];

        $query1 = mysqli_query("UPDATE $tabla SET promedio = '$p1' WHERE asignaturas_nombre = '$a1' and alumnos_nombre= '$nomalum'");
        $query2 = mysqli_query("UPDATE $tabla SET promedio = '$p2' WHERE asignaturas_nombre = '$a2' and alumnos_nombre= '$nomalum'");
        $query3 = mysqli_query("UPDATE $tabla SET promedio = '$p3' WHERE asignaturas_nombre = '$a3' and alumnos_nombre= '$nomalum'");
        $query4 = mysqli_query("UPDATE $tabla SET promedio = '$p4' WHERE asignaturas_nombre = '$a4' and alumnos_nombre= '$nomalum'");
        $query5 = mysqli_query("UPDATE $tabla SET promedio = '$p5' WHERE asignaturas_nombre = '$a5' and alumnos_nombre= '$nomalum'");
        $query6 = mysqli_query("UPDATE $tabla SET promedio = '$p6' WHERE asignaturas_nombre = '$a6' and alumnos_nombre= '$nomalum'");
        $query7 = mysqli_query("UPDATE $tabla SET promedio = '$p7' WHERE asignaturas_nombre = '$a7' and alumnos_nombre= '$nomalum'");
        $query8 = mysqli_query("UPDATE $tabla SET promedio = '$p8' WHERE asignaturas_nombre = '$a8' and alumnos_nombre= '$nomalum'");

        if($query1 and $query2 and $query3 and $query4 and $query5 and $query6 and $query7 and $query8)

        {
          echo "ok";
        } 

        else

        {
          echo "error";
        }


      }

    }





   

 



?>