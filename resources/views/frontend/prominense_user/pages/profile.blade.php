@extends('frontend.new_user.layout.main')

@section('content')
<div class="padding-md">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="row">
				<div class="col-xs-6 col-sm-12 col-md-6 text-center">
					<a href="#">
						<img src="{{ asset('assets/new_user/assets/img/user.jpg') }}" alt="User Avatar" class="img-thumbnail">
					</a>
					<div class="seperator"></div>
					<div class="seperator"></div>
				</div><!-- /.col -->
				<div class="col-xs-6 col-sm-12 col-md-6">
					<strong class="font-14">{{ Auth::user()->name }}</strong>
					<small class="block text-muted">
						{{ Auth::user()->email }}
					</small> 
					<div class="seperator"></div>
					<a class="btn btn-success btn-xs m-bottom-sm">Follow</a>
					<div class="seperator"></div>
					<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"><a class="twitter-follow-button"
  href="https://twitter.com/TwitterDev">
Follow @TwitterDev</a></i></a>
					<a href="#" class="social-connect tooltip-test google-plus-hover pull-left" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
					<div class="seperator"></div>
					<div class="seperator"></div>
				</div><!-- /.col -->
			</div><!-- /.row -->
			<div class="panel m-top-md">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-4 text-center">
							<span class="block font-14">301</span>
							<small class="text-muted">Follower</small>
						</div><!-- /.col -->
						<div class="col-xs-4 text-center">
							<span class="block font-14">129</span>
							<small class="text-muted">Items</small>
						</div><!-- /.col -->
						<div class="col-xs-4 text-center">
							<span class="block font-14">2731</span>
							<small class="text-muted">Sales</small>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div>
			</div><!-- /panel -->
			
			<h5 class="headline">
				My Skill
				<span class="line"></span>
			</h5>
			<dl>
				<dt>HTML5 <span class="pull-right">90%</span></dt>
				<dd>
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-success animated-bar" style="width:90%"></div>
					</div>
				</dd>
				<dt>CSS <span class="pull-right">75%</span></dt>
				<dd>
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-info animated-bar" style="width:75%"></div>
					</div>
				</dd>
				<dt>jQuery <span class="pull-right">65%</span></dt>
				<dd>
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-warning animated-bar" style="width:65%"></div>
					</div>
				</dd>
				<dt>PHP <span class="pull-right">50%</span></dt>
				<dd>
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-danger animated-bar" style="width:50%"></div>
					</div>
				</dd>
			</dl>
		</div><!-- /.col -->
		<div class="col-md-9 col-sm-9">
			<div class="tab-content">
				<div class="tab-pane fade in active" id="overview">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default fadeInDown animation-delay2">
								<div class="panel-heading">
									About Me
								</div>
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor
nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus 
accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu 
quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec 
metus.</p>
								</div>
							</div><!-- /panel -->
								
							<div class="panel panel-default fadeInDown animation-delay3">
								<div class="panel-heading">
									<i class="fa fa-twitter"></i> Latest Tweets
								</div>
								<ul class="list-group"> 
									<li class="list-group-item"> 
										<p>Welcome <a href="#" class="text-info">@John Doe</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
										<small class="block text-muted">
											<i class="fa fa-clock-o"></i> 6 minutes ago
										</small>
									</li> 
									<li class="list-group-item"> 
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" class="text-info">@Jand Doe</a></p> 
										<small class="block text-muted">
											<i class="fa fa-clock-o"></i> 41 minutes ago
										</small> 
									</li> 
									<li class="list-group-item"> <p><a href="#" class="text-info">@Bill Doe</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit.</p> 
										<small class="block text-muted">
											<i class="fa fa-clock-o"></i> 1 hour ago
										</small> 
									</li> 
									<li class="list-group-item"> <p><a href="#" class="text-info">@John Doe</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
										<small class="block text-muted">
											<i class="fa fa-clock-o"></i> 2 hours ago
										</small> 
									</li> 
								</ul><!-- /list-group -->
							</div><!-- /panel -->
						</div><!-- /.col -->
						<div class="col-md-6">
							<div class="panel panel-default fadeInUp animation-delay4">
								<div class="panel-heading">
									Last Orders <span class="badge badge-primary">8</span>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="list-group-item-text clearfix">
											<span class="img-demo">
												IMAGE
											</span>
											<div class="pull-left m-left-sm m-top-sm">
												<strong>PRODUCT1</strong>
												<span class="badge badge-success">5 items</span>
												<span class="text-muted block">$360</span>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="list-group-item-text clearfix">
											<span class="img-demo">
												IMAGE
											</span>
											<div class="pull-left m-left-sm m-top-sm">
												<strong>PRODUCT2</strong>
												<span class="badge badge-info">2 items</span>
												<span class="text-muted block">$1000</span>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="list-group-item-text clearfix">
											<span class="img-demo">
												IMAGE
											</span>
											<div class="pull-left m-left-sm m-top-sm">
												<strong>PRODUCT3</strong>
												<span class="badge">1 item</span>
												<span class="text-muted block">$500</span>
											</div>
										</div>
									</a>
								</div><!-- /list-group -->	
							</div><!-- /panel -->
							<div class="panel panel-overview fadeInUp animation-delay5">
								<div class="overview-icon bg-success">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="overview-value">
									<div class="h2">256</div>
									<div class="text-muted">Sales</div>
								</div>
							</div><!--/ panel -->
							<div class="panel panel-overview fadeInUp animation-delay6">
								<div class="overview-icon bg-danger">
									<i class="fa fa-usd"></i>
								</div>
								<div class="overview-value">
									<div class="h2">$5,690</div>
									<div class="text-muted">Incomes</div>
								</div>
							</div><!--/ panel -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					<div class="panel panel-default table-responsive">
						<div class="panel-heading">
							Products
							<span class="label label-danger pull-right">3 Items</span>
						</div>
						<table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">Name</th>
									<th class="text-center">Price</th>
									<th class="text-center">Total Sales</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Leather Bag
									</td>
									<td class="text-center">
										$50
									</td>
									<td class="text-center">
										102
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">View</a>
									</td>
								</tr>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Brown Sunglasses
									</td>
									<td class="text-center">
										$80
									</td>
									<td class="text-center">
										310
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">View</a>
									</td>
								</tr>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Summer Dress
									</td>
									<td class="text-center">
										$35
									</td>
									<td class="text-center">
										89
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">View</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div><!-- /panel -->
				</div><!-- /tab1 -->
				<div class="tab-pane fade" id="edit">
					
					<div class="row">
						<div class="panel panel-info pull-right">
							<div class="panel-body">
								Last Update on 12 Oct,2013
							</div>
						</div><!-- /panel -->
					</div><!-- /.row -->
					
					<div class="panel panel-default">
						<form class="form-horizontal form-border">
							<div class="panel-heading">
								Basic Information
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label col-md-2">Username</label>												
									<div class="col-md-10">
										<input class="form-control input-sm" placeholder="Username" value="John Doe" type="text">
									</div><!-- /.col -->
								</div><!-- /form-group -->
								<div class="form-group">
									<label class="control-label col-md-2">Password</label>
									<div class="col-md-10">
										<input class="form-control input-sm" value="Password" type="password">
									</div><!-- /.col -->
								</div><!-- /form-group -->
								<div class="form-group">
									<label class="control-label col-md-2">Email</label>
									<div class="col-md-10">
										<input class="form-control input-sm" value="john_doe@email.com" type="text">
									</div><!-- /.col -->
								</div><!-- /form-group -->
								<div class="form-group">
									<label class="control-label col-md-2">Gender</label>
									<div class="col-md-10">
										<label class="label-radio inline">
											<input name="inline-radio" checked="checked" type="radio">
											<span class="custom-radio"></span>
											Male
										</label>
										<label class="label-radio inline">
											<input name="inline-radio" type="radio">
											<span class="custom-radio"></span>
											Female
										</label>
									</div><!-- /.col -->
								</div><!-- /form-group -->
								<div class="form-group">
									<label class="control-label col-md-2">Address</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3"></textarea>
									</div><!-- /.col -->
								</div><!-- /form-group -->
								<div class="form-group">
									<label class="control-label col-md-2">Phone</label>
									<div class="col-md-10">
										<input class="form-control input-sm" type="text">
									</div><!-- /.col -->
								</div><!-- /form-group -->
							</div>
							<div class="panel-footer">
								<div class="text-right">
									<button class="btn btn-sm btn-success">Update</button>
									<button class="btn btn-sm btn-success" type="reset">Reset</button>
								</div>
							</div>
						</form>
					</div><!-- /panel -->
				
					<div class="panel panel-default">
						<div class="panel-body padding-xs">
							<textarea class="form-control no-border no-shadow" rows="2" placeholder="What's on your mind?"></textarea>
						</div>
						<div class="panel-footer clearfix">
							<a class="btn btn-xs btn-success pull-right">Post</a>
						</div>
					</div><!-- /panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							About Me
						</div>
						<div class="panel-body padding-xs">
							<textarea class="form-control no-border no-shadow" rows="5" placeholder="Who are you?"></textarea>
						</div>
						<div class="panel-footer clearfix">
							<a class="btn btn-xs btn-success pull-right">Save</a>
						</div>
					</div><!-- /panel -->
						
					<div class="panel panel-default">
						<div class="panel-heading">
							Products
						</div>
						<table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">Name</th>
									<th class="text-center">Price</th>
									<th class="text-center">Total Sales</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Leather Bag
									</td>
									<td class="text-center">
										$50
									</td>
									<td class="text-center">
										102
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">Edit</a>
									</td>
								</tr>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Brown Sunglasses
									</td>
									<td class="text-center">
										$80
									</td>
									<td class="text-center">
										310
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">Edit</a>
									</td>
								</tr>
								<tr>
									<td class="text-center hidden-xs">
										<img style="width: 60px; height: 60px;" data-src="holder.js/60x60" alt="60x60" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAACIElEQVRoge3V207qQBiGYe//Ur52CojIptoEiaKoJATjLrI5oJiqnVt415HN2hysZSxZZvwP3qNJf+bJdOie957v1N7/3oCBDWxgAxvYwAb+Phk49AwcegYOPQOHnoFDz8ChZ+DQ+zD44eGBXq9HHMc45+j3+xRFgfee19dXTk9PaTQaxHFMmqas1+svNf9D4Lu7OyQRxzGj0YjxeEy/32e73eK95+TkBEkcHBxwfHyMJBqNBi8vL19i/ofB+/v7SOLp6emPte12SxRFSOL5+RnvPWmaIonpdMrt7S2SODw8pCxLNptNdYp5nn96fu3gzWaDJKIoIssynHO0221ms1n1Kkqi1WpVz1xcXCCJ4XCI957hcIgkrq+vq83O5/Pa5tcKXq1WSEISnU6H8XiMcw5J3N/fM5/Pq7X3Z66urpBEmqZ47ymKglarVc3JsqzW+Ts5YUksl0u895yfnyOJ0Wj0zyfwvklJLBaL2ufXBn57eyNJEiSxWq1++cGzszPyPP/rHcvzHOcccRwjiW63S1mWtc2vFfzz6XS7XS4vL0mShCiKqhN5/xftdDpkWYYkkiShKArKsmQwGCCJm5ub6j5PJpNa5u8EXJYlk8mEZrOJc45er8fj42O1/vt3cjAYVN/J6XSKJI6Ojqr73Gw2iaKoOtHPzN8JOIQMHHoGDj0Dh56BQ8/AoWfg0DNw6Bk49AwcegYOPQOHnoFDz8Ch9wPLm6qCC5BrrQAAAABJRU5ErkJggg==">
									</td>
									<td class="text-center">
										Summer Dress
									</td>
									<td class="text-center">
										$35
									</td>
									<td class="text-center">
										89
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success">Edit</a>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="panel-footer text-right">
							<a class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Product</a>
							<a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
						</div>
					</div><!-- panel -->
				</div><!-- /tab2 -->
				<div class="tab-pane fade" id="message">
					<div class="panel panel-default inbox-panel">
						<div class="panel-heading">
							<div class="input-group">
								<input class="form-control input-sm" placeholder="Search here..." type="text">
									<span class="input-group-btn">
									<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
								</span>
							</div><!-- /input-group -->
						</div>
						<div class="panel-body">
							<label class="label-checkbox inline">
								<input id="chk-all" type="checkbox">
								 <span class="custom-checkbox"></span>
							</label>
							<a class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Write Mail</a>
							<a class="btn btn-sm btn-default"><i class="fa fa-trash-o"></i> Delete</a>
					
							<div class="pull-right">
								<a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>			
								<div class="btn-group" id="inboxFilter">
									<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
										All
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">Read</a></li>
										<li><a href="#">Unread</a></li>
										<li><a href="#">Starred</a></li>
										<li><a href="#">Unstarred</a></li>
									</ul>
								</div>
							</div>
						</div>
						<ul class="list-group">
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="starred"><i class="fa fa-star fa-lg"></i></span>
								<span class="from">John Doe</span>		
							
								<span class="detail">
									<span class="label label-danger">Important</span>		
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
								</span>
								<span class="inline-block pull-right">
									<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
									<span class="time">2:32 Am</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="starred"><i class="fa fa-star fa-lg"></i></span>
								<span class="from">Jane Doe</span>		
								<span class="detail">
									<span class="label label-info">Work</span>		
									Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.
								</span>		
								<span class="inline-block pull-right">
									<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
									<span class="time">1:17 Am</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My business</span>		
								<span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
								<span class="inline-block pull-right">
									<span class="time">Yesterday</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">John Doe</span>		
								<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
								<span class="inline-block pull-right">
									<span class="time">Oct 10</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">Bill Doe</span>	
								<span class="detail">
									<span class="label label-danger">Important</span>												
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
								</span>		
								<span class="inline-block pull-right">
									<span class="time">Oct 9</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My friend</span>		
								<span class="detail">
									<span class="label label-warning">Private</span>												
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
								</span>		
								<span class="inline-block pull-right">
									<span class="time">Oct 9</span>			
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">John Doe</span>		
								<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>
								<span class="inline-block pull-right">
									<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
									<span class="time">Sep 27</span>		
								</span>							
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="starred"><i class="fa fa-star fa-lg"></i></span>
								<span class="from">Jane Doe</span>		
								<span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
								<span class="inline-block pull-right">
									<span class="time">Sep 25</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									 <span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My business</span>		
								<span class="detail">
									<span class="label label-info">Work</span>		
									Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.
								</span>		
								<span class="inline-block pull-right">
									<span class="time">Sep 1</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">John Doe</span>		
								<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>
								<span class="inline-block pull-right">								
									<span class="time">Aug 30</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="starred"><i class="fa fa-star fa-lg"></i></span>
								<span class="from">Bill Doe</span>		
								<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
								<span class="inline-block pull-right">
									<span class="time">Aug 18</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My friend</span>		
								<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
								<span class="inline-block pull-right">
									<span class="time">Aug 17</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="starred"><i class="fa fa-star fa-lg"></i></span>
								<span class="from">Jane Doe</span>		
								<span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
								<span class="inline-block pull-right">
									<span class="time">July 13</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									 <span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My business</span>		
								<span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
								<span class="inline-block pull-right">
									<span class="time">July 13</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									 <span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">John Doe</span>		
								<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
								<span class="inline-block pull-right">
									<span class="time">July 11</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">Bill Doe</span>		
								<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
								<span class="inline-block pull-right">
									<span class="time">July 8</span>		
								</span>
							</li>
							<li class="list-group-item clearfix inbox-item">
								<label class="label-checkbox inline">
									<input class="chk-item" type="checkbox">
									<span class="custom-checkbox"></span>
								</label>
								<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
								<span class="from">My friend</span>		
								<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
								<span class="inline-block pull-right">
									<span class="time">July 4</span>		
								</span>
							</li>
						</ul><!-- /list-group -->
						<div class="panel-footer clearfix">
							<div class="pull-left">112 messages</div>
							<div class="pull-right">
								<span class="middle">Page 1 of 8 </span>
								<ul class="pagination middle">
									<li class="disabled"><a href="#"><i class="fa fa-step-backward"></i></a></li>
									<li class="disabled"><a href="#"><i class="fa fa-caret-left large"></i></a></li>
									<li><a href="#"><i class="fa fa-caret-right large"></i></a></li>
									<li><a href="#"><i class="fa fa-step-forward"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- /panel -->
				</div><!-- /tab3 -->
			</div><!-- /tab-content -->
		</div><!-- /.col -->
	</div><!-- /.row -->			
</div><!-- /.padding-md -->
@stop