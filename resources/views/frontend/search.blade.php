@extends('frontend.layouts.layout')
@section('content')



<div class="container">
    <div class="col-md-12">
                    <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
    </div>
</div>




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
