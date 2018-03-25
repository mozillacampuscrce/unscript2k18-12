<?php


require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$api_key = "P1vQFx2LJUiN0qO4U9RPeSR4Z";
$api_secret = "6H73r7pqQyypTZhJgmwE5hnRT1TTacBWGdscgOI4KCNtVlNWdN";
$access_token = "1974079902-DvR0Dg4VbO9qhWgMzslC3t20PC7hyQ9BbsYqxE8";
$access_secret = "XgMeqYWgPpDCetvd5Hhwr1EwjrYd9EU5AfeSQfdEzdvZc";

$connection = new TwitterOAuth($api_key, $api_secret, $access_token, $access_secret);
$content = $connection->get("account/verify_credentials");