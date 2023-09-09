<?php

$conexion= mysqli_connect("localhost","root","","edusystem123");

if(!$conexion)
{
  ?>
  <h1 class="bad">No se puede conectar con la base de datos por posible error en la conexion</h1>
  <?php
}
?>
<style>
    .bad {

text-align: center;
width: 100%;
padding: 12px;
background-color: #a22;
color: #fff
}
</style>



