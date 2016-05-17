<html ng-app>
<head>
	<title>Lorem Ipsum</title>


	<link rel="stylesheet" type="text/css" href="{{url('front/css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('front/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('front/css/animate.css')}}">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="{{url('front/angular/angular.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<img src="{{url('front/image/header.png')}}" class="head">
<img src="{{url('front/image/bar.jpg')}}" class="menubar">

	<div class="container">
			<div style="margin-top:40px"></div>




<!--This is a comment. Comments are not displayed in the browser-->

		<div class="row">

            <div class="col-md-2">
				<div class="logo">
                    <img src="{{url('front/image/logo.png')}}" alt="" title="Logo">

                </div>
			</div>
            <div class = "col-md-10">

			<div class="col-md-3">

			</div>
            <div class="col-md-3">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                <div class="animated bounceInRight">
                   <div class="sit-login">

                        <form>
                            <input type="text" ng-model="username" placeholder="User Name" class="u-name">
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="col-md-1">
                </div>
                <div class="col-md-11">
                <div class="animated bounceInRight">
                   <div class="sit-login">
                        <form>
                            <input type="text" name="Password" placeholder="Password" class="p-word">
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <div class= "col-md-3">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                    <div class="animated bounceInRight">
                   <div class="sit-login">

                        <form>
                            <input type="submit" value="Loging" class="loging-button">
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <br>
             <div class="navbar-header" Style="margin-top: 40px;" >
                <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  >
                <button type="button" > <i class="fa fa-bars"></i></button>
                </div>
            </div>

            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

                <nav>

                    <ul class="nav navbar-nav">

                        <li><a href="index.htm" class="dropdown-toggle">Home</a></li>
                        <li><a href="NewsFeed.htm" class="dropdown-toggle">News Feed</a></li>
                        <li><a href="Profile.htm" class="dropdown-toggle">Profile</a></li>
                        <li><a href="About.htm" class="dropdown-toggle">About Us</a></li>


                    </ul>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">

                    </div>

                </nav>
            </div>




           </div>

		</div>

<!--This is a comment. Comments are not displayed in the browser-->

        <div class="row">

        <div class="col-md-4">
            <div class="contentPane">

                <div>
                    <form align= "center">
                        <img src="{{url('front/image/roundProfilePic.png')}}" Style="margin-top: 60px;">
                        <h2>Rishika Carder</h2>
                        <p style="color: #FFFFFF;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        </p>
                        <div>
                         <input type="button" value="Edit Profile" class="Edit-Profile" id="Edit-Profile">
                        </div>
                        </form>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <img src="{{url('front/image/slider.png')}}">

        </div>
    </div>

<!--This is a comment. Comments are not displayed in the browser-->
    <div class="row">

			@foreach($users as $dates)

        <div class = "col-md-3">
            <div class = "Profiles">
                <img src="{{url('front/image/NewsFeedPhoto.png')}}">
								{{$dates->name}}
                    <div class="form-group" Style="margin-top: 4px; margin-bottom: 5px; margin-left: 5px;">
                        <input type="checkbox" name="fancy-checkbox-success-custom-icons" id="fancy-checkbox-success-custom-icons" autocomplete="off">
                            <div class="btn-group">
                                <label for="fancy-checkbox-success-custom-icons" class="btn btn-success">
                                    <span class="glyphicon glyphicon-heart"></span>
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </label>
                            </div>
														<a  href="/profile/{{$dates->id}}">
                             <input type="button" value="GetDetails" class="GetDetails" id="GetDetails" Style="float: right; margin-right: 5px;">
														</a>
                    </div>



            </div>
        </div>

@endforeach

    </div>




    <footer>
                <div class="footer">
                    <p>&copy;2016 example.com. Privacy All Rights Reserved</p>
                </div>
            </footer>



<div style="clear:both"></div>
</div>
</body>
<footer>

<script type="text/javascript" href="{{url('front/js/bootstrap.js')}}"></script>

</footer>
</html>
