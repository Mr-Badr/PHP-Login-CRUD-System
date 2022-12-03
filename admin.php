<?php

session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php?msg= \"erreur\"");
}
include('cnx.php');
$currentUser = (int)$_SESSION['id'];
// id in the query should be different to 0, we don't want to show the admin which have the id = 0.
$requete = $conn->prepare("SELECT * from test.user where id != $currentUser ");
$requete->execute();
$results = $requete->fetchAll();
?>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



  <br>
  <h2 class="text-center text-info"> Admin Page</h2><br>

  <div class="container" margin=5px>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Telephone</th>
          <th scope="col">email</th>
          <th scope="col">privilege</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        foreach ($results as $row) {
          echo '<tr>
        <th scope="row">' . $row['id'] . '</th>
        <td>' . $row['nom'] . '</td>
        <td>' . $row['prenom'] . '</td>
        <td>' . $row['adress'] . '</td>
        <td>' . $row['telephone'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['privilege'] . '</td>
        <td><a href="updateForm.php?id=' . $row['id'] . '" class="edit">Modifier</a>
            <a href="deleteUser.php?id=' . $row['id'] . '" class="edit">Supprimmer</a></td>
      </tr>';
        }
        ?>


      </tbody>
    </table>
  </div>
  <div class="container" margin=10x>
    <a href="addForm.php" class="btn btn-success">Ajouter Utilisateur</a>
    <a href="logout.php" class="btn btn-primary">Log out</a>
  </div>
</body>

</html>