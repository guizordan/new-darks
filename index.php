<!DOCTYPE html>
<html lang="pt-br" id="page-top">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#5cc6d0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A New Dark's Informática é uma loja de equipamentos de informática e assistência técnica situada em Casca-RS">
    <meta name="keywords" content="informática, darks, dark's, new, equipamentos, assistência, técnica">
    <meta name="author" content="">

    <title>New Dark's Informática - Sempre o melhor pra você</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body class="index">

    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
          Menu <i class="fa fa-bars"></i>
      </button>
      <div class="container">
        <a class="navbar-brand" href="#page-top">
          <img src="img/new_darks_logo.png" height="75">
        </a>

        <div class="collapse navbar-collapse" id="navbarExample">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#address">Endereço</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#certification">Certificação Digital</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php
            $dir    = './img/banners/';
            $banners = array_diff(scandir($dir), array('..', '.'));
            foreach ($banners as $key => $banner) {
              if ($key == 2){
                echo '<div class="carousel-item active">';
              } else{
                echo '<div class="carousel-item">';
              }
              echo '<img class="d-block img-fluid" src="img/banners/' . $banner . '">';
              echo '</div>';
            }
          ?>
        </div>
        <a class="carousel-control-prev" onclick="$('#carousel').carousel('prev')">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" onclick="$('#carousel').carousel('next')">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <h3 class="text-center">Sobre Nós</h3>
        <div class="row">
          <div class="col-12">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat feugiat hendrerit. Aenean consequat turpis sit amet nibh sollicitudin tincidunt. Curabitur convallis blandit mollis. Nunc eget magna condimentum, auctor quam quis, pellentesque ipsum. Mauris vel ante posuere, rutrum sapien a, semper lorem. Morbi placerat sagittis sapien eget convallis. Aliquam ut suscipit mauris, ac faucibus velit. Donec sodales ut felis in pulvinar. Morbi euismod eu dolor sit amet consectetur. Suspendisse a blandit tellus. Aliquam neque augue, tempus et nulla vitae, viverra ornare ipsum.
          </div>
        </div>
      </div>
    </section>

    <section class="success p-0" id="address">
      <div class="row no-gutters">
        <div class="col-sm-4 text-center p-100">
          <h3>Endereço</h3>
          <p>Rua Barão do Rio Branco, 600
          <br>Casca-RS
          <br>CEP 99260-000</p>
        </div>
        <div class="col-sm-8 p-0 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.227699947351!2d-51.97932378442409!3d-28.56292447091285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951d83019a881a11%3A0x23fe7b003996710!2sCasca+-+Dark&#39;s+Inform%C3%A1tica!5e0!3m2!1spt-PT!2sbr!4v1502297127347" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section class="deep-blue" id="certification">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h3 class="text-center">Certificação Digital</h3>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat feugiat hendrerit. Aenean consequat turpis sit amet nibh sollicitudin tincidunt. Curabitur convallis blandit mollis. Nunc eget magna condimentum, auctor quam quis, pellentesque ipsum. Mauris vel ante posuere, rutrum sapien a, semper lorem. Morbi placerat sagittis sapien eget convallis. Aliquam ut suscipit mauris, ac faucibus velit. Donec sodales ut felis in pulvinar. Morbi euismod eu dolor sit amet consectetur. Suspendisse a blandit tellus. Aliquam neque augue, tempus et nulla vitae, viverra ornare ipsum.
          </div>
          <div class="col-6 text-center">
            <img src="img/safeweb.png" height="250px">
          </div>
        </div>
      </div>
    </section>

    <section class="black text-center" id="contact">
      <div class="container">
        <div class="row">
          <div class="footer-col col-sm-6 mb-2">
            <h3>Contato</h3>
            <p>
              e-mail: <a href="mailto:darks@darks.com.br">darks@darks.com.br</a><br/>
              Telefone: <a href="tel:0555433472401"></a> (54) 3347-2401 <br>
              skype: oi@darks.com.br <br>
            </p>
          </div>
          <div class="footer-col col-sm-6">
            <h3>Nas redes sociais</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="btn-social btn-outline" target="_blank"
                href="https://www.facebook.com/New-Darks-Inform%C3%A1tica-461065287302460/">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-center">
      <div class="footer-below pt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              New Dark's Informática &reg; Todos os direitos reservados - 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/freelancer.min.js"></script>

</body>

</html>
