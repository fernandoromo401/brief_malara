<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo BRIEF</title>
  <link rel="stylesheet" href="./assets/css/form.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="shortcut icon" href="https://www.malarapublicidad.com.ar/assets/img/favicon.png" type="image/x-icon">

</head>

<body class="bg">
  <nav class="navbar navbar-expand-sm bg-secondary justify-content-center mb-5">
    <img class="logo-malara" src="https://www.malarapublicidad.com.ar/assets/img/logo.png" alt="Logo Malara">
  </nav>
  <div class="container">
    <div class="row">
      
      <div class="col-xl-12">

        <div class="mb-3">
          <h2>
            BRIEF Malara Publicidad
          </h2>
          <strong>¡QUEREMOS CONOCERTE!</strong>
        </div>

        <div class="progress mb-4">
          <div class="progress-bar progress-bar bg-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100">
          </div>
        </div>

        <form id="regiration_form"  action="action.php" method="post">
          <fieldset>
            <?php include('./pages/page0.html'); ?>
          </fieldset>

          <fieldset>
            <?php include('./pages/page1.html'); ?>
          </fieldset>

          <fieldset>
            <?php include('./pages/page2.html'); ?>
          </fieldset>

          <fieldset>
            <?php include('./pages/page3.html'); ?>
          </fieldset>

          <fieldset>
            <?php include('./pages/page4.html'); ?>
          </fieldset>

          <fieldset>
            <?php include('./pages/page5.html'); ?>
          </fieldset>
        </form>
        <hr>

      </div>
      
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="./assets/js/paginacion.js"></script>
</body>

</html>