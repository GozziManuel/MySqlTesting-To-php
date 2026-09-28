<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$userResult = $_POST["searchbar"];
try {
require "db.inc.php";

$query = "SELECT * FROM `users` WHERE email = ?";

$stmt = $pdo->prepare($query);

$stmt->execute([$userResult]);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


// resetting
$pdo = null;
$stmt = null; 



} catch (PDOException $e) {
    die("errore nel db" . $e->getMessage());
}
}

else{
    header("Location: ../searchTest.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (empty($result)) {
    echo "No result";

    }

    else{
        foreach ($result as $row) {
            echo htmlspecialchars("email: " . $row["email"] ) . "<br>" ;
            echo htmlspecialchars("password: " . $row["pswrd"]) . "<br>";
        }

    }
    ?>
</body>
</html>