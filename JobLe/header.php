<!DOCTYPE html>
<?php include 'config.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e9cf5a296c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Cinzel:wght@400;500&family=EB+Garamond&family=Lato&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ad53ad5f1.js" crossorigin="anonymous"></script>
   <style>
        /* The side navigation menu */
.sidebar {
    margin: 0;
    margin-top: 3.3rem;
    padding: 0;
    width: 200px;
    background-color: #F1FDFF;
    background-image: linear-gradient(#C4C6C7 , #D9F6FF);
    position: fixed;
    height: 100%;
    overflow: auto;
    z-index: 1;
    border-radius: 4px;
  }
  
  /* Sidebar links */
  .sidebar a {
    
    display: block;
    color: black;
    padding: 16px;
    padding-left: 28px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 18px;
    font-family: 'Changa', sans-serif;
    font-family: 'Cinzel', serif;
    font-family: 'EB Garamond', serif;
    font-family: 'Lato', sans-serif;
    font-family: 'Roboto', sans-serif;
  }
  
  /* Active/current link */
  .sidebar a.active {
    background-color: #0EA3FE ;
    color: white;
  }
  
  /* Links on mouse-over */
  .sidebar a:hover:not(.active) {
    background-color: #0EE5FE;
    color: white;
  }
  
  /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
      .navbar{
        background-color: #333;
        position: fixed;
        color: white;
        top: 0;
        position: fixed;
        height: 53px;
        z-index: 9;
        width: 100%;
        font-family: 'Changa', sans-serif;
        font-family: 'Cinzel', serif;
        font-family: 'EB Garamond', serif;
        font-family: 'Lato', sans-serif;
        font-family: 'Roboto', sans-serif;
      }
      .navbar a{
        transition: 0.5s;
        font-size: 1.3rem;
      }
      .navbar a:hover{
    font-size: 1.1rem;
    color:rgb(4, 124, 164);
    transition: 0.5s;
    text-shadow: 2px 2px 5px black;
  }
  .navbar img:hover{
    height: 500px;
    width: auto;
  }

    </style>
    <title>Dashboard</title>
    <link rel = "stylesheet" href = "index.php">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style = "position: fixed; background-image: url(nav-bg_3.png); color: white; box-shadow: 2px 2px 10px grey;">
<a class="navbar-brand" href="career1.php" style = "font-size: 2.3rem; padding-left: 2.1rem; color: #D7E3FF; margin-top: -1rem; padding-top: px; "><img src = "images/logo_new4.png" style = "height: 55px; width: auto; margin-top: 15px; padding-top: 0.3rem; padding-left: 5px; padding-right: 5px; padding-bottom: -0.3rem"></a>
  <button class="navbar-toggler" type="button" style = "float: right; " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style = "float: right;">
    <ul class="navbar-nav" style = "float: right; margin-left: 500px;">
      <li class="nav-item active">
        <a class="nav-link" href="career1.php" style = "color: white; margin-left: 50px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="career1.php" style = "color: white; margin-left: 50px;">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs.php" style = "color: white; margin-left: 50px;" >Candidates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php" style = "color: white; margin-left: 50px;" ><i class="fa-solid fa-user fa-1.5x"></i></a>
      </li>
    </ul>
  </div>
</nav>

    <!-- The sidebar -->
    <div class="sidebar">
      <a class="active" href="index.php">Jobs</a>
      <a href="jobs.php">Candidates Applied</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
    </div>
    </head>
    </html>