<!DOCTYPE html>
<?php 
    include 'config_1.php';
  ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Cinzel:wght@400;500&family=EB+Garamond&family=Lato&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Cinzel:wght@400;500&family=EB+Garamond&family=Lato&family=Roboto:wght@300&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/8ad53ad5f1.js" crossorigin="anonymous"></script>
<link rel = "stylesheet" href = "style1.css">

  <style>
    ul a{
      color: white;
    }
    .rows{
        display: flex;
        padding: 50px;
        padding-top: 0;
        padding-left: 105px;
        flex-wrap: wrap;
        font-size: 20px;
      }
      .rows .jobs{
        background-image: linear-gradient(#C4C6C7 , #D9F6FF)  ;
        width: 45%;
        border-radius: 8px;
        border: 3px solid white ;
        box-shadow: 4px 4px 10px grey;
        padding: 25px;
        margin-right: 50px;
        margin-top: 50px;
      }
      .rows:hover{
        padding-bottom: 10px;
      }
      .rows .jobs h2{
        font-size: 30px;
      }
      .rows .jobs h3{
        font-size: 25px;
      }
      .rows .jobs a{
        margin-left: 16.2rem;
        color: #e9fafd;
        text-decoration: none;
        background-color: rgb(4, 124, 164);
        border-radius: 3px;
        font-size: 1.9rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        padding-top: 0rem;
        padding-bottom: 0rem;
        font-family: 'Changa', sans-serif;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;
        transition: 0.5s;
      }
      .rows .jobs a:hover{
        background-color: rgb(125, 190, 211);
    border-bottom: 0.6rem solid #1ba1d2;
    transition: 0.5s ease;
    padding-top: 0rem;
      }
  
  </style>
  <link rel = "stylesheet" href = "style1.css">
  <title>Career</title>
</head>
<body>

<nav style = "opacity: 1; box-shadow: 2px 3px 10px grey; height: 5.7rem; padding-top: 15px;" class="navbar navbar-expand-lg navbar-light bg-light" style = "background-image: url(nav-bg_3.png); color: #FFFFFF ; position: fixed; ">
  <a class="navbar-brand" href="career.php" style = "font-size: 2.3rem; padding-left: 4rem; color: #D7E3FF; margin-top: -7rem; padding-top:0px; "><img src = "logo_new4.png" style = "height: 50px; width: auto; margin-top: 0;"></a>
  <button class="navbar-toggler" style = "color: white; float: right;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style = "margin-top: -4.9rem;">
    <ul class="navbar-nav" style = "margin-left: 54rem;">
      <li class="nav-item active;">
        <a class="nav-link" href="index.php" style = "color:#DCE6FC; margin-left: 200px; padding-left: 10px;">Jobs <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#main" style = "color: #DCE6FC; margin-left: 50px ;">Companies</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs.php" style = "color:#DCE6FC; margin-left: 50px ;">Others</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php" style = "color: #DCE6FC; margin-left: 50px ; z-index: -1;" ><i style = "font-size: 30px;" class="fa-solid fa-user"></i></a> 
      </li>
    </ul>
  </div>
</nav>

<div class = "main">
      <div class = "main_content">
          <h1>JOB PORTAL</h1>
          <div class = "slog">
            <p>FIND YOUR</p><span style = "color: #4F87FF ">PERFECT JOB!</span>
          </div>
      </div>
  </div>
<div class = "rows" id = "main">
    <?php 
      $sql = "Select cname, position, Jdesc, CTC, skills from jobs";
      $result = mysqli_query($con, $sql);
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
            <div class = "jobs">
            <h2 style = "text-align: center; color: #002272 ; font-style: bold;">'.$rows['position'].'</h2>
            <h3 style = "text-align: center; padding-bottom: 22px;">'.$rows['cname'].'</h3>
            <p style = "color: bleck; text-align: justify;">'.$rows['Jdesc'].'</p>
            <pre style = "color: black; adding-right: 20px"><b>Skills Required   :  </b>'.$rows['skills'].'</pre>
            <pre style = "color: black; margin-bottom: 20px; margin-right: 100px;"><b>CTC               :  </b>'.$rows['CTC'].'</pre>
            <button class="btn btn-primary" style = "text-align: center; margin-left: 171px; font-size: 18px" type="button" data-toggle="modal" data-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
    Apply Now
  </button>
          </div>';
        }}
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="Post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name = "name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Applying For:</label>
            <input type = "text" class = "form-control" name= "apply">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name = "qual">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Year PassOut:</label>
            <input type="text" class="form-control" name = "year">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Resume Link:</label>
            <input type="text" class="form-control" name = "link">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="ha" name = "ha" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
  



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>





