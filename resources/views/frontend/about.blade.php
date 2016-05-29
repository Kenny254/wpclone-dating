@extends('frontend.layouts.layout')
@section('content')

@if (Auth::guest())
<div class="container">
    <div class="col-md-3">
        <div class="box same-height" style="background: #2072bc;">
            {!! Form::open(['url' => 'register']) !!}
                <div class="row" style="margin-top: -7%;">
                    <div class="col-md-12">
                        <h4 align="center"> Create Your Own Profile </h4>
                        <h5 align="center" style="color:#fff;font-size: 12px;">Lorem Ipsum is simply dummy text of t</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">

                            <input name="name" type="text" class="form-control" placeholder="User Name" id="User Name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">

                            <input name="password" type="password" class="form-control" placeholder="Password" id="Password">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">

                            <input name="password_confirmation" type="password" class="form-control" placeholder="Conform Password" id="password">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">

                            <input name="email" type="email" class="form-control" placeholder="Email" id="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <input name="summery" type="text" class="form-control" placeholder="summery" id="summery" maxlength="75">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="checkbox" name="terms" value="terms" id="terms">
                            <span style="color:#fff; font-size: 11px;">I have read and accept the terms of use.</span>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary" id="sign-up"></button>
                    </div>
                </div>
                <!-- /.row -->
          {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-9">
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
