<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $amount  = $_POST['amount'];

if (isset($token) && isset($amount)){
 $customer = \Stripe\Customer::create(array(
      //'email' => 'customer@example.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $amount,
      'currency' => 'hkd'
  ));
}else{
 exit; 
}
?>