@extends('layouts.app')

@section('landingPage')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">{{$title}}</h1>
      <p class="lead font-weight-normal">Your private, secure & beautiful online journal. Did we also mention it's free?</p>
      <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>  
        <a href="/register" class="btn btn-secondary btn-lg" role="button">Register</a>      
      </p>
    </div>
  </div>

<div id="second">
  <div class="conatiner text-center">
    <h1 class="display-4 my-0">Digitize your private diary</h1>
    <p class="lead my-0">Your private & secure journal — available 24/7 from any device.</p>
  </div><br>

  <div class="container" >
    <div class="card-deck mb-3 text-center">

      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Keep a journal</h4>
        </div>
        <div class="card-body">
          <p class="card-title pricing-card-title">Keep a journal of your daily activities, your travel, exercise, diet, or thoughts and prayers.</p>
        </div>
      </div>

      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Online diary</h4>
        </div>
        <div class="card-body">
          <p class="card-title pricing-card-title">Quickly find past journal entries thanks to an intuitive calendar.</p>
        </div>
      </div>

      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Secure, encrypted</h4>
        </div>
        <div class="card-body">
          <p class="card-title pricing-card-title">Using the same security as banks, even we can’t see your private entries!</p>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="third">
  <div class="container">
    {!! Form::open(['action' => 'JournalController@contact']) !!}
    <h1 class="display-4 font-weight-normal">Contact Us.</h1>
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Your Email'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Message')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Message'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</div>

  <footer class="foot text-center">
      <p>All Rights reserved &copy My Journal</p>
  </footer>
    
@endsection

