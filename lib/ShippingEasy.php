<?php

// Tested on PHP 5.2, 5.3

// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('ShippingEasy needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('ShippingEasy needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('ShippingEasy needs the Multibyte String PHP extension.');
}

require(__DIR__ . '/ShippingEasy/ShippingEasy.php');

// Errors
require(__DIR__ . '/ShippingEasy/Error.php');
require(__DIR__ . '/ShippingEasy/ApiError.php');
require(__DIR__ . '/ShippingEasy/ApiConnectionError.php');
require(__DIR__ . '/ShippingEasy/AuthenticationError.php');
require(__DIR__ . '/ShippingEasy/InvalidRequestError.php');

require(__DIR__ . '/ShippingEasy/ApiRequestor.php');
require(__DIR__ . '/ShippingEasy/Authenticator.php');
require(__DIR__ . '/ShippingEasy/Object.php');
require(__DIR__ . '/ShippingEasy/Order.php');
require(__DIR__ . '/ShippingEasy/PartnerSession.php');
require(__DIR__ . '/ShippingEasy/PartnerAccount.php');
require(__DIR__ . '/ShippingEasy/Signature.php');
require(__DIR__ . '/ShippingEasy/SignedUrl.php');
require(__DIR__ . '/ShippingEasy/Cancellation.php');