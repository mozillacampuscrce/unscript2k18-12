<?php

    session_start();
    require "autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
    $api_key = "P1vQFx2LJUiN0qO4U9RPeSR4Z";
    $api_secret = "6H73r7pqQyypTZhJgmwE5hnRT1TTacBWGdscgOI4KCNtVlNWdN";
    $access_token = "1974079902-DvR0Dg4VbO9qhWgMzslC3t20PC7hyQ9BbsYqxE8";
    $access_secret = "XgMeqYWgPpDCetvd5Hhwr1EwjrYd9EU5AfeSQfdEzdvZc";

    $connection = new TwitterOAuth($api_key, $api_secret, $access_token, $access_secret);
    $content = $connection->get("account/verify_credentials");

    //Get tweets
    //$statuses = $connection->get("statuses/mentions_timeline", ["count" => 2, "since_id" => 14927799]);
    //$list = $connection->get("favourites/list", ["count" => 10]);

    //$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=twitterapi&count=2");
    //$tweets = $connection->get("statuses/user_timeline", ["screen_name" => "twitterapi", "count" => 2]);
    //$trends = $connection->get("trends/available");
    $home_timeine = $connection->get("statuses/home_timeline");

    //print_r($home_timeine);

    foreach ($home_timeine as $tweet)   {
        if ($tweet->user->favourites_count > 10) {
            $id = $tweet->id;
            $embed = $connection->get("statuses/oembed", ["id" => $id]);
            echo $embed->html;
        }
    }
