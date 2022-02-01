@foreach($comments as $comment)
    <div class="display-comment  shadow-xl rounded-md @if($comment->parent_id != null) ml-4 p-4  @endif" >
        <div class="p-2 m-2">
            <div class="min-w-full inline-flex items-center bg-gray-50 leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                <span class="h-12 inline-flex bg-pink-600 text-white rounded-full px-3 justify-center items-center">
                 <div class="flex items-center space-x-4">
                    <a href="" class="bg-pink-600 flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img src="/default_user.png" alt="tharshan_09" class="object-cover w-full h-full">
                    </a>
                    <div class="flex flex-col space-y-1">
                        {{ $comment->user->name }}
                    </div>
                </div>
                </span>
                <span class="inline-flex px-2">{{ $comment->body }}</span>
            </div>
            @auth("web")
        <form class="m-4 flex" method="post" action="{{ route('comments.store') }}">
            @csrf
            <input type="text" name="body" class="w-10/12 rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="введите коментарий"/>
        <input type="hidden" name="post_id" value="{{ $post_id }}" />
        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            <input type="submit" class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r" value="add">

            <hr />
        </form>
            @endauth
        </div>
        @include('partials.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach
