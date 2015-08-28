<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('partials.css.styles')

  </head>

  <body>
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay10" style="font-weight:bold">
				<span class="text-success">Dash</span> <span style="color:#ccc; text-shadow:0 1px #fff">Board</span>
			</h2>
	    </div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-plus-circle fa-lg"></i> Sign up
				</div>
				<div class="panel-body">
					<form class="form-login">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
						</div><!-- /form-group -->
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay3">
						</div><!-- /form-group -->
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="text" placeholder="Confirm password" class="form-control input-sm bounceIn animation-delay4">
						</div><!-- /form-group -->
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" placeholder="Email address" class="form-control input-sm bounceIn animation-delay5">
						</div><!-- /form-group -->
						<div class="form-group">
							<label class="label-checkbox">
								 <input type="checkbox"/>
								 <span class="custom-checkbox info bounceIn animation-delay6"></span>
								 I accept the agreement.
							</label>
						</div><!-- /form-group -->

						<div class="seperator"></div>
						<div class="form-group">
							<div class="controls">
								Already have an account? <a href="{{ URL::to('login') }}" class="primary-font login-link">Sign In</a>
							</div>
						</div><!-- /form-group -->
							
						<hr/>
						<div class="form-group">
							<div class="controls text-right">
								<a class="btn btn-success btn-sm bounceIn animation-delay7 login-link" href="{{ URL::to('login') }}"><i class="fa fa-plus-circle"></i> Sign up</a>
							</div>
						</div><!-- /form-group -->
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    @include('partials.js.scripts')

    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
