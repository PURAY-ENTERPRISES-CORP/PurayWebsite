<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PURAY - Your Natural Beauty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="icon" type="image/png" href="static/image/icon.PNG">
  </head>
  <body onload="loadCookieEnabled();">
    <?php
    require_once('config.php');
     ?>
    <div id="bigBanner" >
      <div class="cookieBanner"  id="cookieBanner">
      <h3>by continuing browse this website, you agree to our use of <a href="#" style="color:grey;   text-decoration: underline;">cookies</a> . These allow us to collect information to improve your experience.</h3>
      <a  id="cookieAgreement" href="#" onclick="cookieAgree();">I AGREE</a>
      </div>

      <div class="header" id="myHeader" style="z-index: -1;">
        <a href="/">PURAY</a>
      </div>
    </div>

    <div class="content">

      <div class="leftMenu" id="leftMenu" style="z-index:1; margin-top:30px;">
    <input type="text" name="" value="" placeholder="SEARCH" id="search">
    <div class="productList menuTitle" >
      <h3>PRODUCT</h3>
    <a href="purayModel" style="margin-left: 30px; ">PURAY I</a>
    </div>
    <div class="introduction menuTitle">
      <h3> I.D.E.A</h3>
      <a href="#">YOUR NATURAL BEAUTY</a>
      <a href="#">YOUR SMART HEALTH</a>
    </div>

    <div class="contactUs menuTitle">
    <a href="contact" style="margin-left:0px; color:red;">CONTACT US</a>
    </div>
      </div>

      <div class="centerContent" style="position: relative; z-index:13;">
        <div class="centerContent1">
          <p id="contactExplanation"> Email <br> <br> You can email us at <a style="color:grey; text-decoration: underline;" href="mailto:clientservices@puray.ca" >clientservices@puray.ca</a> <br><br>
        An advisor will respond to you in English, French or Mandarin <br> <br> within 24 hours, from Monday to Saturday.</p>
          <div class="Enquiry" >
            <a id="sendEnquriy">SEND ENQUIRY</a>
          </div>
        </div>
        <div class="centerContent2">
          <form class="" action="contact.php" method="post" id="enquiryForm">
            <div class="titleInput">
              <select name="inquiryTitle" id="title" value=" ">
                <option label="" style="display: none" id="hiddenOption"> </option>
                <option value="Mr.">Mr.</option>
                <option value="Miss.">Miss.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
              </select>
              <label id="titleLabel" class="titleLabel">TITLE</label>
              <h3 id="titleReminder" class="reminder">This Field is Required.</h3>
            </div>
            <div class="firstNameInput">
              <input type="text" name="inquiryFirstName" value="" placeholder="" id="firstNameInputBox" class="fieldInput">
              <label id="firstNameLabel" class="firstNameLabel fieldLabel">FIRST NAME</label>
              <h3 id="firstNameReminder" class="reminder">This Field is Required.</h3>
            </div>
            <div class="lastNameInput">
              <input type="text" name="inquiryLastName" value="" id="lastNameInputBox" class="fieldInput">
              <label id="lastNameLabel" class="lastNameLabel fieldLabel">LAST NAME</label>
              <h3 id="lastNameReminder" class="reminder">This Field is Required.</h3>
            </div>
            <div class="emailInput">
              <input type="text" name="inquiryEmail" value="" id="emailInputBox" class="fieldInput">
              <label id="emailSubLabel" class="emailSubLabel fieldLabel">EMAIL</label>
              <h3 id="emailReminder" class="reminder">This Field is Required.</h3>
            </div>
            <div class="phoneInput">
              <input type="text" name="inquiryPhone" value="" id="phoneInputBox" class="fieldInput">
              <label id="phoneLabel" class="phoneLabel fieldLabel">PHONE NUMBER (OPTIONAL)</label>
              <h3 id="phoneReminder" class="reminder">Invalid Phone Number.</h3>
            </div>
            <div class="commentInput">
              <textarea name="inquiryComment" rows="2" cols="80" class="fieldInput" id="commentTextArea" placeholder="COMMENT" maxlength="250"></textarea>
              <!--<label id="commentLabel" class="commentLabel fieldLabel">COMMENT</label>-->
              <h3 id="commentReminder" class="reminder">This Field is Required.</h3>
            </div>
            <div class="SubmitAndCancel">
              <input type="submit" name="" value="SUBMIT"  id="submitInquiry" disabled>
               <label for="submitInquiry" id="submitInquiryButton">SUBMIT</label>
               <a  style="margin-left:100px;" id="cancelInquiryButton">CANCEL</a>
            </div>

          </form>
<?php
  if(isset($_POST['inquiryTitle'])&&isset($_POST['inquiryFirstName'])
  &&isset($_POST['inquiryLastName'])&&isset($_POST['inquiryEmail'])&&isset($_POST['inquiryPhone'])&&isset($_POST['inquiryComment'])){
    $inquiryTitle = $_POST['inquiryTitle'];
    $inquiryFirstName = $_POST['inquiryFirstName'];
    $inquiryLastName = $_POST['inquiryLastName'];
    $inquiryEmail = $_POST['inquiryEmail'];
    $inquiryPhone = $_POST['inquiryPhone'];
    $inquiryComment = $_POST['inquiryComment'];
    $currrentTime = current_timestamp;
    $sql = "INSERT INTO Client_Inquiry".
    " (Title, FirstName, LastName, Email, PhoneNumber, Comment,InquiryTime)".
    "VALUES ('$inquiryTitle', '$inquiryFirstName', '$inquiryLastName', '$inquiryEmail', '$inquiryPhone', '$inquiryComment', $currrentTime)";
    $retval = mysqli_query( $conn, $sql );
    if($retval){
      $inquiryID = mysqli_insert_id($conn);;
    }else{
      $inquiryID = "unknown";
    }
  //ignore any mysqli error, the error can only be duplicate email
    mysqli_close($conn);
    //now send dev email
    // the message
    $msg = "Inquiry No. ". $inquiryID.":\n Client Name: ".$inquiryTitle." ";
    $msg .= $inquiryFirstName." ".$inquiryLastName."\n";
    $msg .= "Email: ".$inquiryEmail."\n"."Phone: ".$inquiryPhone."\n";
    $msg .= "Comment: ".$inquiryComment;
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    mail("clientservices@puray.ca","New Inquiry",$msg);
  }

 ?>


        </div>
        <div class="centerContent3">
          <p>Inquiry <br><br>We recieved your inquiry.  <br><br> An advisor will respond to you in English, French or Mandarin <br> <br> within 24 hours, from Monday to Saturday.</p>
        </div>

      </div>


      <div class="bottomContent" style="margin-left: 100px; margin-top: -180px;" id="bottomContent">
        <hr class="divisionLine">
        <div class="emailSubContent">
          <div class="leftBottom">
            <h4>NEWSLETTER</h4>
            <form class="" action="contact.php" method="post" name="emailSubscription" id="emailSubscribeForm">
              <div class="emailSubscription" id="emailSubscription">
                <input type="text" name="emailAddress" value="" id="emailSub">
                <label id="emailLabel">EMAIL</label>
                <h5 id="notValidEmail">Please enter a valid email address.</h5>
                <div class="emailFormOther" id="emailFormOther">
                <div class="checkbox">
              <input type="checkbox" id="checkbox_1">
              <label for="checkbox_1">I have read, understood and agree to the  <a href="#">Privacy Policy</a> and the  <br> <a href="#">Terms of Use</a></label>
                  </div>
              <div class="submitForm">
                     <input type="submit" name="submitEmailSub" value="REGISTER" id="submitEmail"  disabled>
                     <label for="submitEmail" id="submitEmailLabel">REGISTER</label>
              </div>
                </div>
              </div>
                <h3 id="thankSubscription">Thank you for your registration.</h3>
            </form>

            <?php
            if(isset($_POST['emailAddress'])){
              $emailAddress = $_POST['emailAddress'];
              $date = date('Y-m-d H:i:s');
              $sql = "INSERT INTO Email_Subscription".
              " (Email_Address, Starting_Date, Email_Sent_Count,Last_Email_ID)".
              "VALUES ('$emailAddress', current_timestamp, 1,0)";
              $retval = mysqli_query( $conn, $sql );
              //ignore any mysqli error, the error can only be duplicate email
              //send subscription email
              $from = 'clientservices@puray.ca';
              // To send HTML mail, the Content-type header must be set
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              // Create email headers
              $headers .= 'From: '.$from."\r\n".
              'Reply-To: '.$from."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              $ES_ID = mysqli_insert_id($conn);
              $msg = file_get_contents("http://puray.ca/static/email/subscriptionEmail.html");
              // send email
              mail($emailAddress,"Subscription Confirmation",$msg,$headers);
              mysqli_close($conn);
            }
             ?>

          </div>
          <div class="rightBottom">
            <table style="border-spacing: 50px 0; ">
              <tr>
                <td><a href="contact">Contact</a></td>
                <td><a href="https://www.instagram.com/puray.ca/">Instagram</a></td>
                <td>Language &nbsp;&nbsp;
      <div class="languageSelector">
        <a href="#">EN</a> / <a href="#">FR</a> / <a href="#">CN</a>
      </div>
      </td>
              </tr>
              <tr>
                <td><a href="wechat">Wechat</a></td>
                <td><a href="#">LinkedIn</a></td>
                <td><a href="https://www.facebook.com/puraybeauty">Facebook</a></td>
              </tr>
            </table>
          </div>

        </div>

        <div class="footerContent">
          <h5 id="purayLogoFooter">PURAY/Contact Us</h5>
          <li style="text-align: center; list-style: none; margin-top:-42px; margin-left:-80px;">
        <a id="terms" href="#">Terms & Conditions</a>
      </li>
        </div>

    </div>


    <script type="text/javascript" src="static/js/jquery.js"></script>
    <script type="text/javascript" src="static/js/utility.js"></script>
    <script type="text/javascript" src="static/js/cookieHandler.js"></script>
    <script type="text/javascript" src="static/js/contactFormUtility.js"></script>
    <script type="text/javascript" src="static/js/textarea-autogrow.js"></script>
  </body>
</html>
