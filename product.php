<!DOCTYPE html>
<html>
<head>
  <title>PURAY - Your Natural Beauty</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="static/css/product.css">
<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="icon" type="image/png" href="static/image/icon.PNG">
</head>
<body onload="loadCookieEnabled(); loadLanguage();">
<?php
//require_once('config.php');
//require_once('sessionCheck.php');
 ?>
  <div id="bigBanner" >
    <div class="cookieBanner"  id="cookieBanner">
    <h3 id="cookieContent">by continuing browse this website, you agree to our use of <a href="#" style="color:grey;   text-decoration: underline;">cookies</a> . These allow us to collect information to improve your experience.</h3>
    <a  id="cookieAgreement" href="#" onclick="cookieAgree();" class="lang" key="agreeOnCookie">I AGREE</a>
    </div>

    <div class="header" id="myHeader" style="z-index: 11;">
      <h3 class="lang" key="siteInPrepare">Site in preparation. We apologize for any inconvinience.</h3>
      <a href="\">PURAY</a>
      <div class="utilityHeader">
        <a href="accountInfo" id="accountBtn" style="margin-left:1000px; z-index:11;">LOG IN</a>
      <!--  <a href="#" id="shoppingCart" style="margin-left:50px; text-decoration:underline;">0</a>-->
      </div>

    </div>
  </div>


<div class="content">
    <div class="leftMenu" id="leftMenu" style="z-index:1; margin-top:30px;">
  <input type="text" name="" value="" placeholder="SEARCH" id="search">
  <div class="productList menuTitle" >
    <h3 class="lang" key="product">PRODUCT</h3>
  <a href="purayModel" style="margin-left: 30px;  color:red;">PURAY I</a>
  </div>
  <div class="introduction menuTitle">
    <h3 class="lang" key="idea"> IDEA BEHIND</h3>
    <a href="hydroWater.php" class="lang" key="naturalBeauty">HYDROGEN WATER"</a>
    <a href="#" class="lang" key="smartHealth">INTELLIGENT MOISTURIZER</a>
  </div>
  <div class="brandInfo">
  <a href="brand" style="margin-left:0px;" class="lang" key="brandInfo">THE BRAND</a>
  </div>
  <div class="contactUs menuTitle">
  <a href="contact" style="margin-left:0px;" class="lang" key="contactUs">CONTACT US</a>
  </div>
    </div>


<div class="centerContent" >
  <div class="detailView" id="detailViewProduct" style="width:200px; float:left;">
    <img src="static/image/product/purayI/detail/1.jpg" alt="" id="productImg" style="margin-left:-150px; width:150px;"  >
  </div>
  <div class="preview" id="previewProduct" style="float:right; width:100px; " >
    <a id="purayIPreview1"><img src="static/image/product/purayI/preview/1.png" alt="" style="width:100px;"></a>
    <a id="purayIPreview2"><img src="static/image/product/purayI/preview/2.png" alt="" style="width:100px;"></a>
    <a id="purayIPreview3" ><img src="static/image/product/purayI/preview/3.png" alt="" style="width:100px;"></a>
    <a id="purayIPreview4" ><img src="static/image/product/purayI/preview/4.png" alt="" style="width:100px;"></a>
    <a href="#"></a>
  </div>
</div>


<div class="rightContent" style="position:relative; z-index:10; margin-top:-500px;">
<h3 id="productName" class="lang" key="productName" > HYDROGEN WATER SPRAY</h3>
<h3 id="price">99 CAD</h3>
  <div class="colorSelect" style="margin-top:40px;">
  <h3 id="colorTitle">COLOR</h3>
  <button class="button colorModel modelSelected" id="silverModel">SILVER</button>
  &nbsp;
  <button class="button colorModel outofstockModel"  id="goldModel">GOLD</button>
  <p id="outOfStockReminder" >Sorry. We are currently out of stock.  <br> <br>If we are back in stock, we would like to notify you.  <br>Please subscribe to <a href="#emailSub" style="color:grey;text-decoration:underline;">newsletter</a>. </p>
  </div>
  <div id='product-component-53d90f8cb42'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'puray.myshopify.com',
      apiKey: '4cd4d5a0a929621514332e3b70cbed47',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [1345338474568],
        variantId: 12353964638280,
        node: document.getElementById('product-component-53d90f8cb42'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "12353964638280",
    "width": "240px",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "options": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "text-align": "left",
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#dae8fd",
        "color": "#141414",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "padding-left": "70px",
        "padding-right": "70px",
        ":hover": {
          "background-color": "#c4d1e4",
          "color": "#141414"
        },
        "border-radius": "0px",
        ":focus": {
          "background-color": "#c4d1e4"
        },
        "font-weight": "normal"
      },
      "title": {
        "font-size": "26px"
      },
      "price": {
        "font-size": "18px"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px"
      },
      "compareAt": {
        "font-size": "15px",
        "color": "#4c4c4c"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#dae8fd",
        "color": "#141414",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        ":hover": {
          "background-color": "#c4d1e4",
          "color": "#141414"
        },
        "border-radius": "0px",
        ":focus": {
          "background-color": "#c4d1e4"
        },
        "font-weight": "normal"
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#dae8fd",
        "color": "#141414",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "padding-left": "70px",
        "padding-right": "70px",
        ":hover": {
          "background-color": "#c4d1e4",
          "color": "#141414"
        },
        "border-radius": "0px",
        ":focus": {
          "background-color": "#c4d1e4"
        },
        "font-weight": "normal"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#dae8fd",
        ":hover": {
          "background-color": "#c4d1e4"
        },
        ":focus": {
          "background-color": "#c4d1e4"
        },
        "font-weight": "normal"
      },
      "count": {
        "font-size": "13px",
        "color": "#141414",
        ":hover": {
          "color": "#141414"
        }
      },
      "iconPath": {
        "fill": "#141414"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>
<div class="priceInfo">
  <a id="productDescription">DESCRIPTION</a>
  &nbsp;
  <a id="shippingInfo">SHIPPING & RETURN</a>
  <br>
  <div id="detailInfopriceInfo">
</div>
</div>


</div>

<div class="bottomContent" style="margin-left: 100px; margin-top:100px;" id="bottomContent">
  <hr class="divisionLine">
  <div class="emailSubContent">
    <div class="leftBottom">
      <h4 class="lang" key="newsletter">NEWSLETTER</h4>
      <form class="" action="\" method="post" name="emailSubscription" id="emailSubscribeForm">
        <div class="emailSubscription" id="emailSubscription">
          <input type="text" name="emailAddress" value="" id="emailSub">
          <label id="emailLabel" class="lang" key="email">EMAIL</label>
          <h5 id="notValidEmail" class="lang" key="invalidEmail">Please enter a valid email address.</h5>
          <div class="emailFormOther" id="emailFormOther">
          <div class="checkbox">
        <input type="checkbox" id="checkbox_1">
        <label for="checkbox_1" id="agreementEmailSub">I have read, understood and agree to the  <a href="privacypolicy">Privacy Policy</a> and the  <br> <a>Terms of Use</a></label>
            </div>
        <div class="submitForm">
               <input type="submit" name="submitEmailSub" value="REGISTER" id="submitEmail"  disabled>
               <label for="submitEmail" id="submitEmailLabel" class="lang" key="register">REGISTER</label>
        </div>
          </div>
        </div>
          <h3 id="thankSubscription" class="lang" key="thankSubscription">Thank you for your registration.</h3>
      </form>


      <?php
      if(isset($_POST['emailAddress'])){
        $emailAddress = $_POST['emailAddress'];
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO Email_Subscription".
        " (Email_Address, Starting_Date, Email_Sent_Count,Last_Email_ID)".
        "VALUES ('$emailAddress', current_timestamp, 1,0)";
        $retval = mysqli_query( $conn, $sql );
        //ignore any mysqli error, the error can only be duplicate
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
          <td><a href="contact" class="lang" key="contactBtm">Contact</a></td>
          <td><a href="https://www.instagram.com/puray.ca/">Instagram</a></td>
          <td><span class="lang" key="languagePref">Language</span> &nbsp;&nbsp;
<div class="languageSelector">
  <a id="EN">EN</a> / <a id="FR">FR</a> / <a id="CN">CN</a>
</div>
</td>
        </tr>
        <tr>
          <td><a href="wechat" class="lang" key="wechat">Wechat</a></td>
          <td><a href="#">LinkedIn</a></td>
          <td><a href="https://www.facebook.com/puraybeauty">Facebook</a></td>
        </tr>
      </table>
    </div>

  </div>

  <div class="footerContent">
    <h5 id="purayLogoFooter">PURAY</h5>
    <li style="text-align: center; list-style: none; margin-top:-42px; margin-left:-80px;">
  <a id="terms" href="termsAndconditions" class="lang" key="T&C">Terms & Conditions</a>
</li>
  </div>

</div>
</div>
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/utility.js"></script>
<script type="text/javascript" src="static/js/cookieHandler.js"></script>
<script type="text/javascript">
//document.getElementById("accountBtn").innerText = "<?php echo  $validSession ?>";
</script>
<script type="text/javascript" src="static/js/languageHandler.js"></script>
<script src='static/js/jquery.elevatezoom.js'></script>
<script type="text/javascript" src="static/js/purayIUtility.js"></script>
<script type="text/javascript">
      //alert(shoppingCartValue);
      //var res = eval(shoppingCartValue)(1);
      //console.log(typeof eval(shoppingCartValue));
      //console.log(shoppingCartValue);
       //document.getElementById("shoppingCart").innerText = shoppingCartValue;

</script>
<script src='static/js/jquery-1.8.3.min.js'></script>
</body>
<div id="detailInfopriceInfoHidden" style="display:NONE">
  <p>Puray I is a unique combination of Hydrogen Water Spray and Moisture Detector.</p>
  <p>The diffuser’s micro-fine hydrogen water activates your skin to repair its problems without any chemicals, including dryness.</p>
  <p>To see the progress in hydration improvement, Puray I uses the newest Artificial Intelligence Moisture Detector.</p>
  <p>To view the full description, please <a href="#" style="color:grey">click here</a>.</p>
</div>
</html>
