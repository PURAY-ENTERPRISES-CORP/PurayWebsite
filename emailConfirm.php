<?php
require_once('config.php');
if(isset($_GET['key'])&&isset($_GET['email'])){
$key = $_GET['key'];
$email = $_GET['email'];
$confirmQuery = "SELECT * FROM Email_Confirm WHERE Email_Confirm.key = '$key' AND Email_Confirm.email = '$email'  LIMIT 1";
$checkKey = mysqli_query($conn, $confirmQuery);
if(mysqli_num_rows($checkKey) != 0){
  $confirm_info = mysqli_fetch_assoc($checkKey);
  //update users
  $update_usersQuery = "UPDATE CLIENT_ACCOUNT SET `Email_Confirmed` = 1 WHERE `ClientID` = '$confirm_info[ClientID]' LIMIT 1";
  $update_users = mysqli_query($conn, $update_usersQuery);
  //delete confirm row
  $delete_rowQuery = "DELETE FROM Email_Confirm WHERE `ClientID` = '$confirm_info[ClientID]' LIMIT 1";
  $delete_row = mysqli_query($conn, $delete_rowQuery);
  if($update_users){
    header('Location: accountInfo.php');
  }else{
    echo "Failed";
  }
}else{
  echo "Invalid email";
}
}
 ?>
