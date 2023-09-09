<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
     body{
        background-color:white;
    background-image: url(images/zyro-image.png);
    background-repeat: no-repeat;
    background-position:400px 150px;
    background-size:700px 500px;

   
  }

  img{
    width: 50px;
    height: 50px;

  }
  a{
    text-decoration: none;
    color: white;
  }
</style>
<body>
<nav class="navbar navbar-expend-lg navbar-dark bg-dark">
        <div clas="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
            
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">
                <div class="offcanvas-header" data-bs-theme="dark">
                    <h5 class="offcanvas-tittle text-info"><img src="images/menu2.png"> Menu</h5>
                    <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas">

                    </button>

                </div>
                <div class="offcanvas-body">
                    <button class="btn btn-dark btn-lg"><img src="images/graduado.png"> 
                    <a href="alumnos.php">Alumnos</a>
                    </button>
                    <br/>
                    <br/>
                    <button class="btn btn-dark btn-lg"><img src="images/profesor1.png"> 
                    <a href="profesores.php">Profesores</a>
                   </button>
                    <br/>
                    <br/>
                    <button class="btn btn-dark btn-lg"><img src="images/asistencia1.png">
                    <a href="asistencia.php">Asistencia</a>
                   </button>
                    <br/>
                    <br/>
                    <button class="btn btn-dark btn-lg"><img src="images/curso.png">Cursos</button>
                    <br/>
                    <br/>
                    <?php
                    if($_GET['usuario'] =="gabriel01"){
                    ?>    
                    <button class="btn btn-dark btn-lg"><img src="images/grupo.png"> 
                    <a href="gestion_usuarios.php">Gestión de Usuarios</a>
                    </button>
                    <?php
                    }
                    ?>
                  <br/>
                 <br/>
                 <br/>
                <br/>
                <button class="btn btn-dark btn-lg"><img src="images/cerrar-sesion.png">
                    <a href="logout.php">Cerrar sesion</a>
                    </button>
                    <i class="bi bi-person-x"></i>


                </div>
            </section>

        </div>

    </nav>
</body>
</html>
