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

      @if (session('resent'))
      <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
      </div>
      @endif

      <div class="flex flex-col break-words bg-white border border-2 rounded shadow-lg">
        <div class="font-semibold bg-gray-800 rounded-t text-white py-3 px-6 mb-0">
          {{ __('Verify Your Email Address') }}
        </div>

        <div class="w-full flex flex-wrap p-6">
          <p class="leading-normal">
            {{ __('Before proceeding, please check your email for a verification link.') }}
          </p>

          <p class="leading-normal mt-6">
            {{ __('If you did not receive the email') }}, <a class="text-indigo-500 hover:text-blue-700 no-underline"
              onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
          </p>

          <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
            @csrf
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection