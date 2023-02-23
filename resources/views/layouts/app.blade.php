<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Pixel Sense Park') }}</title>
  {{-- Favicons --}}
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset("favicon/apple-touch-icon.png") }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset("favicon/favicon-32x32.png") }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset("favicon/favicon-16x16.png") }}">
  <link rel="manifest" href="{{asset("favicon/site.webmanifest") }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="https://releases.transloadit.com/uppy/v1.24.0/uppy.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen antialiased preload">
  @unless (singlePage())
  <header class="w-full h-16 flex items-center bg-gray-800 text-white shadow">
    <div class="container mx-auto px-6 md:px-12 flex items-center justify-between">
      <div class="font-bold text-2xl flex items-center">
        {{-- <img src="{{ asset('storage/website/services/logo/Logo_icon.png') }}" class="h-6 mr-4"> --}}
        <span class="w-6 h-6 rounded-full bg-gradient-indigo-blue mr-4"></span>
        <a href="{{ url('/') }}">PixeLSense Park</a>
      </div>
      <div class="flex items-center">
        <nav class="text-base hidden lg:flex items-center">
          @guest
          <a class="py-2 px-3 flex hover:text-indigo-500" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
          <a class="py-2 px-3 flex hover:text-indigo-500" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
          @else

          @if (isAdmin())
          <li class="relative dropdown list-none hover:text-indigo-500">
            <a class="py-2 px-3 flex items-center uppercase" href="{{ url('admin/blog') }}">
              Blog
            </a>
          </li>
          <li class="relative dropdown list-none hover:text-indigo-500">
            <a class="py-2 px-3 flex items-center uppercase" href="{{ route('admin.quotes.index') }}">
              QUOTE REQUESTS
              @if (newQuoteCount() > 0)
              <span class="bg-white px-1 rounded bg-indigo-500 text-white text-xs ml-2">{{ newQuoteCount() }}</span>
              @endif
            </a>
          </li>
          @else
          <li class="relative dropdown list-none hover:text-indigo-500">
            <a class="py-2 px-3 flex items-center uppercase" href="{{ route('user.quote') }}">
              GET QUOTE
            </a>
          </li>
          @endif


          <li class="relative dropdown list-none hover:text-indigo-500">
            <a class="py-2 px-3 flex items-center uppercase" href="javascript:void(0)">
              {{ Auth::user()->name }}
              <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <ul class="absolute right-0 top-0 min-w-6 mt-10 py-2 rounded-md shadow-md bg-white z-10 hidden dropdown-hover:block">
              <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 mr-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
              </svg>
              <li class="whitespace-no-wrap text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                <a href="{{ isAdmin() ? route('admin.settings') : route('user.settings') }}" class="px-4 py-2 flex">{{ __('SETTINGS') }}</a>
              </li>
              <li class="whitespace-no-wrap text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                <a href="{{ route('logout') }}" class="px-4 py-2 flex" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          @endguest
        </nav>
        <button class="lg:hidden focus:outline-none" id="toggle-btn">
          <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>

  {{-- mobile menu start --}}
  <nav class="text-base lg:hidden items-center text-gray-800 body-font overflow-hidden" id="mobile-menu">
    @guest
    <a class="py-2 px-3 flex hover:text-indigo-500" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
    <a class="py-2 px-3 flex hover:text-indigo-500" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
    @else

    @if (isAdmin())
    <li class="relative dropdown list-none hover:text-indigo-500">
      <a class="py-2 px-3 flex items-center uppercase" href="{{ url('admin/blog') }}">
        Blog
      </a>
    </li>
    <li class="relative dropdown list-none hover:text-indigo-500">
      <a class="py-2 px-3 flex items-center uppercase" href="{{ route('admin.quotes.index') }}">
        QUOTE REQUESTS
        @if (newQuoteCount() > 0)
        <span class="bg-white px-1 rounded bg-indigo-500 text-white text-xs ml-2">{{ newQuoteCount() }}</span>
        @endif
      </a>
    </li>
    @else
    <li class="relative dropdown list-none hover:text-indigo-500">
      <a class="py-2 px-3 flex items-center uppercase" href="{{ route('user.quote') }}">
        GET QUOTE
      </a>
    </li>
    @endif


    <li class="mobile-dropdown list-none hover:text-indigo-500">
      <a class="py-2 px-3 flex items-center uppercase" href="javascript:;">
        {{ Auth::user()->name }}
        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </a>
      <ul class="bg-gray-100 hidden block">
        <li class="whitespace-no-wrap text-xs text-gray-600 hover:text-gray-900 hover:bg-gray-100">
          <a href="{{ isAdmin() ? route('admin.settings') : route('user.settings') }}" class="px-4 py-2 flex">{{ __('SETTINGS') }}</a>
        </li>
        <li class="whitespace-no-wrap text-xs text-gray-600 hover:text-gray-900 hover:bg-gray-100">
          <a href="{{ route('logout') }}" class="px-4 py-2 flex" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
    @endguest
  </nav>
  <div id="mobile-menu-overlay" class="hidden"></div>
  {{-- mobile menu end --}}
  @endunless

  @yield('content')

  @include('layouts/components/alert');

  @stack('scripts')
</body>

</html>