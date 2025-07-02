<!DOCTYPE html>
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
          <img src="images/3.jpg" class="img-fluid rounded"   >
      </div>
      <!--formation-->
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!--p=padding-->
            <div class="card p-4">
              <h1 class="text-center text-primary mb-4">Formation !!</h1>
              <p class="lead text-center">Hey les ados ✋!</p>
              <p>
                Êtes-vous prêts pour une aventure estivale inoubliable qui ne se limite pas seulement au plaisir,
                mais aussi à avoir un véritable impact 🎉?
              </p>
              <p>
                Imaginez passer <strong>10 jours incroyables</strong> dans le cadre d'un programme de formation où vous deviendrez
                des organisateurs dévoués au bien-être des enfants ✌️.
              </p>
              <p>
                Et devinez quoi ? Vous ne ferez pas cela seulement pour rendre à votre communauté 😎;
                vous le ferez également <strong>gratuitement</strong> 😮! De plus, vous serez même rémunérés pour votre
                dévouement et votre travail acharné 🤑.
              </p>
              <p>
                Imaginez-vous en train de créer des souvenirs éternels avec les enfants que vous aurez en charge,
                de tisser des liens significatifs avec vos collègues organisateurs et d'acquérir des compétences
                précieuses en cours de route.
              </p>
              <p class="text-center fw-bold">
                !! Rejoignez-nous pour façonner un été plus lumineux pour ces enfants tout en vivant une expérience inoubliable !!
              </p>
            </div>
          </div>
        </div>
      
        <div class="text-center my-4">
          <p class="fs-4 p-3 border rounded bg-info text-white d-inline-block" style="max-width: 500px;">
            Images des participants précédents :
          </p>
        </div>
      </div>
      <div class="container my-5">
        <div class="row text-center">
          <div class="col-md-6 mb-4">
            <img 
              src="images/1.jpg" 
              class="img-fluid rounded img-hover" 
            >
          </div>
          <div class="col-md-6 mb-4">
            <img 
              src="images/2.jpg" 
              class="img-fluid rounded shadow img-hover" 
            >
          </div>
        </div>
      </div>
      <div class="container my-5">
        <div class="card p-4">
        <?php if (isset($_SESSION['username'])) { ?>
          <h2 class="text-center text-primary mb-4">💼 Réserver une place ici 💼</h2>
          
          <form action="adult.php" method="post">

            <div class="mb-3">
              <label class="form-label">Votre Nom</label>
              <input type="text" class="form-control" placeholder="Votre Nom" required name="nom">
            </div>

            <div class="mb-3">
              <label class="form-label">Votre Prénom</label>
              <input type="text" class="form-control" placeholder="Votre Prénom" required name="prenom">
            </div>

            <div class="mb-3">
              <label class="form-label">CIN</label>
              <input type="number" class="form-control" placeholder="CIN" required  name="cin">
            </div>

            <div class="mb-3">
              <label class="form-label">Date de Naissance</label>
              <input type="date" class="form-control" required name="date">
            </div>

            <div class="mb-3">
              <label class="form-label">Mobile</label>
              <input type="tel" class="form-control" placeholder="Numéro de téléphone" required name="telephone">
            </div>
            
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Votre email" required name="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Centre d'intérêt (Activité, etc...)</label>
              <textarea class="form-control" placeholder="Écrire ici ..." rows="3" name="about"></textarea>
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


