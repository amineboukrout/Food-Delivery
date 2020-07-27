<?php
require 'PayPal-PHP-SDK-1.14.0/vendor/autoload.php';
define('SITE_URL', 'http://52.22.177.60/cart.php');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AUijqvtUz6OyZaOUV2uLMhEt8nwpqbpZ0WcgC0ZkB-qjXzKh01KLg-sRonRgrxoezPYo_SAkQy3xnCpI',
        'EPwXLMsDbP3exGqrODU3hrWu0VhecjucxBLgeBhLVxwYPDBe_ra4vB53PVr104z_nLJGG4IYBa5cwlwH'
    )
);