<?php ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head name="start">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Freifunk Niederrhein</title>
        <meta name="description" content="Freifunk Niederrhein ist dein freies WLAN zum selber machen.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/stylesheets/style.css">
        <link rel="icon" sizes="192x192" href="highres-favicon.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="manifest" href="manifest.json">

<meta property="og:title" content="Freifunk Niederrhein" />
<meta property="og:description" content="Freifunk Niederrhein ist dein freies WLAN zum selber machen." />
<meta property="og:image" content="https://www.freifunk-niederrhein.de/tile.png" />
<meta property="og:url" content="https://www.freifunk-niederrhein.de/" />

        
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src='https://cdn.slaask.com/chat.js'></script>
<script>
    _slaask.init('90c90e3afc0c73aa826fea8464db928e');
</script>
    </head>
    <body id="start">
        <!--[if lt IE 9]>
            <aside class="browse-happy">Du benutzt einen <strong>veralteten</strong> Webbrowser. Einige Funktionen dieser Webseite werden leider nicht funktionieren. Du kannst einen neuen <a target="_blank" href="http://browsehappy.com/">sicheren Webbrowser herunterladen</a>, um dein Erlebnis auf unserer und anderen Internetseiten zu verbessern.</p></aside>
        <![endif]-->

        <div class="main-header-wrap">
            <header id="main-header">
                <h1 class="logo">
                    <a href="#start">Freifunk Niederrhein</a>
                </h1>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#start">Start</a></li>
                        <li><a href="#find-us">Karte</a></li>
                        <li><a href="#participate">Mitmachen</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                        <li><a target="_blank" href="http://wiki.freifunk-niederrhein.de">Wiki</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <main>
            <section>
                <?php include('content/start.php'); ?>
            </section>
            <section class="section-standard">
                <?php include('content/about.php'); ?>
            </section>
            <figure class="section-image">
                <img name="find-us" id="find-us" src="media/freifunk-flensburg-smartphone-by-fabian-horst.jpg" alt="Freifunk Niederrhein - auch in deiner Nähe">
                <figcaption>
                    <h2>Auch in deiner Nähe</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/find-us.php'); ?>
            </section>
            <figure name="participate" id="participate" class="section-image">
                <img src="media/freifunk-flensburg-routerhafenspitze-by-fabian-horst.jpg" alt="Freifunk Niederrhein - Router an der Hafenspitze">
                <figcaption>
                    <h2>Mach mit, bewege Bytes</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/participate.php'); ?>
            </section>
            <figure name="faq" id="faq" class="section-image">
                <img src="media/freifunk-flensburg-fragen-by-fabian-horst.jpg" alt="Freifunk Niederrhein - Mit den richtigen Antworten">
                <figcaption>
                    <h2>Wir haben Antworten</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/faq.php'); ?>
            </section>
            <figure name="contact" id="contact" class="section-image">
                <img src="media/freifunk-flensburg-kontakte.jpg" alt="Basteln beim Freifunk Niederrhein">
                <figcaption>
                    <h2>Jede Menge Kontakt(e)</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/contact.php'); ?>
            </section>
        </main>
        <footer class="main-footer">
            <ul class="list-external-links">
                <li>
                    <a href="https://www.facebook.com/FreifunkNiederrhein" title="Erfahre mehr über uns bei Facebook." class="facebook" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/FFNiederrhein" title="Erfahre mehr über uns bei Twitter." class="twitter" target="_blank">Twitter</a>
                </li>
                <li>
                    <a href="http://freifunk-rheinland.net" class="nordlab" title="Wir gehören zum freifunk rheinland e.V." target="_blank">freifunk rheinland e.V.</a>
                </li>
                <li>
                    <a href="http://freifunk.net/" class="freifunk" title="Die Webseite der Freifunk-Initiative" target="_blank">freifunk.net</a>
                </li>
            </ul>
        </footer>

        <script src="assets/javascripts/jquery-1.11.1.min.js"></script>
        <script async src="assets/javascripts/jquery.particleground.min.js"></script>
        <script async src="assets/javascripts/jquery.main.js"></script>
    </body>
</html>
