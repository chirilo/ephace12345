<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<title>Reveal Demo</title>
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="/assets/reveal/reveal.css">	
	  	
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="/assets/reveal/jquery.reveal.js"></script>
		
		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
		</style>
		
	</head>
	<body>

		<a href="#" class="big-link" data-reveal-id="myModal">
			Fade and Pop
		</a>	
		
		<a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade">
			Fade
		</a>
		
		<a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">
			None
		</a>

		<div id="myModal" class="reveal-modal">
			<h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
			
	</body>
</html>
