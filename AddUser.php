<?php

session_start();
if (!isset($_SESSION['id'])) {
	header("Location:login.php?msg= \"erreur\"");
}

include('cnx.php');

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$privilege = $_POST['priv'];
$req = "insert into user (id,nom,prenom,adress,telephone,email,privilege) values ( ". 3 ." , '" . $nom . "' ,'" . $prenom . "','" . $adresse . "'," . $telephone . ",'" . $email . "','" . $privilege . "')";

$results = $conn->query($req);

if ($results) {
  header("Location:admin.php");
}
