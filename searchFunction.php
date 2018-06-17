<?php
require_once('config.php');
if(isset($_POST["searchKey"])){
//get auto complete content
$keyword = $_POST['searchKey']."%";
$autoCompleteQuery = "SELECT * FROM  Search_Keywords where Keyword LIKE '$keyword' ";
$result = mysqli_query($conn, $autoCompleteQuery);
$data = "";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $keyword = $row['Keyword'];
      $imgSrc= $row["Image_Src"];
      $address = $row["Address"];
      $data = $data.$keyword.";".$imgSrc.";".$address."\n";
    }
    $insertDemo = "INSERT INTO demo".
    " (StrValue)".
    "VALUES ('$keyword')";
    $retval = mysqli_query( $conn, $insertDemo );
}
echo $data;
mysqli_close($conn);
}
 ?>
