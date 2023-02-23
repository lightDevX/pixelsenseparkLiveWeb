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
          {{ __('Register') }}
        </div>

        <form class="w-full p-4 sm:p-6" method="POST" action="{{ route('register') }}">
          @csrf

          <div class="flex flex-wrap mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('Name') }}:
            </label>

            <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('E-Mail Address') }}:
            </label>

            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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

            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('Confirm Password') }}:
            </label>

            <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
          </div>

          <div class="flex flex-wrap">
            <button type="submit"
              class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-indigo-500 hover:bg-blue-700">
              {{ __('Register') }}
            </button>

            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-2">
              {{ __('Already have an account?') }}
              <a class="text-indigo-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
            </p>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection