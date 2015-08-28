<div class="container-fluid">
    <div class="navbar-header">
        <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
        <a class="navbar-brand" href="{{ URL::to('/') }}"> H U B Social</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/') }}"> Dashboard </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Public User Pages</li>
                    <li class="active"><a href="{{ URL::to('/') }}">Timeline</a>
                    </li>
                    <li><a href="{{ URL::to('/about') }}">About</a>
                    </li>
                    <li><a href="{{ URL::to('/friends') }}">Friends</a>
                    </li>
                    <li class="dropdown-header">Private User Pages</li>
                    <li><a href="{{ URL::to('/messages') }}">Messages</a>
                    </li>
                    <li><a href="{{ URL::to('/profile') }}">Profile</a>
                    </li>
                    <li><a href="{{ URL::to('/timeline') }}">Timeline</a>
                    </li>
                    <li><a href="{{ URL::to('/friends') }}">Friends</a>
                    </li>
                </ul>
            </li>
            <!-- <li><a href="{{ URL::to('/') }}essential-buttons.html">UI Components</a>
            </li>
            <li class="hidden-sm" data-toggle="tooltip" data-placement="bottom" title="A few Color Examples. Download includes CSS Files for all color examples &amp; the tools to Generate any Color combination. This Color-Switcher is for previewing purposes only.">
                <ul class="skins">

                    <li><span data-file="app/app" data-skin="default" style="background: #16ae9f "></span>
                    </li>

                    <li><span data-file="skin-orange" data-skin="orange" style="background: #e74c3c "></span>
                    </li>

                    <li><span data-file="skin-blue" data-skin="blue" style="background: #4687ce "></span>
                    </li>

                    <li><span data-file="skin-purple" data-skin="purple" style="background: #af86b9 "></span>
                    </li>

                    <li><span data-file="skin-brown" data-skin="brown" style="background: #c3a961 "></span>
                    </li>

                    <li><span data-file="skin-default-nav-inverse" data-skin="default-nav-inverse" style="background: #242424 "></span>
                    </li>

                </ul>
            </li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">
                    <i class="fa fa-comments" style="line-height: 3.4em !important;"></i>
                </a>
            </li>
            <!-- User -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                    <img src="assets/img/guy-5.jpg" alt="Bill" class="img-circle" width="40"> Adrian <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ URL::to('#/auth/profile') }}user-private-profile.html">Profile</a>
                    </li>
                    <li><a href="{{ URL::to('#/auth/messages') }}user-private-messages.html">Messages</a>
                    </li>
                    <li><a href="{{ URL::to('/auth/logout') }}">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- search -->
        <div class="search-1">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-search"></i></span>
                <input type="text" class="form-control" placeholder="Search a friend">
            </div>
        </div>
        <!-- /search -->
    </div>
    <!-- /.navbar-collapse -->
</div>
