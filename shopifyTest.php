<?php
  //Modify these
  require_once('config.php');
  $API_KEY = 'babcf268aa565282c961e1dd12167556';
  $SECRET = 'e99534dbfa6430a0f0a2e4e632952afe';
  $TOKEN = 'fb679dbb4b8b82e745fee60828f13346';
  $STORE_URL = 'puray.myshopify.com';
  $PRODUCT_ID = '1345338474568';
  $get_UserInfo = "SELECT * FROM CLIENT_ACCOUNT WHERE `ClientID` = 17";
  $userInfo = mysqli_query($conn, $get_UserInfo);
  while($row = mysqli_fetch_assoc($userInfo)) {
    $shopifyClientID = $row['ShopifyClientID'];
  }
  print "shopify id is ".$shopifyClientID.'\n' ;
  $customer_array = array(
                  'customer' => array(
                      'id' => $shopifyClientID,
                      'first_name' => "Feiran",
                      'last_name' =>"Hu",
                      "email" =>  "devmail@puray.ca",
                      'phone' => "+16479490397",
                  )
                );
  $url = 'https://' . $API_KEY . ':' . "43216a38da38ea7009b702f4b779204b" . '@' . $STORE_URL . '/admin/customers/'.(string)($shopifyClientID).'.json';
  print "url is ".$url;
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "PUT");                //0 for a get request
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($customer_array));
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
  curl_setopt($ch,CURLOPT_TIMEOUT, 20);
  $response = curl_exec($ch);
  print $response;


  //$product_xml = new SimpleXMLElement($response);
  //echo $product_xml->asXML('blog.xml');
  //echo $product_xml->title;
  //echo $product_xml->variants->variant[0]->{'inventory-quantity'};
//post account log in ;



?>
