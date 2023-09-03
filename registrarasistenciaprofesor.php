<?php
include('bad.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fecha = $_POST['fecha1'];
  $estado = $_POST['estado1'];

  $conexion->query("INSERT INTO asistencia(fecha,estado,profesor_id_profesor)VALUES(".$_POST['fecha1'].",'".$_POST['estado1']."',".$conexion->insert_id.")");
  
  ?>
  <?php
  include("asistenciaprofesor.php");
  ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php

}
?>