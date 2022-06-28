<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/asesoria.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <br><br><br><br><br>
   <form action="validr.php"  method="post">
       <tr>
       <td colspan="2" align="center"
               <?PHP if ($_GET["errorusuario"]=="si"){?>
                bgcolor=#FF0000><span  style="color:red; "><b style="font-size:24px;">Datos incorrectos</b></span>
                <?PHP }else{}?></td>
       </tr>

        <section class="form-register">
        <h4>Iniciar Sesion</h4>
        <input class="controls" type="text" name="usuario" placeholder="Ingrese su nombre">
        <input class="controls" type="password" name="contra" placeholder="Ingrese su contraseña">
        <button class="btn btn-light">Ingresar</button>
        </section>
   </form>
   <section class="form-register">
   <a href="registrar.php"><button type="button" class="btn btn-success">Registrate</button></a> </section>
</body>
</html>