<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css"  href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
   <script src="https://kit.fontawesome.com/a6e7cfb592.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
</head>
<style>
  body{
    background-color: rgb(30,144,255);
    
    
  }
 
 img{
  height: 50px;
  width: 50px;
 }
   
   
   </style>
  
<body>
<h1 class="py-2"  align ="center"><img src="images/graduado.png">
Consulta de Alumnos</h1>
<div class="container">
<div class="row">
  <div class="col">
  <table class="table table-bordered border-danger table-danger">
<thead>
  <tr>
<th >Apellido</th>
<th  >Nombre</th>
<th >Fech Nac</th>


<th  >Documento</th>
<th  >Telefono</th>
<th >genero</th>

<th  >Calle</th>
<th >Numero</th>
<th >Piso</th>
<th >Departamento</th>
<th >Localidad</th>
<th >Provincia</th>
<th >Fecha de Inc</th>
<th >Num de Mat</th>
<th >Est de Inc</th>
</tr>
</thead>
<tbody>
<tr>
<?php
include('bad.php');
$query = "SELECT pe.apellido,pe.nombre,per.fecha_nac,per.telefono,per.nro_documento,
dom.calle,dom.mumero,dom.piso,dom.dpto,loc.nombre,prov.nombre_prov,ge.detalle,
inc.matricula,inc.fecha,inc_est.detalle
FROM persona pe
INNER JOIN alumno al ON al.id_alumno = pe.id_persona
INNER JOIN domiclio dom ON dom.id_domicilio = pe.id_persona
INNER JOIN localidad loc ON loc.id_localidad = dom.id_domicilio
INNER JOIN provincia ON prov.id_provincia = loc.id_localidad
INNER JOIN  genero ge ON ge.id_genero = pe.id_persona
INNER JOIN inscripcion inc ON inc.id_inscripcion = al.id_alumno
INNER JOIN incripcion_estado inc_est ON inc_est.id_incripcion = inc.id_inscripcion";
$consulta = $conexion -> query($query);
while($fila=$consulta->fetch_assoc())
{
 echo'
 <tr>
 <td>'.$fila['nombre'].' </td>
 <td>'.$fila['apellido'].'</td>
 <td>'.$fila['fecha_nac'].'</td>
 <td>'.$fila['nro_documento'].'</td>
 <td>'.$fila['telefono'].'</td>
 <td>'.$fila['genero'].'</td>
 <td>'.$fila['calle'].'</td>
 <td>'.$fila['piso'].'</td>
 <td>'.$fila['dpto'].'</td>
 <td>'.$fila['nombre'].'</td>
 <td>'.$fila['nombre_prov'].'</td>
 <td>'.$fila['fecha'].'</td>
 <td>'.$fila['matricula'].'</td>
 <td>'.$fila['detalle'].'</td>
 </tr>';
}

?>

</tr>

</tbody>




</table>
  </div>
</div>
</div>
</body>
</html>