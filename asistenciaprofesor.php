<?php
  include('bad.php');

  $sql = "SELECT pe.id_persona, pe.apellido,pe.nombre,pe.nro_documento,pr.id_profesor FROM profesor pr 
  INNER JOIN persona pe ON pe.id_persona = pr.id_persona";
  $result2 = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia de Profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</head>
<style>
    body{
    background-color: rgb(30,144,255);
   

}
h1{
    margin-top: 5px;
    
 }
 .form-control{
    background-color: navajowhite;
    color: black;
  }
  .form-select{
    background-color: navajowhite; 
    color: black;

  }
  .form-label{
    color: black;
  }
    
    .img{
  height: 50px;
  width: 50px;
}
button {
    margin-left: -220px;;
    
    margin-top: 50px;
    width: 100px  
}
.bad1 {
            margin-bottom:0px;
            margin-top: 40px;
             font-size: medium;
             text-align:center;
             width:400px;
            height: 15px;
             margin-left: -10px;
            height: 50px;
             padding-top: 12px;
             
              background-color: #a22;
             color: #fff
        }
 
</style>
<body>
<h1 align="center"><img src="images/asistencia1.png" class="img"> Asistencia de Profesores <img src="images/profesor1.png" class="img"></h1>
<form class="container my-5" method="post" action="registrarasistenciaprofesor.php">
<div class="row ">
    <div class="col-3 offset-3 ">
   <label class="form-label">Fecha de Asistencia</label>
   <input type="text" class="form-control" name="fecha">
    </div>
    <div class="col-3 ">
   <label class="form-label">Estado de asistencia</label>
   <select class="form-select" name="estado">
                <option value="presente">Presente</option>
                <option value="ausente">Ausente</option>
                <option value="cancelada">Justificado</option>
                <option value="cancelada">Injustificado</option>

              </select>

              <?php
       echo '<select name="profesor" class="form-select">'; // Nombre del select

       while ($row = $result2->fetch_assoc()) {
           $id = $row['id_profesor']; // Cambia 'id' por el nombre de la columna que contiene el ID
           $apellido = $row['apellido']; // Cambia 'nombre' por el nombre de la columna que contiene el nombre
          $nombre = $row['nombre'];
          $dni = $row['nro_documento'];
          echo '<option value="' .  $id. '">'  .$apellido .' '.$nombre.' ('.$dni.')'. '</option>';
       }
   
       echo '</select>';
    
    ?>

              <div class="row">
              <div class="col-3 offset-3 ">
                 <button type="submit" class="btn btn-danger btn-lg " name="alta" >
                  Alta
                 </button>
                 <button  class="btn btn-danger btn-lg offset-3 ms-4" >
                  Volver
                 </button>
                 </div>
              </div>
    </div>

</div>

</form>
    
</body>
</html>