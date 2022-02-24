<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title>inscription</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post" action="profile.php">
                        <div class="account-logo">
                            <img width="10px" src="assets/img/archive.png" alt="">
                        </div>
                        <hr>
                        <span class="badge ronded-pill bg-danger">Entrez des informations correctes</span>
                        <div class="row ">
                            <div class="col col-sm-6">
                                <div class="form-group">
                                    <label>Nom:<span style="color:red;">*</span></label>
                                    <input name="nom" type="text" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Prénoms:<span style="color:red;">*</span></label>
                                    <input name="prenom" type="text" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>N° Matricule Etudiant:<span style="color:red;">**</span></label>
                                    <input name="mat" type="text" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Faculté (UFR):<span style="color:red;"></span></label>
                                    <select name="ufr" class="form-control">
                                        <option value="0">EPSS</option>
                                        <option value="0">SFA</option>
                                        <option value="0">SN</option>
                                        <option value="0">SGE</option>
                                        <option value="0">STA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-sm-6">
                                <div class="form-group">
                                    <label>Mot de passe:<span style="color:red;">*</span></label>
                                    <input name="passwd" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input name="email" ype="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>N° Téléphone:<span style="color:red;">*</span></label>
                                    <input name="tel1" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>N° Téléphone 2 :</label>
                                    <input name="tel2" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">S'enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <sc ript src="../assets/js/app.js">
        </script>
</body>

</html>