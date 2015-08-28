@extends('frontend.layouts.master')

@section('content')
	<div style="display: none;" class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-home"></i> Home</div>

				<div class="panel-body">
					Welcome to {{app_name()}}
				</div>
			</div><!-- panel -->

		</div><!-- col-md-10 -->

		@role('Administrator')
		    <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>

                    <div class="panel-body">
                        You can see this because you have the role of 'Administrator'!
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
		@endrole

	</div><!-- row -->

	<!-- CONTENT -->

    <header style="display: none;">
    <div class="wrap">

        <div class="logo">
            <a href="/"></a>
        </div>

        <ul class="nav">
            <li><a href="tour.html">Tour</a>
            </li>
            <li><a href="#cases">Use cases</a>
            </li>
            <li><a href="#" class="show-sign-up">Register</a>
            </li>
            <li class="login"><a href="auth/login">Sign In</a>
            </li>
        </ul>

    </div>
</header>

<div class="home video-bg" id="home">

    <div class="video-container">
        <video autoplay muted loop>
            <source src="Public/landing-b/enterphace_landing.webm" type="video/webm">
                <source src="Public/landing-b/enterphace_landing.mp4" type="video/mp4">
        </video>
    </div>

    <div class="wrap">

        <h2>#1 Visual organizing tool</h2>
        <p>Collate Social profiles, plan schedules, watch videos and read messages , all inside a single place.</p>

        <div class="controls">
            <button class="blue show-sign-up">Get started</button>
        </div>

        <div class="more">
            <a href="#features"></a>
        </div>

    </div>
</div>

<div class="features" id="features">
    <div class="wrap">

        <ul class="features-list">
            <li class="feature">
                <h2 class="feature-title"><span>Gather social profiles with ease</span></h2>
                <span class="description">Come across something you love? Simply click it. Yep, that’s about it. One click and it’s a done deal.</span>
            </li>
            <li class="feature">
                <h2 class="feature-title"><span>Meet exciting people</span></h2>
                <span class="description">You can share your folder with anyone on your team — they instantly get to see all items being added in real time. Supporting one another’s creativity can be simple as that.</span>
            </li>
            <li class="feature">
                <h2 class="feature-title"><span>Keep things private</span></h2>
                <span class="description">No one can see stuff you collect to your folder. But hey, if you want to share it it’s as easy as copy-pasting a link.</span>
            </li>
            <li class="feature">
                <h2 class="feature-title"><span>Access on any device</span></h2>
                <span class="description">You can access your content from literally anywhere. Simply head to enterphace.com, be it on your phone, tablet or your girlfriend’s laptop.</span>
            </li>
        </ul>

    </div>
</div>

<div class="cases clearfix" id="cases">

    <div class="wrap">

        <div class="visual">
            <img src="Public/images/landing_screen1.png" alt="Demo" />
        </div>

        <div class="info">
            <h2>How do I collect with Enterphace?</h2>
            <p>Enterphace is beautifully simple. When you come across an inspiration on the web that you want to keep, all you need to do is just drag&drop it to your Enterphace sidebar. It automatically pops every single time to start dragging something.</p>

            <div class="person">

                <div class="user-photo">
                    <a href="#" target="_blank">
                        <img src="Public/images/tweets_avatars/marrie.jpg">
                    </a>
                </div>

                <p>It’s one of not many tools that I actually use. Love how simple it is. I bookmark the sites I like, or objects that I come across online. So that later I could get back when I need my creativity to be flowing.
                    <br/><strong>Marrie Lafontt</strong>
                </p>



            </div>

        </div>

    </div>
</div>

<div class="cases light clearfix">

    <div class="wrap">

        <div class="visual">
            <img src="Public/images/landing_screen2.png" alt="Demo" />
        </div>

        <div class="info">
            <h2>All your inspirations in one place.</h2>
            <p>Stuff you’ve collected can be accessed at enterphace.com. It’s beautiful, easy to navigate and you can find things you’re looking for in a blink. Tag your content, add notes, share it with a team or rediscover webpages you dragged your inspirations from.</p>

            <div class="person">

                <div class="user-photo">
                    <a href="#" target="_blank">
                        <img src="Public/images/tweets_avatars/felix.jpg">
                    </a>
                </div>

                <p>I can be rather messy. Especially when it comes to my inspirations or sources. Enterphace is my simple answer to all of this. It’s sleek, simple and intuitive.
                    <br/><strong>Felix Patrat</strong>
                </p>



            </div>

        </div>

    </div>
</div>

<div class="cases clearfix">

    <div class="wrap">

        <div class="visual">
            <img src="Public/images/landing_screen3.png" alt="Demo" />
        </div>

        <div class="info">
            <h2>Perfect for creating mood boards</h2>
            <p>Looking to share a “mood” with one of your clients, colleagues or just a friend? Simply collect inspiration to your Enterphace and send them a short link. Quick & easy.</p>

            <div class="person">

                <div class="user-photo">
                    <a href="#" target="_blank">
                        <img src="Public/images/tweets_avatars/ludwig.jpg">
                    </a>
                </div>

                <p>My ‘photography’ folder is my go-to source of inspiration to kick-start any project I direct at the agency. Sometimes I find creative leads in there, sometimes it simply puts me in the right mind state. Otherwise, I create Enterphace folders for most of my main clients even if there a no projects in the pipeline - and I drag for later.
                    <br/><strong>Ludwig Ciupka</strong>
                </p>


            </div>

        </div>

    </div>
</div>

<div class="get-started light" id="get-started">
    <div class="wrap">

        <h2>Beautifully simple way to organize your inspirations</h2>
        <p>Forget messy desktop or scrolling through your folders for ages.
            <br/>Start using Enterphace now and focus on your creativity instead.</p>

        <div class="controls">
            <button class="blue show-sign-up">Try it out</button>
            <a class="button ghost next" href="#">Learn more</a>
        </div>

    </div>
</div>

<div class="footer clearfix" id="footer">
    <div class="wrap">

        <div class="social-share">
            <table>
                <tr>
                    <td>
                        <div class="fb-like" data-href="https://enterphace.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </td>
                    <td class="pp">
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script');
                                po.type = 'text/javascript';
                                po.async = true;
                                po.src = '../apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </td>
                    <td class="pp">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-related="enterphaceapp:Enterphace" data-text="Enterphace May Be The Best Organizing Tool Ever http://enterphace.com" data-via="dragdisapp" data-lang="en">Tweet</a>
                        <script>
                            ! function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "../platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");
                        </script>
                    </td>
                </tr>
            </table>
        </div>

        <div class="footer-menu">
            <ul class="menu">
                <li class="menu-item"><a href="#!about.html">About Enterphace</a>
                </li>
                <li class="menu-item"><a href="#!privacy_policy.html">Privacy &amp; Terms</a>
                </li>
                <li class="menu-item"><a href="#!terms_of_service.html">Terms of service</a>
                </li>
                <li class="menu-item"><a href="#!press.html">Press</a>
                </li>
                <li class="menu-item"><a href="#!pricing.html">Pricing</a>
                </li>
                <li class="menu-item"><a href="#!contact.html">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</div>

<div id="sign-up" class="sign-up modal hidden">
    <div class="container">
        <div class="inner">

            <h1>Start using Enterphace</h1>

            <!-- Social register -->
            {!! Form::open(['url' => 'auth/login', 'class' => 'social_login', 'role' => 'form', 'id' => 'externalLogin']) !!}
                <input name="token" type="hidden" value="{{ csrf_token() }}" />
                <input id="provider" name="provider" type="hidden" value="" />
                <ul class="social">

                    <li class="facebook">
                        <button value="facebook">
                            {!! link_to_route('auth.provider', 'Login with Facebook', 'facebook') !!}
                        </button>
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

            <!-- Email register -->
            {!! Form::open(['url' => 'auth/register', 'class' => 'email', 'role' => 'form']) !!}
                <input name="token" type="hidden" value="{{ csrf_token() }}" />
                <fieldset>
                    <input data-val="true" data-val-regex="Enter valid username" data-val-required="The User name field is required." id="Username" name="name" placeholder="Enter your name" type="text" value="" />
                </fieldset>
                <fieldset>
                    <input data-val="true" data-val-regex="Enter valid e-mail" data-val-regex-pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" data-val-required="The Email field is required." id="Username" name="email" placeholder="Enter your email" type="text" value="" />
                </fieldset>
                <fieldset>
                    <input data-val="true" data-val-length="The Password must be at least 6 characters long." data-val-length-max="100" data-val-length-min="6" data-val-regex="Password contains unallowed characters" data-val-regex-pattern="^[^/]+$" data-val-required="The Password field is required." id="Password" name="password" placeholder="Enter password" type="password" />
                </fieldset>
                <fieldset>
                    <input data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" id="ConfirmPassword" name="password_confirmation" placeholder="Confirm password" type="password" />
                </fieldset>
                <div class="controls">

                    <fieldset>
                        <input checked="" data-val="true" data-val-required="The I agree to the terms and privacy policy field is required." id="check" name="AgreeTerms" type="checkbox" value="true" />
                        <input name="AgreeTerms" type="hidden" value="false" />

                        <label for="check">I agree to <a href="#!terms_of_service.html" target="_blank">the terms</a> and <a href="privacy_policy.html" target="_blank">privacy policy</a>.</label>
                    </fieldset>

                    <!-- <button>Register</button> -->
                    {!! Form::submit('Register') !!}

                    <p class="clearfix"></p>
                    <p class="link">Already have an account? <a href="auth/login">Log in</a>
                    </p>


                </div>
            </form>
            <div class="close"></div>
        </div>
    </div>
</div>

@endsection

@section('after-scripts-end')
	<script>
		//Being injected from FrontendController
		console.log(test);
	</script>
@stop