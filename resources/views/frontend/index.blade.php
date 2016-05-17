@extends('frontend.layouts.app')
@section('content')


<div class="section no-pad-bot" id="index-banner">
  <div class="container">

    <div class="row">
      <div class="col s4">
        <div class="card-panel blue darken-3">
          <span class="white-text">
          <h5 class="center">Create Your Own Profile</h5>

          <div class="row">

{!! Form::open(['url' => 'register', 'class' => 'form-horizontal col s12']) !!}

<div class="row">

  <div class="input-field">
    <i class="material-icons prefix">account_circle</i>
    <input name="name" id="name" type="text" class="validate">
    <label for="name">Name</label>
  </div>

  <div class="input-field">
    <i class="material-icons prefix">lock_open</i>
    <input name="password" id="password" type="password" class="validate">
    <label for="password">Password</label>
  </div>

  <div class="input-field">
    <i class="material-icons prefix">lock_outline</i>
    <input name="password_confirmation" id="password_confirmation" type="password" class="validate">
    <label for="confirm-password">Confirm Password</label>
  </div>


  <div class="input-field">
    <i class="material-icons prefix">email_circle</i>
    <input name="email" id="email" type="email" class="validate">
    <label for="email">Email</label>
  </div>

  <div class="input-field center">
    <button class="btn waves-effect waves-light center pink" type="submit" name="action">Submit
     <i class="material-icons right">send</i>
   </button>
  </div>



</div>




{!! Form::close() !!}

</div>

        </span>
        </div>
      </div>
      <div class="col s8">
        <div class="slider" style="height: 490px;">
          <ul class="slides" style="height: 490px;">
            <li>
              <img src="https://lucky-date.com/images/foto1.jpg">
              <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="https://lucky-date.com/images/foto2.jpg">
              <!-- random image -->
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="https://lucky-date.com/images/foto3.jpg">
              <!-- random image -->
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="https://lucky-date.com/images/foto4.jpg">
              <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>


  </div>
</div>


<div class="container">
  <div class="section center">

    <div class="row">
      <div class="col s3 offset-s1 center">
        <div class="card-panel pink">
          <span class="white-text">New Updates
          </span>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col s2"> </div>

      @foreach($users as $dates)

      <div class="col s2">

        <ul>
          <li>
            <img src="frontend/image/newupdatet/imag-01.jpg" alt="" title="Image">
            <h5>{{$dates->name}}</h5>
            <p>{{$dates->summery}}</p>
            <input class="light-blue darken-3 waves-effect waves-light " type="button" value="Get Details" id="get-details">
          </li>
        </ul>

      </div>

	@endforeach



    </div>


    <div class="row">
      <div class="col s3 offset-s1 center">
        <div class="card-panel pink">
          <span class="white-text">Feature Details
          </span>
        </div>
      </div>
    </div>


  </div>





  <div class="row">
    <div class="col s6">
      <h5 class="center">
          This is test message
        </h5>
      <p class="justify">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
      </p>
      <div class="right-align">
        <a class="waves-effect waves-light btn">more..</a>
      </div>
    </div>

    <div class="col s6">
      <img src="frontend/image/center-image.jpg" alt="">
    </div>
  </div>



</div>

@stop
