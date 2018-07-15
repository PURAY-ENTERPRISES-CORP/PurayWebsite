<?php
  //Modify these
  $API_KEY = 'babcf268aa565282c961e1dd12167556';
  $SECRET = 'e99534dbfa6430a0f0a2e4e632952afe';
  $TOKEN = 'fb679dbb4b8b82e745fee60828f13346';
  $STORE_URL = 'puray.myshopify.com';
  $PRODUCT_ID = '1345338474568';

  //try to add one client
  $customer_array = array(
                  'customer' => array(
                      'first_name' => "Tony",
                      'last_name' =>"Figo",
                      "email" =>  "devmail123@puray.ca",
                      'phone' => '+16479490397',
                      "verified_email"=> true,
                      "password"=> "Init_1234",
                      "password_confirmation"=> "Init_1234",
                      "send_email_welcome"=> false,
                  )
                );
  $url = 'https://' . $API_KEY . ':' . "43216a38da38ea7009b702f4b779204b" . '@' . $STORE_URL . '/admin/customers.json';


  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($customer_array));
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
  curl_setopt($ch,CURLOPT_TIMEOUT, 20);
  $response = curl_exec($ch);
  print "curl response is:" . $response;
  curl_close ($ch);


  //$product_xml = new SimpleXMLElement($response);
  //echo $product_xml->asXML('blog.xml');
  //echo $product_xml->title;
  //echo $product_xml->variants->variant[0]->{'inventory-quantity'};
//post account log in ;

$customer_login_array = array(
                'customer' => array(
                    'email' => "devmail@puray.ca",
                    'password' =>"Init_1234",
                )
              );
  $url = 'https://' . $API_KEY . ':' . "43216a38da38ea7009b702f4b779204b" . '@' . $STORE_URL . '/account/login';
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($customer_login_array));
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
  curl_setopt($ch,CURLOPT_TIMEOUT, 20);
  $response = curl_exec($ch);
  print "curl response is:" . $response;
  curl_close ($ch);

?>
