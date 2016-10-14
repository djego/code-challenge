@extends('layout')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1>Shorten you URL </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group row">
          <label for="example-url-input" class="col-xs-3 col-form-label">Your shortened URL is:</label>
          <div class="col-xs-7">
              <strong>{{ $url_shorten }}</strong>
          </div>

        </div>
        <div class="form-group row">
          <label for="example-url-input" class="col-xs-3 col-form-label">Your URL Website:</label>
          <div class="col-xs-7">
              <span>{{ $url_original }}</span>
          </div>

        </div>

        <div class="form-group row">
          <div class="col-xs-7">
              <a href="{{ url('/') }}">Back</a>
          </div>

        </div>

    </div>
</div>
@endsection