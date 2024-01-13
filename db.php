<?php
$host = 'localhost';
$db   = 'cloudnts_Karoo';
$user = 'cloudnts_Karoo';
$pass = 'cloudnts_Karoo';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query('SELECT * FROM users');
$results = $stmt->fetchAll();

$myfile = fopen("x.txt", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($results));
fclose($myfile);
?>
