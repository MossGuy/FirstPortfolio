<?php
if (!isset($_SESSION['DBAttempt'])) {
    $_SESSION['DBAttempt'] = true;
}
if (!$_SESSION['DBAttempt']) {
    return;
}

$host = '127.0.0.1';
$db   = 'db_portfolio_milan';
$user = 'bit_academy';
$pass = 'bit_academy';
// $user = 'root';
// $pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

global $storedUserInfo;
try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $_SESSION['DBStatus'] = true;
} catch (PDOException $e) {
    $_SESSION['DBMessage'] = $e->getMessage();
    $_SESSION['DBStatus'] = false;
    $_SESSION['DBAttempt'] = false;
    $_SESSION['status'] = 'db_failed';
    $_SESSION['weggeclicked'] = 'false';
    header("Refresh:0");
}

if ($_SESSION['DBStatus']) {
    $storedUserInfo = $pdo->prepare("SELECT * FROM `gebruikers`");
    $storedUserInfo->execute();
}

?>