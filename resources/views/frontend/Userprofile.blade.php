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
                            <h5 class="text-center AA">{{ $user->name }}</h5>
                            <p class="text-center BB"> {{ $user->summery }}</p>
                        </div>
                        <div class="col-sm-12 text-center">
                          <a data-toggle="modal" data-target="#Chat-modal-user" href="#" class="btn btn-info">Send Message</a>

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



        <!---------------Chat Model-------------------->
        <div class="modal fade" id="Chat-modal-user" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="panel">
                    
                                <!--Chat widget header-->
                                <div class="panel-heading">
                                    <div class="panel-control">
                                        <div class="btn-group">
                                            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                                            <button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>

                                        </div>
                                    </div>
                                    <h3 class="panel-title">Chat</h3>
                                </div>
                    
                                <!--Chat widget body-->
                                <div id="demo-chat-body" class="collapse in">
                                    <div class="nano" style="height:500px">
                                        <div class="nano-content pad-all">
                                            <ul class="list-unstyled media-block">
                                            @foreach($usermsgs as $msgs)

                                                <li class="mar-btm">
                                                    <div class="media-left">
                                                        <img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
                                                    </div>
                                                    <div class="media-body pad-hor">
                                                        <div class="speech">
                                                            <a href="#" class="media-heading">{{$msgs->sent_usr_name}}</a>
                                                            <p>{{$msgs->message}}</p>
                                                            <p class="speech-time">
                                                            <i class="fa fa-clock-o fa-fw"></i>{{$msgs->updated_at}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>  
                                    <!--Chat widget footer-->
                                    <div class="panel-footer">
                                        {!! Form::open(['url' => 'profile/message', 'class' => 'form-horizontal']) !!}
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <input type="text"  name='message' placeholder="Enter your text" class="form-control chat-input">
                                            </div>
                                            <div class="col-xs-3">
                                                <button class="btn btn-primary btn-block" type="submit">Send</button>
                                            </div>
                                        </div>
                                          {{ Form::hidden('sent_usr_id', Auth::user()->id ) }}
                                           {{ Form::hidden('received_usr_id', $user->id) }} 
                                           {{ Form::hidden('sent_usr_name', Auth::user()->name ) }} 
                                           {{ Form::hidden('received_usr_name', $user->name) }} 
                                           {{ Form::hidden('reported', '0')}} 
                                           {{ Form::hidden('readed', '0') }} 

                                           {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Chat -->


@stop
