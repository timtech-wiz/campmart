<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
        
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-800 h-screen antialiased leading-none font-sans">
        <div id="app">
            <header class="bg-gray-900 py-3">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <nav class="space-x-4 text-gray-300 text-sm font-semibold sm:text-base">
                        {{-- <a class="no-underline hover:underline" href="#">Sign in</a>
                        <a class="no-underline hover:underline" href="#">Create an account</a> --}}
                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            {{-- <span>{{ Auth::user()->name }}</span> --}}
                            <a class="no-underline hover:underline" href="/home">{{ __('Home') }}</a>

    
                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </nav>
                </div>
            </header>

            <header class="bg-gray-600 py-5">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        {{-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            Logo
                        </a>
                    </div>
                    <nav class="space-x-4 text-gray-300 text-sm font-semibold sm:text-base">
                        <a class="no-underline hover:underline" href="#">Search</a>
                        <a class="no-underline hover:underline" href="#">Categories</a>
                        <a class="no-underline hover:underline" href="#">Cart</a> --}}

                        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative inline-block text-left">
    <div  class="flex justify-between">
        @for($i=0; $i<10; $i++)
      <a class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
        Categories
        <!-- Heroicon name: solid/chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </a>
    @endfor
    </div>
  
     
    {{-- <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
        <form method="POST" action="#" role="none">
          <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
        </form>
      </div>
    </div> --}}
  </div>
                    </nav>
                </div>
            </header>
    
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>