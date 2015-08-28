@extends('frontend.layouts.master')

@section('content')
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="fa fa-ellipsis-h"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div aria-expanded="false" class="collapse navbar-collapse" id="subnav">
                <ul class="nav navbar-nav ">
                  <li><a href="{{ URL::to('/') }}"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a></li>
                  <li><a href="{{ URL::to('/about') }}"><i class="fa fa-fw icon-user-1"></i> About</a></li>
                  <li class="active"><a href="{{ URL::to('/friends') }}"><i class="fa fa-fw fa-users"></i> Friends</a></li>
                </ul>
                <ul class="nav navbar-nav hidden-xs navbar-right ">
                  <li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>

          </nav>
          <div class="cover overlay cover-image-full height-300-lg">

            <img style="width: 1340px; height: 503px;" src="assets/img/profile-cover.jpg" alt="cover">
            <div class="overlay overlay-full">
              <div class="v-top">
                <a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
          </div>

          <div class="container-fluid">

            <div id="filter">
              <form class="form-inline">
                <label>Filter:</label>
                <select style="display: none;" name="users-filter" id="users-filter-select" class="selectpicker" data-style="btn-primary" data-width="auto">
                  <option selected="selected" value="all">All</option>
                  <option value="friends">Friends of Friends</option>
                  <option value="name">by Name</option>
                </select><div style="width: 158px;" class="btn-group bootstrap-select"><button title="All" data-id="users-filter-select" type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div style="min-width: 0px;" class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li class="selected" data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;" data-tokens="null"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Friends of Friends&lt;/span&gt;" data-tokens="null"><span class="text">Friends of Friends</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;by Name&lt;/span&gt;" data-tokens="null"><span class="text">by Name</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                <div id="users-filter-trigger">
                  <div class="select-friends hidden">
                    <select style="display: none;" name="users-filter-friends" class="selectpicker" data-style="btn-primary" data-live-search="true">
                      <option selected="selected" value="0">Select Friend</option>
                      <option value="1">Mary D.</option>
                      <option value="2">Michelle S.</option>
                      <option value="3">Adrian Demian</option>
                    </select><div style="width: 100%;" class="btn-group bootstrap-select"><button title="Select Friend" type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown"><span class="filter-option pull-left">Select Friend</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input class="form-control" autocomplete="off" type="text"></div><ul class="dropdown-menu inner" role="menu"><li class="selected" data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Select Friend&lt;/span&gt;" data-tokens="null"><span class="text">Select Friend</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Mary D.&lt;/span&gt;" data-tokens="null"><span class="text">Mary D.</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Michelle S.&lt;/span&gt;" data-tokens="null"><span class="text">Michelle S.</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Adrian Demian&lt;/span&gt;" data-tokens="null"><span class="text">Adrian Demian</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                  </div>
                  <div class="search-name hidden">
                    <input class="form-control" name="user-first" placeholder="First Last Name" id="name" type="text">
                    <a href="#" class="btn btn-default hidden" id="user-search-name"><i class="fa fa-search"></i> Search</a>
                  </div>

                </div>
              </form>
            </div>

            <div style="position: relative; height: 775.701px;" class="row" data-toggle="isotope">
              <div style="position: absolute; left: 0px; top: 0px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-3_002.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-9.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-1.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-1.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-5_002.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 441px; top: 0px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-8.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-4_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-4_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-5_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-5_002.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 883px; top: 0px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-3_002.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-8.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-8.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-1.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-2.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 0px; top: 258px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-8.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-1.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-7.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-5_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-4.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 441px; top: 258px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-2.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-5.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-9.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-8_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-1.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 883px; top: 258px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-5.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-4_002.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-9.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-2.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-6.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div style="position: absolute; left: 0px; top: 517px;" class="col-md-6 col-lg-4 item">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="assets/img/guy-4_002.jpg" alt="people" class="media-object img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="assets/img/guy-8.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/guy-6.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-6.jpg" alt="people" class="img-circle">
                      </a>
                      <a href="#">
                        <img src="assets/img/woman-6.jpg" alt="people" class="img-circle">
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->
@endsection