@extends('frontend.layouts.app') @section('content')

<style media="screen">
.floatme {
  position: fixed;
  bottom: 0;
  width: 46.1%;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}
</style>

<div class="container">

  <div class="row">

    <div class="col s4">
      <div class="card-panel blue">

            <ul class="collection with-header">
              <li class="collection-header"><b>When you message</b></li>
              <li class="collection-item">Do not share personal information</li>
              <li class="collection-item">lorem ipsum</li>
              <li class="collection-item">lorem ipsum</li>
              <li class="collection-item">lorem ipsum</li>
            </ul>

        </div>
        </div>

        <div class="col s8">

          <div class="card-panel white">

                <ul class="collection with-header">
                  @foreach($user as $msgs)
                  <li class="collection-item avatar">
                    <img src="images/yuna.jpg" alt="" class="circle"> <b>{{$msgs->sent_usr_name}} </b> {{$msgs->updated_at}}
                    <p> {{$msgs->message}} </p>
                  @endforeach

                </ul>

            </div>

            <div class="card-panel white floatme">
                {!! Form::open(['url' => 'profile/message', 'class' => 'form-horizontal']) !!}
              <div class="input-group">
                <input class="form-control border no-shadow no-rounded" name='message' placeholder="Type your message here">
                <span class="input-group-btn">
                      <button class="btn btn-success no-rounded" type="submit">Send</button>
                    </span>
              </div>

              {{ Form::hidden('sent_usr_id', Auth::user()->id ) }} {{ Form::hidden('received_usr_id', $username->id) }} {{ Form::hidden('sent_usr_name', Auth::user()->name ) }} {{ Form::hidden('received_usr_name', $username->name) }} {{ Form::hidden('readed', '0')
              }} {{ Form::hidden('readed', '0') }} {!! Form::close() !!}

            </div>

        </div>

      </div>

    </div>

    @stop
