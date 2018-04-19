<?php
date_default_timezone_set('Europe/Copenhagen');
$birthTimeStamp = 936144000;
$currentDate = new DateTime(null, new DateTimeZone('Europe/Copenhagen'));
$currentTimeStamp = $currentDate->getTimestamp();
$yearsOld = floor(($currentTimeStamp - $birthTimeStamp) / 60 / 60 / 24 / 365.25);
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" content="LLEDev - Lasse Lund-Egmose"/>
    <meta name="description" content="LLEDev - Full-Stack udvikling. Websites, Webshops og Ad-Hoc IT-projekter siden 2017."/>
    <meta name="google-site-verification" content="FY3mRcq3drlydloSOt9yNW1MbWhihU_0CmByi9pJuAQ" />
    <meta name="keywords" content="Udvikler,Full-stack, Website,Webshop,Bootstrap,IT-projekt,IT-hjælp,HTML5,JavaScript,CSS,jQuery,PHP,MySQL,NodeJS,GIT,Android,Docker,Java,Windows,Ubuntu,Linux,Apple" />
    <meta name="msapplication-TileColor" content="#607d8b">
    <meta name="msapplication-config" content="assets/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.lledev.com/" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/devicon.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css?v4" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/site.webmanifest">
    <link rel="mask-icon" href="assets/icons/safari-pinned-tab.svg" color="#607d8b">
    <link rel="shortcut icon" href="assets/icons/favicon.ico">
    <script src="assets/js/jquery.min.js"></script>
    <script async src="assets/js/typed.min.js"></script>
    <script async src="assets/js/script.min.js"></script>
    <title>LLEDev | Full-Stack udvikling</title>
</head>

<body>
    <div id="container">
        <div id="inner-container">
            <div id="card">
                <div id="avatar">
                    <img src="assets/img/lledev_small.jpg" title="LLEDev" alt="Billede af Lasse Lund-Egmose" />
                </div>
                <div id="top-line">
                    <!--TODO: Multiple languages-->
                </div>
                <h1><span>Har</span>&nbsp;<span>du</span>&nbsp;<span>eller</span>&nbsp;<span>din</span>&nbsp;<span>virksomhed</span>&nbsp;<span>brug</span>&nbsp;<span>for...</span></h1>
                <h1 id="typed" style="text-align:center;"><span>Et website?</span><span>En webshop?</span><span>En hjælpende hånd til det næste IT-projekt?</span></h1>
                <h2><span>Mit</span>&nbsp;<span>navn</span>&nbsp;<span>er</span>&nbsp;<span>Lasse</span>&nbsp;<span>Lund-Egmose</span>&nbsp;<span>og</span>&nbsp;<span>jeg</span>&nbsp;<span>er</span>&nbsp;<span>klar</span>&nbsp;<span>til</span>&nbsp;<span>at</span>&nbsp;<span>hjælpe!</span></h2>
                <hr />
                <p><b>Hvem er jeg?</b><br/>Jeg er <?php echo $yearsOld; ?> år og bosiddende i Odense. På nuværende tidspunkt studerer jeg på Sct. Knuds Gymnasium i Odense M. Jeg leder i øjeblikket efter job i mit kommende sabbatår.</p>
                <p><b>Full Stack-udvikler:</b><br/>Jeg har i den seneste årrække arbejdet særdeles meget med IT og programmering. Med et primært fokus på website-udvikling har jeg været vidt omkring &mdash; bl.a. med PHP- og MySQL-baseret backend-udvikling og Bootstrap- og jQuery-baseret frontend-udvikling af websites.</p>
                <p><b>Skal vi samarbejde om dit eller din virksomheds næste IT-projekt?</b><br/>Tøv ikke med at kontakte mig! &mdash; Enten på mail llund-egmose@hotmail.com eller ring til mig på tlf. +4523902119.</p>
                <hr />
                <div class="competence-container">
                    <i class="devicon-html5-plain-wordmark"></i>
                    <i class="devicon-javascript-plain"></i>
                    <i class="devicon-css3-plain-wordmark"></i>
                    <i class="devicon-jquery-plain-wordmark"></i>
                    <i class="devicon-bootstrap-plain-wordmark"></i>
                    <i class="devicon-nodejs-plain-wordmark"></i>
                    <i class="devicon-php-plain"></i>
                    <i class="devicon-mysql-plain-wordmark"></i>
                </div>
                <div class="competence-container">
                    <i class="devicon-git-plain-wordmark"></i>
                    <i class="devicon-android-plain"></i>
                    <i class="devicon-docker-plain-wordmark"></i>
                    <i class="devicon-java-plain-wordmark"></i>
                    <i class="devicon-windows8-plain"></i>
                    <i class="devicon-ubuntu-plain-wordmark"></i>
                    <i class="devicon-linux-plain"></i>
                    <i class="devicon-apple-plain"></i>
                </div>
                <hr />
                <footer>
                    <span class="footer-frame">
                        <a class="show-md-up" href="mailto:llund-egmose@hotmail.com">llund-egmose@hotmail.com</a>
                        <span class="show-sm-down">llund-egmose@hotmail.com</span>
                    </span>
                    <span class="footer-frame">
                        <a class="show-md-up" href="tel:+4523902119">+45 23 90 21 19</a>
                        <span class="show-sm-down">+45 23 90 21 19</span>
                    </span>
                    <span class="footer-frame">
                        <a href="https://linkedin.com/in/lledev" target="_blank">LinkedIn</a>
                    </span>
                </footer>
            </div>
        </div>
    </div>
    
</body>

</html>