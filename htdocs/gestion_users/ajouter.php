<?php
include "connexion.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$sexe = $_POST["sexe"];

mysqli_query($conn, "INSERT INTO users (nom, prenom, tel, email, sexe) VALUES ('$nom', '$prenom', '$tel', '$email', '$sexe')");

header("Location: list.php");
?>
