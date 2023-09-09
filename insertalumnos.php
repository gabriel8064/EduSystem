<?php
include('bad.php');
$dni = $_POST['dni'];
$sql = "SELECT * FROM alumnos WHERE dni = '$dni'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
  
    ?>
    <h5 class="bad">El DNI de este Alumno ya se encuentra registrado</h5>
    <?php
    
} else {
    
if(isset($_POST['alta']))
{
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $documento = $_POST['dni'];
   $fecha = $_POST['fecha'];
   $padre = $_POST['padre'];
   $madre = $_POST['madre'];
   $telefono = $_POST['telefono'];
   $contacto = $_POST['contacto'];
   $calle = $_POST['calle'];
   $numero = $_POST['numero'];
   $departamento = $_POST['departamento'];
   $localidad = $_POST['localidad'];
   $provincia = $_POST['provincia'];
   $relacion = $_POST['relacion'];
   $telefono1 = $_POST['telefono1'];
   $genero = $_POST['genero'];
   $piso = $_POST['piso'];
   $conexion->query("INSERT INTO alumnos(apellido,nombre,telefono,apellido_p,apellido_m,dni) VALUES('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['telefono'].",'".$_POST['padre']."','".$_POST['madre']."',".$_POST['dni'].")");
    ?>
    <?php
    include("alumnos.php");
    ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php
  }
}
  
     





  


