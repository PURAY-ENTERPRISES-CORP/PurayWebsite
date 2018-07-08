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


 ?>
