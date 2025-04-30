<?PHP
session_start();
require './php_functies/DBConfig.php';
include './php_functies/functies.php';
include './php_functies/isset.php';
$a = '<a class="mx-auto" href="./wie_ben_ik.php">Wat voor persoon ben ik</a>';
$a = return_anchor($a);
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
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="stylesheet" href="./stylesheets/index.css">
    <?=link_kleurenthema();?>
    <script src="./javascript_functies/index.js" defer></script>
    <title>Mijn web portfolio</title>
</head>

<body>
    <?PHP include './webelementen/navbar.php'; return_alert(); ?>

    <!-- --------- -->
    <!-- De header -->
    <header class="d-flex flex-column justify-content-center align-items-center px-3 mb-5">
        <h1 class="text-wrap text-center mt-4 mx-5">Het web portfolio van een beginner software ontwikkelaar</h1>
        <div class="d-flex align-items-center justify-content-evenly w-100 bg-sucess">
            <p>
                Hallo! dit is mijn koele web-portfolio.<br>
                Kijk rustig rond en blijf zolang als je wil.
            </p>
            <!-- <button type="button" class="button_css button rounded-4 p-2 mx-2">Over mij</button> -->
            <img class="logo" src="./afbeeldingen/kat2.png" alt="kat logo">
        </div>
    </header>

    <!-- --------------------------------------- -->
    <!-- Twee informatieve en interactieve grids -->
    <div class="card-group grid_container">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div class="d-flex flex-column justify-content-center">
                <p class="text-center">
                    Mijn naam is Milan, en ik woon in Enschede. <br>
                    Mijn grote hobbies zijn gamen en muziek maken.<br>
                    Ik speel keyboard, harp, blokfluit en dwarsfluit.
                </p>
                <p><?=$a?></p>
            </div>
            <div>
                <p class="border_bod_css m-0">Mijn lievelings games</p>
                <ul class="pt-1">
                    <li><a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon" target="_blank">Pokemon</a></li>
                    <li><a href="https://www.mariowiki.com/Mario_Kart_8_Deluxe" target="_blank">Mario kart</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Kirby_(series)" target="_blank">Kirby</a></li>
                    <li><a href="https://deltarune.fandom.com/wiki/Main_Page" target="_blank">Deltarune</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Hollow_Knight" target="_blank">Hollow Knight</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Hades_II" target="_blank">Hades II</a></li>
                </ul>
            </div>
            <div>
                <p class="border_bod_css m-0">Mijn favoriete series:</p>
                <ol class="pt-1">
                    <li><a href="https://en.wikipedia.org/wiki/Mushoku_Tensei" target="_blank">Mushoku Tensei</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Demon_Slayer:_Kimetsu_no_Yaiba" target="_blank">Demon Slayer</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Hell%27s_Paradise:_Jigokuraku" target="_blank">Hell's Paradise</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Soul_Eater" target="_blank">Soul Eater</a></li>
                    <li><a href="https://dr-stone.fandom.com/wiki/Dr._Stone_Wiki" target="_blank">Dr. Stone</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Frieren" target="_blank">Frieren: Beyond Journey's End</a></li>
                </ol>
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <label class="highlight fs-4 d-block text-center" for="prog_talen">Programmeer talen die ik ken</label>
                <select class="button_css rounded p-2 fw-bold d-block mx-auto my-5" name="prog_talen" id="prog_talen">
                    <option value="default">ᕕ( ᐛ )ᕗ</option>
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="bootstrap">Bootstrap5</option>
                    <option value="php">PHP</option>
                    <option value="javascript">Javascript</option>
                    <option value="mysql">MySQL</option>
                    <option value="c#">C#</option>
                    <option value="git">Git</option>
                </select>
            </div>
            <div>
                <p id="prog_talen_output1" class="fs-5">
                    Hier kun je lezen welke programmeertalen ik ken en leuk vind.<br>
                    Probeer het eens uit!
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <img id="cool_changing_logo1">
            </div>
        </div>
    </div>

    <!-- ------------------- -->
    <!-- De gespiegelde grid -->
    <div class="card-group grid_container gespiegeld">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div class="d-flex flex-column justify-content-center">
                <p class="text-center">
                    Mijn naam is Milan, en ik woon in Enschede. <br>
                    Mijn grote hobbies zijn gamen en muziek maken.<br>
                    Ik speel keyboard, harp, blokfluit en dwarsfluit.
                </p>
                <p><?=$a?></p>
            </div>
            <div>
                <p class="border_bod_css m-0">Mijn lievelings games</p>
                <ul class="pt-1">
                    <li><a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon" target="_blank">Pokemon</a></li>
                    <li><a href="https://www.mariowiki.com/Mario_Kart_8_Deluxe" target="_blank">Mario kart</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Kirby_(series)" target="_blank">Kirby</a></li>
                    <li><a href="https://deltarune.fandom.com/wiki/Main_Page" target="_blank">Deltarune</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Hollow_Knight" target="_blank">Hollow Knight</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Hades_II" target="_blank">Hades II</a></li>
                </ul>
            </div>
            <div>
                <p class="border_bod_css m-0">Mijn favoriete series:</p>
                <ol class="pt-1">
                <li><a href="https://en.wikipedia.org/wiki/Mushoku_Tensei" target="_blank">Mushoku Tensei</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Demon_Slayer:_Kimetsu_no_Yaiba" target="_blank">Demon Slayer</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Hell%27s_Paradise:_Jigokuraku" target="_blank">Hell's Paradise</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Soul_Eater" target="_blank">Soul Eater</a></li>
                <li><a href="https://dr-stone.fandom.com/wiki/Dr._Stone_Wiki" target="_blank">Dr. Stone</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Frieren" target="_blank">Frieren: Beyond Journey's End</a></li>
                </ol>
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <label class="highlight fs-4 d-block text-center" for="prog_talen">Programmeer talen die ik ken</label>
                <select class="button_css rounded p-2 fw-bold d-block mx-auto my-5" disabled>
                    <option value="default">ᕕ( ᐛ )ᕗ</option>
                </select>
            </div>
            <div>
                <p id="prog_talen_output2" class="fs-5">
                    Hier kun je lezen welke programmeertalen ik ken en leuk vind.<br>
                    Probeer het eens uit!
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <img id="cool_changing_logo2">
            </div>
        </div>
    </div>

    <?PHP include './webelementen/footer.php' ?>
</body>

</html>