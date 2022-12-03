<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <br>
  <h2 class="text-center text-info"> Login Form</h2><br>
  <?php
  if (isset($_GET['msg'])) {
    echo '<div class = "alert alert-primary" role= "alert">
      veuillez saisir les donnees ! </div>';
  }
  if (isset($_GET['msg1'])) {
    echo '<div class = "alert alert-primary" role= "alert">
      verifiez les infos ! </div>';
  }
  ?>
  <div class="container" margin=5x>
    <form action="auth.php" method="POST">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" name="email" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" name="pwd" class="form-control" />
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