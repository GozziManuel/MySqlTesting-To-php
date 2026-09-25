<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
     <div class="login-card">
        <h2>Aggiungi al database</h2>
        <form action="./includes/formhandler.php" method="POST">
            <!-- Campo Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="nome@esempio.it" required>
            </div>

            <!-- Campo Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <!-- Pulsante Accedi -->
            <button type="submit" class="btn-submit">Accedi</button>
        </form>
    </div>
</body>
</html>