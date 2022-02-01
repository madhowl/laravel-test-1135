@extends('layout')
@section('content')
    <div class="overflow-hidden shadow-lg rounded-lg h-full w-4/5 cursor-pointer m-auto">
        <a href="#" class="w-full block h-full">
            <img alt="blog photo" src="{!! $post->img !!}" class="h-full w-full object-cover"/>
            <div class="bg-white dark:bg-gray-800 w-full p-4">
                <p class="text-indigo-500 text-md font-medium">
                </p>
                <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                    {!! $post->title !!}
                </p>
                <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                    {!! $post->description !!}
                </p>
                <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                    {!! $post->content !!}
                </p>
            </div>
        </a>
            <h4>Display Comments</h4>
            <hr />
            @include('partials.commentsDisplay',['comments' => $post->comments, 'post_id' => $post->id])
        @auth("web")
        <form class="m-4 flex" method="post" action="{{ route('comments.store') }}">
            @csrf
            <input type="text" name="body" class="w-10/12 rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="введите коментарий"/>
            <input type="hidden" name="post_id" value="{{$post->id}}" />
            <input type="submit" class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r" value="add">

            <hr />
        </form>
        @endauth

    </div>





@endsection



