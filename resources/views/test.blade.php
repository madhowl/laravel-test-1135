@extends('layout')
@section('content')
    <h1>Привет я шаблон test</h1>


    <div class="grid grid-cols-1 gap-4">
@foreach($posts as $post)


    <div class="flex justify-center">
        <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{!! $post->img !!}" alt="" />
            <div class="p-6 flex flex-col justify-start">
                <a href=" {{route('post',$post->id)}}"><h5 class="text-gray-900 text-xl font-medium mb-2">{!! $post->title !!}</h5></a>
                <p class="text-gray-700 text-base mb-4">
                    {!! $post->description !!}
                </p>

            </div>
        </div>
    </div>
@endforeach
        </div>
    <div class="flex justify-center mt-6">
        {{ $posts->links() }}
    </div>



@endsection
