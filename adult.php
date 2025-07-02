<?php

if(
    isset($_POST["nom"])&&
    isset($_POST["prenom"])&&
    isset($_POST["cin"])&&
    isset($_POST["date"])&&
    isset($_POST["telephone"])&&
    isset($_POST["email"])
    
){
    $nom = $_POST["nom"];
    $prenom=$_POST["prenom"];
    $cin=$_POST["cin"];
    $date = $_POST["date"];
    $telephone = $_POST["telephone"];
    $email=$_POST["email"];
    $about=$_POST["about"];

    $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        $req = $conn->prepare("INSERT INTO formation (nom, penom, CIN,DateDeNaissance,telephone, email, about) VALUES (?,?,?,?,?,?,?)");
        $req->bindParam(1, $nom);
        $req->bindParam(2, $prenom);
        $req->bindParam(3, $cin);
        $req->bindParam(4, $date);
        $req->bindParam(5, $telephone);
        $req->bindParam(6,$email);
        $req->bindParam(7,$about );

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