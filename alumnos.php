<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
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
    <h1 class="py-2"  align ="center"><img src="images/graduado.png">
Registro de Alumnos</h1>

    <form class="container" method="post" action="insertalumnos.php">
    <div class="row g-2">

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
        <div class="row g-2">
          <div class="col-3">
            <label for="telefono" class="form-label">Fecha de Nacimiento</label>
            <input type="text" name="fecha" class="form-control">

          </div>
          
          <div class="col-3">
            <label for="fecha de nacimiento" class="form-label">Nombre y Apellido  de la Madre</label>
            <input type="text" name="madre" class="form-control">
            
          </div>
          <div class="col-3">
            <label for="madre" class="form-label">Nombre y Apellido del Padre</label>
            <input type="text" name="padre" class="form-control">
            
          </div>
          <div class="col-3">
            <label for="padre" class="form-label">Contacto</label>
            <input type="text" name="contacto" class="form-control">
            
          </div>
        <div class="row g-2 ">
            <div class="col-3">
            <label for="contacto" class="form-label">Calle</label>
            <input type="text" name="calle" class="form-control">
              

            </div>
            <div class="col-3">
            <label for="telefono Contacto" class="form-label">Numero</label>
            <input type="text" name="numero" class="form-control">
              

                </div>

             <div class="col-3">
            <label for="Calle" class="form-label">Departamento</label>
            <input type="text" name="departamento" class="form-control">
              

                </div>
                <div class="col-3">
            <label for="numero" class="form-label">Piso</label>
            <input type="text" name="piso" class="form-control">
              

                </div>
                </div>
            <div class="row g-2">
              <div class="col-3">
              <label for="departamento" class="form-label">Localidad</label>
            <input type="text" name="localidad" class="form-control">

              </div>
              <div class="col-3">
              <label for="Localidad" class="form-label">Provincia</label>
            <input type="text" name="provincia" class="form-control">

              </div>
              <div class="col-3">
              <label for="Provincia" class="form-label">Telefono Contacto</label>
            <input type="text" name="telefono1" class="form-control">

              </div>
              <div class="col-3">
              <label for="relacion" class="form-label">Relacion Contacto</label>
            <input type="text" name="relacion" class="form-control">
             </div>

            </div>
           <div class="row g-2">
           <div class="col-3">
              <label for="relacion" class="form-label">Fecha de Inscripcion</label>
            <input type="text" name="fecha1" class="form-control">
             </div>
            <div class="col-3">
            <label for="fecha de inscripcion" class="form-label">Fecha de Inscripcion</label>
            <input type="text" name="fecha" class="form-control">
            </div>
            <div class="col-3">
            <div class="mb-3">
              <label class="form-label">Incripcion</label>
              <select class="form-select" name="genero">
                <option value="pre-inscripto">Pre-inscripto</option>
                <option value="inscripto">Inscripto</option>
                <option value="cancelada">Cancelada</option>
                
                </select>
             
            </div>
            

            </div>
            <div class="col-3">
             <label class="form-label">Genero</label>
             <select class="form-select">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
               
                
                </select>
             </div>
            
           
            </div>
            

              
            <div class="me-6">
            
              <button type="submit" name="alta" class=" btn btn-danger btn-lg "><img class="img1" src="images/registro-en-linea1.png"> Registrar</button>
              
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/busqueda-de-datos.png">Consultar</button>
              
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/modificar.png"> Modificar</button>
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/eliminar.png"> Eliminar</button>
              <button class=" btn btn-danger btn-lg"><img class="img1" src="images/volver.png"> Volver</button>
               </div>

           </div>

          


    </div>
</form>
    
</body>
</html>