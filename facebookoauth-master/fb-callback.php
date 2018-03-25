<?php
    require_once "config.php";
    try{
        $accessToken = $helper->getAccessToken();
    } catch(\Facebook\Exceptions\FacebookResponseException $e)  {
        echo "Response Exception : " . $e->getMessage();
        exit();
    } catch (\Facebook\Exceptions\FacebookSDKException $e)  {
        echo "SDK Exception : " . $e->getMessage();
        exit();
    }

    if (!$accessToken)  {
        header("Location: facebook.php");
        exit();
    }

    $oAuth2Client = $fb->getOAuth2Client();
    if (!$accessToken->isLongLived())   {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    }

    $response = $fb->get("/me/feed", $accessToken);
    $userData = json_decode($response->getGraphEdge(), true);
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;
    header('Location: index.php');
    exit();