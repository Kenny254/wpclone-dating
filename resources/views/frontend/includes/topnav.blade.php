
@if (Auth::guest())
<div class="row">

  <div class="col s6 offset-s8"><span class="flow-text">
  <!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" href="#login">Login</a>
<a class="waves-effect waves-light btn modal-trigger" href="#register">Register</a>

<!-- Modal Structure -->
<div id="login" class="modal">
<div class="modal-content">
  <h4>Login today</h4>


  <div class="panel-body">

      {!! Form::open(['url' => 'login', 'class' => 'form-horizontal']) !!}

          <div class="form-group">
              {!! Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) !!}
              <div class="col-md-6">
                  {!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) !!}
              </div><!--col-md-6-->
          </div><!--form-group-->

          <div class="form-group">
              {!! Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) !!}
              <div class="col-md-6">
                  {!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) !!}
              </div><!--col-md-6-->
          </div><!--form-group-->

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          {!! Form::checkbox('remember') !!} {{ trans('labels.frontend.auth.remember_me') }}
                      </label>
                  </div>
              </div><!--col-md-6-->
          </div><!--form-group-->

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  {!! Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) !!}

                  {!! link_to('password/reset', trans('labels.frontend.passwords.forgot_password')) !!}
              </div><!--col-md-6-->
          </div><!--form-group-->

      {!! Form::close() !!}


  </div><!-- panel body -->

</div>
<div class="modal-footer">
  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
</div>
</div>


<!-- Modal Structure -->
<div id="register" class="modal">
<div class="modal-content">
  <h4>Register today</h4>
  <p>Register Box</p>
</div>
<div class="modal-footer">
  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
</div>
</div>



</span>
  </div>
</div>


@else



<div class="sit-login">
  <div class="row">
    <div class="col s6 offset-s8">


  <ul id="dropdown2" class="dropdown-content">
    <li><a href="{{url('/profile')}}">Profile</a></li>
    <li><a href="{{url('/profile/chat/1')}}">Chat<span class="new badge">2</span></a></li>
    <li class="divider"></li>
    <li><a href="{{url('/logout')}}">Logout</a></li>
  </ul>
  <a class="btn dropdown-button blue" href="#!" data-activates="dropdown2">Hi,{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>


  </div>
  </div>

</div>


@endif
