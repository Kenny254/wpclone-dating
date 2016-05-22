@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col s6 offset-s3">

            <div class="card-panel">
                <div class="panel-heading">{{ trans('labels.frontend.user.profile.update_information') }}</div>

                <div class="panel-body">

                    {!! Form::model($user, ['route' => 'frontend.user.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

                        <div class="form-group">
                            {!! Form::label('name', trans('validation.attributes.frontend.name'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.name')]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('summery', 'Summery (75max Charactersxa) ', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'summery', null, ['class' => 'form-control', 'placeholder' => 'User Summery','maxlength'=>'75']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', trans('validation.attributes.frontend.name'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/gif" name="profilepic"/>
                            </div>
                        </div>

                        @if ($user->canChangeEmail())
                            <div class="form-group">
                                {!! Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) !!}
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit(trans('labels.general.buttons.save'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection
