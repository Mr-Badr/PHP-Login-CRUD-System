<?php

session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php?msg= \"erreur\"");
}
$id = (int)$_GET['id'];
include('cnx.php');
$requete = $conn->prepare(" SELECT * from test.user where id = $id");
$requete->execute();
$results = $requete->fetchAll();
foreach ($results as $row) {
  $nom = $row['nom'];
  $prenom = $row['prenom'];
  $email = $row['email'];
  $pwd = $row['pass'];
  $adresse = $row['adress'];
  $priv = $row['privilege'];
  $telephone = $row['telephone'];
}
?>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <br>
  <h2 class="text-center text-info"> Ajouter un utilisateur</h2><br>
  <div class="container" margin=10x>
    <form action="updateUser.php" method="POST">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="id" class="form-control" value="<?php echo $id; ?>" />
        <label class="form-label" for="form2Example1">id</label>
      </div>
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" name="email" class="form-control" value="<?php echo $email; ?>" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="Nom" class="form-control" value="<?php echo $nom; ?>" />
        <label class="form-label" for="form2Example1">Nom</label>
      </div>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="Prenom" class="form-control" value="<?php echo $prenom; ?>" />
        <label class="form-label" for="form2Example1">Prenom</label>
      </div>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="adresse" class="form-control" value="<?php echo $adresse; ?>" />
        <label class="form-label" for="form2Example1">adresse</label>
      </div>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="telephone" class="form-control" value="<?php echo $telephone; ?>" />
        <label class="form-label" for="form2Example1">Telephone</label>
      </div>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="priv" class="form-control" value="<?php echo $priv; ?>" />
        <label class="form-label" for="form2Example1">Privilege</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" name="pwd" class="form-control" value="<?php echo $pwd; ?>" />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" />

      <!-- Register buttons -->

  </div>
  </form>
  </div>
</body>

</html>