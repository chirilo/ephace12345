@extends('frontend.layouts.master')

@section('content')
<div style="display:none;" class="st-content">
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
                        <li class="active"><a href="{{ URL::to('/') }}"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                        </li>
                        <li><a href="{{ URL::to('/about') }}"><i class="fa fa-fw icon-user-1"></i> About</a>
                        </li>
                        <li><a href="{{ URL::to('/friends') }}"><i class="fa fa-fw fa-users"></i> Friends</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav hidden-xs navbar-right ">
                        <li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a>
                        </li>
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
            <div style="position: relative; height: 2030.83px;" class="timeline row" data-toggle="isotope">
                <div style="position: absolute; left: 0px; top: 0px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default share clearfix-xs">
                            <div class="panel-heading panel-heading-gray title">
                                What´s new
                            </div>
                            <div class="panel-body">
                                <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                            </div>
                            <div class="panel-footer share-buttons">
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                <a href="#"><i class="fa fa-photo"></i></a>
                                <a href="#"><i class="fa fa-video-camera"></i></a>
                                <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 441px; top: 0px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default relative">
                            <img src="assets/img/place2-full.jpg" alt="place" class="img-responsive">
                            <div class="panel-body panel-boxed text-center">
                                <div class="rating">
                                    <span class="star"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                </div>
                            </div>
                            <div class="panel-body">
                                <img src="assets/img/guy-2.jpg" alt="people" class="img-circle">
                                <img src="assets/img/woman-2.jpg" alt="people" class="img-circle">
                                <img src="assets/img/guy-3.jpg" alt="people" class="img-circle">
                                <img src="assets/img/woman-3_002.jpg" alt="people" class="img-circle">
                                <a href="#" class="user-count-circle">12+</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="position: absolute; left: 883px; top: 0px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-6_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>

                                        <a href="">Michelle</a>

                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <p>Late Night Show Photos</p>
                                <div class="timeline-added-images">
                                    <img src="assets/img/1.jpg" alt="photo" width="80">
                                    <img src="assets/img/2.jpg" alt="photo" width="80">
                                    <img src="assets/img/3.jpg" alt="photo" width="80">
                                </div>
                            </div>
                            <div class="view-all-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> View all
                                </a>
                                <span>10 comments</span>
                            </div>
                            <ul class="comments">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>Hi Mary, Nice Party</span>
                                        <div class="comment-date">21st September</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Mary</a>
                                        <span>Thanks Bill</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>What time did it finish?</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                        <input class="form-control" type="text">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 0px; top: 195px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-6_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Jonathan</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/place1-full.jpg" class="img-responsive">
                            <ul class="comments">
                                <li clas="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author">Mary</a>
                                        <span>Wow</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">

                                        <input class="form-control" type="text">

                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div style="position: absolute; left: 441px; top: 435px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-3_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Michelle</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body text-muted">
                                <i class="fa fa-map-marker"></i> Was in <a href="#">Brooklyn, New York</a>
                            </div>
                            <div class="relative height-300">
                                <div style="background-color: rgb(229, 227, 223); overflow: hidden;" data-toggle="google-maps" class="maps-google-fs" data-center="40.776928,-73.910330" data-zoom="12" data-style="paper">
                                    <div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                                        <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                            <div style="width: 256px; height: 256px; position: absolute; left: -60px; top: -120px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: -60px; top: 136px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 196px; top: -120px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 196px; top: 136px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                                <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                    <div style="overflow: hidden;"></div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                        <div style="position: absolute; left: -60px; top: -120px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="assets/img/vt_002.png" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;">
                                                        </div>
                                                        <div style="position: absolute; left: -60px; top: 136px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="assets/img/vt.png" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;">
                                                        </div>
                                                        <div style="position: absolute; left: 196px; top: -120px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="https://mts1.googleapis.com/vt?pb=%211m4%211m3%211i12%212i1207%213i1538%212m3%211e0%212sm%213i317180886%213m14%212sen-US%213sUS%215e18%2112m1%211e47%2112m3%211e37%212m1%211ssmartmaps%2112m4%211e26%212m2%211sstyles%212zcy50OjF8cC52Om9mZixzLnQ6NXxwLnY6c2ltcGxpZmllZHxwLmg6IzAwNjZmZnxwLnM6NzR8cC5sOjEwMCxzLnQ6MnxwLnY6c2ltcGxpZmllZCxzLnQ6M3xwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cC52Om9mZnxwLnc6MC42fHAuczotODV8cC5sOjYxLHMudDo0OXxzLmU6Z3xwLnY6b24scy50OjUwfHAudjpvZmYscy50OjUxfHAudjpvbixzLnQ6NHxwLnY6c2ltcGxpZmllZCxzLnQ6NnxwLnY6c2ltcGxpZmllZHxwLmM6I2ZmNWY5NGZmfHAubDoyNnxwLmc6NS44Ng%214e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;">
                                                        </div>
                                                        <div style="position: absolute; left: 196px; top: 136px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="https://mts1.googleapis.com/vt?pb=%211m4%211m3%211i12%212i1207%213i1539%212m3%211e0%212sm%213i317180886%213m14%212sen-US%213sUS%215e18%2112m1%211e47%2112m3%211e37%212m1%211ssmartmaps%2112m4%211e26%212m2%211sstyles%212zcy50OjF8cC52Om9mZixzLnQ6NXxwLnY6c2ltcGxpZmllZHxwLmg6IzAwNjZmZnxwLnM6NzR8cC5sOjEwMCxzLnQ6MnxwLnY6c2ltcGxpZmllZCxzLnQ6M3xwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cC52Om9mZnxwLnc6MC42fHAuczotODV8cC5sOjYxLHMudDo0OXxzLmU6Z3xwLnY6b24scy50OjUwfHAudjpvZmYscy50OjUxfHAudjpvbixzLnQ6NHxwLnY6c2ltcGxpZmllZCxzLnQ6NnxwLnY6c2ltcGxpZmllZHxwLmM6I2ZmNWY5NGZmfHAubDoyNnxwLmc6NS44Ng%214e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                            <a title="Click to see this area on Google Maps" href="https://maps.google.com/maps?ll=40.776928,-73.91033&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" target="_blank" style="position: static; overflow: visible; float: none; display: inline;">
                                                <div style="width: 62px; height: 26px; cursor: pointer;"><img draggable="false" src="assets/img/google_white2.png" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 63px; top: 60px;">
                                            <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                            <div style="font-size: 13px;">Map data ©2015 Google</div>
                                            <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img draggable="false" src="assets/img/mapcnt6.png" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                                            </div>
                                        </div>
                                        <div style="z-index: 1000001; position: absolute; right: 171px; bottom: 0px; width: 127px;" class="gmnoprint">
                                            <div class="gm-style-cc" style="-moz-user-select: none;" draggable="false">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2015 Google</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; right: 0px; bottom: 0px;" class="gmnoscreen">
                                            <div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2015 Google</div>
                                        </div>
                                        <div draggable="false" style="z-index: 1000001; -moz-user-select: none; position: absolute; right: 99px; bottom: 0px;" class="gmnoprint gm-style-cc">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_blank" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a>
                                            </div>
                                        </div>
                                        <div class="gm-style-cc" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;" draggable="false">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/maps/@40.776928,-73.91033,12z/data=%2110m1%211e1%2112b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" title="Report errors in the road map or imagery to Google" target="_new">Report a map error</a>
                                            </div>
                                        </div>
                                        <div controlheight="39" controlwidth="20" draggable="false" style="margin: 5px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" class="gmnoprint">
                                            <div controlheight="0" controlwidth="0" style="opacity: 0.6; display: none; position: absolute;" class="gmnoprint">
                                                <div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img draggable="false" src="assets/img/mapcnt6.png" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px;" controlheight="39" controlwidth="20" class="gmnoprint">
                                                <div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img draggable="false" src="assets/img/mapcnt6.png" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                                                </div>
                                                <div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div>
                                                <div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> View all
                                </a>
                                <span>10 comments</span>
                            </div>
                            <ul class="comments">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>Hi Mary, Nice Party</span>
                                        <div class="comment-date">21st September</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Mary</a>
                                        <span>Thanks Bill</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>What time did it finish?</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                        <input class="form-control" type="text">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 883px; top: 465px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Jonathan</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                Amazing 3D Animation
                            </div>
                            <!-- 4:3 aspect ratio -->
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="assets/img/vid.html"></iframe>
                            </div>
                            <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                            <ul class="comments">
                                <li class="comment-form">
                                    <div class="input-group">
                                        <input class="form-control" type="text">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 0px; top: 656px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-4_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Michelle</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-svg">
                                <div class="list">
                                    <div class="list-item">
                                        <div class="text-h6">Today</div>
                                        <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                                                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                    <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                                    </g>
                                                    <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                                        <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                                        <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                                                    </g>
                                                </g>
                                                <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                                                </g>
                                                <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                                    <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <!-- cloudDrizzleSunFill -->
                                    </div>
                                    <div class="list-item">
                                        <div class="text-h6">Tomorrow</div>
                                        <svg version="1.1" id="sun" class="climacon climacon_sun" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                                            <clipPath id="svgs/sunFillClip">
                                                <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"></path>
                                            </clipPath>
                                            <g class="climacon_iconWrap climacon_iconWrap-sun">
                                                <g class="climacon_componentWrap climacon_componentWrap-sun">
                                                    <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"></path>
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"></path>
                                                    </g>
                                                    <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                                        <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <!-- sun -->
                                    </div>
                                    <div class="list-item">
                                        <div class="text-h6">Saturday</div>

                                        <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                                            <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                                                <g class="climacon_componentWrap climacon_componentWrap-rain">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                                </g>
                                                <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                                    <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <!-- cloudRainFill -->
                                    </div>
                                </div>
                                <hr class="margin-none">
                                <div class="today text-center">
                                    <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                                        <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                                </g>
                                                <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                                    <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                                                </g>
                                            </g>
                                            <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                                            </g>
                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <!-- cloudDrizzleSunFill -->
                                    <div class="clearfix"></div>
                                    <div class="details">
                                        Today
                                        <strong class="pull-right"> 10° C </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                            <ul class="comments">
                                <li class="comment-form">
                                    <div class="input-group">
                                        <input class="form-control" type="text">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 883px; top: 977px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="profile-block">
                                <div style="height: 283px;" class="cover overlay cover-image-full">
                                    <img src="assets/img/place1-full.jpg" alt="cover">
                                    <div style="height: 283px;" class="overlay overlay-full overlay-bg-black">
                                        <div class="v-top v-spacing-2">
                                            <a href="#" class="icon pull-right">
                                                <i class="fa fa-comment"></i>
                                            </a>
                                            <div class="text-headline text-overlay">Adrian Demian</div>
                                            <p class="text-overlay">User Interface Designer</p>
                                        </div>
                                        <div class="v-bottom">
                                            <a href="#">
                                                <img src="assets/img/guy-6.jpg" alt="people" class="img-circle avatar">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-icons">
                                    <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span>
                                    <span><i class="fa fa-video-camera"></i> 3 </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="position: absolute; left: 441px; top: 1111px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default event">
                            <div class="panel-heading title">
                                Cocktail Party
                            </div>
                            <ul class="icon-list icon-list-block">
                                <li><i class="fa fa-globe"></i> Miami, FL</li>
                                <li><i class="fa fa-calendar-o"></i> 31st Oct 2014</li>
                                <li><i class="fa fa-clock-o"></i> 5:50 PM</li>
                                <li><i class="fa fa-users"></i> 9 Attendees <a href="#" class="btn btn-primary btn-stroke btn-xs pull-right">Attend</a>
                                </li>
                            </ul>
                            <ul class="img-grid">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/guy-6.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/woman-3.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/guy-2_002.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/guy-9.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/woman-9.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <img src="assets/img/guy-4.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/guy-1.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/woman-4.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/guy-6.jpg" alt="people" class="img-responsive">
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 0px; top: 1121px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default profile-card clearfix-xs">
                            <div class="panel-body">
                                <div class="profile-card-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h4 class="text-center">Graduation Badge</h4>
                                <ul class="icon-list icon-list-block">
                                    <li><i class="fa fa-map-marker"></i> Amsterdam, Europe</li>
                                    <li><i class="fa fa-trophy"></i> 1st in Class</li>
                                    <li><i class="fa fa-calendar"></i> 31st Oct 2014</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 883px; top: 1347px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-2.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Jonathan</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p>
                            </div>
                            <div class="view-all-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> View all
                                </a>
                                <span>10 comments</span>
                            </div>
                            <ul class="comments">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>Hi Mary, Nice Party</span>
                                        <div class="comment-date">21st September</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Mary</a>
                                        <span>Thanks Bill</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>What time did it finish?</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                        <input class="form-control" type="text">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; left: 0px; top: 1480px;" class="col-xs-12 col-md-6 col-lg-4 item">
                    <div class="timeline-block">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                        <a href="">Michelle</a>
                                        <span>on 15th January, 2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="boxed">
                                    <a href="#" class="h4 margin-none">Vegetarian Pizza</a>
                                    <div>
                                        <span class="fa fa-star text-primary"></span>
                                        <span class="fa fa-star text-primary"></span>
                                        <span class="fa fa-star text-primary"></span>
                                        <span class="fa fa-star text-primary"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="assets/img/food1.jpg" alt="" class="media-object" width="80">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                                        </div>
                                    </div>
                                    <ul class="icon-list">
                                        <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                        <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                                        <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="view-all-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> View all
                                </a>
                                <span>10 comments</span>
                            </div>
                            <ul class="comments">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>Hi Mary, Nice Party</span>
                                        <div class="comment-date">21st September</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/woman-5.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Mary</a>
                                        <span>Thanks Bill</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="assets/img/guy-5_002.jpg" class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div style="display: none;" class="pull-right dropdown" data-show-hover="li">
                                            <a href="#" data-toggle="dropdown" class="toggle-button">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="comment-author pull-left">Bill D.</a>
                                        <span>What time did it finish?</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                           <a href="" class="btn btn-default"><i class="fa fa-photo"></i></a>
                                        </span>
                                        <input class="form-control" type="text">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /st-content-inner -->
<div class="row">
    <div class="large-6-centered columns">
        <h1> Hello World </h1>
    </div>
</div>
@endsection
