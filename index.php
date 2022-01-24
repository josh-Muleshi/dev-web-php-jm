<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
    <div class="container">
        <div class="title">Enregistrement</div>
        <form action="controllers/Controller.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nom</span>
                    <input type="text" name="name" placeholder="Entrer votre nom" required>
                </div>
                <div class="input-box">
                    <span class="details">Postnom</span>
                    <input type="text" name="lastname" placeholder="Entrer votre postnom" required>
                </div>
                <div class="input-box">
                    <span class="details">Prenom</span>
                    <input type="text" name="firstname" placeholder="Entrer votre prenom" required>
                </div>
                <div class="input-box">
                    <span class="details">Matricule</span>
                    <input type="text" name="matricule" placeholder="Entrer votre matricule" required>
                </div>
                <div class="input-box">
                    <span class="details">Promotion</span>
                    <input type="text" name="promotion" placeholder="Entrer votre promotion" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Entrer votre email" required>
                </div>
            </div>
            <div class="gender-details">
                <div class="gender-title">Genre</div>
                <input type="radio" name="mal" id="dot-1">
                <input type="radio" name="femal" id="dot-2">
                <input type="radio" name="nothing" id="dot-3">
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Homme</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Femme</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Ne rien dire</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</body>
</html>
