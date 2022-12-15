<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //something was posted
  $ime = $_POST['ime'];
  $priimek = $_POST['priimek'];
  $elektronska_posta = $_POST['elektronska_posta'];
  $geslo = $_POST['geslo'];

  try{
  if(!empty($ime) && !empty($priimek) && !empty($elektronska_posta) && !empty($geslo)){
    //save to database
    $user_id = random_num(20);
    $query = "INSERT INTO uporabnik (user_id, ime, priimek, elektronska_posta, geslo) VALUES ('$user_id', '$ime', '$priimek', '$elektronska_posta', '$geslo')";
    echo $query;
    mysqli_query($con, $query);
    header("Location: prijava.php");
    die;
  } else {
    echo "Prosim vpišite podatke";
  }
} catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

}

?>
<!DOCTYPE html>
<html lang="sl-SI">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registracija</title>
        <link rel="icon" type="image/x-icon" href="Slike/logo.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <!--<a class="navbar-brand" href="index.html" style="font-size: 35px; color: red;">Gasilko</a>-->
                <a href="index.html"><img class="logo" src="Slike/logo.png" alt="Logo" width="100" height="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0"  style="color: red;">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Domov</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="pozarna_varnost.html">Požarna varnost</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="varnost_in_zdravje.html">Varnost in zdravje pri delu</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="prodaja_gasilnikov.php">Prodaja gasilnikov</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="podpora.html">Podpora</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('../Slike/kombi.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h2>Vse kar za požarno varnost potrebujete vi, vam Gasilko priskrbi!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="prijava">
                      <h1>Registracija</h1>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <form class="mx-1 mx-md-4" method="post">
                      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="ime" class="form-control" placeholder="ime" name="ime"/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="priimek" class="form-control" placeholder="priimek" name="priimek"/>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="elektronska_posta" class="form-control" placeholder="elektronska_posta" name="elektronska_posta"/>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="geslo" class="form-control" placeholder="geslo" name="geslo"/>
                          </div>
                        </div>
                        <!--
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" placeholder="ponovite geslo"/>
                          </div>
                        </div>-->
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input type="submit" class="btn btn-primary btn-lg" value="Registriraj se">
                        </div>
      
                        <div class="container signin">
                          <p>Že imate račun? <a href="prijava.php">Vpišite se</a></p>
                        </div>
                      </form>

                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="text-center py-5 text-white" style="background-color: #2B303A;">
            <div class="container">
                <div class="row">
                    <div class="col-12 small text-center text-white">
                        <br>

                        <div class="features-clean">
                            <div class="container">
                                <div class="row features">
                                    <div class="col-sm-4 col-m-3 col-lg-3 item">
                                        <h6 class="name text-uppercase">Kje nas najdete</h6>
                                        <a href="https://www.google.com/maps/dir//Gasilko+d.o.o.+Meljska+c.+83+2000+Maribor/@46.5615676,15.6684637,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x476f771d243269ff:0x84c16bd2b0242d1c!2m2!1d15.6684637!2d46.5615676">Meljska cesta 83 <br> 2000 Maribor</a>
                                       <br>
                                    PON-PET: 7.30-15.30
                                    </div>
                                    <div class="col-sm-4 col-m-3 col-lg-3 item">
                                        <h6 class="name text-uppercase">Pišite nam</h6>
                                        <a href = "mailto: info@gasilko.si">info@gasilko.si</a>
                                    </div>
                                    <div class="col-sm-4 col-m-3 col-lg-3 item">
                                        <h6 class="name text-uppercase">Pokličite nas</h6>
                                        <a href="tel:+386-41-643-195">041 643 195</a>
                                    </div>

                            <br>
                            
                        <div class="fb-page col-sm-12 col-m-3 col-lg-3 item"
                            data-href="https://www.facebook.com/gasilko" 
                            data-width="350"
                            data-hide-cover="false"
                            data-show-facepile="true"></div>
                                    <br />
                                  <br style="clear:both;" />
                                </div>
                            </div>
                    </div>
                </div>
                <div class="mb-0 py-3 text-white">© 2022 by Gasilko | Vse pravice pridržane</div>
            </div>
        </footer>
    

        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sl_SI/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
