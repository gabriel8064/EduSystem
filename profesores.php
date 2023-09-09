<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
    margin-top: 40px;

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
            margin-top: -540px;
             font-size: medium;
             text-align:center;
             width:400px;
            height: 15px;
             margin-left: -10px;
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
<body>
<h1 class="py-2"  align ="center" ><img src="images/profesor1.png"> Registro de Profesores</h1>

<form class="container" method="post" action="insertprofesores.php" >
<div class="row align-items-star g-2">
        <div class="col-3 ">
            <label for="nombre" class="form-label" >Nombre</label>
            <input type="text" name="nombre" id="" class="form-control">

        </div>
        <div class="col-3">
            <label  class="form-label" for="apellido">Apellido</label>
            <input type="text" name="apellido" id="" class="form-control">

        </div>
        <div class="col-3">
            <label class="form-label"  for="dni">DNI</label>
            <input class="form-control" type="text" name="dni" id="">

        </div>
        <div class="col-3">
            <label class="form-label"  for="edad">Telefono</label>
            <input class="form-control" type="text" name="telefono" id="">

        </div>
        <div class="row align-items-star  g-2">
          <div class="col-3">
            <label for="telefono" class="form-label">Fecha de Nacimiento</label>
            <input type="text" name="fecha" class="form-control">

          </div>
          
          <div class="col-3">
            <label for="fecha de nacimiento" class="form-label">Estado</label>
            <input type="text" name="estado" class="form-control">
            
          </div>
          <div class="col-3">
            <label for="madre" class="form-label">Categoria</label>
            <input type="text" name="categoria" class="form-control">
            
          </div>
          <div class="col-3">
            <label for="padre" class="form-label">Fecha de Inicio</label>
            <input type="text" name="fecha1" class="form-control">
            
          </div>
          <div class="row align-items-star g-2 ">
            <div class="col-3">
            <label for="contacto" class="form-label">Fecha de Receso</label>
            <input type="text" name="fecha2" class="form-control">
              

            </div>
            <div class="col-3">
            <label for="telefono Contacto" class="form-label">calle</label>
            <input type="text" name="calle" class="form-control">
              

                </div>
                <div class="col-3">
            <label class="form-label"  for="edad">Numero</label>
            <input class="form-control" type="text" name="numero" id="">

        </div>
        <div class="col-3">
            <label class="form-label"  for="edad">Piso</label>
            <input class="form-control" type="text" name="piso" id="">

        </div>
        <div class="row align-items-star g-2">
          <div class="col-3">
            <label for="telefono" class="form-label">Departamento</label>
            <input type="text" name="departamento" class="form-control">

          </div>
          
          <div class="col-3">
            <label for="fecha de nacimiento" class="form-label">Localidad</label>
            <input type="text" name="localidad" class="form-control">
            
          </div>
          <div class="col-3">
            <label for="madre" class="form-label">Provincia</label>
            <input type="text" name="provincia" class="form-control">
            
          </div>
          <div class="col-3">
             <label class="form-label">Genero</label>
             <select class="form-select">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
               
                
                </select>
             </div>
                <div class="my-2">
            
              <button type="submit" name="alta1" class=" btn btn-danger btn-lg "><img class="img1" src="images/registro-en-linea1.png"> Registrar</button>
              
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/busqueda-de-datos.png"> Consultar</butto>
              
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/modificar.png"> Modificar</button>
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/eliminar.png"> Eliminar</button>
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/volver.png"> Volver</button>
               </div>


</form>
    
</body>
</html>