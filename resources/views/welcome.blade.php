<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shorter URL</title>
        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Shorter URL </h1>
                </div>
            </div>
            <form action="{{ url('shorten_url')}}" method="post">
            {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group row">
                          <label for="example-url-input" class="col-xs-3 col-form-label">Put your URL Website:</label>
                          <div class="col-xs-7">
                            <input class="form-control" type="url" placeholder="http://github.com" id="url" name="url">
                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="col-xs-2">
                              <input class="btn btn-primary" type="submit" value="Shorten">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-12">
                          </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </body>
</html>