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

  </body>
</html>
