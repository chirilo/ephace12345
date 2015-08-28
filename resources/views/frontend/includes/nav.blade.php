	<header>
        <div class="wrap">
            
            <div class="logo">
                <a href="/"></a>
            </div>
            
            <ul class="nav">
                <?php /*<li><a href="tour.html">Tour</a></li>*/?>
                <!-- <li><a href="#cases">Use cases</a></li> -->
                @if (Auth::guest())
                	<li><a href="#cases">Use cases</a></li>
					<li>{!! link_to('auth/login', 'Sign In') !!}</li>
					<li><a href="#" class="show-sign-up">Register</a></li>
				@else
					<li class="dropdown">
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a> -->
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a></li>
						    <li>{!! link_to('dashboard', 'Dashboard') !!}</li>
						    <li>{!! link_to('auth/password/change', 'Change Password') !!}</li>
						    @permission('view_backend')
						        {{-- This can also be @role('Administrator') instead --}}
						        <li>{!! link_to_route('backend.dashboard', 'Administration') !!}</li>
						    @endpermission
							<li>{!! link_to('auth/logout', 'Logout') !!}</li>
						</ul>
					</li>
				@endif
            </ul>

        </div>
    </header>