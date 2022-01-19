@extends('layout')
@section('content')
    <h1>{!! $post->title !!}</h1>
    <a href="{{ route('posts')}}">All posts</a>


    <div>
        <img src="{!! $post->img !!}" alt="">
        <p>{!! $post->description !!} </p>
        <p>{!! $post->content !!} </p>
    </div>
@endsection



