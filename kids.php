<?php

if(
    isset($_POST["nom"])&&
    isset($_POST["prenom"])&&
    isset($_POST["age"])&&
    isset($_POST["nom_parent"])&&
    isset($_POST["telephone"])&&
    isset($_POST["email"])&&
    isset($_POST["session"])&&
    isset($_POST["about"])
){
    $nom = $_POST["nom"];
    $prenom=$_POST["prenom"];
    $age=$_POST["age"];
    $nom_parent = $_POST["nom_parent"];
    $telephone = $_POST["telephone"];
    $email=$_POST["email"];
    $session=$_POST["session"];
    $about=$_POST["about"];

    $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        $req = $conn->prepare("INSERT INTO kids (nom, prenom, age,NomParent,telephone, email,session, about) VALUES (?,?,?,?,?,?,?,?)");
        $req->bindParam(1, $nom);
        $req->bindParam(2, $prenom);
        $req->bindParam(3, $age);
        $req->bindParam(4, $nom_parent);
        $req->bindParam(5, $telephone);
        $req->bindParam(6,$email);
        $req->bindParam(7,$session );
        $req->bindParam(8, $about);

        $res = $req->execute();

        if ($res) {
            header("Location: index.php");
        } else {
            echo "Erreur";
        }
    }
    } else {
        echo "Please fill in all fields.";
    }

?>