<?php

session_start();
require_once("fonctions.php");

/// Non connecté
 if(!isset($_SESSION["mail"]))
{
    header('Location: ./authentification.html');
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
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- POLICE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <title>Page d'acceuil</title>
  </head>
  <body >




  
  <div class="bloc_principal bg-white ">

   <div class="container-lg d-flex bg-white align-items-center   mx-0">
         <div class="col-lg-2  rounded-3 mx-0">
           
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class=" bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
         </div>

         <div class="col-lg-5"></div>
             <div class=" col-lg-5    couleur_text ">
                  <div class="container-lg d-md-flex justify-content-end d-none ">
                   
                    <span class="  fs-4 mx-3  " href="#">HOME</span>
                    <span class="  fs-4 mx-3 " href="#">BLOG</span>
                    <span class="fs-4 mx-3  " href="#">CONTACT</span>
                  </div>
             </div>
    </div>
    <div class="container-fluid  mx-0">
          <div class="row d-flex flex-column  justify-content-center   flex-md-row ">
               <div class="col-lg-7  mx-0 bg-transparent d-flexs flex-column justify-content-center align-items-center   flex-md-block">
                <div class="text fs-1 fw-bold mt-5 d-block mx-5 ">

                <?php

                    echo "Bienvenue " . $compte["pseudo"] . "<br>";
                    ?>

                </div>
                <div class="col-7 mt-5 mx-5 d-none d-md-block">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat qui provident quis laboriosam illum ducimus vero labore.</p>
                </div>
                <div class="col-7 mt-5 mx-5   d-sm-flex flex-column justify-content-center d-md-flex flex-md-row justify-content-evenly">
                  <a href="profil.php">
                 <button type="button" class=" fw-bold txt-sm btn btn-btn border-secondary rounded-pill mt-2 mx-0 px-5  c_bouton">Profil</button></a>
                 <a href="Messagerie">
                <button type="button" class="text-sm btn btn-btn border border rounded-pill mt-2 mx-0  px-5 c_bouton fw-bold" >Messagerie</button></a>
                <a href="logout.php">
                <button type="button" class="text-sm btn btn-btn border border rounded-pill mt-2 mx-0  px-5 c_bouton fw-bold" >Deconnexion</button></a>
                </div>


               </div>
                 <div class="col-lg-5 mx-0 logo">
                    <!-- <div class="text fs-1 fw-bold mt-5 mx-5 d-md-none d-flex justify-content-center">AUTHENTIFICATION</div>
                    <div class=" d-flex justify-content-evenly d-md-none ">
                        <button type="button" class=" text-muted txt-sm btn btn-btn-sm border-secondary rounded-pill mt-2 mx-0 px-5  bg-white">login</button>
                        <button type="button" class=" text-info text-sm btn btn-btn-sm border border rounded-pill mt-2 mx-0 bg-light ">Sign Up</button>
                    </div> -->
                     <img src="img/logo2.png" class="logo" alt="">
                     
                  </div>
         </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>







































