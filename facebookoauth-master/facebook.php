<?php

require_once "config.php";

$redirectURL = "https://65076766.ngrok.io/twitter/facebookoauth-master/fb-callback.php";
$permission = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permission);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form>
    <input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Log In With Facebook" class="btn btn-primary" style="margin: 50px">
</form>
</body>
</html>