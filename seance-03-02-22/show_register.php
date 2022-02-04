<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer</title>
</head>
<body>
    <form action="register.php" method="post">
        Nom : <input type="text" name="name" placeholder="Entrez votre nom" required><br>
        Email : <input type="email" name="email" placeholder="Entrez l'email" required><br>
        Tel : <input type="tel" name="tel" placeholder="numero tel" required><br>
        Mot de passe : <input type="password" name="pwd" placeholder="Entrez le mdp" required><br>
        Genre : <select name="gender">
            <option value="M">Homme</option>
            <option value="F">Femme</option>
        </select><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>