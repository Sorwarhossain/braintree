<?php 

// autolaoding the packages
require "vendor/autoload.php";

$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'y9jk6gxxkt964j9n',
    'publicKey' => '4r5stz68yhb8vxy9',
    'privateKey' => '0788ad76cf5da0d7b0d6fc1066a9bd05'
]);