<!DOCTYPE html>

<html lang="en">
<?php include 'config.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <style>
      body{
        background-image: url('Bg_2.png');
        background-size: cover;
        background-position: fixed;
        background-repeat: no-repeat;
        
      }
      form{
        background-color: #F1FDFF;
        margin-top: 6em;
        margin-left: 40em;
        margin-right: 2em;
        padding: 25px;
        box-shadow: 7px 7px 15px grey ;
        border-radius: 5px;
      }
      
    </style>

    <title>Register</title>
</head>
<body>
  <?php
  if($login){
    echo'
<div class="alert alert-success alert-dismissible fade show" role="alert" style = "text-align: center;">
  <strong>Success!!</strong> You are Logged in successfly!! 
  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
</div>';
  }

  if($showerror1){
    echo '
    <div class="alert alert-success alert-danger fade show" role="alert" style = "text-align: center;">
      <strong>Oops!</strong> '.$showerror1.'
      <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> -->
    </div>';
    }
  ?>


    <div class = "container">
        <form method = "POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email"  class="form-control"  id="exampleInputEmail1" name = "email" value = "">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password"  class="form-control" id="exampleInputPassword1" name = "password" value = "">
            </div>
            
            <button type="submit" class="btn btn-primary"  name = "Login">Log In</button>
            <br><br>
            <p style = "text-align:center;">New User?<br>Create Account <a href = "Register.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
