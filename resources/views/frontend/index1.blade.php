<html ng-app>

<head>
	<title>Lorem Ipsum</title>
	<link rel="stylesheet" type="text/css" href="front/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="front/css/main.css">
	<link rel="stylesheet" type="text/css" href="front/css/animate.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="front/angular/angular.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

	<img src="front/image/header.png" class="head">
	<img src="front/image/bar.jpg" class="menubar">


	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-3">
				<div class="animated bounceInRight">





					@if (Auth::guest())
					<div class="sit-login">
						{!! Form::open(['url' => 'login', 'class' => 'form-horizontal']) !!}
						<div class="form-group">
							<div class="col-md-3">
								<input type="text" name="email" ng-model="username" placeholder="User Name" class="u-name">
							</div>
							<div class="col-md-3">
								<input type="password" name="password" placeholder="Password" class="p-word">
							</div>
							<label>
								{!! Form::checkbox('remember') !!} {{ trans('labels.frontend.auth.remember_me') }}
							</label>
							<div class="col-md-3">
								<input type="submit" value="Loging" class="loging-button">
							</div>
						</div>
						{!! Form::close() !!}
					</div>

					@else
					<div class="sit-login">
						{!! link_to_route('auth.logout', trans('navs.general.logout')) !!}
					</div>

					@endif





				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="logo">
					<img src="front/image/logo.png" alt="" class="img-circle img-responsive" title="Logo">
				</div>
			</div>
			<div class="col-md-10">
				<div class="navbar-header">
					<div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1">
						<button type="button"> <i class="fa fa-bars"></i></button>
					</div>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index.htm" class="dropdown-toggle">Home</a></li>
							<li><a href="NewsFeed.htm" class="dropdown-toggle">News Feed</a></li>
							<li><a href="Profile.htm" class="dropdown-toggle">Profile</a></li>
							<li><a href="About.htm" class="dropdown-toggle">About Us</a></li>
							<li>
								<div class="btn-group">
									<button class="btn btn-default btn-sm" type="button" aria-haspopup="true" aria-expanded="false" style="margin-top: 90%; margin-left: 52%;">
										Search &nbsp; <i class="fa fa-search" aria-hidden="true"></i>
									</button>

								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--This is a comment. Comments are not displayed in the browser-->
		<div class="row">
			<div class="col-md-4">
				<div class="contentPane">

					<h2 align="center"> Create Your Own Profile <h2>
                  <h3 align= "center">{{ trans('labels.frontend.auth.register_box_title') }}</h3>

                <div>






                    {!! Form::open(['url' => 'register', 'class' => 'form-horizontal']) !!}
                        <i class="fa fa-user"></i>
                            <input type="text" name="name" placeholder="Username" class="userName"><br/>
                        <i class="fa fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" class="Password"><br/>
                        <i class="fa fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="Password"><br/>
                        <i class="fa fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email" class="Password"><br/>
                       <br/>

                            <input type="checkbox" name="terms" value="terms" id="terms">

                            <span>I have read and accept the terms of use.</span><br/>
                            <input type="submit" value="submit" id="sign-up">

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="front/image/banner/home-banner-1.jpg" alt="..." class="img-responsive">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="front/image/banner/home-banner-1.jpg" alt="..." class="img-responsive">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!--This is a comment. Comments are not displayed in the browser-->

    <div class="row">
        <div class="col-md-12">
            <input type="button" value="New Updates" class="new-updates-button" id="new-updates" style="margin-bottom: 3%;">
        </div>

        <div class = "details">

			@foreach($users as $dates)

				<div class="col-md-2">
					<ul>
						<li>
							<img src="front/image/newupdatet/imag-01.jpg" alt="" title="Image">
							<h2>{{$dates->name}}</h2>
							<p>{{$dates->summery}}</p>
							<a href="/profile/{{$dates->id}}">view Profile</a>

						</li>
					</ul>
				</div>

			@endforeach

			</div>
		</div>

		<!--This is a comment. Comments are not displayed in the browser-->
		<div class="row">
			<div class="col-md-12">
				<input type="button" value="Feature Details" id="feature-details" style="margin-bottom: 3%;">
			</div>
			<div class="col-md-5">
				<div class="more-details">
					<h2>Lorem Ipsum is simply dummy</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
						<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<input type="button" value="More Details" id="more-details">
				</div>
			</div>
			<div class="col-md-7">
				<div class="content-image">
					<img src="front/image/center-image.jpg" alt="" title="Image" width="566" height="229">
				</div>
			</div>
		</div>
		<!--This is a comment. Comments are not displayed in the browser-->
	</div>

	<footer>
		<div class="footer">
			<p>&copy;2016 example.com. Privacy All Rights Reserved</p>
		</div>
	</footer>



	<div style="clear:both"></div>

	<script type="text/javascript" href="front/js/bootstrap.js"></script>

</body>

</html>
