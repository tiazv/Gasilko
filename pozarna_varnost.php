<?php include_once("check_login.php") ?>
<!DOCTYPE html>
<html lang="sl-SI">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Požarna varnost</title>
        <link rel="icon" type="image/x-icon" href="Slike/logo.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("li").click(function(){
                    $("p").toggle();
                });
            });
            $(document).ready(function(){
                $("li").on({
                    mouseenter: function(){
                        $(this).css("color", "black");
                    },
                    mouseleave: function(){
                        $(this).css("color", "white");
                    }
                });
            });
        </script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a href="index.html"><img class="logo" src="Slike/logo.png" alt="Logo" width="100" height="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0"  style="color: red;">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Domov</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="pozarna_varnost.php">Požarna varnost</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="varnost_in_zdravje.php">Varnost in zdravje pri delu</a></li>
                        <?php if(!isset($_SESSION['user_id'])) { ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="prijava.php">Prijava</a></li>
                            <?php } ?>
                            <?php if(isset($_SESSION['user_id'])) { ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Odjava</a></li>
                            <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('Slike/kombi.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h2>Požarna varnost</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">
                    <!-- Post preview-->
                    <div>
                      <h3>Za opravljanje dejavnosti s področja varstva pred požarom imamo pooblastilo za izvajanje ukrepov varstva pred požarom, št. 8450-66/2012-4-DGZR, izdano s strani Uprave Republike Slovenije za zaščito in reševanje na podlagi 14. člena Pravilnika o usposabljanju in pooblastilih za izvajanje ukrepov varstva pred požarom (Ur.l. RS, št. 32/11 in 61-popr.).</h1>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <ol>
                        <!--prvi-->
                        <li style="font-size: 1rem;" id="prvi"><u>Vzdrževanje gasilnikov</u></li>
                            <p>Imamo pooblastilo Uprave Republike Slovenije za zaščito in reševanje za vzdrževanje gasilnikov št. 8450-93/2014-15-DGZR.
                            <br>
                            Servis gasilnih aparatov kvalitetno opravljamo v visokotehnološko opremljenih prostorih podjetja, na terenu ali v vaših prostorih, za kar imamo odlično opremljena servisna vozila. Gasilne aparate, ki potrebujejo večji poseg, odpeljemo v prostore podjetja in jih v najkrajšem možnem času vrnemo, v tem času pa vam gasilne aparate nadomestimo z našimi.
                            <br>
                            Aparate servisiramo z originalnimi nadomestnimi deli posameznih proizvajalcev v skladu s Pravilnikom o minimalnih tehničnih in drugih pogojih za vzdrževanje ročnih in prevoznih gasilnih aparatov (Ur.l. RS, št. 108/04, 116/07, 102/09 in 55/15).
                            <br>
                            Prav tako vam lahko brezplačno svetujemo o vrsti in številu ustreznih gasilnih aparatov v skladu s Pravilnikom o izbiri in namestitvi gasilnih aparatov (Ur.l. RS, št. 67/05), katere vam lahko tudi dobavimo in namestimo.
                            </p>
                            <br>
                        <!--drugi-->    
                        <li style="font-size: 1rem;"><u>Preizkušanje hidrantnih omrežij z izdajo hidrantnih listov</u></li>
                            <p>Imamo pooblastilo Uprave Republike Slovenije za zaščito in reševanje za preizkus hidrantnih omrežij št. 8450-46/2011-6-DGZR.
                            <br>
                            Pregled in meritev hidrantnega omrežja opravimo z umerjenimi merilnimi napravami, prav tako vzpostavimo Potrdilo o brezhibnem delovanju hidrantnega omrežja in hidrantni list za posamezne hidrante v skladu s Pravilnikom o preizkušanju hidrantnih omrežij (Ur.l. RS, št. 22/95, 102/09 in 60/20).
                            <br>
                            Meritve hidrantnega omrežja opravljamo v novozgrajenih objektih, ob adaptaciji objektov in redne letne preglede hidrantnega omrežja.
                            </p>
                            <br>
                        <!--tretji-->
                        <li style="font-size: 1rem;"><u>Izobraževanje in usposabljanje s področja požarne varnosti</u></li>
                            <p>Izobraževanje in preverjanje usposobljenosti iz Požarne varnosti opravljamo v skladu s Pravilnikom o usposabljanju zaposlenih za varstvo pred požarom (Ur.l. RS, št. 32/11 in 61/11 – popr.), v vaših prostorih ali v naši predavalnici, z vašo ali našo avdio-video opremo. Po potrebi lahko za Vas izvedemo tudi praktični prikaz gašenja začetnega požara, vajo evakuacije.
                            <br>Po uspešno opravljenem preverjanju usposobljenosti dobijo udeleženci potrdilo o opravljenem preizkusu znanja iz požarne varnosti.
                            <br>Usposabljamo tudi osebe, odgovorne za gašenje začetnih požarov in izvedbo evakuacije.
                            </p>
                            <br>
                        <!--četrti-->
                        <li style="font-size: 1rem;"><u>Izdelava požarnih redov, načrtov evakuacije in požarnih načrtov</u></li>
                            <p>Lahko vam izdelamo: Požarni red - elaborat z načrtom evakuacije in požarnim načrtom ter vsemi potrebnimi prilogami v skladu s 35. členom Zakona o varstvu pred požarom (ZVPoz-UPB1 - Ur.l. RS, št. 3/07 – uradno prečiščeno besedilo, 9/11, 83/12, 61/17 – GZ, 189/20 – ZFRO in 43/22) in Pravilnikom o požarnem redu (Ur.l. RS, št. 52/07, 34/11 in 101/11), izvlečke iz požarnega reda, načrte evakuacije, požarne načrte. 
                            <p>Izvlečke iz požarnega reda, znake za alarmiranje in požarne načrte primerno uokvirimo ali plastificiramo v želenem formatu in namestimo na mesto nahajanja. Izdelamo vam tudi vse priloge in izjave, s katerimi morajo biti seznanjeni vaši zaposleni.</p>
                            </p>
                            <br>
                        <!--peti-->
                        <li style="font-size: 1rem;"><u>Prodaja gasilnikov in ostale požarnovarnostne opreme</u></li>
                            <p>
                            Podjetje Gasilko d.o.o. v Sloveniji ekskluzivno zastopa španskega proizvajalca gasilnikov EXFAEX. Vsi gasilniki imajo opravljen brezplačni prvi pregled z veljavnostno 24 mesecev. Seveda pa vam nudimo tudi vso drugo požarnovarnostno opremo, ki je zastopana v Sloveniji.
                            </p>
                            <br>
                        <!--sesti-->
                        <li style="font-size: 1rem;"><u>Nudenje uslug osebe, pooblaščene za izvajanje ukrepov varstva pred požarom</u></li>
                            <p>
                            Nudimo vam tudi storitev uslug osebe, pooblaščene za izvajanje ukrepov varstva pred požarom (36. člen Zakona o varstvu pred požarom (ZVPoz-UPB1 - Ur.l. RS, št. 3/07 – uradno prečiščeno besedilo, 9/11, 83/12, 61/17 – GZ, 189/20 – ZFRO in 43/22).
                            </p>
                            <br>                            
                    </ol>
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
