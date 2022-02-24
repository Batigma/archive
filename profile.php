<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
</head>

<body>
<?php
include 'assets/includes/connect.php';

?>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <?php
    //CONNECTION
                if (isset($_POST['cart'])) {
                    $cart=$_POST['cart'];//connection
                    $pwd=$_POST['pwd'];
                    if (!isset($cart) || empty($cart) || !isset($pwd) || empty($pwd) ){
                    echo '<div align="center"><h3>Entrer des informations correctes</h3><a href="index.php"><div class="btn btn-primary account-btn">Reessayer</div></a></div>';
                    };
                    if (isset($cart) && !empty($cart) && isset($pwd) && !empty($pwd) ){
                        $sql="SELECT * FROM `etudiant_inscrit` WHERE `id_etudiant`='$cart'";
                        $requete=$db->query($sql);
                        $resultat=$requete->fetch(PDO::FETCH_ASSOC);
                        if ($cart==$resultat['id_etudiant'] && $pwd==$resultat['passwd']) {
                            echo '<h3>Bienvenue '.$resultat['nom'].' '.$resultat['prenoms'].'</h3>';
                            echo '<div align="center"><a href="index-1.php"><div class="btn btn-primary account-btn">Accueil</div></a></div>';
                        };
                        if ($cart!=$resultat['id_etudiant'] && $pwd!=$resultat['passwd']) {
                        echo '<div align="center"><h3>vous n\'avez pas de compte?</h3><a href="inscri.php"><div class="btn btn-primary account-btn"> S\'Enregistrer</div></a></div>';
                        };
                    };
                }

    //ENREGISTREMENT
                if (isset($_POST['nom'])) {
                    $nom=$_POST['nom'];//enregistrement
                    $prenom=$_POST['prenoms'];
                    $mat=$_POST['id_etudiant'];
                    $passwd=$_POST['passwd'];
                    $email=$_POST['email'];
                    $tel1=$_POST['tel1'];
                    $faculte=$_POST['ufr'];
                    if (!isset($nom,$prenom,$mat,$passwd,$tel1) || empty($nom) || empty($prenom) || empty($mat) || empty($passwd) || empty($tel1) ){
                    echo '<div align="center"><h3>Entrer des informations correctes</h3><a href="inscri.php"><div class="btn btn-primary account-btn">Reessayer</div></a></div>';
                    }else{
                        $sql="INSERT INTO `etudiant_inscrit` VALUES ('$mat', '$nom', '$prenom', '$email', '$tel1', '$faculte', '$passwd');";
                        $requete=$db->query($sql);
                        echo '<div align="center"><h3>Enregistrement Effectu&eacute;</h3><a href="index.php"><div class="btn btn-primary account-btn">Se Connecter</div></a></div>';
                        }
                    };
                     ?>
            
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