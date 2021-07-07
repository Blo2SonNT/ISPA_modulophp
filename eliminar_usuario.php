<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    require_once "includes/class_user.php";
    $usuario = new Usuario();

    echo $usuario->eliminar_usuario($_GET['idUser']);
    ?>
</body>
</html>