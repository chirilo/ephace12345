<aside class="fixed skin-6">    
    <div class="sidebar-inner scrollable-sidebar">
        <div class="size-toggle">
            <a class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="btn btn-sm pull-right logoutConfirm_open"  href="auth/logout">
                <i class="fa fa-power-off"></i>
            </a>
        </div><!-- /size-toggle --> 
        <div class="user-block clearfix">
		<img id="user_avatar" src="" alt="User Avatar">
            <div class="detail">
                <strong>{{ Auth::user()->name }}</strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs">4</span>
                <ul class="list-inline">
                    <li><a href="{{ URL::to('timeline') }}">Profile</a></li>
                    <li><a href="http://enterphace.com/PlaceTimeNowVideoChatApps3jskyzjpr/cometchat_popout.php" target="_blank" class="no-margin">Inbox</a></li>
                </ul>
            </div>
        </div><!-- /user-block -->
        <div class="search-block">
            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="search here...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /search-block -->
        <div class="main-menu">
            <ul>
                <li class="active">
                    <a href="{{URL::to('dashboard')}}">
                        <span class="menu-icon">
                            <i class="fa fa-desktop fa-lg"></i> 
                        </span>
                        <span class="text">
                            Dashboard
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('profile') }}">
                        <span class="menu-icon">
                            <i class="fa fa-file-text fa-lg"></i> 
                        </span>
                        <span class="text">
                            Profile
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('timeline') }}">
                        <span class="menu-icon">
                            <i class="fa fa-clock-o fa-lg"></i> 
                        </span>
                        <span class="text">
                            Timeline
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('photos')}}">
                        <span class="menu-icon">
                            <i class="fa fa-picture-o fa-lg"></i> 
                        </span>
                        <span class="text">
                            Gallery
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('messages')}}">
                        <span class="menu-icon">
                            <i class="fa fa-envelope fa-lg"></i> 
                        </span>
                        <span class="text">
                            Inbox
                        </span>
                        <span class="badge badge-danger bounceIn animation-delay6">4</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li class="openable">
                    <a href="#">
                        <span class="menu-icon">
                            <i class="fa fa-magic fa-lg"></i> 
                        </span>
                        <span class="text">
                            Multi-Level menu
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li class="openable">
                            <a href="#">
                                <span class="submenu-label">menu 2.1</span>
                                <span class="badge badge-danger bounceIn animation-delay1 pull-right">3</span>
                            </a>
                            <ul class="submenu third-level">
                                <li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
                                <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                <li class="openable">
                                    <a href="#">
                                        <span class="submenu-label">menu 3.3</span>
                                        <span class="badge badge-danger bounceIn animation-delay1 pull-right">2</span>
                                    </a>
                                    <ul class="submenu fourth-level">
                                        <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                        <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="openable">
                            <a href="#">
                                <span class="submenu-label">menu 2.2</span>
                                <span class="badge badge-success bounceIn animation-delay2 pull-right">3</span>
                            </a>
                            <ul class="submenu third-level">
                                <li class="openable">
                                    <a href="#">
                                        <span class="submenu-label">menu 3.1</span>
                                        <span class="badge badge-success bounceIn animation-delay1 pull-right">2</span>
                                    </a>
                                    <ul class="submenu fourth-level">
                                        <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                        <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                <li><a href="#"><span class="submenu-label">menu 3.3</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner scrollable-sidebar -->
</aside>
