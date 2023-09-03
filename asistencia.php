<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
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
.img{
  height: 50px;
  width: 50px;
}
.form-label{
    padding-left: 0px;
    width: 400px;
    height: 50px;
    font-size:larger;
    color: black;
}

.container{
  margin-top: -20px;
}
.img1{
  height: 50px;
  width: 50px;
  margin-left:10px;
  margin-right: 10px;
 }
 a{
    text-decoration: none;
 }
 h1{
    margin-top: 5px;
    margin-left: 80px;
 }
 .btn{
    margin-left: 80px;
 }
</style>
<body>
    <h1 align="center"><img src="images/asistencia1.png" class="img"> Asistencia</h1>
    <div class="container">
        <div class="row ">
            <div class="col-3 offset-5 gy-5" >
            <div >
              <label class="form-label"><img class="img1" src="images/profesor1.png"> Profesores o Alumnos <img class="img1" src="images/graduado.png"></label>
              </div>
            </div>
           </div>
           <div class="row">
            <div class="col-3 offset-5 gy-3 ">
              <div class="dropdown">
            <button class="btn btn-danger btn-lg dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-expanded="false">
              Seleccionar
            </button>
            <ul class="dropdown-menu">
            <li class="dropdown-item"  >
             <a href="asistenciaalumno.php"> Alumnos </a>
            </li>
            <li class="dropdown-item">
             <a href="asistenciaprofesor.php"> Profesores </a>
            </li>
            </ul>      
              </div>
            </div>
           </div>
           </div>

</body>
</html>