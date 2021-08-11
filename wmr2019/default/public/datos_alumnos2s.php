
<?php include ("livetable/connect.php"); ?>
<?php
  
	$alumno = utf8_decode($_POST['alumno']);
    $obs = $_POST['comment'];
    $asis = $_POST['asistencia'];
    $rel = $_POST['religion'];
    $ori = $_POST['orientacion'];

    $fe1s2 = $_POST['fe1s2'];
    $fe2s2 = $_POST['fe2s2'];
    $fe3s2 = $_POST['fe3s2'];
    $cap1s2 = $_POST['cap1s2'];
    $cap2s2 = $_POST['cap2s2'];
    $cap3s2 = $_POST['cap3s2'];
    $rce1s2 = $_POST['rce1s2'];
    $rce2s2 = $_POST['rce2s2'];


    //echo "Alumno: ".$alumno;
    

 $query=mysql_query("UPDATE datosalumnos SET 
  observaciones2s = '$obs', asistencia2s = '$asis', religion2s = '$rel', orientacion2s = '$ori' , 
  fe1s2 = '$fe1s2', fe2s2 = '$fe2s2', fe3s2  = '$fe3s2', 
  cap1s2 = '$cap1s2', cap2s2 = '$cap2s2', cap3s2 = '$cap3s2', 
  rce1s2 = '$rce1s2', rce2s2 = '$rce2s2'  WHERE alumnos_nombre = '$alumno' ");
  //UPDATE `datosalumnos` SET `religion1s` = 'mm' WHERE `datosalumnos`.`id` = -139;
   if($query)

   {

    echo "Yes!, Religion, Asistencia y Observaciones Guardado";

   }



?>