
 <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="{{ url('frontres/img/logo.png') }}" alt="Obaju logo" class="hidden-xs" style="border-radius: 50%;width: 121px;margin-top: -37px;">
                    <img src="{{ url('frontres/img/logo-small.png') }}" alt="Obaju logo" class="visible-xs img-circle img-responsive" style="width: 29%;">
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle"  data-toggle="modal" data-target="#search-modal">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse DD" id="navigation" style="">

                <ul class="nav navbar-nav navbar-left">

                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class="#"><a href="{{url('newsfeed')}}">News Feed</a></li>
                <li class="#"><a href="{{url('profile')}}">Profile</a></li>
                <li class="#"><a href="{{url('aboutus')}}">About Us</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right">
                    <button type="button" class="btn navbar-btn btn-primary"   data-toggle="modal" data-target="#search-modal">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>
            
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-md">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Name</label>
                                        <div class="col-md-4 col-xs-4">
                                            <input type="radio"/> Bride
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <input type="radio"/> Groom
                                        </div>
                                    </div> 
                                </div>      
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Age</label>
                                        <div class="col-md-4 col-xs-4">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Religion</label>
                                        <div class="col-md-8 col-xs-8">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Mother Tongue</label>
                                        <div class="col-md-8 col-xs-8">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Community</label>
                                        <div class="col-md-8 col-xs-8">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-xs-4" for="name">Country</label>
                                        <div class="col-md-8 col-xs-8">
                                            <select class="form-control LL" id="age">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-10">
                                            Only Profiels With Photo <input type="radio"/>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="search" class="btn btn-primary HH" id="search">Search</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->