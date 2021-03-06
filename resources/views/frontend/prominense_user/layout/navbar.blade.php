<nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#galleryNavigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Dashboard</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="galleryNavigation">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{URL::to('dashboard')}}">Home</a></li>
            <li><a href="{{ URL::to('profile') }}">Profile</a></li>
            <li><a href="{{ URL::to('timeline') }}">Timeline</a></li>
            <li><a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade">Messages</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                <ul class="dropdown-menu flipInV" role="menu">
                    <li><a href="{{URL::to('#/user/privacy-settings')}}">Privacy Settings</a></li>
                    <li><a href="{{URL::to('#/')}}">Account Details</a></li>
                    <li><a href="{{URL::to('#/')}}">Security</a></li>
                    <li><a href="{{URL::to('#/')}}">Payments</a></li>
                    <!-- <li role="presentation" class="dropdown-header">Settings</li>
                    <li><a href="{{URL::to('/')}}">Settings</a></li>
                    <li><a href="{{URL::to('/')}}">Settings</a></li>
                    <li><a href="{{URL::to('/')}}">Settings</a></li> -->
                </ul>
            </li>
            
        </ul>
        <ul class="nav navbar-nav" style="float: right !important;">
            <li><a id="showLeft" href="#"><i class="fa fa-search fa-lg"></i></a></li>
            <li><a id="showRightPush" href="#"><i class="fa fa-comment fa-lg"></i></a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
	
    <!-- Chat Popup Modal -->
    
    <div id="myModal" class="reveal-modal">
	<iframe src="https://enterphace.com/PlaceTimeNowVideoChatApps3jskyzjpr/cometchat_popout.php"></iframe>
	<a class="close-reveal-modal">&#215;</a>
   </div>
    
</nav>
