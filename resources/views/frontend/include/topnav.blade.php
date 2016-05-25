@if (Auth::guest())

<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url' => 'login']) !!}

                        <div class="form-group">
                            {!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                        </div>
                        <div class="form-group">
                              {!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}

                        </div>
                        <div class="form-group">
                              {!! Form::checkbox('remember') !!} {{ trans('labels.frontend.auth.remember_me') }}
                        </div>


                        <p class="text-center">
                          {!! Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) !!}

                          {!! link_to('password/reset', trans('labels.frontend.passwords.forgot_password')) !!}

                        </p>

                    {!! Form::close() !!}

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a></p>

                </div>
            </div>
        </div>
    </div>

</div>


@else


<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Notifications</a></li>
            </ul>
            @roles(['Administrator', 'User'])
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Dashboard</a></li>
            </ul>
            @endauth
        </div>
    </div>

</div>



@endif
