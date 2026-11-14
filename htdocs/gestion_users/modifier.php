<?php
include "connexion.php";

$id = $_POST["id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$sexe = $_POST["sexe"];

mysqli_query($conn, "UPDATE users SET nom='$nom', prenom='$prenom', tel='$tel', email='$email', sexe='$sexe' WHERE id=$id");

header("Location: list.php");
?>
