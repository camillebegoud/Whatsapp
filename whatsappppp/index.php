<?php

session_start();
require_once("fonctions.php");

/// Non connecté
 if(!isset($_SESSION["mail"]))
{
    header('Location: ./accueil.html');
    exit;
}

 $compte = moncompte();

if(!isset($compte["pseudo"]) )
{
    header('Location: ./profil.php');
    exit;
}
$url = $compte["url"];
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="img/favicon.fav" type="image/gif" sizes="32x32">
        <!-- Google Font CDN -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/886c286f97.js" crossorigin="anonymous"></script>
        <link href='https://css.gg/menu.css' rel='stylesheet'>
        <!-- Main CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Bi-Culture</title>
    </head>
  <body>


<header>
    <nav class="navbar  navbar-expand-lg fixed-top py-3 bg_bleu_nuit" id="headerNav">
        <div class="container px-4 px-lg-5">
            <div class="navbar-brand text_blanc" href="#"><span class="bleu_ciel fs-2" >Bi</span>-Culture</div>
            

                
            <div class="collapse navbar-collapse  "  id="navbarToggleExternalContent" >
                
                <ul class="navbar-nav ms-auto my-2 my-lg-0 ">
                    <li class="nav-item mx-5"><a class="nav-link text_blanc" href="Messagerie/index.php">chat what's app</a></li>
                    <li class="nav-item nav-link ms-4 text_blanc" >
                    <?= $compte["pseudo"]??""?>
                    </li>
                </ul>
            </div>
            
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <!-- Avatar -->
                        <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle d-flex align-items-center "
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <img
                            src="<?= $url??"img/blank.png"?>"
                            class="rounded-circle photo"
                            loading="lazy"/>
                        </a>
                        <ul class="dropdown-menu menu_profil " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="profil.php">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" type="submit" href="logout.php">Logout</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
</header>

<main class="master">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Bienvenue</h1>
                <hr class="divider bg-light" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text_blanc mb-5 fs-5">

 
<?= $compte["pseudo"]??""?>

            </div>
        </div>
    </div>
</main>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  </body>
</html>