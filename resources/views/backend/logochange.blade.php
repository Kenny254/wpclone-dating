@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small> Interlista Backend Manager</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Change Logo & Sliders</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->




        <div class="box-body">

                    <div class="row">

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Chanage Logo</a></li>
              <li><a href="#tab_2" data-toggle="tab">Slider 1</a></li>
              <li><a href="#tab_3" data-toggle="tab">Slider 2</a></li>
              <li><a href="#tab_4" data-toggle="tab">Slider 3</a></li>
              <li><a href="#tab_5" data-toggle="tab">Slider 4</a></li>

              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>

            <div class="tab-content">

              
              <div class="tab-pane active" id="tab_1">
                <img class="img-responsive pad" src="{{ url('frontres/img/logo.png') }}" alt="Photo">
          
{!! Form::open(array('url'=>'apply/logoupload','method'=>'POST', 'files'=>true)) !!}
                 <div class="col-md-6">
            <!-- DIRECT CHAT -->
             <input type="file" name="image" id="fileToUpload" class="btn btn-primary">
          </div><!-- /.col -->

          <div class="col-md-6">
         {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
          </div><!-- /.col -->


              </div>
              <!-- /.tab-pane -->
          {!! Form::close() !!}



              <div class="tab-pane" id="tab_2">
                  <img class="img-responsive pad" src="{{ url('frontres/img/main-slider1.jpg') }}" alt="Photo">
              {!! Form::open(array('url'=>'apply/slideroneupload','method'=>'POST', 'files'=>true)) !!}
                     <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                       <input type="file" name="image" id="fileToUpload" class="btn btn-primary">
                    </div><!-- /.col -->

                    <div class="col-md-6">
                   {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                    </div><!-- /.col -->
{!! Form::close() !!}
              </div>
              <!-- /.tab-pane -->



              <div class="tab-pane" id="tab_3">
                  
                 <img class="img-responsive pad" src="{{ url('frontres/img/main-slider2.jpg') }}" alt="Photo">
              {!! Form::open(array('url'=>'apply/slidetwoupload','method'=>'POST', 'files'=>true)) !!}
                     <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                      <input type="file" name="image" id="fileToUpload" class="btn btn-primary">
                    </div><!-- /.col -->

                    <div class="col-md-6">
                   {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                    </div><!-- /.col -->
{!! Form::close() !!}
              </div>
              <!-- /.tab-pane -->
                            <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">


                  <img class="img-responsive pad" src="{{ url('frontres/img/main-slider3.jpg') }}" alt="Photo">
              {!! Form::open(array('url'=>'apply/sliderthreeupload','method'=>'POST', 'files'=>true)) !!}
                     <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                       <input type="file" name="image" id="fileToUpload" class="btn btn-primary">
                    </div><!-- /.col -->

                    <div class="col-md-6">
                   {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                    </div><!-- /.col -->
{!! Form::close() !!}

              </div>
              <!-- /.tab-pane -->
                            <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                   <img class="img-responsive pad" src="{{ url('frontres/img/main-slider4.jpg') }}" alt="Photo">
              {!! Form::open(array('url'=>'apply/sliderfourupload','method'=>'POST', 'files'=>true)) !!}
                     <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                       <input type="file" name="image" id="fileToUpload" class="btn btn-primary">
                    </div><!-- /.col -->

                    <div class="col-md-6">
                   {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                    </div><!-- /.col -->
{!! Form::close() !!}
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->


          
        </div><!-- /.row -->




        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
