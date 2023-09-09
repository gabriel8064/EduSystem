<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Usuarios</title>
    <link rel="stylesheet" type="text/css"  href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
   <script src="https://kit.fontawesome.com/a6e7cfb592.js" crossorigin="anonymous"></script>
   
   
</head>
<style>
  body{
    background-color: rgb(30,144,255);
    
    
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
  button {
    margin-left: 100px;
    margin-top: 30px;

  }
  img{
  height: 50px;
  width: 50px;
 }
 .img1{
  height: 30px;
  width: 30px;
 }
 .bad {
            margin-bottom:0px;
            margin-top: -595px;
             font-size: medium;
             text-align:center;
             width:400px;
            height: 15px;
             margin-left: 30px;
            height: 50px;
             padding-left: 20px;
             
              background-color: #a22;
             color: #fff
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
<body >
    <h1 class="py-2"  align:"center"><img src="images/graduado.png">
Gestion de Usuarios</h1>

    <form class="container" method="post" action="usuarios_procesar.php">
    <div class="row g-2">

        <div class="col-3 ">
            <label for="nombre" class="form-label" >Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">

        </div>
        <div class="col-3">
            <label  class="form-label" for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control">

        </div>
        <div class="col-3">
            <label class="form-label"  for="dni">DNI</label>
            <input class="form-control" type="text" name="dni" id="dni">

        </div>
        <div class="col-3">
            <label class="form-label"  for="edad">Nombre de Usuario</label>
            <input class="form-control" type="text" name="usuario" id="usuario">

        </div>
          <div class="col-3">
            <label for="fecha de nacimiento" class="form-label">Contraseña</label>
            <input type="text" name="pass" id="pass" class="form-control">
            
          
           <div class="row g-2">
           <div class="col-3">
              <label for="relacion" class="form-label">Fecha de Alta</label>
            <input type="text" name="fechaalta" id="fechaalta" class="form-control">
             </div>
            <div class="col-3">
            <div class="mb-3">
              <label class="form-label">ACTIVO</label>
              <select class="form-select" name="estado" id="estado">
                <option value="0">SI</option>
                <option value="1">NO</option>
                </select>
             
            </div>
            </div>
            
            </div>
            
              
            <div class="me-6">
            
              <button type="submit" name="alta" class=" btn btn-danger btn-lg "><img class="img1" src="images/registro-en-linea1.png">Guardar</button>
              
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/volver.png">Volver</button>
               </div>

           </div>


    </div>
</form>
    
</body>
</html>