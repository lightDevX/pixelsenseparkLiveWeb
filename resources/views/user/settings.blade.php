@extends('layouts.app')

@section('content')
<section>
  <div class="container px-6 md:px-12 py-16 mx-auto">
    <div class="text-center mb-10">
      <h1 class="text-2xl sm:text-3xl font-medium title-font mb-4">Settings</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 w-full md:w-1/2">
        <div class="border border-gray-400 rounded p-6">
          <form class="w-full" method="POST" action="{{ route('user.settings') }}">
            @csrf
            <div class="mb-6">
              <h2 class="text-xl sm:text-2xl font-medium title-font mb-4">Account Information</h1>
            </div>
            <div class="w-full mb-6">
              <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Name') }}:</label>
              <input id="name" type="name" class="form-input w-full @error('name') border-red-500 @enderror" name="name" value="{!! old('name', $user->name) !!}" required autocomplete="name">
              @error('name')
              <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('name') }}</p>
              @enderror
            </div>
            <div class="w-full mb-6">
              <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('E-Mail Address') }}:</label>
              <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{!! old('email', $user->email) !!}" required autocomplete="email">
              @error('email')
              <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('email') }}</p>
              @enderror
            </div>
            <div class="w-full mb-6">
              <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Phone Number') }}:</label>
              <input id="phone" type="phone" class="form-input w-full @error('phone') border-red-500 @enderror" name="phone" value="{!! old('phone', $user->phone) !!}" autocomplete="phone">
              @error('phone')
              <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('phone') }}</p>
              @enderror
            </div>
            <button type="submit" class="flex mx-auto mt-8 btn-brand rounded-full text-lg">Save Changes</button>
          </form>
        </div>
      </div>
      <div class="p-4 w-full md:w-1/2">
        <div class="border border-gray-400 rounded p-6">
          <form class="w-full" method="POST" action="{{ route('user.change.password') }}">
            @csrf
            <div class="mb-6">
              <h2 class="text-xl sm:text-2xl font-medium title-font mb-4">Change Password</h1>
            </div>
            <div class="w-full mb-6">
              <label for="current_password" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Current Password') }}:</label>
              <input id="current_password" type="password" class="form-input w-full @error('current_password') border-red-500 @enderror" name="current_password"
                value="{!! old('current_password') !!}">
              @error('current_password')
              <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('current_password') }}</p>
              @enderror
            </div>
            <div class="w-full mb-6">
              <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('New Password') }}:</label>
              <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="password">
              @error('password')
              <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('password') }}</p>
              @enderror
            </div>
            <div class="w-full mb-6">
              <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Confirm Password') }}:</label>
              <input id="password_confirmation" type="password" class="form-input w-full @error('password_confirmation') border-red-500 @enderror" name="password_confirmation" required
                autocomplete="password">
            </div>
            <button type="submit" class="flex mx-auto mt-8 btn-brand rounded-full text-lg">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection