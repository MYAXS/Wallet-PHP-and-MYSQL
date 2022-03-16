<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detym</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body  style="background-color:aqua">
<style>
.try{
  text-align:center;
  position:absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border:2px solid black;
  background-color:white;}


  .form-control{
    margin:2px 4px;
    padding: 10px 12px;
    margin-left:12px;
    margin-right:12px;
    margin-bottom: 12px;
  }

 
  a{
    color: red;
  }
  </style>
   <center> <h1>Detym Signup</h1> </center>
<div class="try">


<div class="container">

<form id="signup_form" method="post">

    <label for="full-name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="full-name"  name="full_name" aria-describedby="emailHelp">
    <br>
 

    <label for="mobile" class="form-label">Mobile No</label>
    <input type="number" class="form-control" id="mobile" max="9999999999" min="6000000000"  name="mobile" aria-describedby="emailHelp">
   <br>

 
  
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp">
    <br>
  
   
  
    <label for="password"   class="form-label">Password</label>
    <input type="password" placeholder="numbers only without any characters"  class="form-control" name="password" id="password">
    <br>
  <div class="d-flex justify-content-between align-items-center">
    <br>
  <center><input type="submit" name="submit" value="submit" class="btn btn-primary"></button></center>
 
 <center> <a href="../../index.php" class="text-decoration-none"><br>Already have an account ? <br></a></center>

</form>



</div>
</div>
</body>
</html>
<?php
$db=mysqli_connect("localhost","root","","offlinewallet") or die("database is not connected");
if(isset($_POST['submit'])){
  $full_name = $_POST["full_name"];
     $mobile = $_POST["mobile"];
    $email =  $_POST["email"] ;
    $password =  $_POST["password"];

    

    $query = "INSERT INTO users (full_name,mobile,email,password) ";
    $query.= " VALUES ('$full_name','$mobile','$email','$password')";

    if(mysqli_query($db,$query)){
        $just_created_user_id = mysqli_insert_id($db);
        function addJoiningBalance($user_id){
          global $db;
          $query="INSERT INTO trans(from_user_id,to_user_id,amount) VALUES(121,$user_id,1000)";
          return mysqli_query($db,$query);
      }
      
        addJoiningBalance($just_created_user_id);
        header("location: ../../index.php");

        return true;
}
}