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
    <?PHP echo link_kleurenthema(); ?>
    <link rel="stylesheet" href="./style.css">
    <title>Mijn web portfolio</title>
</head>
<body>
    <?PHP include './webelementen/navbar.php'; return_alert(); ?>
    
    <header class="d-flex align-items-center justify-content-evenly w-100 px-3 mb-5">
        <div>
            <h1>Wat meer informatie over mij</h1>
            <p>
                Mijn volledige naam is Milan Pallas, en ik ben 23 jaar oud. <br>
                Zie deze pagina als een zoort FAQ over mijzelf.
            </p>
        </div>
        <img class="logo ikke" src="./afbeeldingen/ik.png" alt="afbeelding van mijzelf">
    </header>
    
    <!-- ----------------------- -->
    <!-- Twee informatieve grids -->
    <div class="card-group grid_container">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat voor persoon ben ik?</h2>
                <p class="text-wrap px-5">
                    Ik ben een vrij rustig persoon.
                    Gezelligheid op de werkvloer is altijd welkom, maar als het te remoerig is kan ik onrustig worden.
                    Verder ben ik heel observerend. Ik zie nog wel eens iets wat een ander niet snel opvalt.<br>
                    <a href="./statustieken_voor_nerds.php">Statustieken voor nerds</a>
                </p>
            </div>
            <div>
                <h2>Waarom maak ik niet van muziek mijn carriere?</h2>
                <p>
                    Het leuke van programmeren is nu weg en ik wil niks liever dan muziek maken op professioneel niveau.
                </p>
            </div>
            <div>
                <p class="highlight m-0">Mijn sterktes</p>
                <ul>
                    <li>netjes zijn met spullen</li>
                    <li>op tijd komen</li>
                    <li>geduldig zijn</li>
                </ul>
                <p class="highlight m-0">Mijn zwaktes</p>
                <ul>
                    <li>Snel conclussies trekken</li>
                    <li>communicatie</li>
                </ul>
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat is mijn doel?</h2>
                <p>
                    Na een half jaar back-end programma's schrijven in een bedrijf is nu alle lol er af. Mijn studie wil dat ik met ASP .net ga werken dus haak ik lekker af.
                </p>
            </div>
            <div class="d-inline mt-auto h-100">
                <h2>Mijn cv, diploma's en certificaten</h2>
                <ul>
                    <li><a href="./gevoelige_documenten/curriculum_vitae.pdf">Mijn CV</a></li>
                    <br>
                    <li><a href="./gevoelige_documenten/mbo_ict_medewerker.pdf">Diploma: ICT medewerker</a></li>
                    <li><a href="./gevoelige_documenten/mbo_ict_beheerder.pdf">Diploma: ICT beheerder</a></li>
                </ul>
            </div>
            <div>
                <h2>Mijn competenties</h2>
                <ul>
                    <li><p>Observerend</p></li>
                    <li><p>Naukeurig</p></li>
                    <li><p>Serieus</p></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- -------------------- -->
    <!-- De gespiegelde grids -->
    <div class="card-group grid_container">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat voor persoon ben ik?</h2>
                <p class="text-wrap px-5">
                    Ik ben een vrij rustig persoon.
                    Gezelligheid op de werkvloer is altijd welkom, maar als het te remoerig is kan ik onrustig worden.
                    Verder ben ik heel observerend. Ik zie nog wel eens iets wat een ander niet snel opvalt.<br>
                    <a href="./statustieken_voor_nerds.php">Statustieken voor nerds</a>
                </p>
            </div>
            <div>
                <h2>Waarom maak ik niet van muziek mijn carriere?</h2>
                <p>
                    Het leuke van programmeren is nu weg en ik wil niks liever dan muziek maken op professioneel niveau.
                </p>
            </div>
            <div>
                <p class="highlight m-0">Mijn sterktes</p>
                <ul>
                    <li>netjes zijn met spullen</li>
                    <li>op tijd komen</li>
                    <li>geduldig zijn</li>
                </ul>
                <p class="highlight m-0">Mijn zwaktes</p>
                <ul>
                    <li>Snel conclussies trekken</li>
                    <li>communicatie</li>
                </ul>
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat is mijn doel?</h2>
                <p>
                Na een half jaar back-end programma's schrijven in een bedrijf is nu alle lol er af. Mijn studie wil dat ik met ASP .net ga werken dus haak ik lekker af.
                </p>
            </div>
            <div class="d-inline mt-auto h-100">
                <h2>Mijn cv, diploma's en certificaten</h2>
                <ul>
                    <li><a href="./gevoelige_documenten/curriculum_vitae.pdf">Mijn CV</a></li>
                    <br>
                    <li><a href="./gevoelige_documenten/mbo_ict_medewerker.pdf">Diploma: ICT medewerker</a></li>
                    <li><a href="./gevoelige_documenten/mbo_ict_beheerder.pdf">Diploma: ICT beheerder</a></li>
                </ul>
            </div>
            <div>
                <h2>Mijn competenties</h2>
                <ul>
                    <li><p>Observerend</p></li>
                    <li><p>Naukeurig</p></li>
                    <li><p>Serieus</p></li>
                </ul>
            </div>
        </div>
    </div>

    <?PHP include './webelementen/footer.php' ?>
</body>
</html>