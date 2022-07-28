<?php
session_start();
// require_once("fonctions.php");

// $compte= moncompte();
// $pseudo = $compte["pseudo"]?? "";
// $url = $compte["url"]?? "img/blank.png";
// $url_main = $compte["url"]??"";

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="img/favicon.fav" type="image/gif">
        <!-- Google Font CDN -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Main CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Connexion</title>
    </head>
  <body>
    <section class="login_page">
        <div class="formulaire_profil">
        <div class="connect_profil">
        <form class="upload"action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Profil</h2>
                <img class="profil_img  rounded-circle  photo_profil" id='userPicture' src="<?= $url ?>">
                
            </form>
                <div class="connect_exit">
                    <a href="index.php"class="gg-arrow-long-right"></a>
                </div>
            </div>
            <form method="post" id="form_profil"action="saveprofil.php">
                <div class="input_sub_profil sub_input_resp">Pseudo</div>
                <input class="input_resp"name="pseudo" id="pseudo"type="text" placeholder="Pseudo"  value="<?php //$pseudo ?>">
                <div class="input_sub_profil sub_input_resp " >URL image</div>
                <input class="input_resp" onchange="changeUrl()"name="url" id="url" type="text" placeholder="URL"  value="<?php //$url_main ?>">
                <button type="submit"class="button_profil resp_button">Enregister</button>
            </form>
            <div class="noaccount">

            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  </body>
</html>