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
    <link rel="stylesheet" href="./style.css">
    <?PHP echo link_kleurenthema(); ?>
    <title>Mijn web portfolio</title>
</head>
<body >
    <table id="database_error">
        <thead>
            <tr>
                <th><h1>Helaas</h1></th>
            </tr>
        </thead>
        <tbody class="disconnected">
            <tr>
                <td>
                    <p>Er is iets fout gegaan bij het koppelen van het database waardoor de pagina niet geladen kon worden.</p>
                    <p>Sluit de pagina en open de link opnieuw.</p>
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