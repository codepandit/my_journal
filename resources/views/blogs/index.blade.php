@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Easy way to store your travel/daily journal</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>  
           <a href="/register" class="btn btn-secondary btn-lg" role="button">Register</a>      
        </p>
    </div>

@endsection

