<?php
include('bad.php');
$dni = $_POST['dni'];
$sql = "SELECT * FROM persona WHERE nro_documento = '$dni'";
$result = $conexion->query($sql);
//if ($result->num_rows > 0) {
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
   $inscripcion = $_POST['inscripcion'];
   $matricula = $_POST['matricula'];
   $fecha1= $_POST['fecha1'];
  
  $result=$conexion->query("INSERT INTO persona (apellido,nombre,fecha_nac,telefono,nro_documento) VALUES ('".$_POST["apellido"]."','".$_POST["nombre"]."','".$fecha."','".$_POST['telefono']."','".$_POST['dni']."')");
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion);
  }
  $idpersona = $conexion->insert_id;
  
  $conexion->query("INSERT INTO incripcion_estado(detalle) VALUES('".$_POST['inscripcion']."')");
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $idestado=$conexion->insert_id;
  $result=$conexion->query("INSERT INTO inscripcion (matricula,fecha,incripcion_estado_id_Incripcion_Estado) VALUES('".$_POST['matricula']."','".$_POST['fecha1']."',".$idestado.")");
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $idinscripcion=$conexion->insert_id;
  $consulta="INSERT INTO alumno (apynom_padre,apynom_madre,id_persona,id_inscripcion) VALUES('".$_POST["padre"]."','".$_POST["madre"]."',".$idpersona.",".$idinscripcion.")";
  $result = $conexion->query($consulta);
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $idalumno=$conexion->insert_id;
  
  $consulta="INSERT INTO domicilio (calle,numero,piso,dpto,persona_id_persona) VALUES ('".$_POST['calle']."',".$_POST['numero'].",".$_POST['piso'].",".$_POST['departamento'].",".$idpersona.")";
  $result = $conexion->query($consulta);
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $iddomicilio=$conexion->insert_id;
  $consulta="INSERT INTO localidad (nombre,id_domicilio) VALUES('".$_POST['localidad']."',".$iddomicilio.")";
  $result = $conexion->query($consulta);
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $idlocalidad=$conexion->insert_id;
  $consulta="INSERT INTO provincia(nombre_prov,id_localidad) VALUES('".$_POST['provincia']."',".$idlocalidad.")";
  $result = $conexion->query($consulta);
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $consulta="INSERT INTO contacto(last_name,telefono_contacto,relacion_contacto,persona_id_persona,alumno_id_alumno) VALUES('".$_POST['contacto']."','".$_POST['telefono1']."','".$_POST['relacion']."',".$idpersona.",".$idalumno.")";
  $result = $conexion->query($consulta);
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
  $conexion->query("INSERT INTO genero(detalle,persona_id_persona) VALUES('".$_POST['genero']."',".$idpersona.")");
  if(!$result){
    echo "Error en la consulta: " . mysqli_error($conexion). " ". $consulta;
  }
    
    }
    ?>
    <?php
    include("alumnos.php");
    ?>
    <h5 class="bad1">Registro exitoso</h5>
    <?php
  }
