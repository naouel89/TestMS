<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'authentification</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login_script.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>