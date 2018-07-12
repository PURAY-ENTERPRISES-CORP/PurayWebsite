<?php
session_start();
require_once('config.php');
if(isset($_POST["inquiryTitle"])){
$newTitle = $_POST["inquiryTitle"];
$newFirstName = $_POST["detailsFirstName"];
$newLastName = $_POST["detailsLastName"];
$newEmail = $_POST["detailsEmail"];
$newPhoneNumber = $_POST["detailsPhoneNumber"];
$newDOB = $_POST["detailsDOB"];
if($newDOB == ""){
  $newDOB = "0000-00-00";
}
$newNationality = $_POST["nationalityDetails"];
$newNewsLetterSubscription = $_POST["purayNewsLetterDetails"];
if($newNewsLetterSubscription == "on"){
  $newNewsLetterSubscription = 1;
}else{
  $newNewsLetterSubscription = 0;
}
$updateQuery = "UPDATE CLIENT_ACCOUNT SET Title = '$newTitle',  ".
                          "FirstName = '$newFirstName',  ".
                          "LastName = '$newLastName', ".
                          "Email = '$newEmail',  ".
                          "PhoneNumber = '$newPhoneNumber', ".
                          "DOB = '$newDOB', " .
                          "Nationality = '$newNationality', ".
                          "Newsletter_Subscribed =  $newNewsLetterSubscription ".
                            "WHERE ClientID = {$_SESSION['ClientID']}";
$result = mysqli_query($conn, $updateQuery);
echo $updateQuery;
}
if(isset($_POST["newPassword"])){
$currentPassword = $_POST["currentPassword"];
$newPassword = $_POST["newPassword"];
$checkExistingQuery = "SELECT Password FROM CLIENT_ACCOUNT WHERE ClientID = {$_SESSION['ClientID']} AND Password = '$currentPassword' ";
$allEntries = mysqli_query($conn, $checkExistingQuery);
if (mysqli_num_rows($allEntries) > 0) {
  //should be only one result
  while($row = mysqli_fetch_assoc($allEntries)) {
    $oldPassword= $row['Password'];
    if($oldPassword == $newPassword){
    echo "duplicate";
  }else{
    $updatePasswordQuery = "UPDATE CLIENT_ACCOUNT SET Password = '$newPassword' WHERE  ClientID = {$_SESSION['ClientID']}";
    $updateResult= mysqli_query($conn, $updatePasswordQuery);
    echo "success";
  }
  }
}else{
  echo "error";
}
}


 ?>
