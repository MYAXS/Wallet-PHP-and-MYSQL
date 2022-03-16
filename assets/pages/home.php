<?php
$user=$_SESSION['userdata'];
$balance = $user['balance']=getCreditedBalance($user['id'])- getDebitedBalance($user['id']);
$history = $user['trans_history']=getTransHistory($user['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div  style="background-color: red;" class="jumbotron">
<center> <h3>Wallet <span class="badge bg-secondary"><?=$balance?> Rs</span></h3> </center>
<br>
<center><button  style="background-color: #4caf50;color:#111" id="btnOpenForm">Send Money</button></center>
&nbsp <center><a href="assets/pages/add.php"><button  style="background-color: #4caf50;color:#111" >ADD Money</button></a></center>

<script>
    function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });

    </script>
<div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
   
    <form  method="post">
      <div class="form-group">
        <label for="">To Mobile No:</label>
        <input type="text"  name="to_user" 
        <input class="form-control" type="number" onkeypress="return event.charCode > 47 && event.charCode < 58;" pattern="[0-9]{10}"  minlength="10" maxlength = "10" required class="form-control" />
      </div>
      <div class="form-group">
        <label for="">Amount</label>
        <input class="form-control" type="number" onkeypress="return event.charCode > 47 && event.charCode < 58;" pattern="[0-9]{10}" required name="amount"  />
    

        <input type="submit"  name="submit"    style="background-color:green;"  value="Send">
      <!-- <button>Submit</button> -->
    </form>
  </div>
</div>
</div>

<div id="trans_list">
<?php
foreach($history as $trans){
  $suffix="";

    if($trans['from_user_id']==$user['id']){
        $color="danger";
$suffix= getUserById($trans['to_user_id'])['full_name']." (".getUserById($trans['to_user_id'])['mobile'].") " ;
}else{
 
        $color="success";
$suffix= getUserById($trans['from_user_id'])['full_name']." (".getUserById($trans['from_user_id'])['mobile'].") " ;

    }
    ?>

  <div class="columns">
  <div class="list">
  <ul class="price">
    <li><h6 class="suffix"><?=$suffix?></h6></li>
    <li class="card-<?=$color?>"><?=$color=='danger'?'-':'+'?> <?=$trans['amount']?> Rs</li>
    <li class="card-text"><?=$trans['created_at']?></li>
    
  </div>
  </div>
 


    <?php
}

?>



</div>



</div>


</body>
</html>
<style>
  body{
    background-color: white;
  }
  html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}



.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
  margin-top: 100px;
}





.suffix{
  color: #424242;
  font-size: 15px;
}

.card-success{
  color:#4caf50;
  font-size: 20px;
}

.card-danger{
  color:red;
  font-size: 20px;
}



.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  border: 1px saddlebrown;
}

/* Add shadows on hover */
.list{
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100%
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}

@import url('https://fonts.googleapis.com/css?family=Roboto:300,500');

@color-card-background: #2d3638;
@color-tag-background: #191e20;
@color-anchor: #e37544;
@color-body-copy: #b9bcbd;
@default-border-radius: 10px;
@breakpoint-medium: "screen and (min-width: 700px)";

html, body {
  background-color: #fff;
}

.form-popup-bg {
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}
.form-popup-bg {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
  overflow-y: auto;
  z-index: 10000;
}
.form-popup-bg.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}
.form-container {
    background-color: #2d3638;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    position:relative;
  padding: 40px;
  color: #fff;
}
.close-button {
  background:none;
  color: #fff;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  right: 0;
  border: solid 1px #fff;
}

.form-popup-bg:before{
    content:'';
    background-color: #fff;
  opacity: .25;
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}


</style>
<?php

include " ../../../php/database.php";

$userArray =$_SESSION['userdata'];
$from_user_id = $userArray['id'];
$from_user_mobile = $user['mobile'];

$user=$_SESSION['userdata'];


if(isset($_POST['submit'])){
   $amount = $_POST['amount'];
     $to_user_mobile =$_POST['to_user'];
   echo "</br>";

    $query = "select   id from users  where mobile='$to_user_mobile'";
    $result = mysqli_query($db,$query);
    while($row =mysqli_fetch_array($result)){
      $to_user_id  = $row['id'];
}
if($to_user_mobile == $from_user_mobile ){

  echo "<script>alert('Cannot Send Money to yourself')</script>";
}else{
 
  if($balance>$amount){
    $query="INSERT INTO trans(from_user_id,to_user_id,amount) VALUES($from_user_id,$to_user_id,$amount)";
    $result = mysqli_query($db,$query);
    if($result){
       echo "<script>alert('Payment Done')</script>";
      echo "<script>window.open('?','_self');</script>";
    }
       }else{
           echo "<script>alert('Insufficient Func try lower limit or add Fund')</script>";
       }


}

}
?>