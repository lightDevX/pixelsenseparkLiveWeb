@extends('layouts.app')

@section('content')
<div class="container p-6 md:p-0 mx-auto">
  <div class="flex flex-wrap justify-center content-center sm:min-h-screen">
    <div class="w-full flex justify-center mb-8">
      <div class="font-bold text-2xl flex items-center">
        <span class="w-6 h-6 rounded-full bg-gradient-indigo-blue mr-4"></span>
        <h1>
          <a href="{{ url('/') }}">PixeLSense Park</a>
        </h1>
      </div>
    </div>
    <div class="w-full max-w-sm">
      <div class="flex flex-col break-words bg-white rounded shadow-lg">

        <div class="font-semibold bg-gray-800 rounded-t text-white py-3 px-4 sm:px-6 mb-0">
          {{ __('Login') }}
        </div>

        <form class="w-full p-4 sm:p-6" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="flex flex-wrap mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('E-Mail Address') }}:
            </label>

            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('Password') }}:
            </label>

            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required>

            @error('password')
            <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex mb-6">
            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
              <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
              <span class="ml-2">{{ __('Remember Me') }}</span>
            </label>
          </div>

          <div class="flex flex-wrap items-center">
            <button type="submit" class="bg-indigo-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <a class="text-sm text-indigo-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
            @endif

            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-2">
              <a class="w-full text-center text-indigo-500 hover:text-blue-700 no-underline mr-4" href="{{ url('/') }}">
                {{ __('← Return') }}
              </a>
              @if (Route::has('register'))
              {{ __("Don't have an account?") }}
              <a class="text-indigo-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                {{ __('Register') }}
              </a>
              @endif
            </p>

          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection