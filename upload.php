<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
</head>
<body>
  <div class="main-wrapper account-wrapper">
    <div class="account-page">
      <div class="account-center">
        <div class="account-box">

          <form method="post" action="assets/includes/upload-back.php" enctype="multipart/form-data">
            <div class="account-logo">
              <a href="#"><img src="assets/img/archive.png" alt=""></a>
            </div>
            <div class="form-group" align="center">
              <input class="account-btn" type="file" name="file" value="Upload"><br>
              <button class="btn btn-primary account-btn" type="submit">enregistrer</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>

</body>
</html>