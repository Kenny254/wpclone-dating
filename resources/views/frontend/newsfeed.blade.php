@extends('frontend.layouts.app')
@section('content')
<!--This is a comment. Comments are not displayed in the browser-->



<div class="row">

@if (Auth::guest())

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


  @else

  <div class="col s12">
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

  @endif


</div>

<!--This is a comment. Comments are not displayed in the browser-->
    <div class="row">
			<div class="container">

			@foreach($users as $dates)

        <div class = "col s3">
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
    </div>
@stop
