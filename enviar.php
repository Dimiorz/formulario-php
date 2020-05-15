<?php
    $conexion = mysqli_connect("localhost","root","", "formulario");

    // if ($conexion) {
    //   echo "<h1>Conexion exitosa</h1>";
    // }else {
    //   echo "<h1>se produjo un error</h1>";
    // }

      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $cedula = $_POST["cedula"];
      $fechaDeNacimiento = $_POST["fechaDeNacimiento"];
      $email = $_POST["E-mail"];
      $genero = $_POST["genero"];
      $notifi = $_POST["notificacion"];

      $sql = "INSERT INTO `registro`(`Nombre`, `Apellido`, `Cedula`, `Fecha_nacimiento`, `Email`, `genero`, `notificaciones`)
       VALUES ('$nombre','$apellido','$cedula','$fechaDeNacimiento','$email','$genero','$notifi')";
       $query = mysqli_query($conexion,$sql);

       if ($query) {
         echo "<h1>Datos Guardados</h1>";
       }else {
         echo "<h1>no se pudieron guardar los datos</h1>";
       }

 ?>
