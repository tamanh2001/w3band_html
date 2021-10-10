<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <title>Document</title>
      <?php require_once"Login.php" ;
      Login();
      ?>

</head>
<body>
    <form method="POST" action="">
        <div class="form-group">
            <label for="usename">User name:</label>
            <input type="text" class="form-control" placeholder="Enter username" id="uname" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox"> Remember me</label>
        </div>
        <div>
            <button class="btn btn-primary" name="login">Login</button>
        </div>
        <a href="register_form.php" style="color:black">Dont have an account? Sign Up</a>
    </form>
</body>

</html>


