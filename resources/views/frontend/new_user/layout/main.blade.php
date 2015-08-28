<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- reserved for Chat App -->
    
    <!-- end of Chat app css js -->
    <meta charset="utf-8">
    <title>Dashboard | Enterphace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- twitter meta -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nytimesbits" />
    <meta name="twitter:creator" content="@nickbilton" />
    <meta property="og:url" content="http://bits.blogs.nytimes.com/2011/12/08/a-twitter-for-my-sister/" />
    <meta property="og:title" content="A Twitter for My Sister" />
    <meta property="og:description" content="In the early days, Twitter grew so quickly that it was almost impossible to add new features because engineers spent their time trying to keep the rocket ship from stalling." />
    <meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />

    @include('frontend.new_user.partials.css.styles')

    <style type="text/css" id="holderjs-style"></style>
	
    <!-- for chat popup -->
    <!-- Attach our CSS -->
    <link rel="stylesheet" href="/assets/reveal/reveal.css">	
    <!-- Attach necessary scripts -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="/assets/reveal/jquery.reveal.js"></script>

  </head>

  <body class="overflow-hidden">
    <script>window.twttr = (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
      if (d.getElementById(id)) return t;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
     
      t._e = [];
      t.ready = function(f) {
        t._e.push(f);
      };
     
      return t;
    }(document, "script", "twitter-wjs"));</script>

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
      //getUserPicture();
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
      console.log(response);
      //console.log('Successful login for: ' + response.name);
      //document.getElementById('status').innerHTML =
      //  'Thanks for logging in, ' + response.name + '!';
      var userID = response.id;
      getUserPicture(userID);
      getUserBio(userID);
    });
  }

  function getUserPicture(userID) {
    /* make the API call */
    FB.api(
        "/"+ userID +"/picture",
        function (response) {
          if (response && !response.error) {
            /* handle the result */
            $('img#user_avatar').attr('src',response.data.url);
            $('img#user_profile_avatar').attr('src',response.data.url);
          }
          else{
            var img_src = '{{ asset('assets/new_user/assets/img/user.jpg') }}';
            $('img#user_avatar').attr('src',img_src);
            $('img#user_profile_avatar').attr('src',img_src);
          }
        }
    );
  }

  function getUserBio(userID) {
    /* make the API call */
    FB.api(
        "/"+ userID +"/about",
        function (response) {
          if (response && !response.error) {
            /* handle the result */
            console.log(response);
            $('p#user_bio').html(response.data.url);
          }
          else{
            $('p#user_bio').html('No Data');
          }
        }
    );
  }
</script>
  
    <!-- Overlay Div -->
    <div id="overlay" class="transparent"></div>
    <!-- /Overlay Div -->

    <!-- wrapper -->
    <div id="wrapper" class="preload sidebar-mini">
        
        @include('frontend.new_user.partials.iconbar')

        @include('frontend.new_user.layout.sidebar')

        <div id="main-container">
            <div class="padding-sm">
                @include('frontend.new_user.layout.navbar')
                
                @yield('content')
            </div><!-- /.padding-sm -->
        </div><!-- /main-container -->

        <footer class="dark">
            @include('frontend.new_user.layout.footer')
        </footer>

    </div>
    <!-- /wrapper -->

    <a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
    <!-- Modal -->
    @include('frontend.new_user.partials.create')
    <!-- Modal -->

    <!-- Logout confirmation -->

    @include('frontend.new_user.auth.logout')

    <!-- /Logout confirmation -->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    @include('frontend.new_user.partials.js.scripts')

    <!-- /Le javascript
    ================================================== -->
    <!-- /Placed at the end of the document so the pages load faster -->

    <!-- cboxdiv -->

    @include('frontend.new_user.partials.cboxdiv')

    <!-- /cboxdiv -->
   	<div style="visibility: hidden">
		$json = file_get_contents('https://graph.facebook.com/me');
		$detailObj = json_decode($json);
		var_dump($detailObj);
	</div>
  </body>
</html>

