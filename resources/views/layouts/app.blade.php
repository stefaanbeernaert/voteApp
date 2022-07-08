<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
       <header class="flex items-center justify-between px-8 py-4">
           <a href="#"><img src="{{asset('img/logo.svg')}}" alt="logo"></a>
           <div class="flex items-center">
               @if (Route::has('login'))
                   <div class="px-6 py-4 ">
                       @auth
                           <form method="POST" action="{{ route('logout') }}">
                               @csrf

                               <a href="{{route('logout')}}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                   {{ __('Log Out') }}
                               </a>
                           </form>
                       @else
                           <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                           @if (Route::has('register'))
                               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif
               <a href="">
                   <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
               </a>
           </div>
       </header>

    <main class="container mx-auto max-w-custom  flex">
        <div class="w-70 mr-5">
           Add idea form goes here. sit amet, consectetur adipisicing elit. Ad cum dignissimos exercitationem odit placeat quod recusandae repellat vitae. Consequuntur corporis delectus dicta distinctio ea esse et hic id iste laboriosam laudantium maiores molestias mollitia odio officia quis reiciendis sequi temporibus tenetur, ullam unde voluptate voluptatem voluptates.
        </div>
        <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                <li><a class="border-b-4 pb-4 border-blue" href="#">All Ideas (87)</a></li>
                <li><a class="text-gray-400 transition duration-400 ease-in border-b-4 pb-3 hover:border-blue" href="#">Considering (6)</a></li>
                <li><a class="text-gray-400 transition duration-400 ease-in border-b-4 pb-3 hover:border-blue" href="#">In Progress (1)</a></li>
            </ul>
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a class="text-gray-400 transition duration-400 ease-in border-b-4 pb-3 hover:border-blue" href="#">Implemented (10)</a></li>
                    <li><a class="text-gray-400 transition duration-400 ease-in border-b-4 pb-3 hover:border-blue" href="#">Closed (55)</a></li>
                </ul>


        </nav>
            <div class="mt-8">
                {{$slot}}
            </div>
        </div>
    </main>
    </body>
</html>
