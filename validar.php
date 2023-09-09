<?php
include('bad.php');

     

     $usuario = $_POST['usuario'];
     $password = $_POST['password'];
     $consulta="SELECT * FROM usuarios1 WHERE nombre_usuario='$usuario' and password= '$password'";
     $resultado=mysqli_query($conexion,$consulta);
     $filas=mysqli_num_rows($resultado);
    
    

    if($filas){
      header("Location: menuusuario.php?usuario=" . urlencode($usuario));
    }else {
        
        ?>
        <?php
        include("loguin.php");
    
      ?>
      <h1 class="bad">Usuario o Contraseña incorrecta tenes que comunicarte con el Administrador</h1>
      <?php
    

    
    }





