<?PHP
function set_kleurenthema($kleur)
{
    switch ($kleur) {
        case 'Basis wit':
            $_SESSION['kleur_thema'] = 'wit';
            header("Refresh:0");
            break;
        case 'Nacht zwart':
            $_SESSION['kleur_thema'] = 'zwart';
            header("Refresh:0");
            break;
        case 'Perzik roze':
            $_SESSION['kleur_thema'] = 'roze';
            header("Refresh:0");
            break;
        case 'Moss groen':
            $_SESSION['kleur_thema'] = 'groen';
            header("Refresh:0");
            break;
        case 'Marine blauw':
            $_SESSION['kleur_thema'] = 'blauw';
            header("Refresh:0");
            break;
        default:
    }
}
function link_kleurenthema()
{
    if (isset($_SESSION['kleur_thema'])) {
        $kleur = $_SESSION['kleur_thema'];
        switch ($kleur) {
            case "wit":
                return '<link rel="stylesheet" href="./kleuren_themas/basis_wit.css">';
            case "zwart":
                return '<link rel="stylesheet" href="./kleuren_themas/nacht_zwart.css">';
            case "roze":
                return '<link rel="stylesheet" href="./kleuren_themas/perzik_roze.css">';
            case "groen":
                return '<link rel="stylesheet" href="./kleuren_themas/moss_groen.css">';
            case "blauw":
                return '<link rel="stylesheet" href="./kleuren_themas/marine_blauw.css">';
            default:
        }
    } else {
        return '<link rel="stylesheet" href="./kleuren_themas/basis_wit.css">';
    }
}
function return_login_button()
{
    if (isset($_SESSION['loggedIn'])) {
        echo '<form action="" method="POST"><input class="rounded m-1 fw-semibold button_css" type="submit" name="loguit" id="loguit" value="Log uit"></form>';
    } else {
        echo '<a class="nav-item m-1 p-1 fw-semibold" href="" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</a>';
    }
}

function return_userinfo()
{
    global $storedUserInfo;
    $userInfoRows = $storedUserInfo->fetchAll();
    return $userInfoRows;
}

function validate_user($gebruikersnaam, $wachtwoord)
{
    if (empty($gebruikersnaam) || empty($wachtwoord)) {
        $_SESSION["status"] = "empty";
    } else {
        $userInfo = return_userinfo();
        foreach ($userInfo as $user) {
            if ($gebruikersnaam == $user['gebruikersnaam'] && hash('SHA1', $wachtwoord) == $user['wachtwoord']) {
                $_SESSION['loggedIn'] = "true";
                $_SESSION['user'] = $user['gebruikersnaam'];
                $_SESSION['status'] = $user['gebruikersnaam'];
                break;
            } else {
                $_SESSION['status'] = 'failed';
            }
        }
    }
    $_SESSION['weggeclicked'] = 'false';
    header("Refresh:0");
}
function user_feedback()
{
    switch ($_SESSION["status"]) {
        case "empty":
            return "Het lijkt er op dat niet alle inlog veldjes ingevult zijn.<br>Zeer amuserend.";
        case "failed":
            return "Helaas, het lijkt er op dat de gebruikte inlog gegevens incorrect zijn.<br>Probeer het nog een keer... of ook niet.";
        case "nice_try":
            return "Het lijkt er op dat je niet de juiste rechten hebt om deze website te bezoeken.";
        case "W3rkgev3r2938":
            return "Een goede dag gewenst, beste werkgever.";
        case "easteregg":
            return "<strong>Gefeliciteerd! Je het het easteregg account gevonden.</strong>";
        default:
    }
}

function loguit()
{
    unset($_SESSION['loggedIn']);
    unset($_SESSION['status']);
    unset($_SESSION['user']);
    header('Refresh:0');
}

function return_alert()
{
    if (isset($_SESSION['status'])) {
        if ($_SESSION['weggeclicked'] == 'false') {
            require_once('./webelementen/alert.php');
        }
    }
}
function return_anchor()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] == "W3rkgev3r2938") {
            return '<a href="./wie_ben_ik.php">Wat voor persoon ben ik</a>';
        }
    }
}

function check_session()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] !== "W3rkgev3r2938") {
            $_SESSION['status'] = 'nice_try';
            $_SESSION['weggeclicked'] = 'false';
            header('Location: ./index.php');
        }
    } else {
        $_SESSION['status'] = 'nice_try';
        $_SESSION['weggeclicked'] = 'false';
        header('Location: ./index.php');
    }
}
?>