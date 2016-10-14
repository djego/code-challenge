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
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group row">
                      <label for="example-url-input" class="col-xs-3 col-form-label">Your shortened URL is:</label>
                      <div class="col-xs-7">
                          <span>SHorten URL </span>
                      </div>

                    </div>
                    <div class="form-group row">
                      <label for="example-url-input" class="col-xs-3 col-form-label">Your URL Website:</label>
                      <div class="col-xs-7">
                          <span>Url regular</span>
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="col-xs-7">
                          <a href="{{ url('/') }}">Back</a>
                      </div>

                    </div>

                </div>
            </div>

        </div>
    </body>
</html>