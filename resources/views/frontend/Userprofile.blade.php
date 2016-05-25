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
<div id="content">

    <div class="container">
        <div class="col-md-3">
            <div class="box same-height" style="background: #2072bc;">
                <form>
                    <div class="row CC">
                        <div class="col-md-12">
                            <img class="img-circle img-responsive" src="{{ url('frontres/img/profile/1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-12">
                            <h5 class="text-center AA">{{ $user->name }}</h5>
                            <p class="text-center BB"> {{ $user->summery }}</p>
                        </div>
                        <div class="col-sm-12 text-center">
                          <a href="/profile/chat/{{ $user->id }}" class="btn btn-info">Send Message</a>

                        </div>

                        <div class="col-sm-12 text-center">
                          <a href="/profile/report/{{ $user->id }}" class="btn btn-danger">Report profile</a>

                        </div>

                    </div>
                    <!-- /.row -->
                </form>
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
@endif


<div id="profile">
    <div class="container">
        <div class="same-height-row">
            <div class="col-md-4">
                <div class="panel panel-default sidebar-menu">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked category-menu col-md-6">
                        <li>
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Birthday</a></li>
                                <li><a href="#">Work & Education</a></li>
                                <li><a href="#">Places You've Lived </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked category-menu col-md-6">
                        <li>
                            <ul>
                                <li><a href="#">Contact Info</a></li>
                                <li><a href="#">Family & Relationships</a></li>
                                <li><a href="#">Details About You</a></li>
                                <li><a href="#">Life Eventss</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <p class="MM">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.t has survived not only five centuries, but also the leap into electronic.t has survived not only five centuries, but also the leap into electronic.</p>
            </div>
        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>


@stop
