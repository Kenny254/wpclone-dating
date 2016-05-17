<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report User</title>

    <style>
        .jumbotron {
            background: #358CCE;
            color: #FFF;
            border-radius: 0px;
        }
        .jumbotron-sm { padding-top: 24px;
            padding-bottom: 24px; }
        .jumbotron small {
            color: #FFF;
        }
        .h1 small {
            font-size: 24px;
        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    You are reporting user:  <small>{{ $user->name }}</small></h1>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                {!! Form::open(['url' => 'profile/report', 'class' => 'form-horizontal']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Your name</label>
                                <input type="text" class="form-control" id="reporting" placeholder="{{ Auth::user()->name }}" required="required" disabled />
                            </div>

                            <div class="form-group">
                                <label for="name">
                                    Report User</label>
                                <input type="text"  class="form-control" id="reported" placeholder="{{ $user->name }}" required="required" disabled="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                            <textarea name="reason" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Message"></textarea>
                                {{ Form::hidden('reported_by_id',  Auth::user()->id ) }}
                                {{ Form::hidden('reported_user_id', $user->id) }}
                                  {{ Form::hidden('reported_by', Auth::user()->name ) }}
                                    {{ Form::hidden('reported_user', $user->name) }}
                                {{ Form::hidden('resolved', '0') }}
                                {{ Form::hidden('readed', '0') }}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Contact Us</legend>
                <address>
                    <strong>Dating Us, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">
                        P:</abbr>
                    (123) 456-7890
                </address>
                <address>
                    <strong>Full Name</strong><br>
                    <a href="mailto:#">first.last@example.com</a>
                </address>
            </form>
        </div>
    </div>
</div>



</body>
</html>
