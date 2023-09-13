<?php
include('bad.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fecha = $_POST['fecha1'];
  $estado = $_POST['estado1'];
  $alumno = $_POST['alumno'];


  $consulta = "INSERT INTO asistencia(fecha,id_profesor,id_alumno)VALUES('".$fecha."',NULL,".$alumno.")";
  $result = $conexion->query($consulta);
  $idalumno = $conexion->insert_id;
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }


  $consulta = "INSERT INTO asistencia_estado (detalle_estado,asistencia_id_asistencia)VALUES('".$_POST['estado1']."',".$conexion->insert_id.")";
    $result = $conexion->query($consulta);
    
    $idalumno = $conexion->insert_id;
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }

  ?>
  <?php
  include("asistenciaalumno.php");
  ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php

}