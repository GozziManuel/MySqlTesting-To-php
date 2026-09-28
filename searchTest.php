<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/index.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <div class="login-card">
        <h2>Aggiungi al database</h2>
        <form action="./includes/searchResult.php" method="POST">
            <!-- Campo Email -->
            <div class="form-group">
                <label for="searchbar">Email</label>
                <input type="searchbar" id="searchbar" name="searchbar" placeholder="search an username">
            </div>

       

            <!-- Pulsante Accedi -->
            <button type="submit" class="btn-submit">Cerca</button>
        </form>
    </div>
</body>
</html>