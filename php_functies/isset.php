<?PHP
if (isset($_POST['kleur'])) {
    set_kleurenthema($_POST['kleur']);
}

if (isset($_POST['login'])) {
    validate_user($_POST['gebruikersnaam'], $_POST['wachtwoord']);
}

if (isset($_POST['loguit'])) {
    loguit();
}

if (isset($_POST['close'])) {
    $_SESSION['weggeclicked'] = 'true';
    header('Refresh:0');
}
?>