<?php

if(
    isset($_POST["username"])&&
    isset($_POST["password"])

){

    $username=$_POST["username"];
    $password=$_POST["password"];

    $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        $req = $conn->prepare("SELECT username, MotDePasse FROM register WHERE username = ? AND MotDePasse = ?");
        $req->bindParam(1, $username);
        $req->bindParam(2, $password);
        $res = $req->execute();
        $res2 = $req->fetchAll();


        if ($res2) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: index.php");
        } else {
            header("Location: login.html");
        }
    }
}else {
    echo "Please fill in all fields.";
}
?>