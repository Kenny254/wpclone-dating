@extends('frontend.layouts.app')
@section('content')


<div class="section no-pad-bot" id="index-banner">
  <div class="container">

    <div class="row">
      <div class="col s4">
        <div class="card-panel blue darken-3">
          <span class="white-text">
            <div class="row center-align">
<img class="responsive-img center-align" src="{{url('front/image/roundProfilePic.png')}}">
</div>
<div class="row center-align">
  <b>{{ \auth::user()->name }}</b>
</div>

<div class="row center-align justify">
  {{ \auth::user()->summery }}
</div>

<div class="row right-align">
  <a href="{{url('profile/edit')}}" class="waves-effect waves-light btn right-align"><i class="material-icons left">cloud</i>Update me</a>

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




    <div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3"><a class="active" href="#test1">About me</a></li>
      <li class="tab col s3"><a  href="#test2">Life Events</a></li>
      <li class="tab col s3 "><a href="#test3">Other Inforamtions</a></li>

    </ul>
  </div>
  <div id="test1" class="col s12">
    <ul class="collapsible" data-collapsible="accordion">
   <li>
     <div class="collapsible-header active"><i class="material-icons"></i>Summery</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.only 75 charcters</p></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Description</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet. Any long description</p></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Work & Education</div>
     <div class="collapsible-body"><p>Work and education details.</p></div>
   </li>
 </ul>
  </div>


  <div id="test2" class="col s12">
    <ul class="collapsible" data-collapsible="accordion">
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Life Events</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Family & Relationships</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Places You've Lived</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
   </li>
 </ul>
  </div>


  <div id="test3" class="col s12">
    <ul class="collapsible" data-collapsible="accordion">
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Contact Information</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons"></i>Photos of yours</div>
     <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
   </li>

 </ul>
  </div>

</div>


  </div>
</div>

@stop
