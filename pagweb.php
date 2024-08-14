<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Jornadas Interactivas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(50%);
    filter: grayscale(20%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 200px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #011f5f;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #383d47;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #dd6b00 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #011f5f !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #3a404d;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  .responsive-img {
            max-width: 100%;
            height: auto;
  }
  .no-link-style {
            color: white; /* Cambia el color del texto a blanco */
            text-decoration: none; /* Elimina el subrayado */
        }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo_final.png" alt="colegio" width="195" height="50" class="responsive-img">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">INICIO</a></li>
        <li><a href="#band">JORNADAS</a></li>
        <li><a href="#tour">INFORMACIÓN</a></li>
        <li><a href="#update">¡INGRESATE!</a></li>
        <li><a href="#contact">CONTACTANOS</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="colegio.jpg" alt="colegio" width="200" height="50">
        <div class="carousel-caption">
          <h3>Colegio</h3>
          <p>¡Visitanos!</p>
        </div>      
      </div>

      <div class="item">
        <img src="jornadas1.jpeg" alt="jornadas1" width="200" height="50">
        <div class="carousel-caption">
          <h3>jornadas 2023</h3>
          <p>Increibles jornadas</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="jornada3.jpeg" alt="jornadas3" width="200" height="50">
        <div class="carousel-caption">
          <h3>Jornadas 2014</h3>
          <p>¡Aprendemos e interactuamos!</p>
        </div> 
      </div>    

       <div class="item">
          <img src="jornada4.jpeg" alt="jornadas4" width="200" height="50">
          <div class="carousel-caption">
            <h3>Jornadas 2015</h3>
            <p>¡Dejamos volar nuestra creatividad!</p>
          </div> 
        </div>  
          
        <div class="item">
            <img src="jornada5.jpeg" alt="jornadas5" width="200" height="50">
            <div class="carousel-caption">
              <h3>Jornadas 2016</h3>
              <p>¡La sabiduria es poder!</p>
            </div> 
        </div>  

        <div class="item">
          <img src="jornada6.jpeg" alt="jornadas5" width="200" height="50">
          <div class="carousel-caption">
            <h3>Recreo</h3>
            <p>Un descanso...</p>
          </div> 
        </div>  
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Nuestras jornadas Newtonianas</h3>
  <p> ¡Te invitamos a nuestras Jornadas Interactivas en el Colegio Isaac Newton! Descubre un mundo de aprendizaje y diversión en un ambiente lleno de actividades emocionantes. Desde investigaciones hasta talleres de arte, hay algo para todos. Únete a nosotros y sé parte de esta experiencia educativa única. ¡Te esperamos con entusiasmo!</p><br>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">INFORMACIÓN: </h3>
    <p class="text-center">Disfruta de nuestros proyectos en el momento que más prefieras<br> 
    </p>
      <form action="" method="post" class="form-inline text-center">
            <div class="form-group mr-2">
                <label for="donde" class="mr-2 text-dark">Buscar por:</label>
                <select name="donde" id="donde" class="form-control">
                    <option value="curso">Curso</option>
                    <option value="fecha">Fecha</option>
                    <option value="año">Año</option>
                    <option value="hora">Hora</option>
                    <option value="ubicacion">Ubicación</option>
                    <option value="tema">Tema</option>
                </select>
            </div>
            <div class="form-group mr-2" id="criterioInput">
                <label for="que" class="sr-only">Criterio</label>
                <input type="text" name="que" id="que" placeholder="criterio a buscar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
      </form>
      <div class= 'row'>
        <?php
            include "conexion.php";

            // Obtener todas las opciones desde la base de datos
            $opcionesCurso = [];
            $opcionesAño = [];
            $opcionesTema = [];
            $opcionesUbicacion = [];

            $sql = "SELECT DISTINCT curso, año, tema, ubicacion FROM jornadas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (!in_array($row['curso'], $opcionesCurso)) {
                        $opcionesCurso[] = $row['curso'];
                    }
                    if (!in_array($row['año'], $opcionesAño)) {
                        $opcionesAño[] = $row['año'];
                    }
                    if (!in_array($row['tema'], $opcionesTema)) {
                        $opcionesTema[] = $row['tema'];
                    }
                    if (!in_array($row['ubicacion'], $opcionesUbicacion)) {
                        $opcionesUbicacion[] = $row['ubicacion'];
                    }
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $campo = isset($_POST['donde']) ? $_POST['donde'] : '';
                $criterio = isset($_POST['que']) ? $_POST['que'] : '';

                if (!empty($campo) && !empty($criterio)) {
                    // Usar declaraciones preparadas
                    $stmt = $conn->prepare("SELECT idcharla, curso, fecha, año, hora, ubicacion, tema FROM jornadas WHERE $campo LIKE ?");
                    $criterio = "%" . $criterio . "%";
                    $stmt->bind_param("s", $criterio);

                    if ($stmt->execute()) {
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped'>
                                    <thead style='background-color: #CCCDCF; color: #040404;'>
                                        <tr>
                                            <th>ID</th>
                                            <th>Curso</th>
                                            <th>Fecha</th>
                                            <th>Año</th>
                                            <th>Hora</th>
                                            <th>Ubicación</th>
                                            <th>Tema</th>
                                        </tr>
                                    </thead>
                                    <tbody>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<thead style='background-color: #ffffff; color: #040404;'>
                                        <tr>
                                          <p>
                                          <td>" . htmlspecialchars($row['idcharla']) . "</td>
                                          <td>" . htmlspecialchars($row['curso']) . "</td>
                                          <td>" . htmlspecialchars($row['fecha']) . "</td>
                                          <td>" . htmlspecialchars($row['año']) . "</td>
                                          <td>" . htmlspecialchars($row['hora']) . "</td>
                                          <td>" . htmlspecialchars($row['ubicacion']) . "</td>
                                          <td>" . htmlspecialchars($row['tema']) . "</td>
                                          </p>
                                        </tr>
                                      </thead>";

                            }

                            echo "</tbody>
                                  </table>";
                        } else {
                            echo "<div class='alert alert-info'>No se encontraron resultados.</div>";
                        }

                        $stmt->close();
                    } else {
                        echo "<div class='alert alert-danger'>Error en la consulta SQL: " . $stmt->error . "</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>Por favor, complete todos los campos.</div>";
                }
            }

            $conn->close();
        ?>
      </div>
    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('donde').addEventListener('change', function() {
            var campoSeleccionado = this.value;
            var opciones = [];
            if (campoSeleccionado === 'curso') {
                opciones = <?php echo json_encode($opcionesCurso); ?>;
            } else if (campoSeleccionado === 'año') {
                opciones = <?php echo json_encode($opcionesAño); ?>;
            } else if (campoSeleccionado === 'tema') {
                opciones = <?php echo json_encode($opcionesTema); ?>;
            } else if (campoSeleccionado === 'ubicacion') {
                opciones = <?php echo json_encode($opcionesUbicacion); ?>;
            }
            if (opciones.length > 0) {
                var opcionesHTML = opciones.map(function(opcion) {
                    return '<option value="' + opcion + '">' + opcion + '</option>';
                }).join('');
                document.getElementById('criterioInput').innerHTML = `<label for="que" class="sr-only">Criterio</label>
                    <select name="que" id="que" class="form-control">
                        <option value="">Seleccione una opción</option>` + opcionesHTML + `</select>`;
            } else {
                document.getElementById('criterioInput').innerHTML = `<label for="que" class="sr-only">Criterio</label>
                    <input type="text" name="que" id="que" placeholder="criterio a buscar" class="form-control">`;
            }
        });
    </script>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="update" class="container">
      <h2 class="text-center" style="font-size:200%; color:#dd6b00"><b>¡Ingresa tus datos para saber de tu asistencia!</b></h2>

      <?php
        include 'conexion.php';

        // Consulta para obtener los temas de charlas
        $sql = "SELECT idcharla, tema FROM jornadas";
        $result = $conn->query($sql);

        if ($result === false) {
            die("Error en la consulta SQL: " . $conn->error);
        }

        // Procesar los datos del formulario cuando se envíe
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar que todos los campos estén presentes en $_POST
            if (isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Charla']) && isset($_POST['Email'])) {
                // Obtener los datos del formulario
                $Nombre = $_POST['Nombre']; 
                $Apellido = $_POST['Apellido'];
                $Charla = $_POST['Charla'];
                $Email = $_POST['Email'];

                // Preparar y ejecutar la consulta de inserción
                $stmt = $conn->prepare("INSERT INTO invitados (Apellido, Nombre, Charla, Email) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $Apellido, $Nombre, $Charla, $Email);

                if ($stmt->execute()) {
                    echo "<div class='alert alert-success'>Registro insertado correctamente</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error al insertar registro: " . $stmt->error . "</div>";
                }
                $stmt->close();
            } else {
                echo "<div class='alert alert-warning'>Por favor, complete todos los campos.</div>";
            }
        }

        $conn->close();
        ?>
       <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 offset-md-1">
              <form name="myForm" method="post" action="" onsubmit="return validateForm()" class="form-horizontal">
                <div class="form-group row responsive">
                    <div class="col-sm-6">
                        <label for="nombre" class="mr-sm-2">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="Nombre">
                    </div>
                    <div class="col-sm-6">
                        <label for="apellido" class="mr-sm-2">Apellido: </label>
                        <input type="text" class="form-control" id="apellido" name="Apellido">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="charla" class="mr-sm-2">¿A qué charla va? </label>
                        <select class="form-control" id="charla" name="Charla">
                            <option value="">Seleccione una charla</option>
                            <?php
                            // Generar opciones dinámicamente desde la base de datos
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="' . htmlspecialchars($row['idcharla']) . '">' . htmlspecialchars($row['tema']) . '</option>';
                                }
                            } else {
                                echo '<option value="">No hay charlas disponibles</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="email" class="mr-sm-2">Email: </label>
                        <input type="email" class="form-control" id="email" name="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        
    <!-- Scripts de Bootstrap y cualquier otro que necesites -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            let apellido = document.forms["myForm"]["Apellido"].value;
            let nombre = document.forms["myForm"]["Nombre"].value;
            let charla = document.forms["myForm"]["Charla"].value;
            let email = document.forms["myForm"]["Email"].value;
            
            if (apellido == "" || nombre == "" || charla == "" || email == "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
        }
    </script>
  
</div>  

  <div id="contact" class="bg-1">
    <div class="container">
   
      <h2 class="text-left" style="color:#dd6b00"><b>Contactanos</b></h2>


      <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span><a href="https://www.google.com.ar/maps/place/Instituto+Tecnol%C3%B3gico+Isaac+Newton/@-31.3421477,-64.2962177,17z/data=!4m6!3m5!1s0x94329dd2518a6ae5:0xe1cfc6ca59c6367f!8m2!3d-31.3425097!4d-64.294426!16s%2Fg%2F11bw3_390n?entry=ttu" class="no-link-style">Molino de Torres, Villa Warcalde</a></p>
        <p><span class="glyphicon glyphicon-phone"></span><a href="https://www.instagram.com/jornadas_in/" class="no-link-style">Instragram: @jornadas_IN</a></p>
        <p><span class="glyphicon glyphicon-phone"></span><a href="https://web.facebook.com/profile.php?id=61560477207542" class="no-link-style">Facebook: Insituto-Tecnologico-IN</a></p>
        <p><span class="glyphicon glyphicon-envelope"></span><a href="https://mail.google.com/mail/u/0/#inbox" class="no-link-style">Email: jornadasin@gmail.com</a></p>
      </div>
      
      <a href="https://www.google.com.ar/maps/place/Instituto+Tecnol%C3%B3gico+Isaac+Newton/@-31.3421477,-64.2962177,17z/data=!4m6!3m5!1s0x94329dd2518a6ae5:0xe1cfc6ca59c6367f!8m2!3d-31.3425097!4d-64.294426!16s%2Fg%2F11bw3_390n?entry=ttu">
        <img src="mapaisaac.png" width="600" height="500" class="responsive-img">
      </a>
    
    </div>
  </div>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> ¡Ven a disfrutar! <a data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
