<?php
include('bad.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fecha = $_POST['fecha'];
  $estado = $_POST['estado'];
  $profesor = $_POST['profesor'];


  $consulta = "INSERT INTO asistencia(fecha,id_profesor,id_alumno)VALUES('".$fecha."',".$profesor.",NULL)";
  $result = $conexion->query($consulta);
  $idalumno = $conexion->insert_id;
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }


  $consulta = "INSERT INTO asistencia_estado (detalle_estado,asistencia_id_asistencia)VALUES('".$_POST['estado']."',".$conexion->insert_id.")";
    $result = $conexion->query($consulta);
    
    $idasistencia = $conexion->insert_id;
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }

  ?>
  <?php
  include("asistenciaprofesor.php");
  ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php

}