<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';  //change path as needed

$fb = new \Facebook\Facebook([
    'app_id' => '170440830274845',
    'app_secret' => '3cd1a8a3855ab54040379c0ab4a4b8e7',
    'default_graph_version' => 'v2.10',
//  'default_access_token' => '{access-token}', //optional
]);

//Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
$helper = $fb->getRedirectLoginHelper();
//  $helper = $fb->getJavaScriptHelper();
//  $helper = $fb->getCanvasHelper();
//  $helper = $fb->getPageTableHelper();
