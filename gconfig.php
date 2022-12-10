<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('638737454953-rtabj1ka64u60cam6h8s5lk5ma2c6k1t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>