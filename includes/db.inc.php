<?php

$dsn = "";
$dbname = "";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbname, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Errore nel connettersi nel db" . $e;
}

?>