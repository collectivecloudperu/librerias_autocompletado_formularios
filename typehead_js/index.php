<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Typeahead.js</title>
  
   <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>    
</head>

<body>

  <div class="container">

    <h1>Typeahead JS</h1>     

    <div class="page-header">
      <h2>Formulario</h2>
    </div>

    <div class="row">

          <div class="col-md-12">

            <form role="form">

              <div class="form-group">
                <label for="nya">Nombres y Apellidos:</label>
                <input type="text" class="form-control" id="nya" required>
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>
              </div>

              <div class="form-group">
                <label for="paisesv">Colores Favoritos (Autocompletado con Typeahead JS)</label><br>
                <input id="my-input" class="typeahead form-control" name="paises" type="text" placeholder="Ej: Amarillo" required>
              </div>

              <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" name="mensaje" required></textarea>
              </div>

              <button type="submit" class="btn btn-default">Aceptar</button>

            </form>

          </div>

    </div>

  </div>

  <script src="js/typeahead.min.js"></script>

  <script type="text/javascript">    
    $(function(){      
      $('#my-input').typeahead({
        // Nombre del Array de datos
        name: 'colores',
        // Ubicación del archivo JSON        
        prefetch: 'data/colores.json',
        // Cantidad de elementos a mostrar en la lista de autocompletado
        limit: 10
      });

    });
  </script>
</body> 
</html>