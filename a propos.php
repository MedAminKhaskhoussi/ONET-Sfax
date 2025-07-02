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
    <!--tesxte directeur--> <!--m:top y:bottom 5 margin-->
      <div class="container my-5"  style="background-color: aliceblue; border: 4px solid rgb(0, 0, 0); border-radius: 20px;">
        <!--mb-4 margin at bottom-->
        <div class="row mb-4">
            <div class="col text-center">
                <h4 class="fw-bold" style="margin-top: 20px; font-size: 40px;" >Directeur: Mohamed Skandar Gargouri</h4>
            </div>
        </div>
    <!--img-directeur-->
        <div class="row mb-4">
            <div class="col col-md-12 text-center">
                <img src="images/skndr.png" class="rounded-circle img-fluid" alt="Directeur Image" style="max-width: 200px ;background-color: aliceblue; border: 4px solid rgb(0, 0, 0); border-radius: 50px;">
            </div>
        </div>
        
        <hr style="height: 20px;">
    <!--text cordonnée-->
        <div class="row">
            <div class="col-12">
                <h5 class="mb-4" style="font-size: 35px;">Coordonnées :</h5>
            </div>
        </div>
        <!--Map-->
            <div class="col-md-9 text-center mb-3">
                    <a  href="https://www.google.com/maps/place/3000,+32+Rue+Abou+Kacem+Chebbi,+Sfax+3000/@34.732459,10.7643622,19.96z/data=!4m5!3m4!1s0x13002d2dea88ee09:0x24caf6acaa1c1a8d!8m2!3d34.7326051!4d10.7649502?entry=ttu"> <img class="img" src="images/Location.png"  style="width: 80%; max-height: 300Px;"></a>
            </div>
        <!--adresse-->
            <div class="col-md-4">
                <table class="table" border="0">
                    <tbody>
                        <tr>
                            <th><i class='bx bxs-home fs-3'></i></th>
                            <td class="fw-bold">Adresse</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>26 Av Aboukacem Echabi, Sfax, Tunisia, 3000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!--Mobile-->
            <div class="col-md-4">
                <table class="table">
                    <tbody>
                        <tr>
                            <th><i class='bx bxs-phone fs-3'></i></th>
                            <td class="fw-bold">Mobile</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>74 220 894</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!--Email-->
            <div class="col-md-4">
                <table class="table">
                    <tbody>
                        <tr>
                            <th><i class='bx bxl-gmail fs-3'></i></th>
                            <td class="fw-bold">E-mail</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>gargouriskander@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>