<?php
// This line loads the library
require '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Token at twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";

// Initialize the client
$client = new Client($sid, $token);

// Delete the message
$message = $client->ipMessaging
    ->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
    ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
    ->messages("IMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
    ->update(
        array("body" => "New message text")
    );

echo $message->body;
