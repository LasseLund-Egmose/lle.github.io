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
    <meta http-equiv="content-language" content="da-DK">
    <meta name="author" content="LLEDev - Lasse Lund-Egmose"/>
    <meta name="description" content="LLEDev - Full-Stack udvikling. Websites, Webshops og Ad-Hoc IT-projekter siden 2017."/>
    <meta name="google-site-verification" content="FY3mRcq3drlydloSOt9yNW1MbWhihU_0CmByi9pJuAQ" />
    <meta name="keywords" content="Udvikler,Full-stack, Website,Webshop,Bootstrap,IT-projekt,IT-hjælp,HTML5,JavaScript,CSS,jQuery,PHP,MySQL,NodeJS,GIT,Android,Docker,Java,Windows,Ubuntu,Linux,Apple" />
    <meta name="msapplication-TileColor" content="#607d8b">
    <meta name="msapplication-config" content="assets/icons/browserconfig.xml">
    <meta name="msvalidate.01" content="374B2A351DE3DFB75B60C85B3E4AD4D9" />
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.lledev.com/" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/devicon.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css?v=310518" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/site.webmanifest">
    <link rel="mask-icon" href="assets/icons/safari-pinned-tab.svg" color="#607d8b">
    <link rel="shortcut icon" href="assets/icons/favicon.ico">
    <title>LLEDev | Full-Stack udvikling</title>
</head>

<body>
    <div id="container">
        <div id="inner-container">
            <div id="card" class="animated fadein">
                <div id="avatar">
                    <img src="assets/img/lledev_small.jpg" title="LLEDev" alt="Billede af LLEDev - Lasse Lund-Egmose" />
                </div>
                <div id="top-line">
                    <!--TODO: Multiple languages-->
                </div>
				<p id="first"><b>Hvem er jeg?</b><br/>Jeg er <?php echo $yearsOld; ?> år og bosiddende i Odense. På nuværende tidspunkt studerer jeg på Sct. Knuds Gymnasium i Odense M.</p>
	            <p id="second"><b>Full Stack-udvikler:</b><br/>Jeg har i den seneste årrække arbejdet særdeles meget med IT og programmering. Med et primært fokus på website-udvikling har jeg været vidt omkring &mdash; bl.a. med PHP- og MySQL-baseret backend-udvikling og Bootstrap- og jQuery-baseret frontend-udvikling af websites.</p>
	            <p id="third"><b>Kontakt mig:</b><br/>Skriv til mig på mail llund-egmose@hotmail.com eller ring til mig på tlf. +4523902119.</p>
				<hr id="first" />
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
                <hr id="second" />
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
