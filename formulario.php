<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de inscripcion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form  method="POST">
        <section class="registro">
            <h4>formulario de registro</h4>
            <label class='label' for="">nombres</label>
            <input class="input" type="text" name="nombre" required pattern="[a-zA-Z]+" placeholder="nombre">
            <br>
            <label class='label' for="">apellidos</label>
            <input class="input" type="text" name="apellido" required pattern="[a-zA-Z]+" placeholder="apellidos">
            <br>
            <label class='label' for="">cedula</label>
            <input class="input" type="number" name="cedula" required pattern="[0-9]+" placeholder="cedula" min="0" maxlength="10">
            <br>
            <label class='label' for="">fecha de nacimiento</label>
            <input class="input" type="date" name="fechaDeNacimiento" placeholder="fecha de nacimiento">
            <br>
            <label class='label' for="">e-mail</label>
            <input class="input" type="email" name=E-mail placeholder="E-mail">
            <br>
            <label class='label' for="">genero: </label>
            <select class='input' name="genero" required>
                <option class="input" value="Masculino">Masculino</option>
                <option class="input" value="Femenino">Femenino</option>
                <option class="input"value="Otro">Otro</option>
            </select>
            <label class='label' for="">deseas recibir norificaciones al correo electronico?</label>
            <br>
            <input type="radio" name="notificacion" value="si"placeholder='si' checked>si
            <input type="radio" name="notificacion" value="no" placeholder='no'>no
            <br>
            <input id="registrar" type="submit" value="registrar">
        </section>
    </form>
    <?php
      include("enviar.php");
     ?>
</body>
</html>
