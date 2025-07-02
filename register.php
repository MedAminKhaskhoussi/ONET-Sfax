<?php

if(
    isset($_POST["nom"])&&
    isset($_POST["prenom"])&&
    isset($_POST["username"])&&
    isset($_POST["email"])&&
    isset($_POST["password"])&&
    isset($_POST["genre"])&&
    isset($_POST["date"])&&
    isset($_POST["telephone"])
){
    $nom = $_POST["nom"];
    $prenom=$_POST["prenom"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $genre=$_POST["genre"];
    $date = $_POST["date"];
    $telephone = $_POST["telephone"];

    $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        $req = $conn->prepare("INSERT INTO register (nom, penom, username, email, MotDePasse,genre,DateNaissance,telephone) VALUES (?,?,?,?,?,?,?,?)");
        $req->bindParam(1, $nom);
        $req->bindParam(2, $prenom);
        $req->bindParam(3, $username);
        $req->bindParam(4, $email);
        $req->bindParam(5, $password);
        $req->bindParam(6,$genre );
        $req->bindParam(7,$date );
        $req->bindParam(8   ,$telephone);

        $res = $req->execute();

        if ($res) {
            header("Location: login.html");
        } else {
            echo "Erreur";
        }
    }
    } else {
        echo "Please fill in all fields.";
    }

?>