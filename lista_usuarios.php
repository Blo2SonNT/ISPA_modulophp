<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "includes/class_user.php";
    $user_sistema = new Usuario();

    $lista = $user_sistema->listar_usuarios();
    $prueba = $user_sistema->listar_usuario_x_id(1);
    // print_r("<pre>");
    // print_r($lista);
    ?>

    <div class="container">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Nickname</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($x = 0; $x < sizeof($lista); $x++) {
                ?>

                    <tr>
                        <td><?php echo $lista[$x]['nombre'] ?></td>
                        <td><?php echo $lista[$x]['apellido'] ?></td>
                        <td><?php echo $lista[$x]['correo'] ?></td>
                        <td><?php echo $lista[$x]['nickname'] ?></td>
                        <td>
                            <a href="editar_usuario.php?idUser=<?php echo $lista[$x]['id_usuario'] ?>">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <button onclick="confirmar_borrar_usuario(<?php echo $lista[$x]['id_usuario'] ?>)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmar_borrar_usuario(id_usuario) {
            Swal.fire({
                title: 'Seguro desea eliminar el dato?',
                text: "Esta accion no se puede devolver...",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                allowEscapeKey: true
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href ="http://localhost:8080/erp_notas_ispa/eliminar_usuario.php?idUser="+id_usuario;
                }
            })
        }
    </script>

</body>



</html>