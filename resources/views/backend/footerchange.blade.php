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
            <h3 class="box-title">Edit Home Footer Section</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->




        <div class="box-body">

                    <div class="row">

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Chanage Image</a></li>
              <li><a href="#tab_2" data-toggle="tab">Change Text</a></li>


              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>

            <div class="tab-content">

              
              <div class="tab-pane active" id="tab_1">
                <img class="img-responsive pad" src="{{ url('frontres/img/center-image.jpg') }}" alt="Photo">
          
{!! Form::open(array('url'=>'apply/footerupload','method'=>'POST', 'files'=>true)) !!}
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
                                      <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>

              {!! Form::open(array('url'=>'apply/footertextupdate','method'=>'POST', 'files'=>true)) !!}
                     <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                      
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

    <!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
@endsection
