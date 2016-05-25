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
                            <select class="option">
                                <option value="sample0">Your Location</option>
                                <option value="sample1">Sample-01</option>
                                <option value="sample2">Sample-02</option>
                            </select>
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


<!-- *** Profile HOMEPAGE ***
_________________________________________________________ -->
        <div id="profile">
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-12">

@foreach($users as $dates)
                        <div class="col-md-3">
                            <div class="item">
                                <div class="product PP">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="#">
                                                    <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">

                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="#">
                                                    <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">

                                                </a>

                                            </div>
                                        </div>

                                    </div>

                                    <a href="#" class="invisible">
                                        <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">
                                    </a>
                                    {{$dates->name}}
                                    <div class="text OO">

                                        <button type="submit" class="btn btn-default NN"><i class="fa fa-heart-o" aria-hidden="true"></i></button>

                                        <a href="/profile/{{$dates->id}}">
                                        <button type="submit" class="btn btn-default" id="GetDetails"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                        </a>
                                    </div>
                                <!--
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                             /.text -->
                                </div>
                        <!-- /.product -->
                            </div>
                        </div>

@endforeach


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /#profile -->
        <!-- *** PROFILE END *** -->
@stop
