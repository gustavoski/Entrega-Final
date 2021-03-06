<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Palabras Claves-->
    <meta
      name="keywords"
      content="asesoramiento, estudio contable, impuestos, tributo, rrhh, gestion, contabilidad"
    />
    <!--Descripción-->
    <meta name="description" content="Amitie estudio contable integral" />
    <!--Título-->
    <title>Amitié Estudio | Contacto</title>
    <!--Css-->
    <link rel="stylesheet" href="./css/style.css" />
    <!--Logo página web-->
    <link
      rel="shortcut icon"
      href="./img/logo-pagina-web-200x200.png"
      type="image/x-icon"
    />
    <!--Link Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="container-fluid bgGradientBlue">
    <!--Header-->
    <header class="pb-5">
      <!-- logo del navbar -->
      <nav class="navbar navbar-expand-sm navbar-dark pb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">
            <img src="./img/logo-nav.png" alt="Amitie Estudio" width="150" />
          </a>
          <!-- boton menu para responsive -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toogle navigation"
          >
            <span class="navbar-toggler-icon"> </span>
          </button>
          <!-- botones a las demas paginas -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fw-bold" href="./nosotros.html"> Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="./servicios.html">
                  Servicios</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="./contacto.html"> Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="./login.html"> Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!--Main-->
    <main class="container text-center text-light align-content-center">
      <!--Formulario de contacto-->
      <?php 
$myemail = 'estudioamitie@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$message = $_POST['mensaje'];
$subject = "Nuevo Contacto";

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Telefono: $telefono \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>


      <form class="shadow" action="enviar.php" method="post">
        <h2 class="h2 fw-bold mb-3">CONTACTO</h2>

        <!--Nombre del contacto - obligatorio-->
        <input
          class="shadow"
          type="text"
          name="nombre"
          placeholder="Nombre Completo"
          required
        />
        <!--Correo del contacto - obligatorio-->
        <input
          class="shadow"
          type="email"
          name="correo"
          placeholder="Correo Electrónico"
          required
        />
        <!--Teléfono del contacto - no es obligatorio-->
        <input
          class="shadow"
          type="text"
          name="telefono"
          placeholder="Teléfono"
        />
        <!--Consulta del contacto - obligatorio-->
        <textarea
          class="shadow"
          name="mensaje"
          placeholder="Escriba su consulta"
          required
        ></textarea>
        <input class="shadow" type="submit" name="enviar" value="ENVIAR" id="boton" />
      </form>
    </main>
    <!--Footer-->
    <footer class="container text-center mt-5 p-5">
      <div class="p-3">
          <!-- iconos de social media -->
        <div class="pt-5">
          <div>
            <ul class="social-icons">
              <li>
                <a href="https://www.instagram.com/estudioamitie/"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li>
                <a href="https://wa.me/5493434674263"
                  ><i class="fa fa-whatsapp"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.facebook.com/Amiti%C3%A9-Estudio-103548231900119"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
            </ul>
          </div>
          <!-- Copyright -->
          <div class="text-light">
            <p class="p-3">© Copyright 2021</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Script js Boostrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
