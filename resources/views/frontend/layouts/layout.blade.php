<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.include.head')
  <title> | HOME</title>
</head>


<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 @include('frontend.include.topnav')

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->
@include('frontend.include.nav')
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

<img src="{{ url('frontres/img/header.png') }}" class="head">

    <div id="all">

        <div id="content">

          @yield('content')

        </div>
        <!-- /#content -->

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
@include('frontend.include.footer')
        <!-- *** COPYRIGHT END *** -->
    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{ url('frontres/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ url('frontres/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontres/js/jquery.cookie.js') }}"></script>
    <script src="{{ url('frontres/js/waypoints.min.js') }}"></script>
    <script src="{{ url('frontres/js/modernizr.js') }}"></script>
    <script src="{{ url('frontres/js/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ url('frontres/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('frontres/js/front.js') }}"></script>
</body>

</html>
