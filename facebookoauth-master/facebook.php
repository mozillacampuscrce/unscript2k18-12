<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>
</head>
<body>
    <script type="text/javascript">
        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))   {return;}
            js = d.createElement(s);    js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        var accessToken = '';

        // This is called with the results from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('status changed');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected')    {
                // Logged into your app and Facebook
                accessToken = response.accessToken;
                testAPI();
            }   else    {
                // The person is not logged into your app or we are unable to tell.
                document.getElementById('status').innerHTML = 'Please log into this app';
            }
        }

        // This function is called when someone finishes with the Login
        // Button. See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function() {
            FB.init({
                appId               :   '170440830274845',
                autoLogAppEvents    :   true,   // enable cookies to allow the server to access the session
                xfbml               :   true,   // parse social plugins on this page
                version             :   'v2.12' // use graph api version 2.8
            });

            // Now that we've initialized the JavaScript SDK, we call
            // FB.getLoginStatus(). This function gets the state of the
            // person visiting this page and can return one of the three states to
            // the callback you provide. They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //      your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function(response)    {
                statusChangeCallback(response);
            });
        };

        FB.getLoginStatus(function(response)    {
            if (response.status === 'connected')    {
                console.log("Logged in");
            }   else    {
                FB.login();
            }
        });

        // Here we run a very simple test of the Graph API after login is
        // successful. See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome! Fetching your information...');
            FP.api('/me', function (response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
            });
        }

        // Making a GraphRequest
        GraphRequest request = GraphRequest.newMeRequest(
            accessToken,
            new GraphRequest.GraphJSONObjectCallback()  {
                
        }
        )
    </script>

    <!--
        Below we include the Login Button social plugin. This button uses
        the Javascript SDK to present a graphical Login button that triggers
        the FB.login() function when clicked.
    -->

    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    <div id="status"></div>
</body>
</html>