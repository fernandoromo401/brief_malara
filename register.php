<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de BRIEF</title>
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="shortcut icon" href="https://www.malarapublicidad.com.ar/assets/img/favicon.png" type="image/x-icon">

</head>

<body class="bg">
    <?php
        require_once('./assets/php/db.php');
        $query = $conn -> query ("SELECT * FROM brief");
    ?>
    <nav class="navbar navbar-expand-sm bg-secondary justify-content-center mb-5">
        <img class="logo-malara" src="https://www.malarapublicidad.com.ar/assets/img/logo.png" alt="Logo Malara">
    </nav>
    <div class="container">
        <div class="row">

            <div class="col-xl-12 mt-4">

                <div class="mt-5 mb-3 text-center">
                    <h2>
                        AGENCIA DE PUBLICIDAD
                    </h2>
                    <strong>¡Brief Registados!</strong>
                    <hr>

                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th class="ocultar" scope="col">Representante</th>
                                <th class="ocultar" scope="col">Correo</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($register = mysqli_fetch_array($query)) {
                            ?>
                            <tr class="table-active text-center">
                                <th><strong><?php echo $register['p0-1'] ?></strong></th>
                                <td class="ocultar"><strong><?php echo $register['p0-2'] ?></strong></td>
                                <td class="ocultar"><strong><?php echo $register['p0-4'] ?></strong></td>
                                <td>
                                    <a target="_blank" class="btn btn-warning btn-sm" href="generator.php?client=<?php echo $register['id'] ?>">Mostrar PDF</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./assets/js/paginacion.js"></script>
</body>

</html>