<?php
include "connexion.php";

$id = $_GET["id"];
$resultat = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$u = mysqli_fetch_assoc($resultat);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Détail</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav>
    <a href="index.html">Home</a>
    <a href="list.php">Liste</a>
    <a href="#">Contact</a>
  </nav>

  <form action="modifier.php" method="post">
    <input type="hidden" name="id" value="<?php echo $u['id']; ?>">

    <fieldset>
      <legend>Détail</legend>

      <label>Nom</label>
      <input type="text" name="nom" value="<?php echo $u['nom']; ?>">

      <label>Prénom</label>
      <input type="text" name="prenom" value="<?php echo $u['prenom']; ?>">

      <label>Tel</label>
      <input type="text" name="tel" value="<?php echo $u['tel']; ?>">

      <label>Email</label>
      <input type="email" name="email" value="<?php echo $u['email']; ?>">

      <p>
        <label>Sexe</label>
        <input type="radio" name="sexe" value="Homme" <?php if ($u['sexe'] == 'Homme') echo 'checked'; ?>> Homme
        <input type="radio" name="sexe" value="Femme" <?php if ($u['sexe'] == 'Femme') echo 'checked'; ?>> Femme
      </p>

      <button type="submit">Modifier</button>
    </fieldset>
  </form>

</body>
</html>
