<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php?msg= \"erreur\"");
}

include 'cnx.php';

$req="delete from user where id=". $_GET['id'];

$results = $conn->query($req);

if ($results){
  header('Location:admin.php');
}

?>