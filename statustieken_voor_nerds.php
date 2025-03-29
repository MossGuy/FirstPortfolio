<?PHP
session_start();
require './php_functies/DBConfig.php';
include './php_functies/functies.php';
include './php_functies/isset.php';

check_session();
?>
<!DOCTYPE html>
<html lang="nl">
    
<head>
    <!-- mysc meta links -->
    <meta name="Author" value="Milan Pallas">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Moss Favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="./moss_favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./moss_favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./moss_favicons/favicon-16x16.png">
    <link rel="manifest" href="./moss_favicons/site.webmanifest">
    <link rel="mask-icon" href="./moss_favicons/safari-pinned-tab.svg" color="#679e46">
    <meta name="msapplication-TileColor" content="#93ae83">
    <meta name="theme-color" content="#93ae83">
    <!-- OpenGraph protocols -->
    <!-- <meta property="og:title" content="Het portfolio van Moss" />
    <meta property="og:type" content="webportfolio.moss" />
    <meta property="og:url" content="file:///C:\xampp\htdocs\personal_projects\dev_portfolio"/>
    <meta property="og:image" content="./moss_favicon/android-chrome-192x192.png" /> -->
    <!-- Bootstrap5 links -->
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
    <script src="./bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="./bootstrap5/bootstrap-icons-1.11.1/bootstrap-icons.css">
    <!-- stylesheet links -->
    <link rel="stylesheet" href="./style.css">
    <?PHP echo link_kleurenthema(); ?>
    <title>Mijn web portfolio</title>
</head>
<body>
    <?PHP include './webelementen/navbar.php'; return_alert(); ?>
    <!-- TODO - inlog session valideren -->

    <br>
    <p><a href="./wie_ben_ik.php">Terug</a></p>
    <h2 class="border-bottom border-3">Statustieken voor nerds.</h2>
    
    <div class="card-group justify-content-evenly">
        <div class="container col-12 col-lg-5 grote_container">
            <h2>DISC profiel</h2>
            <img class="grafiek_afbeelding" src="./afbeeldingen/DISC.png" alt="DISC afbeelding">
                <div class="w-75">
                    <p class="border-2 border-bottom border-danger"><span class="text-danger font-weight-bold">D</span>: Daadkrachtig, Direct en Dominerend</p>
                    <p class="border-2 border-bottom border-warning"><span class="text-warning font-weight-bold">I</span>: Interactief, Inspirerend en Invloedrijk</p>
                    <p class="border-2 border-bottom border-success"><span class="text-success font-weight-bold">S</span>: Stabiel, Sociaal, Supportgevend</p>
                    <p class="border-2 border-bottom border-primary"><span class="text-primary font-weight-bold">C</span>: Consciëntieus, Correct en Calculerend</p>
                </div>
            <p class="d-flex justify-content-evenly w-100">Grafiek gemaakt met: <a href="https://zelforganisatiefabriek.nl/disc-test/#de-online-test-maken">zelforganisatiefabriek</a></p>
        </div>
        <div class="container col-12 col-lg-5 grote_container">
            <h2>Enneagram</h2>
            <img class="grafiek_afbeelding" src="./afbeeldingen/enneagram.png" alt="Enneagram afbeelding">

            <p>Type 5: De waarnemer, de onderzoeker</p>
            <p>Type 9: De vredestichter, de bemiddelaar</p>
            <p class="d-flex justify-content-evenly w-100">Gedetailleerde informatie: <a href="https://enneagram-personality.com/nl/types/all">Enneagramtypes lijst</a></p>
        </div>
    </div>

    <?PHP include './webelementen/footer.php' ?>
</body>
</html>