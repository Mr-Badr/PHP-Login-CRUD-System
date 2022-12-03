<?php
$email = $_POST['email'];
$pwd = $_POST['pwd'];
if (!empty($email) && !empty($pwd)) {
	include('cnx.php');
	// --------------------------------------------------------------------
	$requete = $conn->prepare("SELECT * from test.user where 
  email = '$email' and pass = '$pwd' ");
	$requete->execute();
	$results = $requete->fetchAll(PDO::FETCH_ASSOC);
	// or i can write : $results = $conn->query("SELECT * from tp.user where email = '$email' and pass = '$pwd' ")
	// --------------------------------------------------------------------
	if ($results) {
		foreach ($results as $row) {
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['priv'] = $row['privilege'];
			$priv = $row['privilege'];
			if ($priv == "admin") {
				header('Location:admin.php');
			} else {
				header('Location:agent.php');
			}
		}
	} else {
		header('Location:login.php?msg1="error"');
	}
} else {
	header('Location:login.php?msg="error"');
}
