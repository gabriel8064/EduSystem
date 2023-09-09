<?php
include('bad.php');
$dni = $_POST['dni'];
$sql = "SELECT * FROM persona WHERE nro_documento = '$dni'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
  //if($result){
  ?>
  <?php
  include("alumnos.php");
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
<<<<<<< HEAD
  
   $result=$conexion->query("INSERT INTO persona (apellido,nombre,fecha_nac,telefono,nro_documento) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['fecha'].",".$_POST['telefono']."".$_POST['dni'].")");
   if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion);
  }
  $idpersona = $conexion->insert_id;
  $idinscripcion=$conexion->insert_id;
    $consulta="INSERT INTO alumnos (apynom_padre,apynom_madre,inscripcion_id_inscripcion,id_persona) VALUES(".$_POST['padre'].",".$_POST['madre'].",".$idinscripcion.",".$idpersona.")";
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
    $idalumno=$conexion->insert_id;
    $consulta="INSERT INTO contacto(last_name,telefono_contacto,relacion_contacto,persona_id_persona,alumno_id_alumno) VALUES('".$_POST['contacto']."',".$_POST['telefono1'].",'".$_POST['relacion']."',".$idalumno.",".$idpersona.")";
    $result = $conexion->query($consulta);
    if(!$result){
      echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
    }
    $conexion->query("INSERT INTO genero(detalle,persona_id_persona) VALUES('".$_POST['localidad']."',".$idpersona.")");
    
=======
   $conexion->query("INSERT INTO persona(apellido,nombre,fecha_nac,telefono,nro_documento) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."',".$_POST['fecha'].",".$_POST['telefono'].",".$_POST['dni'].")");
    $conexion->query("INSERT INTO alumno(apynom_padre,apynom_madre,persona_id_persona) VALUES('".$_POST['padre']."','".$_POST['madre']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO contacto(last_name,telefono_contacto,relacion_contacto,persona_id_persona,alumno_id_alumno) VALUES ('".$_POST['contacto']."',".$_POST['telefono1'].",'".$_POST['relacion']."',".$conexion->insert_id.",".$conexion->insert_id.")");
    $conexion->query("INSERT INTO domicilio(calle,numero,piso,dpto,persona_id_persona) VALUES ('".$_POST['calle']."',".$_POST['numero'].",".$_POST['piso'].",'".$_POST['departamento']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO localidad(nombre,provincia_id_Provincia,domicilio_id_Domicilio) VALUES('".$_POST['localidad']."',".$conexion->insert_id.",".$conexion->insert_id.")");
    $conexion->query("INSERT INTO provincia(nombre_prov,localidad_id_Localidad) VALUES('".$_POST['provincia']."',".$conexion->insert_id.")");
    $conexion->query("INSERT INTO genero(detalle,persona_id_Persona) VALUES('".$_POST['genero']."',".$conexion->insert_id.")");
>>>>>>> 28da51eaaa89937c942bed933c967e2266c97beb
    ?>
    <?php
    include("alumnos.php");
    ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php
  }
}
  
     





  


