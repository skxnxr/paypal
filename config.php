<?php
    require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/paypal');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ARKqpfBZzMWscshkCyXI61WJcoMlG8L05wDfnY-Lx3QoJpUgFZdg35z464VUUdBGOaooCYtw2MmzoPPq', //ClienteID
        'EN0hP1vVBMW99dxxuaM4OSz1RCmg7E-WOkyg3BaZndDoH4Ram13hUYePM06pIP7nJqVPlpT_amjF-gXE' // Secret
    )
);

//var_dump($apiContext);

