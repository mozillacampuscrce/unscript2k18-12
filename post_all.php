<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "beesocial";

$redirectURL = "https://65076766.ngrok.io/twitter/facebookoauth-master/fb-callback.php";
$permission = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permission);

// Create connection
$conn = mysqli_connect($servername, $username, $password);

function isValidURL( $url ) {
    // Regex pattern compliments of John Gruber.
    // URL: http://daringfireball.net/2010/07/improved_regex_for_matching_urls
    return preg_match("/(?i)\b((?:[a-z][\w-]+:(/>?://>{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/", $url);
}


// Check connection
if (mysqli_connect_error()) {
    die("Connection failed");
}

if (isset($_POST['submit']))    {


    $_SESSION['post_title'] = $_POST['post_title'];
    $_SESSION['post_description'] = $_POST['post_description'];
    $_SESSION['image_url'] = $_POST['image_url'];

    header("Location: " . $loginURL);
/*
    echo trim($image_url) . "<br>";
    echo filter_var($image_url, FILTER_VALIDATE_URL);*/
    /*if (isset(trim($image_url)) !== '' && isValidURL($image_url) !== false)    {
        echo 'invalid url';
    }   else{
        echo 'valid url';
    }*/


}