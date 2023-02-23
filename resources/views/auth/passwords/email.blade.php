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

      @if (session('status'))
      <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
        {{ session('status') }}
      </div>
      @endif

      <div class="flex flex-col break-words bg-white rounded shadow-lg">

        <div class="font-semibold bg-gray-800 rounded-t text-white py-3 px-4 sm:px-6 mb-0">
          {{ __('Reset Password') }}
        </div>

        <form class="w-full p-4 sm:p-6" method="POST" action="{{ route('password.email') }}">
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

          <div class="flex flex-wrap">
            <button type="submit" class="bg-indigo-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              {{ __('Send Password Reset Link') }}
            </button>

            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-2">
              <a class="text-indigo-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                {{ __('Back to login') }}
              </a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection