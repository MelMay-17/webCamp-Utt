<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:8888/webcamp');

$apiContext = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
          '',  // ClienteID
          ''  // Secret
      )
);

