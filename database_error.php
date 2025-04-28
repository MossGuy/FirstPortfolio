<?PHP
session_start();
include './php_functies/functies.php';
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
    <link rel="stylesheet" href="./stylesheets/database_error.css">
    <?=link_kleurenthema();?>
    <title>Mijn web portfolio</title>
</head>
<body>
    <nav class=" fixed-top">
        <div class="navbar navbar-expand-sm d-flex justify-content-between mx-4">
            <p class="fw-bold mb-0 fs-5 me-auto">Mijn web portfolio</p>
            <button class="navbar-toggler me-4 icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-flower3 h5"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav d-flex flex-row align-items-baseline ms-auto">
                    <a class="nav-item m-1 p-1 fw-semibold" href="./index.php">Home</a>
                    <div class="kleuren_kiezer ms-auto">
                        <p>Kleuren thema</p>
                        <form class="kleuren_kiezer" action="" method="post">
                            <input class="kleur" type="submit" name="kleur", value="Basis wit">
                            <input class="kleur" type="submit" name="kleur", value="Nacht zwart">
                            <input class="kleur" type="submit" name="kleur", value="Perzik roze">
                            <input class="kleur" type="submit" name="kleur", value="Moss groen">
                            <input class="kleur" type="submit" name="kleur", value="Marine blauw">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <table id="database_error">
        <thead>
            <tr>
                <th><h1>Database error</h1></th>
            </tr>
        </thead>
        <tbody class="disconnected">
            <tr>
                <td>
                    <p>
                        In het vakgebied van programmeren krijg je zo nu en dan temaken met foutcodes. Met deze foutcodes kunnen wij als programmeur achterhalen waarom er iets mis gaat.
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Error code:</p>
                    <p><?PHP echo $_SESSION['DBMessage']; ?></p>
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>