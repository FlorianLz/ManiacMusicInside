<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Maniac Music Inside</title>
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap CSS -->
      <link href="css/mdb.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/fontastic.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
      <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
  <body style="background-image:url('https://img.freepik.com/free-vector/grey-linen-texture-background_1053-253.jpg?size=338c&ext=jpg');">
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
              <li class="nav-item"><a href="mmissions.php" class="nav-link active">MMIssions</a>
              </li>
              <li class="nav-item"><a href="decouvertes.php" class="nav-link ">Découvertes</a>
              </li>
              <li class="nav-item"><a href="incontournables.php" class="nav-link ">Incontournables</a>
              </li>
              <li class="nav-item"><a href="cinema.php" class="nav-link">Cinéma</a>
              </li>
            <li class="nav-item"><a href="jeuxvideos.php" class="nav-link">Jeux vidéo</a>
              </li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail"><img src="img/articles/jackson.jpg" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="#">MMIssions</a></div>
                </div>
                <h1>MMIssion n°2 : Michael Jackson, "The king of the pop"<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/Lyd.jpg.JPG" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Lydie Vittu</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> 05 Février 2019</div>
                  </div>
                </div>
                <div class="post-body">

                    <iframe src="https://www.youtube.com/embed/zLJ_kKMnaQI" width="100%" height="500" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="mmission1.php" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Emission précédente </strong>
                      <h6>MMIssion n°1 : Top 10 des chansons des années 2000</h6>
                    </div></a></div>
                <div class="post-comments">
                  <div id="disqus_thread" style="width:100%;margin-left:auto;margin-right:auto;"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://mmi-1.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                </div>
              </div>
            </div>
          </div>
        </main>
        <aside class="col-lg-4">
          
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts">
            <header>
              <h3 class="h6">Derniers articles publiés</h3>
            </header>
            <div class="blog-posts"><a href="bigbang.php">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/articles/bigbang.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Bigbang</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 120</div>
                      <div class="comments"><i class="icon-comment"></i>0</div>
                    </div>
                  </div>
                </div></a><a href="leeandlie.php">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/articles/leeandlie.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>LeeandLie: La Youtubeuse, au succès numérique</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 100</div>
                      <div class="comments"><i class="icon-comment"></i>1</div>
                    </div>
                  </div>
                </div></a><a href="saez.php">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/articles/saez.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Saez</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 110</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a></div>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Catégories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="mmissions.php">MMIssions</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="decouvertes.php">Découvertes</a><span>4</span></div>
            <div class="item d-flex justify-content-between"><a href="incontournables.php">Incontournables</a><span>4</span></div>
            <div class="item d-flex justify-content-between"><a href="cinema.php">Cinéma</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="jeuxvideos.php">Jeux vidéo</a><span>1</span></div>
          </div>
        </aside>
      </div>
    </div>
    <?php include('footer.php');?>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>