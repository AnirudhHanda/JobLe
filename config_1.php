<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$con = mysqli_connect($server, $username, $password, $database);

if($con->connect_error){
    die("Connection Failed:" .$con->connect_error);
}
echo"";



if(isset($_POST['go'])){
    $cname=$_POST['cname'];
    $pos = $_POST['pos'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];
    
  
    $sql = "INSERT INTO jobs(cname, position, Jdesc, CTC, skills) VALUES ('$cname','$pos','$jdesc', '$ctc', '$skills')";
  
    if(mysqli_query($con, $sql)){
      echo "New Job Posted";
    }
    else{
      echo "ERROR: Could not able to execute $sql. " .mysqli_error($con);
    }
  }


  if(isset($_POST['ha'])){
    $nam=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $link=$_POST['link'];
    
    $sql = "INSERT INTO candidates(name, apply, qual, year) VALUES ('$nam','$apply','$qual','$year')";
    mysqli_query($con, $sql);
  
  }
  ?>