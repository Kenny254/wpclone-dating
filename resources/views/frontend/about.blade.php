@extends('frontend.layouts.layout')
@section('content')



@if (Auth::guest())
@include('frontend.include.registerbox')
@else
<div class="container">
    <div class="col-md-12">
        <div id="main-slider">
            <div class="item">
                <img src="{{ url('frontres/img/main-slider1.jpg') }}" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider3.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider4.jpg') }}" alt="">
            </div>
        </div>
        <!-- /#main-slider -->
    </div>
</div>
@endif


<!-- *** Profile HOMEPAGE *** -->

<div id="profile">
                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-12 text-left">
                            <button type="submit" class="btn btn-primary" id="new-updates"></button>
                        </div>
                        </br>
                        <div class="col-md-4">
                            <img class="img-rounded img-responsive" src="{{url('frontres/img/about/about.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8">
                            <p class="CC">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                            <p class="CC">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                            <p class="CC">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="col-md-12">
                            <p class="CC">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                            <p class="CC">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>

<!-- /#profile -->

@stop
