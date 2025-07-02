<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ONET SFAX </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul class="nav justify-content-end bg-light">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a propos.php">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php if (!isset($_SESSION['username'])) { ?>
            <li class="nav-item">
              <a class="nav-link " href="login.html" id="log">Log in </a>
            </li>
            <?php } else { ?>
                <li class="nav-item">
              <a class="nav-link " href="logout.php" id="log"> log out</i> </a>
            </li>
            <?php }?>
            </li>
          </ul>
    </header>


    <div class="logo">
        <img src="images/logo.jpg" class="rounded-circle">
    </div>
                
    <div class="container">
      <div class="row">

          <div class="col-md-6">
              <div class="card mb-3" style="max-width: 770px;" id="border">
                  <div class="row g-20">
                      <div class="col-md-4">
                          <img style="border: 1px solid rgb(113, 143, 249); margin: 13px; height: 315px;" src="images/palestine.png" class="img-fluid rounded-start">
                      </div>
                      <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="card-title" style="margin-left: 140px; margin-bottom: 50px; color: red; text-decoration: underline;">Pour les enfants:</h5>
                              <p class="card-text">ONET offre la possibilité aux enfants de 7 à 13 ans de partir en vacances pendant 10 jours durant les mois de juillet et août leur permettant d'être indépendants et de faire connaissance avec d'autres personnes (prix=240dt)</p>
                              <a href="plan.php" id="a">
                                  <p id="vp">Voir plus -> </p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  

          <div class="col-md-6">
              <div class="card mb-3" style="max-width: 770px;" id="border">
                  <div class="row g-20">
                      <div class="col-md-4">
                          <img style="border: 1px solid rgb(113, 143, 249); margin: 13px; height: 315px;" src="images/big.png" class="img-fluid rounded-start">
                      </div>
                      <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="card-title" style="margin-left: 140px; margin-bottom: 50px; color: red; text-decoration: underline;">Pour les adultes:</h5>
                              <p class="card-text">Si vous avez 18 ans et que vous souhaitez profiter des vacances d'été, ONET propose aux adolescents de participer à des formations pour rejoindre les organisateurs et s'amuser en même temps (prix=60dt)</p>
                              <a href="formation.php" id="a">
                                  <p id="vp">Voir plus -> </p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
      </div>
  </div>

    
      
</body>
</html>