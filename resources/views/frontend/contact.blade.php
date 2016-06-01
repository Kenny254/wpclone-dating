@extends('frontend.layouts.layout')
@section('content')

 <div id="content">
         
            <div class="container">
                <div class="col-md-12">
                    <div class="box" id="contact">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15844.943103608597!2d79.90247775!3d6.862322499999999!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1464618421404" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <hr>
                        <h2>Contact form</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control LLL" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control LLL" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control LLL" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control LLL" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>


                </div>
            </div>
            <!-- *** Contact END *** -->
        </div>
@stop
