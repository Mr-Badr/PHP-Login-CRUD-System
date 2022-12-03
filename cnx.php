
<?php
  $user = 'root';
  $password = '';
  $host = 'localhost:3306';
  $port = "3306";
  $database = 'test';

  // On établit la connexion
  try {
    $conn = new PDO("mysql:host=$host;dbname=$database" , $user , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
    echo "<br />";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // $result = $conn->query("SELECT * FROM personne");
                // foreach ($result as $row) {
                //     echo " id = " . $row['id'] . "\n";
                //                             }
?>
