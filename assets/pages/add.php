<?php
session_start();
include " ../../../php/database.php";
if(empty($_SESSION['userdata'])){
  header("location: ../../index.php");
}else{
$userArray =$_SESSION['userdata'];
$to_user_id = $userArray['id'];
if(isset($_POST['submit'])){
    $cardName = $_POST['name'];
    $from_user_id = "131";
   $cvv = $_POST['cvv'];
   $month = $_POST['month'];
     $year =  $_POST['year'];
     $amount = $_POST['amount'];
     $sql = "INSERT INTO trans(from_user_id,to_user_id,amount) VALUES($from_user_id,$to_user_id,$amount)";
         $result = mysqli_query($db,$sql);
         if($result){
           header("location: ../../index.php");
         }else{
           $mssg = "error  occured ";
         }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Money </title>
</head>
<style>
  *,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #d3e9fc;
  font-family: "Source Sans Pro", sans-serif;
}

.container {
  max-width: 620px;
  margin: 150px auto 100px;
}

.card-image {
  width: 425px;
  position: absolute;
  top: -125px;
  left: 100px;
  z-index: 1;
}

.card-image-shadow {
  position: absolute;
  width: 410px;
  height: 253px;
  top: -113px;
  left: 107px;
  border-radius: 15px;
  box-shadow: -5px 10px 32px 0px #000;
  z-index: 0;
}

.form {
  border-radius: 15px;
  background-color: #fff;
  min-width: 100%;
  padding-top: 165px;
  position: relative;
  box-shadow: -5px 7px 32px 0px rgba(0, 0, 0, 0.35);
}

form {
  padding: 15px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.flex-row {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.flex-column {
  width: 100%;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
}

input.card-number,
input.card-name,
input.card-cvv,
table {
  width: 100%;
}

input {
  padding: 10px;
  height: 40px;
  font-size: 18px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline-color: #4183f5;
}

input:not(.card-cvv, .card-submit),
table {
  margin-bottom: 20px;
}

label {
  display: block;
}

.table-column select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding-left: 15px;
  width: 45%;
  height: 40px;
  margin-right: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: url("https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-1.png");
  background-size: 15px;
  background-repeat: no-repeat;
  background-position-x: 125px;
  background-position-y: center;
  font-size: 18px;
  outline-color: #4183f5;
}

.table-column:last-child {
  width: 40%;
}

.card-submit {
  width: 100%;
  margin: 0 auto;
  color: #fff;
  font-size: 18px;
  height: 50px;
  border: none;
  border-radius: 5px;
  background-color: #2364d2;
  transition: background-color 250ms ease-in-out;
}

.card-submit:hover {
  background-color: #4183f5;
}


    </style>
<body>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title>Credit Card - Input Form</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <form method="post">
      <div class="flex-row">
          <label for="card-name">Amount</label>
          <input name="amount" class="card-name"  type="text" value="">
        </div>
        <div class="flex-row">
          <label for="card-number">Card Number</label>
          <input name="number" class="card-number" type="text"   value="">
        </div>
        <div class="flex-row">
          <label for="card-name">Holder Name</label>
          <input name="name" class="card-name"  type="text" value="">
        </div>
        <div class="flex-row">
          <table>
            <tr>
              <td class="table-column">
                <label for="month">Expiration Date</label>
                <select name="month" id="month-select">
                  <option value="Month" selected disabled>Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
                <select name="year" id="year-select">
                  <option value="Year" selected disabled>Year</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                </select>
              </td>
              <td class="table-column">
                <label for="card-cvv">CVV</label>
                <input class="card-cvv" type="text"  name="cvv" value="">
              </td>
            </tr>
          </table>
        </div>
        <div class="flex-row">
          <input class="card-submit"  name="submit"  type="submit">
        </div>
      </form>
      <img class="card-image" src="https://pngimg.com/uploads/credit_card/credit_card_PNG99.png" alt="Card image">
      <div class="card-image-shadow"></div>
    </div>
  </div>
</body>



</body>
</html>