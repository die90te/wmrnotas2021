
<?php include ("livetable/connect.php"); ?>

<?php
  
	$alumno = utf8_decode($_POST['alumno']);
    $obs = utf8_decode($_POST['comment']);
    $asis = $_POST['asistencia'];
    $rel = $_POST['religion'];
     $ori = $_POST['orientacion'];

    $fe1s1 = $_POST['fe1s1'];
    $fe2s1 = $_POST['fe2s1'];
    $fe3s1 = $_POST['fe3s1'];
    $cap1s1 = $_POST['cap1s1'];
    $cap2s1 = $_POST['cap2s1'];
    $cap3s1 = $_POST['cap3s1'];
    $rce1s1 = $_POST['rce1s1'];
    $rce2s1 = $_POST['rce2s1'];


    //echo "Alumno: ".$alumno;
    

 $query=mysql_query("UPDATE datosalumnos SET 
  observaciones1s = '$obs', asistencia1s = '$asis', religion1s = '$rel', orientacion1s = '$ori' , 
  fe1s1 = '$fe1s1', fe2s1 = '$fe2s1', fe3s1  = '$fe3s1', 
  cap1s1 = '$cap1s1', cap2s1 = '$cap2s1', cap3s1 = '$cap3s1', 
  rce1s1 = '$rce1s1', rce2s1 = '$rce2s1'  WHERE alumnos_nombre = '$alumno' ");
  //UPDATE `datosalumnos` SET `religion1s` = 'mm' WHERE `datosalumnos`.`id` = -139;
   if($query)

   {

    echo "Yes!, Religion, Asistencia y Observaciones Guardado";

   }



?>