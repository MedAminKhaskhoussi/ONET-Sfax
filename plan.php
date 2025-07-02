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


    <!--Image-->
            <div>
                <img src="images/imageplan.jpg" class="img-fluid  "   >
            </div>
    <!----->
    <div class="container my-5">
        <!-- Event Objective Section -->
        <div class="row align-items-center">
            <!-- Objectives -->
            <div class="col-md-4" style="border:2px solid rgb(0, 0, 0); border-radius: 25px;background-color: white;">
                <div>
                    <h1 class="text-primary mb-4" style="text-align: center; margin: 20px;">Objectif de cet événement :</h1>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <span class="fw-bold">1.</span> Donner à votre enfant une chance de se faire plus d'amis 🧑‍🤝‍🧑.
                        </li>
                        <li class="mb-3">
                            <span class="fw-bold">2.</span> S'amuser en été au lieu de rester à la maison toute la journée 🎈⚽.
                        </li>
                        <li class="mb-3">
                            <span class="fw-bold">3.</span> Emmener les enfants dans différents endroits pour leur faire savoir à quel point notre Tunisie est belle !! 🏔️🌄.
                        </li>
                    </ul>
                    <img src="images/Designer (2).png" class="img-fluid rounded border border-white">
                </div>
            </div>
        <!-- Timetable-->
        <div class="mt-4" style="border:2px solid rgb(0, 0, 0); border-radius: 25px;background-color: white;width: 60%; float: right;">
            <h3 class="text-center text-primary mb-4">Planning 🤔🗓️ :</h3>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Jours</th>
                            <th>6-8</th>
                            <th>8-10</th>
                            <th>10-11</th>
                            <th>11-12</th>
                            <th>12-14</th>
                            <th>14-16</th>
                            <th>16-18</th>
                            <th>18-19</th>
                            <th>19-20</th>
                            <th>20-24</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jour 1</td>
                            <td>Départ</td>
                            <td>Arrivé</td>
                            <td>Organiser les chambres</td>
                            <td>Former les groupes</td>
                            <td rowspan="9">Déjeuner</td>
                            <td rowspan="9">Sieste</td>
                            <td rowspan="9">Aller à un manège</td>
                            <td rowspan="9">Activité (Compétition)</td>
                            <td rowspan="9">Diner</td>
                            <td>Fête de bienvenue</td>
                        </tr>
                        <tr>
                            <td>Jour 2</td>
                            <td rowspan="9">Petit-déjeuner et hymne national</td>
                            <td rowspan="9">Activités d'échauffement et sport</td>
                            <td rowspan="9">Temps libre</td>
                            <td rowspan="3">Baignade en mer</td>
                            <td>Musées</td>
                        </tr>
                        <tr>
                            <td>Jour 3</td>
                            <td>Chansons</td>
                        </tr>
                        <tr>
                            <td>Jour 4</td>
                            <td rowspan="5">Fête</td>
                        </tr>
                        <tr>
                            <td>Jour 5</td>
                            <td>Natation</td>
                        </tr>
                        <tr>
                            <td>Jour 6</td>
                            <td rowspan="4">Baignade en mer</td>
                        </tr>
                        <tr>
                            <td>Jour 7</td>
                        </tr>
                        <tr>
                            <td>Jour 8</td>
                        </tr>
                        <tr>
                            <td>Jour 9</td>
                            <td>Fête du départ</td>
                        </tr>
                        <tr>
                            <td>Jour 10</td>
                            <td>Goodbye</td>
                            <td colspan="7"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <p style="font-size: 30px;border: 2px solid white; border-radius: 20px; background-color: pink;max-width: 500px;width: 100%;">❤️ Souvenirs de l'année dernière ❤️ :</p>

    <div class="container my-5">
      <div class="row text-center g-4">
        <!--md:medium device / 4md = 1/3 screen -->
        <div class="col-md-4">
          <img 
            src="images/souvenir.jpg" 
            class="img-fluid rounded shadow img-hover" 
            alt="Souvenir">
        </div>
        <div class="col-md-4">
          <img 
            src="images/swimming.jpg" 
            class="img-fluid rounded shadow img-hover" 
            alt="Swimming">
        </div>
        <div class="col-md-4">
          <img 
            src="images/ppls.jpg" 
            class="img-fluid rounded shadow img-hover" 
            alt="People">
        </div>
      </div>

    <!-- reserver -->
     
    <div class="container mt-5">
        <div class="card p-4">
        <?php if (isset($_SESSION['username'])) { ?>

          <h2 class="text-center mb-4">🎉 Réservez une place pour votre enfant ici 🎈</h2>
          <form action="kids.php" method="post">
            <div class="mb-3">
              <label class="form-label">Nom de l'enfant</label>
              <input type="text" class="form-control" placeholder="Nom d'enfant" required name="nom">
            </div>
            <div class="mb-3">
              <label  class="form-label">Prénom de l'enfant</label>
              <input type="text" class="form-control" placeholder="Prénom d'enfant" required  name="prenom">
            </div>
            <div class="mb-3">
              <label class="form-label">Âge de l'enfant</label>
              <input type="number" class="form-control" placeholder="Âge de l'enfant" required name="age">
            </div>
            <div class="mb-3">
              <label class="form-label">Nom du père/mère de l'enfant</label>
              <input type="text" class="form-control" placeholder="Nom du père/mère" required name="nom_parent">
            </div>
            <div class="mb-3">
              <label class="form-label">Mobile des parents</label>
              <input type="tel" class="form-control" placeholder="Numéro de téléphone" required name="telephone" >
            </div>
            <div class="mb-3">
              <label class="form-label">Email des parents (pour la confirmation)</label>
              <input type="email" class="form-control" placeholder="Votre email" required name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Session à laquelle votre fils souhaite participer</label>
              <select class="form-select" required name="session">
                <option value="" disabled selected>Choisissez une session</option>
                <option value="1">Session 1</option>
                <option value="2">Session 2</option>
                <option value="3">Session 3</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">
                Votre enfant a-t-il des allergies ou une maladie dont nous devrions faire attention ?
              </label>
              <textarea class="form-control" placeholder="Écrire ici 😃" rows="3" name="about"></textarea>
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-primary" value="Envoyer">
            </div>
          </form>
        </div>
        <?php } else { ?>
          <h2 class="text-center mb-4"> 💼 connecter pour reserver une place 📌</h2>
          <div style="margin-right: 45%;margin-left: 45%">
          <a class="nav-link " style="text-align: center; font-size: 26px;" href="login.html" id="log">Log in </a>
          </div>
        <?php }?> 
      </div>
      
      
</body>
</html>
    
