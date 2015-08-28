<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Reserved for Chat App -->
    <!-- end of Reserved for Chat App -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>Login | @yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('author', 'Chi Rilo')">
    @yield('meta')

    @yield('before-styles-end')
    <link rel="stylesheet" href="{{ asset("css/settings.css") }}" type='text/css'>
    @yield('after-styles-end')

</head>


<body>
    <script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into Facebook.';
        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
      FB.init({
        appId      : '1636178003330549',
        cookie     : true,  // enable cookies to allow the server to access 
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.2' // use version 2.2
      });

      // Now that we've initialized the JavaScript SDK, we call 
      // FB.getLoginStatus().  This function gets the state of the
      // person visiting this page and can return one of three states to
      // the callback you provide.  They can be:
      //
      // 1. Logged into your app ('connected')
      // 2. Logged into Facebook, but not your app ('not_authorized')
      // 3. Not logged into Facebook and can't tell if they are logged into
      //    your app or not.
      //
      // These three cases are handled in the callback function.

      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });

      };

        // Only works after `FB.init` is called
        function myFacebookLogin() {
          FB.login(function(){}, {scope: 'publish_actions'});
        }

      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Here we run a very simple test of the Graph API after login is
      // successful.  See statusChangeCallback() for when this call is made.
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
	  window.location='http://enterphace.com/auth/login/facebook';
        });
      }
    </script>
    <main>
        <div class="container">
            <div class="inner">


                <h1>Welcome back</h1>

                {!! Form::open(['url' => '#', 'class' => 'social_login', 'role' => 'form', 'id' => 'externalLogin']) !!}

                    <input name="token" type="hidden" value="{{ csrf_token() }}" />
                    <ul class="social">

                        <li class="facebook">
                            <button onClick="myFacebookLogin();">Login to facebook</button>
                            <div id="status"></div>
                        </li>
                        <li class="twitter">
                            <button value="twitter">
                                {!! link_to_route('auth.provider', 'Login with Twitter', 'twitter') !!}
                            </button>
                        </li>
                        <li class="google">
                            <button value="google">
                                {!! link_to_route('auth.provider', 'Login with google', 'google') !!}
                            </button>
                        </li>
                    </ul>
                </form>

                {!! Form::open(['url' => 'auth/login', 'class' => 'login', 'role' => 'form']) !!}
                    <input name="token" type="hidden" value="{{ csrf_token() }}" />
                    <fieldset class="">
                        <input data-val="true" data-val-required="The Email field is required." id="Username" name="email" placeholder="Enter email" type="text" value="" />
                    </fieldset>
                    <fieldset class="">
                        <input data-val="true" data-val-required="The Password field is required." id="Password" name="password" placeholder="Enter password" type="password" />
                    </fieldset>
                    <fieldset class="forgot_password">
                        {!! link_to('password/email', 'Forgot Your Password?') !!}
                    </fieldset>
                    <div class="controls clearfix">


                        <fieldset>
                            <input checked="checked" data-val="true" data-val-required="The Remember me field is required." id="check" name="remember" type="checkbox" value="true" />
                            <input name="RememberMe" type="hidden" value="false" />
                            <label for="RememberMe">Remember me</label>
                        </fieldset>

                        <!-- <button class="silver">Login!</button> -->
                        {!! Form::submit('Login', ['class' => 'silver', 'style' => 'margin-right:15px']) !!}

                    </div>
                    <p class="link">Don't have an account? <a href="auth/register">Create here</a>
                    </p>
                {!! Form::close() !!}
            </div>
        </div>
    </main>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
    {!! HTML::script('js/vendor/bootstrap.min.js') !!}
    {!! HTML::script('bundles/landing.js') !!}
    {!! HTML::script('bundles/landingb.js') !!}
    @yield('before-scripts-end')
    {!! HTML::script(elixir('js/frontend.js')) !!}
    @yield('after-scripts-end')

    @include('includes.partials.ga')
</body>

</html>
