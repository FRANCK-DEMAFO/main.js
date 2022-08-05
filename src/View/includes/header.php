<?php
  require dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'paths.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BOOTSTRAP_PATH . 'css' . DIRECTORY_SEPARATOR . 'bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= FONT_PATH . 'css' . DIRECTORY_SEPARATOR . 'all.min.css' ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'style.css' ?>">
    <title>template</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-light bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler boos " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
              <div class="offcanvas-header">
                <br><br><br><br> <br>
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <img src="<?= IMAGES_PATH . 'cropped-logo-uni2grow-1.png'?>" alt="" >
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div><br><br>
                   <hr>
                   <ul class="navlist">
                    <li class="navitems"><a href="" class="navlink"><i class="fas fa-house"></i>Accueil</a></li>
                    <li class="navitems"><a href="" class="navlink"><i class="fas fa-person"></i>Employe</a></li>
                    <li class="navitems"><a href="" class="navlink"><i class="fas fa-clipboard"></i>conge</a></li>
                    <li class="navitems"><a href="" class="navlink"><i class="fas fa-book"></i>contrat</a></li>
                    <li class="navitems"><a href="" class="navlink"><i class="fas fa-calendar"></i>Permission</a></li>
                  </ul>
            </div>
            <div class="dropdown" style="width: 200px; height: 60px; position: relative;" >
              <a class="btn btn-secondary boss bg-transparent" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= IMAGES_PATH . 'photo.png'?> " class="rounded-circle" alt="" width="50px" height="50px" >
              administrateur
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>franck@gmail.com</a></li><hr>
                <li><a class="dropdown-item" href="#"><i class="fas fa-person"></i>Voir le profil</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-calendar"></i>Statut</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-book"></i>congé</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
         