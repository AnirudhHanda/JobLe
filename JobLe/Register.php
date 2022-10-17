<!DOCTYPE html>
<?php
include 'config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    
    <style>
      /* body{
        background-image: url("Bg_2.png");
        background-size: cover;
        background-position: fixed;
        background-repeat: no-repeat;
      } */
      .bg_image{
        background-image: url("Bg_2.png");
        background-size: cover;
        background-repeat: no-repeat;
        /* background-position: right; */
        height: 100vh;
        z-index: 9;
      }
      .bg_top{
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
      }
      body .container{
        width: 100%;
        height: 100%;
        float: right;
        top: 0;
        margin-top: 20px;
      }
      form{
        background-color: #F1FDFF;
        padding: 30px;
        margin-top: 2em;
        margin-left: 35em;
        margin-right: 5em;
        box-shadow: 7px 7px 15px grey;
        border-radius: 5px;
        /* border: solid 2px #4F87FF;
        border-collapse: separate;
        border-spacing: 25px; */
      } 

    </style>

    <title>Register</title>
    <!-- CSS only -->
    
    
</head>
<body>

<?php 
if($showalert){
echo '
<div class="alert alert-success alert-success fade show" role="alert" style = "text-align: center; z-index: 10;">
  <strong>Success!!</strong> You have Signed up successfly!! You can Login now.
  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
</div>';
}
if($showerror){
  echo '
  <div class="alert alert-danger alert-danger fade show" role="alert" style = "text-align: center; z-index: 10;">
    <strong>Oops!</strong> '.$showerror.'
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button> -->
  </div>';
  }
?>
  <div class="bg_image bg_top"> 
    <div class = "container">
      <form method= "Post" style = "margin-top: 2.7rem;">
       <div class="form-group">
          <label for="exampleInputName">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName" name = "name" value = "">
        </div>
        <div class="form-group" style = "margin-top: 3px">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" style = "margin-top: 3px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email" value = "">
          <small id="emailHelp" style = "margin-top: 1px"class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group" style = "margin-top: 3px">
          <label for="exampleInputNumber">Phone Number</label>
          <input type="tel" class="form-control" id="exampleInputName" name = "phone_no" value = "">
        </div>
        <div class="form-group" style = "margin-top: 3px">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name = "password" value = "">
        </div>
        <div class="form-group" style = "margin-top: 3px">
          <label for="exampleInputPassword2">Confirm Password</label>
          <input type="password" class="form-control" name = "cpassword" id="exampleInputPassword2" value = "">
        </div>
        <button type="submit" style = "margin-top: 15px;"class="btn btn-primary" name = "submit">Submit</button>
        <br><br>
          Already Registered? <a href = "Login.php">Login</a>
      </form>
      </div></div>
 
</body>
</html>


