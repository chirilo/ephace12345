@extends('frontend.new_user.layout.main')

@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default panel-dark" id="featuredMovie">
            <div class="panel-heading">
                Featured Movie
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12 col-xs-6">
                        <img src="{{ asset('assets/new_user/assets/img/preview4.jpg') }}" alt="Movie Preview">
                    </div><!-- /.col -->
                    <div class="col-sm-12 col-xs-6">
                        <h5 class="featured-name">Freddy Krueker</h5>
                        <p class="ellipsis">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
                        </p>
                        <!-- <a class="btn btn-sm btn-danger">Read more</a> -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /panel -->
    </div><!-- /.col -->
    <div class="col-sm-9">
        <div id="movieSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('assets/new_user/assets/img/preview1.jpg') }}" alt="First slide">
                    <div class="row">
                        <div class="col-md-5 text-right">
                            <h4 class="m-top-lg m-right-md m-bottom-xs text-warning fadeInRightLarge animation-delay4"></h4>
                            <h3 class="m-top-xs m-right-md text-white fadeInUpLarge animation-delay10"></h3>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <div class="item">
                    <img src="{{ asset('assets/new_user/assets/img/preview2.jpg') }}" alt="Second slide">
                    <div class="text-center">
                            <h4 class="m-top-lg m-right-md m-bottom-xs text-white fadeInDownLarge animation-delay4"></h4>
                            <h3 class="m-top-xs m-right-md text-white fadeInLeftLarge animation-delay6"></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/new_user/assets/img/preview3.jpg') }}" alt="Third slide">
                    <div class="m-top-lg text-center">
                        <h3>
                            <span class="block bounceIn text-white animation-delay4"></span>
                            <!-- <a href="#" class="btn btn-danger m-top-md bounceInDown animation-delay10"></a> -->
                        </h3>
                    </div>
                </div>
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#movieSlider" data-slide="prev">
                <span class="fa fa-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#movieSlider" data-slide="next">
                <span class="fa fa-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default panel-dark">
            <div class="panel-heading">
                New Movies
            </div>
            <div class="panel-body no-padding">
                <ul class="movie-list">
                    <li class="clearfix">
                        <img src="{{ asset('assets/new_user/assets/img/preview8.jpg') }}" alt="Gallery 1">
                        <a href="#" class="h5 block primary-font m-bottom-xs">Titanic</a>
                        <small class="block ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('assets/new_user/assets/img/preview9.jpg') }}" alt="Gallery 2">
                        <a href="#" class="h5 block primary-font m-bottom-xs">Troy</a>
                        <small class="block ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('assets/new_user/assets/img/preview10.jpg') }}" alt="Gallery 3">
                        <a href="#" class="h5 block primary-font m-bottom-xs">Transformer</a>
                        <small class="block ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('assets/new_user/assets/img/preview11.jpg') }}" alt="Gallery 4">
                        <a href="#" class="h5 block primary-font m-bottom-xs">Star War</a>
                        <small class="block ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="m-bottom-md hidden-sm hidden-xs">
            <h5 class="text-muted">Advertisement</h5>
            <img data-src="holder.js/300x150" alt="Advertisement" src=".">
        </div>
        <div class="m-bottom-md hidden-sm hidden-xs">
            <img data-src="holder.js/300x150" alt="Advertisement" src=".">
        </div>
        <div class="m-bottom-md hidden-sm hidden-xs">
            <img data-src="holder.js/300x150" alt="Advertisement" src=".">
        </div>
    </div><!-- /.col -->
    <div class="col-md-9">
        <h4 class="headline dark">
            Popular Movies
            <span class="line"></span>
        </h4>
        <div class="jcarousel-wrapper">
            <div class="jcarousel movie-jcarousel" id="popularMovie">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview4.jpg') }}" alt="Image 1">
                            <div class="quick-detail text-white">
                                <h5>Freddy Krueker</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview5.jpg') }}" alt="Image 2">
                            <div class="quick-detail text-white">
                                <h5>Toy Story</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview6.jpg') }}" alt="Image 3">
                            <div class="quick-detail text-white">
                                <h5>Walking Dead</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview7.jpg') }}" alt="Image 4">
                            <div class="quick-detail text-white">
                                <h5>Splice</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview8.jpg') }}" alt="Image 5">
                            <div class="quick-detail text-white">
                                <h5>The Hunger game</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview9.jpg') }}" alt="Image 6">
                            <div class="quick-detail text-white">
                                <h5>The Other Guys</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
        </div><!-- /jcarousel-wrapper -->
        
        <div class="padding-sm text-right">
            <a href="#" class="primary-font">See All</a>
        </div>
        
        <h4 class="headline dark">
            New Games
            <span class="line"></span>
        </h4>
        
        <div class="jcarousel-wrapper">
            <div class="jcarousel movie-jcarousel" id="newGame">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview10.jpg') }}" alt="Image 1">
                            <div class="quick-detail text-white">
                                <h5>Game 1</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview11.jpg') }}" alt="Image 2">
                            <div class="quick-detail text-white">
                                <h5>Game 2</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview12.jpg') }}" alt="Image 3">
                            <div class="quick-detail text-white">
                                <h5>Game 3</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview13.jpg') }}" alt="Image 4">
                            <div class="quick-detail text-white">
                                <h5>Game 4</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview14.jpg') }}" alt="Image 5">
                            <div class="quick-detail text-white">
                                <h5>Game 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/new_user/assets/img/preview15.jpg') }}" alt="Image 6">
                            <div class="quick-detail text-white">
                                <h5>Game 6</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p>
                            </div>  
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
        </div><!-- /jcarousel-wrapper -->
        
        <div class="padding-sm text-right">
            <a href="#" class="primary-font">See All</a>
        </div>
        
        <h4 class="headline dark">
            Movie News
            <span class="line"></span>
        </h4>
        
        <ul class="movie-news">
            <li class="clearfix">
                <img src="{{ asset('assets/new_user/assets/img/preview4.jpg') }}" alt="news image">
                <div class="news-wrapper">
                    <div class="news-header">Lorem ipsum dolor sit amet</div>
                    <div class="news-body">
                        <small class="block text-muted m-bottom-sm">By <a href="#"><strong> John Doe</strong></a> |  Post on Jan 3, 2014  | 12 comments</small>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                            <a href="#" class="primary-font m-left-xs">Read more</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('assets/new_user/assets/img/preview5.jpg') }}" alt="news image">
                <div class="news-wrapper">
                    <div class="news-header">Lorem ipsum dolor sit amet</div>
                    <div class="news-body">
                        <small class="block text-muted m-bottom-sm">By <a href="#"><strong> Admin</strong></a> |  Post on Jan 2, 2014  | 33 comments</small>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                            <a href="#" class="primary-font m-left-xs">Read more</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('assets/new_user/assets/img/preview6.jpg') }}" alt="news image">
                <div class="news-wrapper">
                    <div class="news-header">Lorem ipsum dolor sit amet</div>
                    <div class="news-body">
                        <small class="block text-muted m-bottom-sm">By <a href="#"><strong> Admin</strong></a> |  Post on Jan 1, 2014  | 7 comments</small>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                            <a href="#" class="primary-font m-left-xs">Read more</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- /.col -->
</div><!-- ./row -->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <h3>Menu</h3>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3>Menu</h3>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
            <h3>Menu</h3>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-bottom" id="cbp-spmenu-s4">
            <h3>Menu</h3>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
            <a href="#">Celery seakale</a>
            <a href="#">Dulse daikon</a>
            <a href="#">Zucchini garlic</a>
            <a href="#">Catsear azuki bean</a>
            <a href="#">Dandelion bunya</a>
            <a href="#">Rutabaga</a>
        </nav>
@stop