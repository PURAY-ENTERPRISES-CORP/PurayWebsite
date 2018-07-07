<?php
require_once('config.php');
if(isset($_POST["loginUserName"])&&isset($_POST["loginPassword"])){
$userName = $_POST["loginUserName"];
$password =  $_POST["loginPassword"];
$logInQuery = "SELECT * FROM CLIENT_ACCOUNT WHERE Email = '$userName' and Password = '$password' ";
$result = mysqli_query($conn, $logInQuery);
if (mysqli_num_rows($result) > 0) {
  //should be only one result
  while($row = mysqli_fetch_assoc($result)) {
    $ClientID = $row['ClientID'];
    $firstName = $row['FirstName'];
    $secondName = $row['LastName'];
    $fullName = $firstName." ".$secondName;
    $email_confirmed = $row['Email_Confirmed'];
    if($email_confirmed == 0){
    echo "notConfirmed";
  }else{
    echo $fullName;
    session_start();
    $_SESSION["ClientID"] = $ClientID;
    $_SESSION["FirstName"] = $firstName;
  }
  }
}else{
  echo "invalid";
}
mysqli_close($conn);
}
?>
