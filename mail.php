<?php

// if the url field is empty
if (isset($_POST['url']) && $_POST['url'] == '' && $_POST['question'] == "6") {

    // put your email address here
    $youremail = 'pablonaveiralopez@gmail.com, anne.gurt88@gmail.com';

    // prepare message
    $body = "Nuevo mensaje desde el formulariio de contacto Hype:

	Nombre:  $_POST[name]
	Email:  $_POST[email]
	Mensaje:  $_POST[message]";

    if ($_POST['email'] && !preg_match("/[\r\n]/", $_POST['email'])) {
        $headers = "From: hola@escapismolugo.com";
    } else {
        $headers = "From: $youremail";
    }

    $myfile = fopen("logs.txt", "a") or die("Unable to open file!");

    fwrite($myfile, "\n" . $body);
    fclose($myfile);

    mail($youremail, 'Mensaje desde la web', $body, $headers);

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jumanji - Hype Escape Room Lugo</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/2018c2b463.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/single.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="img/lock.png" />

    <meta name="description"
        content="Hype Escape Room Lugo es la primera sala de la ciudad. Forma tu equipo y adéntrate en el mundo de los escape rooms! Da lo mejor de ti este 2021 ⚠️ Es 100% Recomendable" />
    <meta name="keywords" content="Jumanji escape room" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div id="enlaces-responsive" class="enlaces-responsive">
        <svg height="100%" width="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <path
                d="M 0,600 C 0,600 0,300 0,300 C 124.93333333333334,243.06666666666666 249.86666666666667,186.13333333333335 394,218 C 538.1333333333333,249.86666666666665 701.4666666666667,370.53333333333336 879,399 C 1056.5333333333333,427.46666666666664 1248.2666666666667,363.73333333333335 1440,300 C 1440,300 1440,600 1440,600 Z"
                stroke="none" stroke-width="0" fill="#ffffffff"
                class="transition-all duration-300 ease-in-out delay-150" transform="rotate(-180 720 300)"></path>
        </svg>
        <div class="links">
            <li>
                <a href="https://www.escapismolugo.com" class="text-white">Inicio</a>
            </li>
            <li>
                <a href="/#reservar" class="text-uppercase destacado">Reservar</a>
            </li>
            <li><a href="contacto" class="text-white">Contacto</a></li>
            <i id="close" class="fas fa-times"></i>
        </div>
    </div>

    <header class="position-relative w-100">
        <nav class="d-flex width-100 justify-content-around align-items-center">
            <div class="
            bg-light-gray
            d-flex
            align-items-center
            justify-content-center
            logo
          ">
                <img src="/img/logo.png" alt="" />
            </div>

            <div id="ham" class="ham">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>

            <div id="enlaces" class="
            d-flex
            align-items-center
            justify-content-center
            md-margin-20px
          ">
                <li>
                    <a href="/" class="text-white">Inicio</a>
                </li>
                <li>
                    <a href="/#reservar" class="text-uppercase destacado">Reservar</a>
                </li>
                <li><a href="contacto" class="text-white">Contacto</a></li>
            </div>

            <div id="social" class="social d-flex align-items-center justify-content-center">
                <li>
                    <a href="https://www.facebook.com/HypeLugo" class="text-white"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.tripadvisor.com/Attraction_Review-g609027-d13312887-Reviews-Hype_Escape_Room-Lugo_Province_of_Lugo_Galicia.html"
                        class="text-white"><i class="fab fa-tripadvisor"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/hypelugo/" class="text-white"><i
                            class="fab fa-instagram"></i></a>
                </li>
            </div>
        </nav>


    </header>


    <section>
        <div class="container m-5 d-flex flex-column align-items-center">

            <div class="row d-flex justify-content-center">

                <div class="col"></div>
                <h2 class="text-uppercase">Gracias por contactar</h2>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="col">
                    <p>En breves nos pondremos en contacto contigo. Puedes hacer una reserva a través de la página.</p>

                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col d-flex justify-content-center">
                    <img style="width: 80%" src="img/thank-you.jpg" alt="">

                </div>
            </div>

        </div>
    </section>

    <footer class="text-center text-lg-start dark">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row dark">
                <!--Grid column-->
                <div class="
              col-lg-6 col-md-12
              mb-4 mb-md-0
              d-flex
              justify-content-center
              align-items-center
            ">
                    <img style="width: 150px" src="img/logo.png" alt="" />
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="
              col-lg-6 col-md-12
              mb-4 mb-md-0
              d-flex
              flex-sm-column
              align-items-center
              justify-content-center
            ">
                    <li><a class="text-white" href="">Condiciones de Reserva</a></li>
                    <li><a class="text-white" href="">Política de privacidad</a></li>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 dark text-white">
            © 2021 Copyright
            <a class="text-white" href="https://www.pablonaveira.dev">Hype Escape Room</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script id="js-turitop" src="https://app.turitop.com/js/load-turitop.min.js" data-company="H274" data-ga="no"
        data-buttoncolor="green" data-afftag="ttafid"></script>

</body>

</html>