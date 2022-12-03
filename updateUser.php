<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php?msg= \"erreur\"");
}

include 'cnx.php';

$id = $_POST['id'];
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$adress = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$privilege = $_POST['priv'];

$req = "update user set nom = '".$nom."' , prenom = '".$prenom."' , adress = '".$adress."' , telephone = '".$telephone."' , email = '".$email."' , privilege = '".$privilege."' where id = ".$id;

$results = $conn->query($req);

if ($results){
  header('Location:admin.php');
}

?>