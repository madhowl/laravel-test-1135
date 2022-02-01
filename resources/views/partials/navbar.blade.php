<div class="mb-2 bg-gray-800 text-white">
    <div class="flex flex-col md:flex-row px-4 font-medium items-center tracking-wide">
        <div class="flex md:mt-0 mt-4 items-center">
            <svg viewBox="0 0 32 32" stroke="currentColor" stroke-width="4" stroke-linecap="round" class="w-8 h-8">
                <path
                    d="M28 11v11M22 3v26M16 11v11M10 3v26M4 11v11"
                    transform="translate(16, 16) rotate(45) scale(.75, 1) translate(-16, -16)"
                />
            </svg>
            <a class="md:my-4 md:mr-4 px-2 rounded text-2xl" href="#">Laravel APP</a>
        </div>
        <ul class="flex flex-col md:flex-row mx-auto md:mt-0 mt-2 list-disc md:list-none">
            <li class="md:mx-3 md:py-6 pb-2">
                <a class="hover:text-gray-200 focus:text-gray-200 text-white" href="{{ route('posts')}}">
                    Posts
                </a>
            </li>
            <li class="md:mx-3 md:py-6 pb-2">
                <a class="hover:text-gray-200 focus:text-gray-200 text-white" href="/contacts">
                    Contact
                </a>
            </li>
        </ul>
        <div class="flex">
            @auth("web")
            <div class="flex items-center justify-between mr-4 ">
                <div class="flex items-center space-x-4">
                    <a href="" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img src="/default_user.png" alt="tharshan_09" class="object-cover w-full h-full"></a>
                    <div class="flex flex-col space-y-1">
                        {{ Auth::user()->name }}
                    </div>
                </div>

            </div>


                <a class="md:my-4 mt-2 mr-2 md:mr-4 mb-4 px-4 py-2 bg-gray-200 hover:bg-gray-300 border-2 border-gray-200 hover:border-gray-300 rounded shadow-lg text-gray-800" href="{{route('logout')}}">
                    Выйти
                </a>
            @endauth

            @guest("web")
                    <a class="md:my-4 mt-2 mr-2 md:mr-4 mb-4 px-4 py-2 bg-gray-200 hover:bg-gray-300 border-2 border-gray-200 hover:border-gray-300 rounded shadow-lg text-gray-800" href="{{route('login')}}">
                        Войти
                    </a>
                    <a class="md:my-4 mt-2 mb-4 px-4 py-2 bg-purple-600 hover:bg-purple-700 border-2 border-purple-600 hover:border-purple-700 rounded shadow-lg text-white" href="{{route('register')}}">
                        Зарегистрироваться
                    </a>
            @endguest
        </div>
        <button class="absolute top-0 right-0 m-5 px-1 md:hidden rounded hover:text-gray-200 focus:text-gray-200 text-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
        </button>
    </div>
</div>
