@extends('frontend.layouts.layout')
@section('content')

@if (Auth::guest())
@include('frontend.include.registerbox')
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
                            <h5 class="text-center AA">{{ \auth::user()->name }}</h5>
                            <p class="text-center BB"> {{ \auth::user()->summery }}</p>
                        </div>
                        <div class="col-sm-12 text-center">
                          <a href="{{url('profile/edit')}}" class="btn btn-primary">Edit profile</a>

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
