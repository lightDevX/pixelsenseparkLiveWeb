@extends('layouts.app')

@section('content')
<section>
  <div class="container px-6 lg:px-56 py-16 mx-auto">
    <div class="text-center mb-10">
      <h1 class="text-2xl sm:text-3xl font-medium title-font mb-4">Get Your Quote</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <form class="w-full" method="POST" action="{{ route('user.quote.store') }}" id="contact_form" enctype="multipart/form-data">
      @csrf

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Name') }}:</label>
          <input id="name" type="name" class="form-input w-full @error('name') border-red-500 @enderror" name="name" value="{!! old('name', $user->name) !!}" required autocomplete="name">
          @error('name')
          <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('name') }}</p>
          @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('E-Mail Address') }}:</label>
          <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{!! old('email', $user->email) !!}" required autocomplete="email">
          @error('email')
          <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('email') }}</p>
          @enderror
        </div>
      </div>

      <div class="mb-6">
        <h2 class="text-xl sm:text-2xl font-medium title-font mb-4">Choose Service</h1>
      </div>
      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="clipping_path">
            <input type="checkbox" name="services[]" value="clipping_path" id="clipping_path" class="form-checkbox" {{ old('clipping_path') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Clipping Path') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="color_currection">
            <input type="checkbox" name="services[]" value="color_currection" id="color_currection" class="form-checkbox" {{ old('color_currection') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Color Variants & Color Currection') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="drop_shadow">
            <input type="checkbox" name="services[]" value="drop_shadow" id="drop_shadow" class="form-checkbox" {{ old('drop_shadow') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Drop shadow') }}</span>
          </label>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="ghost_mannequin">
            <input type="checkbox" name="services[]" value="ghost_mannequin" id="ghost_mannequin" class="form-checkbox" {{ old('ghost_mannequin') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Ghost Mannequin') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="image_masking">
            <input type="checkbox" name="services[]" value="image_masking" id="image_masking" class="form-checkbox" {{ old('image_masking') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Image Masking') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="jewelry_photo_editing">
            <input type="checkbox" name="services[]" value="jewelry_photo_editing" id="jewelry_photo_editing" class="form-checkbox" {{ old('jewelry_photo_editing') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Jewelry Photo Editing') }}</span>
          </label>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="product_photo_editing">
            <input type="checkbox" name="services[]" value="product_photo_editing" id="product_photo_editing" class="form-checkbox" {{ old('product_photo_editing') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Product Photo Editing') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="photo_retouching">
            <input type="checkbox" name="services[]" value="photo_retouching" id="photo_retouching" class="form-checkbox" {{ old('photo_retouching') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Photo Retouching') }}</span>
          </label>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="real_estate_photo_editing">
            <input type="checkbox" name="services[]" value="real_estate_photo_editing" id="real_estate_photo_editing" class="form-checkbox" {{ old('real_estate_photo_editing') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Real Estate Photo Editing') }}</span>
          </label>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
          <label class="inline-flex items-center text-sm text-gray-700" for="other">
            <input type="checkbox" name="services[]" value="other" id="other" class="form-checkbox" {{ old('other') ? 'checked' : '' }}>
            <span class="ml-2 font-bold">{{ __('Other') }}</span>
          </label>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="w-full px-3 mb-6 md:mb-0">
          <label for="message" class="block text-gray-700 text-xl font-semibold my-2">{{ __('Message (optional)') }}:</label>
          <textarea id="message" rows="4" type="number" class="form-input w-full @error('message') border-red-500 @enderror" name="message" value="{!! old('message', $user->message) !!}"></textarea>
          @error('message')
          <p class="text-red-500 text-xs italic mt-4">{{ $errors->first('message') }}</p>
          @enderror
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
        <div class="min-w-full px-3 mb-6 md:mb-0">
          <label for="FileUpload" class="block text-gray-700 text-xl font-semibold my-2">Upload Options</label>
          <div class="mb-2">
            <input class="form-radio" type="radio" name="upload_process" id="using-file-uploader" checked>
            <label for="using-file-uploader">Web File Uploader</label>
          </div>
          <div class="mb-4">
            <input class="form-radio" type="radio" name="upload_process" id="using-link">
            <label class="" for="using-link">Files Link</label>
          </div>

          <div id="file-upload-div">
            <input type="hidden" type="text" name="files" id="selectedFiles">
            <div id="uppy"></div>
          </div>
          <div id="link-div">
            <p class="text-gray-500 pb-3">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, quam esse recusandae corrupti at a voluptatibus vitae laboriosam ea debitis non consequuntur inventore quo quia.
            </p>
            <input type="url" name="link" id="link" class="form-input w-full @error('link') border-red-500 @enderror" value="{!! old('message', $user->link) !!}" placeholder="Provide link here.">
          </div>

        </div>
      </div>

      <button type="submit" class="flex mx-auto mt-4 md:mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded-full text-lg">Send Quote <img
          src="{{ asset('loading.gif') }}" class="loading ml-2 mt-1" alt="Sending"></button>
    </form>
  </div>
</section>
@endsection

@push('scripts')
<script>
  let fileUploader = document.getElementById('using-file-uploader');
  let fileUploaderDiv = document.getElementById('file-upload-div');
  let fileLink = document.getElementById('using-link');
  let fileLinkDiv = document.getElementById('link-div');

  (fileUploader.checked) ? showUploader() : showInput();

  fileUploader.addEventListener('click',(e) => {
    if(e.target.checked){
      showUploader();
    }
  })

  fileLink.addEventListener('click',(e) => {
    if(e.target.checked){
      showInput();
    }
  })

  function showUploader() {
    fileLinkDiv.style.display = 'none';
    fileUploaderDiv.style.display = 'block';
  }

  function showInput() {
    fileLinkDiv.style.display = 'block';
    fileUploaderDiv.style.display = 'none';
  }
</script>
@endpush