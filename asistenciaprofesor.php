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
   <select class="form-select">
                <option value="presente">Presente</option>
                <option value="ausente">Ausente</option>
                <option value="cancelada">Justificado</option>
                <option value="cancelada">Injustificado</option>

              </select>

              <div class="row">
              <div class="col-3 offset-3 ">
                 <button  class="btn btn-danger btn-lg ">
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