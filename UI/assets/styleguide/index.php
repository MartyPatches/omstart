<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STYLEGUIDE OMSTart</title>
    <style type="text/css"></style>
    <link rel="stylesheet" id="omstart-style-css" href="../../../style.css" type="text/css" media="all">
    <script src="http://localhost:8888/omstart/wp-includes/js/wp-emoji-release.min.js" type="text/javascript"></script>
</head>
<body>



<nav id="site-navigation" class="main-navigation" role="navigation">
            <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Primary Menu</button> -->
            <div class="menu">
                <div class="container">
                    <h1 class="site-title"><img src="../media/icons/omstart-house.png" />OMSTart</h1>
                    <ul class="project-navigation">
                          <li><a href="http://localhost:8888/omstart/exempelsida/">viTT</a>
                                <ul>
                                    <li class="page_item page-item-2"><a href="http://localhost:8888/omstart/exempelsida/">tvÅ</a></li>
                                    <li class="page_item page-item-2"><a href="http://localhost:8888/omstart/exempelsida/">proJEKT</a></li>
                                    <li class="page_item page-item-2"><a href="http://localhost:8888/omstart/exempelsida/">TREdje</a></li>
                                </ul>
                            </li>
                    </ul>
                        <ul class="page-navigation">

                            <li class="page_item page-item-2"><a href="http://localhost:8888/omstart/exempelsida/">Start</a></li>
                            <li class="page_item page-item-4"><a href="http://localhost:8888/omstart/sida-nummer-2/">Om projektet</a></li>
                            <li class="page_item page-item-7 current_page_item"><a href="http://localhost:8888/omstart/">Bilder</a></li>
                            <li class="page_item page-item-7 current_page_item"><a href="http://localhost:8888/omstart/">Filmer</a></li>
                        </ul>
                </div>
            </div>
        </nav><!-- #site-navigation -->
    <!-- Header -->
    <header id="masthead" class="site-header image-bg" role="banner" data-type="background" data-speed="3" >
    <div class="container">


        <div class="site-branding">
           <!--  <h1 class="site-title"><img src="../media/icons/omstart-house-white.png" />OMSTart</h1> -->
            <!-- <p class="site-description col-sm-8 col-sm-offset-2">Ett samarbete mellan Gauge, Blue, Ångest, Ikaroz, Nug, Rolf Carl W, Fits, Erse, Ruskig, Critical, Kerstin Simonsson, DJ Vadim &amp; Stockholm Konst.</p> -->
              <!--  <p class="site-description col-sm-8 col-sm-offset-2">En gatukonstcermoni mitt i Stockholm.</p> -->
        </div><!-- .site-branding -->
        </div>

    </header>
    <div class="top-wave"></div>
    <!-- Header END-->
    <!-- Video -->
<!--
    <video preload="" muted="">
        <source src="http://localhost:8888/omstart/wp-content/themes/omstart/UI/assets/media/omstart.mp4" type="video/mp4" >
        <source src="">
    </video> -->

            <!-- Video END -->


            <div class="content site-content">

            <section class="project-description">
                <div class="container">
                <div class="col-sm-6 col-sm-offset-3">
                        <h1>viTT</h1>
                        <p>viTT är en process och slutresultatet är fullkomligt okänt till sista, i skrivande stund okända, datumet

innan rivningen påbörjas. Hela graffitiobjektet Kolingsborg kommer under vecka 24 att vitmålas. Den

15/6 kl.13.00 invigs OMSTart och viTT av Kulturborgarrådet, Stockholm Konst och närvarande

konstnärer som på plats inleder den minst 2 månader långa måleriprocessen. Det vita är en symbol

för det nya och oskrivna och inga planer målarna emellan har gjorts innan kl.13.00 denna dag. Det är

ingen bra idé att starta ett nytt samarbete om någon redan har förutbestämt hur arbetet skall ta

form innan. Men visst finns förutsättningarna.</p>
                 </div>
                </div>
            </section>
            <div class="bottom-wave" style="background-color: #e6e6e6"></div>
            <section class="blurbs">
                <div class="container">
                    <div class="col-sm-4 blurb">
                            <img src="../media/icons/omstart-house.png" alt="">
                            <h2>Om projektet</h2>
                            <p>Lorem ipsum om något som ska stå här så att det syns lorem ipsum stuff. Tesadk ds asdkl adsiovdm dsjens aflkjdfir sksfdlk i sdflksdfp sf sd ewksdflsjf s dsfjkli sdflks a sf sdjkl trh. </p>
                    </div>

                    <div class="col-sm-4 blurb">
                            <img src="../media/images/blurb-images.png" alt="">
                            <h2>Bilder</h2>
                            <p>Lorem ipsum om något som ska stå här så att det syns lorem ipsum stuff. Tesadk ds asdkl adsiovdm dsjens aflkjdfir sksfdlk i sdflksdfp sf sd ewksdflsjf s dsfjkli sdflks a sf sdjkl trh. Tesadk ds asdkl adsiovdm dsjens aflkjdfir sksfdlk i sdflksdfp sf sd ewksdflsjf s dsfjkli sdflks a sf sdjkl trh. </p>
                    </div>

                    <div class="col-sm-4 blurb">
                            <img src="../media/images/blurb-graffer3.png" alt="">
                            <h2>Medverkande</h2>
                            <p>Lorem ipsum om något som ska stå här så att det syns lorem ipsum stuff. </p>
                    </div>
                </div>
            </section>

            <section class="quotation" data-type="background" data-speed="4" >
   <div class="bottom-wave grey"></div>
                    <div class="container " >
                               <h1 class="col-sm-8 col-sm-offset-2">
                               "Känner mig som en blomma som får blomma ut :)”
                               <span class="author">- Fits viTT 2015</span>
                               </h1>
                     </div>
                        <div class="top-wave"></div>
            </section>


            <section class="container instagram">

            <h1>OMSTart på <img src="../media/icons/instagram-logo.png" /></h1>
            <?php
                   $url = "https://api.instagram.com/v1/users/1901630501/media/recent?access_token=45322594.626918f.90d7ee0089c640b0ad90076204102d1f";
                    $ch = curl_init($url);

                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                    $json = curl_exec($ch);
                    curl_close($ch);
                    $jsonDecoded = json_decode($json, true);
                    ?>


                    <?php for($i = 0 ; $i < 3 ; $i++){ ?>
                    <div class="instagram-image col-sm-4 ">
                    <a href="<?php echo $jsonDecoded['data'][$i]['link'];  ?>" target="_blank">
                        <img src="<?php echo $jsonDecoded['data'][$i]['images']['standard_resolution']['url'];  ?>">
                        <span class="likes"><?php echo $jsonDecoded['data'][$i]['likes']['count'];  ?></span>
                    </a>

                    </div>

                        <?php } ?>

                        <?php //var_dump($jsonDecoded['data'][0]); ?>





            </section>

            <footer class="top-margin">
                <div class="container">
                    <div class="col-sm-4">
                    <h3>Konstnärer</h3>
                        <ul>
                            <li>Ruskig</li>
                            <li>Erse</li>
                            <li>Rolf Carl Werner</li>
                            <li>Nug</li>
                            <li>Kaos</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3>OMSTart</h3>
                        <ul>
                            <li>Om projektet</li>
                            <li>Medverkande</li>
                            <li>Bilder</li>
                            <li>Filmer</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3>Konstnärer</h3>
                        <ul>
                            <li>Ruskig</li>
                            <li>Erse</li>
                            <li>Rolf Carl Werner</li>
                            <li>Nug</li>
                            <li>Kaos</li>
                        </ul>
                    </div>
                </div>
            </footer>

            </div>

            <script type="text/javascript" src="http://localhost:8888/omstart/wp-content/themes/omstart/js/navigation.js"></script>
            <script type="text/javascript" src="http://localhost:8888/omstart/wp-content/themes/omstart/js/skip-link-focus-fix.js"></script>
            <script type="text/javascript" src="../../../script.js"></script>
        </body>
        </html>