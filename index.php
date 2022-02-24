<?php
include("/assets/includes/connect.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">

                    <form method="post" action="profile.php">
                        <div class="account-logo">
                            <a href="#"><img src="assets/img/archive.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Matricule Etudiant :</label>
                            <input name="cart" type="text" autofocus="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe :</label>
                            <input name="pwd" type="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Mot de passe oubli&eacute; ?</a>
                        </div>
                        <div class="form-group text-center">

                            <input type="submit" value="Se Connecter" class="btn btn-primary account-btn">
                    </form>
                    <hr>
                    <h3>Vous n'avez pas de compte?</h3>
                    <a href="inscri.php">
                        <div class="btn btn-primary account-btn"> S'enregistrer</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>