<html ng-app>
<head>
    <title>asd</title>


    <link rel="stylesheet" type="text/css" href="{{url('front/css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('front/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/animate.css')}}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="angular/angular.js{{url('front/css/main.css')}}"></script>

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
                        <h2>{{ $user->name }}</h2>
                        <p style="color: #FFFFFF;">
                            {{ $user->summery }}
                        </p>
                        <div>
                            <a color="white" href="{{url('profile/edit')}}" > Edit Profile</a>
                            <p><a href="/profile/report/{{ $user->id }}">Report User </a> </p>
                            <p><a href="/profile/message/{{ $user->id }}">Send Message </a> </p>
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
    <div class="row" Style="margin-top: 10px;">

        <div class="col-md-4">
            <div class="col-md-3">
                <img src="{{url('front/image/Stamp.png')}}">
            </div>
            <div class="col-md-9">
                <p Style="font-size: 20px; color: #8a8a8a;">{{ $user->name }}</p>
            </div>

        </div>
        <div class="col-md-8">
            <p Style="color: #8a8a8a; margin-top: 5px;">{{ $user->created_at }}</p>
        </div>
    </div>
    <!--This is a comment. Comments are not displayed in the browser-->
    <div class="row" Style="margin-top: 15px; background-color: #eaf4fb">
        <div class="col-md-3">
            <div class="btn-group-vertical">
                <button class="bttn" id="test0" autofocus="true" href="#toggle1" data-toggle="collapse">Overview</button>
                <button class="bttn" id="test1">Birthday</button>
                <button class="bttn" id="test2">Work & Education</button>
                <button class="bttn" id="test3">Places You've Lived </button>
                <button class="bttn" id="test4">Contact Info</button>
                <button class="bttn" id="test5">Family & Relationships</button>
                <button class="bttn" id="test6">Details About You</button>
                <button class="bttn" id="test6">Life Events</button>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panelchange" Style="background-color: #eaf4fb;">
                <p Style="color: #8a8a8a; margin-top: 7px; font-size: 17;  text-align: justify;">{{ $user->description }}</p>
            </div>
        </div>
    </div>


    <!--This is a comment. Comments are not displayed in the browser-->

    <p Style="color: #8a8a8a; margin-top: 7px; font-size: 17;  text-align: justify;">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

    </p>

    <!--This is a comment. Comments are not displayed in the browser-->


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
