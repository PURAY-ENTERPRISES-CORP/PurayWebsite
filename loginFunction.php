<?php
require_once('config.php');
if(isset($_POST["loginUserName"])&&isset($_POST["loginPassword"])){
$userName = $_POST["loginUserName"];
$password =  $_POST["loginPassword"];
$logInQuery = "SELECT * FROM CLIENT_ACCOUNT WHERE Email = '$userName' and Password = '$password' ";
$result = mysqli_query($conn, $logInQuery);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
  echo "valid";
  }
}else{
  echo "invalid";
}
mysqli_close($conn);
}
?>
