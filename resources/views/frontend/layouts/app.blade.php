<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.head')
</head>

<body class="grey lighten-4">
    <img class="responsive-imgbg head" src="{{ url('frontend/image/header.png') }}" /></img>

  @include('frontend.includes.topnav')

    @include('frontend.includes.mainnav')

    @include('includes.partials.messages')

  @yield('content')


@if (Auth::guest())

@else
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>

@endif


  <footer class="page-footer transparent">
    @include('frontend.includes.footer')
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ url('frontend/js/materialize.js') }}"></script>
  <script src="{{ url('frontend/js/init.js') }}"></script>

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
