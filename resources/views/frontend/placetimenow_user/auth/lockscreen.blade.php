<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Lockscreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('partials.css.styles')

  </head>

  <body class="  pace-done" style="background-color:#3a3a3a;">
  <div class="pace  pace-inactive">
  	<div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  		<div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div>
  </div>
	<!--<button class="btn btn-primary" data-toggle="modal" data-target="#lockScreen">Small modal</button>-->
  
	<!--Modal-->
	<!--<div id="lockScreen" class="well">
		<div class="lock-screen-img">
			<img src="/assets/img/user.jpg" alt="">
		</div>
		<button class="slidein_close btn btn-default">Close</button>
	</div>-->
	
	<!--Modal-->
		<div aria-hidden="false" class="modal fade lock-screen-wrapper in" id="lockScreen">
  			<div class="modal-dialog">
    			<div class="modal-content">
				    <div class="modal-body">
						<div class="lock-screen-img">
							<img src="/assets/img/user.jpg" alt="">
						</div>
						
						<div class="text-center m-top-sm">
							<div class="h4 text-white">{{ Auth::user()->name }}</div>
							
							<div class="input-group m-top-sm"> 
								<input class="form-control text-sm" placeholder="Enter your password" type="password"> 
								<span class="input-group-btn"> 
									<a class="btn btn-success" type="button" href="{{ URL::to('/') }}">
										<i class="fa fa-arrow-right"></i> 
									</a>
								</span> 
							</div>
						</div>
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    @include('partials.js.scripts')

   	<!-- Placed at the end of the document so the pages load faster -->
	
	<script>
		$(function()	{
			/*$('#lockScreen').popup({
				focusdelay: 300,
				outline: true,
				background: false,
				autoopen: true,
			});*/
			
			$('#lockScreen').modal({
				show: true,
				backdrop: 'static'
			})
		});
	</script>
  

		<div class="modal-backdrop fade in"></div>
	</body>
</html>