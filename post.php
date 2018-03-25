<?php
session_start();
require_once 'twitteroauth-master/config.php';
require_once 'facebookoauth-master/config.php';
$redirectURL = "https://65076766.ngrok.io/twitter/facebookoauth-master/facebook-post-callback.php";
$permission = ['email','publish_actions'];
$loginURL = $helper->getLoginUrl($redirectURL, $permission);
include "post_all.php";
?>
<html>
<head>
    <title>Contact Form Tutorial by Bootstrapious.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">

            <h1 class="media-heading" align="center" style="margin-top: 75px">BeeSocial</h1>



            <form id="contact-form" method="post" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_name">Post Title *</label>
                                <input id="form_name" type="text" name="post_title" class="form-control" placeholder="Please enter your post title *" required="required" data-error="Title is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Post Description *</label>
                                <textarea id="form_message" name="post_description" class="form-control" placeholder="Describe your post *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_email">Image Url</label>
                                <input id="form_email" type="text" name="image_url" class="form-control" placeholder="Please enter the image url " data-error="Valid url is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                        <div class="col-md-12" >
                            <input type="submit" class="btn btn-success btn-send" value="Post on Twitter and Facebook" name="submit">
                        </div>
                    </div>
                </div>

            </form>

        </div><!-- /.8 -->

    </div> <!-- /.row-->

</div> <!-- /.container-->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
<script src="contact.js"></script>
</body>
</html>
