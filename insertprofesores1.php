<?php
include('bad.php');
$dni = $_POST['dni'];
$sql = "SELECT * FROM persona WHERE nro_documento = '$dni'";
$result = $conexion->query($sql);
//if ($result->num_rows > 0) {
  if ($result) {
  ?>
  <?php
  include("profesores.php");
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
<<<<<<< HEAD
   $telefono = $_POST['telefono'];
   $fecha1 = $_POST['fecha1'];
   $fecha1 = $_POST['fecha2'];
   $calle = $_POST['calle'];
   $numero = $_POST['numero'];
   $departamento = $_POST['departamento'];
   $localidad = $_POST['localidad'];
   $provincia = $_POST['provincia'];
   $genero = $_POST['genero'];
   $estado = $_POST['estado'];
   
  
   $result= $conexion->query("INSERT INTO persona (apellido,nombre,fecha_nac,telefo,nro_documento) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['fecha'].",".$_POST['telefono']."".$_POST['dni'].")");
   if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion);
  }
  $idpersona=$conexion->insert_id;
  $idestado=$conexion->insert_id;
  $idcategoria=$conexion->insert_id;
    $consulta="INSERT INTO profesor (categoria,fecha_inicio,fecha_receso,id_persona,id_profsor_estado,id_categoria) VALUES('".$_POST['categoria']."','".$_POST['fecha1']."','".$_POST['fecha2']."',".$idpersona.",".$idcategoria.",".$idestado.")";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $consulta="INSERT INTO domicilio (calle,numero,piso,dpto,persona_id_persona) VALUES ('".$_POST['calle']."',".$_POST['numero'].",".$_POST['piso'].",".$_POST['departamento'].",".$idpersona.")";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $iddomicilio=$conexion->insert_id;
    $consulta="INSERT INTO localidad(nombre,id_domicilio) VALUES('".$_POST['localidad']."',".$iddomicilio.")";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
   $idlocalidad=$conexion->insert_id;
    $consulta="INSERT INTO provincia(nombre_prov,id_localidad) VALUES('".$_POST['localidad']."',".$idlocalidad.")";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $consulta="INSERT INTO profesor_categoria(detalle_categoria) VALUES('".$_POST['categoria']."')";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $consulta="INSERT INTO profesor_categoria(detalle_profesor) VALUES('".$_POST['estado']."')";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $consulta="INSERT INTO genero(detalle,persona_id_persona) VALUES('".$_POST['localidad']."',".$idpersona.")";
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
=======
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
    $conexion->query("INSERT INTO persona (apellido,nombre,fecha_nac,telefono,nro_documento) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['fecha'].",".$_POST['dni'].",".$_POST['telefono'].")");
    $conexion->query("INSERT INTO profesor(fecha_inicio,fecha_receso,persona_id_persona) VALUES('".$_POST['fecha1']."','".$_POST['fecha2']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO domicilio(calle,numero,piso,dpto,persona_id_persona) VALUES ('".$_POST['calle']."',".$_POST['numero'].",".$_POST['piso'].",'".$_POST['departamento']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO localidad(nombre,provincia_id_Provincia,domicilio_id_Domicilio) VALUES('".$_POST['localidad']."',".$conexion->insert_id.",".$conexion->insert_id.")");
    $conexion->query("INSERT INTO provincia(nombre_prov,localidad_id_Localidad) VALUES('".$_POST['provincia']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO genero(detalle,persona_id_Persona) VALUES('".$_POST['genero']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO profesor_categoria(detalle_categoria,profesor_id_profesor) VALUES('".$_POST['categoria']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO profesor_estado(detalle_profesor,profesor_id_profesor) VALUES('".$_POST['estado']."',".$conexion->insert_id.")");
  

>>>>>>> 28da51eaaa89937c942bed933c967e2266c97beb
    ?>
    <?php
    include("profesores.php");
    ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php
  }
}