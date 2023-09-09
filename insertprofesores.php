<?php
include('bad.php');
$dni = $_POST['dni'];
$sql = "SELECT * FROM profesores WHERE dni = '$dni'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    ?>
    <h5 class="bad">El DNI de este Profesor ya se encuentra registrado</h5>
    <?php
    
} else {
    
if(isset($_POST['alta1']))
{
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $documento = $_POST['dni'];
   $fecha = $_POST['fecha'];
   $categoria = $_POST['categoria'];
   $calle = $_POST['calle'];
   $numero = $_POST['numero'];
   $departamento = $_POST['departamento'];
   $localidad = $_POST['localidad'];
   $provincia = $_POST['provincia'];
   $piso = $_POST['piso'];
   $fecha1 = $_POST['fecha1'];
   $fecha1 = $_POST['fecha2'];
   $estado = $_POST['estado'];
   $genero = $_POST['genero'];
    $conexion->query("INSERT INTO profesores (apellido,nombre,dni,telefono) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['dni'].",".$_POST['telefono'].")");
    ?>
    <?php
    include("profesores.php");
    ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php
  }
}