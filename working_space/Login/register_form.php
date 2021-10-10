<?php 
    session_start();
    require_once("register.php");
    register();
        
      ?>
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
      

</head>
<body>
    <form method="POST" action="">
        </div>
           <div class="form-group">
            <label for="name">Full name:</label>
            <input type="text" class="form-control" placeholder="Enter fullname" id="fname" name="fullname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="mail" name="email">
         </div>
        <div class="form-group">
            <label for="usename">User name:</label>
            <input type="text" class="form-control" placeholder="Enter username" id="uname" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
         <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
            
        <button class="btn btn-primary" >Register</button>
    </form>
</body>

</html>
