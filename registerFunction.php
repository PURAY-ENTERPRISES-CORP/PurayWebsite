<?php
require_once('config.php');
if(isset($_POST["signupFirstName"])){
$firstName = $_POST["signupFirstName"];
$lastName = $_POST["signupLastName"];
$email = $_POST["signupEmail"];
$password = $_POST["signupPassword"];
$checkDuplicate = "SELECT * FROM CLIENT_ACCOUNT where  Email = '$email'";
$result = mysqli_query($conn, $checkDuplicate);
if (mysqli_num_rows($result) == 0){
  //correct result
  $registerQuery =  "INSERT INTO CLIENT_ACCOUNT".
  " (FirstName, LastName, Email, Password)".
  "VALUES ('$firstName', '$lastName', '$email', '$password')";
  $retval = mysqli_query($conn, $registerQuery);
  echo "valid";
}else{
  echo "duplicate";
}
}


 ?>
