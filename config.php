<?php


$login = false;
$showerror1 = false;
$showalert = false;

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$con = mysqli_connect($server, $username, $password, $database);


if($con){
    echo"";
}
else{
  die("Error".mysqli_connect_error());
}
echo"";

if(isset($_POST['submit'])){
    
    $showerror = false;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $exists = false;
    if(($password == $cpassword) && $exists == false){
        $sql = "INSERT INTO register(name, email, password, phone_no, cpassword) VALUES ('$name','$email','$password','$number', '$cpassword')";
      $res = mysqli_query($con, $sql);
      if(mysqli_query($con, $sql)){
          $showalert = true;
          // echo"Records inserted successfuly.";
      }else{
          echo "ERROR: Could not able to execute $sql. " .mysqli_error($con);
      }
    }
    else{
      $showerror = "*Passwords do not match";
    }
    
}


if(isset($_POST['Login'])){
  
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * From register WHERE `email` ='$email' AND `password` = '$password'";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
  if($num == 2){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $name;
    header("location: index.php");
  }
  else{
    $showerror1 = '*invalid email or password';
  }
  
}

// session_start();
//   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: login.php");
//     exit;
//   }

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

  
?>