<?php
include('bad.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fecha = $_POST['fecha1'];
  $estado = $_POST['estado1'];

<<<<<<< HEAD
  $consulta="INSERT INTO asistencia(fecha,profesor_id_profesor,id_alumno)VALUES(".$_POST['fecha1'].",NULL,".$idalumno.")";
  $idalumno= $conexion->insert_id;
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $consulta="INSERT INTO asistencia_estado (detalle_estado,asistencia_id_asistencia)VALUES('".$_POST['estado1']."',".$idasistencia.")";
  $idasistencia=$conexion->insert_id;
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }

=======
  $conexion->query("INSERT INTO asistencia(fecha,estado,alumno_id_alumno)VALUES(".$_POST['fecha1'].",'".$_POST['estado1']."',1)");
  
>>>>>>> 28da51eaaa89937c942bed933c967e2266c97beb
  ?>
  <?php
  include("asistenciaalumno.php");
  ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php

}
?>