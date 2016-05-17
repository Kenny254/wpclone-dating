<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.head')
</head>

<body class="grey lighten-4">
  <img class="responsive-imgbg head" src="frontend/image/header.png" />

  @include('frontend.includes.topnav')

    @include('frontend.includes.mainnav')

    @include('includes.partials.messages')

  @yield('content')


  <footer class="page-footer transparent">
    @include('frontend.includes.footer')
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="frontend/js/materialize.js"></script>
  <script src="frontend/js/init.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
    });


    $(document).ready(function() {
      $('.slider').slider({
        full_width: false
      });
    });
  </script>

</body>

</html>
