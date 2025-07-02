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
    <!--m:top y:bottom 5:margin -->
    <div class="container my-5" style="background-color: white; border:  solid rgb(0, 0, 0); border-radius: 25px;">
        <!-- Contact Heading -->
        <div class="row">
            <div class="col text-center">
                <p class="h5" style="margin-top: 20px;">Contactez-nous par :</p>
            </div>
        </div>
    
        <!-- Social Links -->
        <div class="row text-center mb-4">
            <!-- Facebook -->
            <div class="col-md-6 mb-3">
                <a class="text-decoration-none" href="https://www.facebook.com/profile.php?id=100048547405198">
                    <i class='bx bxl-facebook-square fs-1'></i>
                    <p class="mt-2">Facebook</p>
                </a>
            </div>
    
            <!-- Instagram -->
            <div class="col-md-6 mb-3">
                <a class="hoveri text-decoration-none" href="https://www.instagram.com/onet.sfax/">
                    <i class='bx bxl-instagram fs-1'></i>
                    <p class="mt-2">Instagram</p>
                </a>
            </div>
        </div>
    
        <!-- Contact Form -->
        <div class="row">
            <div class="col-12">
                <p class="h5 text-center mb-4">Ou bien :</p>
            </div>
            
            <div class="col-lg-8 mx-auto">
                <form>
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom:</label>
                        <input type="text" id="name" class="form-control" placeholder="Votre nom" required>
                    </div>
    
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Entrez votre email" required>
                    </div>
    
                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message :</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Écrivez vos commentaires ici et l'un de nos collaborateurs vous répondra dès que possible 😃" required></textarea>
                    </div>
    
                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>