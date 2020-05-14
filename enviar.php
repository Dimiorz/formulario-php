<?php
    $conexion= mysqli_connect('localhost', 'root', '','formulario') or die('error de conexion');

    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $fechaDeNacimiento = $_POST['fechaDeNacimiento'];
    $email = $_POST['E-mail'];
    $genero = $_POST['genero'];

    // $sql= "INSERT INTO registro VALUES(null,'".$_POST["nombre"]."','".$_POST["cedula"]."','".$_POST['fechaDeNacimiento']."','".$_POST["E-mail"]."','".$_POST["genero"]."')";

    $sql = ("insert into registro() values(null,'$nombre','$cedula','$fechaDeNacimiento','$email','$genero')");

     $resultado= mysqli_query($conexion,$sql) or die ('Error en el query');
     mysqli_close($conexion);

     echo 'Nombre: '.$_POST["nombre"].'<br>';

     echo 'cedula: '.$_POST["cedula"].'<br>';
 
     echo 'fecha de nacimiento: '.$_POST['fechaDeNacimiento'].'<br>';
 
     echo 'E-mail: '.$_POST["E-mail"].'<br>';
 
     echo 'Genero: '.$_POST["genero"];
 
 ?>
?>