<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_OrOEetEpJo4IS8vBGO1m3fQQ",
  "publishable_key" => "pk_test_GT96AK94eDQlBohVMKXCGHnZ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>