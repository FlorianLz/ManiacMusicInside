<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Maniac Music Inside</title>
  <!-- Police -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/fontastic.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <link rel="stylesheet" href="css/custom.css">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap CSS -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

    
    
    
<body>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg" style="position:fixed;top:0;width:100%;">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close" style="color:black;"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="Que recherchez-vous ?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.php" class="navbar-brand"><img src="img/mmi.png" style="width:65px">Maniac Music Inside</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="mmissions.php" class="nav-link">MMIssions</a>
              </li>
              <li class="nav-item"><a href="decouvertes.php" class="nav-link">Découvertes</a>
              </li>
              <li class="nav-item"><a href="incontournables.php" class="nav-link ">Incontournables</a>
              </li>
              <li class="nav-item"><a href="cinema.php" class="nav-link">Cinéma</a>
              </li>
            <li class="nav-item"><a href="jeuxvideos.php" class="nav-link active">Jeux vidéo</a>
              </li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
          </div>
        </div>
      </nav>
    </header>

    
    <div id="contenusite">
        
        <center><h2 class="h1-responsive font-weight-bold my-5">Section : Jeux Vidéo</h2>
        <!-- Section description -->
        <p class="dark-grey-text w-responsive mx-auto mb-5">Retrouvez ci-dessous tous nos articles sur les jeux vidéo !</p></center>
        
        <!-- Card deck -->
    <div class="card-deck" id="card-deck">

      <!-- Card -->
      <div class="card mb-4 apercu">

        <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="img/articles/jeux.jpg" alt="Card image cap">
          <a href="spec-mus.php">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body" style="text-align:center;">

          <!-- Category -->
          <a href="jeuxvideos.php" class="pink-text">
            <h6 class="font-weight-bold mb-3"><i class="fas fa-gamepad pr-2"></i>Jeux vidéo</h6>
          </a>
          <!-- Post title -->
      <h4 class="font-weight-bold mb-3"><strong>Les spécifiés de la musique dans les jeux vidéo</strong></h4>
      <!-- Post data -->
      <p>Par <a class="font-weight-bold">Simon Voos</a>, 07/02/2019</p>
      <!-- Excerpt -->
      <p class="dark-grey-text"><i>Dans les années 1970, quand les jeux vidéo commencèrent à être source de divertissement,
        la musique commença à être stockée de manière analogique sur des supports comme les
        cassettes audio et les disques phonographiques....</i></p>
      <!-- Read more button -->
      <a class="btn btn-pink btn-rounded btn-md" href="spec-mus.php">Afficher l'article</a>

        </div>

      </div>
      <!-- Card -->

     <!-- Card -->
      <div class="card1 mb-4 apercu">

      </div>
      <!-- Card -->
        <!-- Card -->
      <div class="card1 mb-4 apercu">

      </div>
      <!-- Card -->

    </div>
<!-- Card deck -->
    </div>
    

    <!-- Fin de la partie contenu-->
    

    
     <?php include('footer.php');?>           
    
</body>
 <!-- Chargement des scripts -->
  <!-- JQuery -->
  <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./js/mdb.js"></script>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
</html>
