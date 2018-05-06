@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        <div class="row flex mb-2">
            @foreach($posts as $post)
            <div class="col-6" >
                <div class="card flex mb-4" style="width: 100%; text-align: center;">
                    <img class="card-img-top" src="https://edge.alluremedia.com.au/m/l/2018/05/Anon-410x231.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                    <p class="card-text">{!!$post->body!!}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$posts->links()}}
    @else
        <p>No posts</p>
    @endif
@endsection