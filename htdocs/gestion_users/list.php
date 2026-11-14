<?php
include "connexion.php";
$resultat = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Liste utilisateurs</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav>
    <a href="index.html">Home</a>
    <a href="list.php">Liste</a>
    <a href="#">Contact</a>
  </nav>

  <table>
    <tr>
      <th>Identifiant</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Telephone</th>
      <th>Mail</th>
      <th>Sexe</th>
      <th>Action</th>
    </tr>

    <?php
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      echo "<tr>";
      echo "<td>" . $ligne["id"] . "</td>";
      echo "<td>" . $ligne["nom"] . "</td>";
      echo "<td>" . $ligne["prenom"] . "</td>";
      echo "<td>" . $ligne["tel"] . "</td>";
      echo "<td>" . $ligne["email"] . "</td>";
      echo "<td>" . $ligne["sexe"] . "</td>";
      echo "<td>";
      echo "<a href='detail.php?id=" . $ligne["id"] . "'>Détail</a>";
      echo "<a href='delete.php?id=" . $ligne["id"] . "'>Supprimer</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>

  </table>

</body>
</html>
