@if (Auth::guest())
<!-- *** TOPBAR ***
 _________________________________________________________ -->
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

    <!-- *** TOP BAR END *** -->

@else

<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li class="">
							<a href="#"aria-expanded="false"  data-toggle="modal" data-target="#Message-modal">
								<i class="fa fa-envelope fa-lg"></i>
								<span class="badge badge-header badge-warning">4</span>
							</a>
						</li>
                     @roles(['Administrator'])
                    <li><a href="{{url('/admin/dashboard')}}" >Dashboard</a></li>
                    @endauth
                    <li><a href="{{url('/logout')}}" >Logout</a></li>
                </ul>
                
            
            </div>
        </div>
        
        <!--  Message Model -->
        <div class="modal fade" id="Message-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Chat</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="list-unstyled media-block">
				            <li class="mar-btm">
				            	<div class="media-left">
				            		<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
				            	</div>
				            	<div class="media-body pad-hor">
				            		<div class="speech PL">
				            			<a href="#" class="media-heading CCC"data-toggle="modal" data-target="#Chat-modal">
                                            John Doe
                                        </a>
				            		</div>
				            	</div>
				            </li>
                            <li class="mar-btm">
				            	<div class="media-left">
				            		<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
				            	</div>
				            	<div class="media-body pad-hor">
				            		<div class="speech PL">
				            			<a href="#" class="media-heading CCC">John Doe</a>
				            		</div>
				            	</div>
				            </li>
                            <li class="mar-btm">
				            	<div class="media-left">
				            		<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
				            	</div>
				            	<div class="media-body pad-hor">
				            		<div class="speech PL">
				            			<a href="#" class="media-heading CCC">John Doe</a>
				            		</div>
				            	</div>
				            </li>
                            <li class="mar-btm">
				            	<div class="media-left">
				            		<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
				            	</div>
				            	<div class="media-body pad-hor">
				            		<div class="speech PL">
				            			<a href="#" class="media-heading CCC">John Doe</a>
				            		</div>
				            	</div>
				            </li>
				        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Message -->
        
        <!---------------Chat Model-------------------->
        <div class="modal fade" id="Chat-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
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
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">Available</a></li>
												<li><a href="#">Busy</a></li>
												<li><a href="#">Away</a></li>
												<li class="divider"></li>
												<li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
												<li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body" >Disconect</a></li>
											</ul>
										</div>
									</div>
									<h3 class="panel-title">Chat</h3>
								</div>
					
								<!--Chat widget body-->
								<div id="demo-chat-body" class="collapse in">
									<div class="nano" style="height:500px">
										<div class="nano-content pad-all">
											<ul class="list-unstyled media-block">
												<li class="mar-btm">
													<div class="media-left">
														<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="#" class="media-heading">John Doe</a>
															<p>Hello Lucy, how can I help you today ?</p>
															<p class="speech-time">
															<i class="fa fa-clock-o fa-fw"></i>09:23AM
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="img/chat/2.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="#" class="media-heading">Lucy Doe</a>
															<p>Hi, I want to buy a new shoes.</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:23AM
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="#" class="media-heading">John Doe</a>
															<p>Shipment is free. You'll get your shoes tomorrow!</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:25
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="img/chat/2.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="#" class="media-heading">Lucy Doe</a>
															<p>Wow, that's great!</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:27
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="img/chat/2.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="#" class="media-heading">Lucy Doe</a>
															<p>Ok. Thanks for the answer. Appreciated.</p>
															<p class="speech-time">
															<i class="fa fa-clock-o fa-fw"></i> 09:28
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="#" class="media-heading">John Doe</a>
															<p>You are welcome! <br/> Is there anything else I can do for you today?</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:30
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-right">
														<img src="img/chat/2.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor speech-right">
														<div class="speech">
															<a href="#" class="media-heading">Lucy Doe</a>
															<p>Nope, That's it.</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:31
															</p>
														</div>
													</div>
												</li>
												<li class="mar-btm">
													<div class="media-left">
														<img src="img/chat/1.png" class="img-circle img-sm" alt="Profile Picture">
													</div>
													<div class="media-body pad-hor">
														<div class="speech">
															<a href="#" class="media-heading">John Doe</a>
															<p>Thank you for contacting us today</p>
															<p class="speech-time">
																<i class="fa fa-clock-o fa-fw"></i> 09:32
															</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>	
									<!--Chat widget footer-->
									<div class="panel-footer">
										<div class="row">
											<div class="col-xs-9">
												<input type="text" placeholder="Enter your text" class="form-control chat-input">
											</div>
											<div class="col-xs-3">
												<button class="btn btn-primary btn-block" type="submit">Send</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Chat -->
        
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

@endif

