<?php
    $conexion= mysqli_connect('localhost', 'root', '','formulario') or die('error de conexion');

    $sql= "INSERT INTO registro VALUES(null,'".$_POST["nombre"]."','".$_POST["cedula"]."','".$_POST['fechaDeNacimiento']."','".$_POST["E-mail"]."','".$_POST["genero"]."')";

     $resultado= mysqli_query($conexion,$sql) or die ('Error en el query');
     mysqli_close($conexion);

     echo 'Nombre: '.$_POST["nombre"].'<br>';

     echo 'cedula: '.$_POST["cedula"].'<br>';
 
     echo 'fecha de nacimiento: '.$_POST['fechaDeNacimiento'].'<br>';
 
     echo 'E-mail: '.$_POST["E-mail"].'<br>';
 
     echo 'Genero: '.$_POST["genero"];
 
 ?>
?>