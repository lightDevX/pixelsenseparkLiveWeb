@extends('layouts.visitor')

@section('content')
<section class="text-gray-700 body-font relative">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto flex sm:flex-no-wrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-4 lg:p-10 flex items-end justify-start relative sm:h-auto" style="height: 30rem">
      {{-- <iframe class="absolute inset-0" style="filter: grayscale(0.6) contrast(1) opacity(0.6);" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.27584384061!2d89.54669351465165!3d25.32852318383529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd233c1d25ae27%3A0xb2c3d1aeea221b39!2sPixeLSense%20Park%20Inc!5e0!3m2!1sen!2sbd!4v1604745531266!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0"></iframe> --}}
      <iframe class="absolute inset-0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.27584384061!2d89.54669351465165!3d25.32852318383529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd233c1d25ae27%3A0xb2c3d1aeea221b39!2sPixeLSense%20Park%20Inc!5e0!3m2!1sen!2sbd!4v1604745531266!5m2!1sen!2sbd"
        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <div class="bg-white relative flex flex-wrap py-3 w-full shadow-md rounded-sm">
        <div class="lg:w-1/2 px-3 md:border-r">
          <p class="leading-relaxed text-xs lg:text-sm">House: 57 (4<sup>th</sup>Floor); 1/1, Puran Hospital Lean; Gaibandha <br /> Bangladesh</p>
        </div>
        <div class="lg:w-1/2 px-3 mt-2 lg:mt-0">
          <a href="https://wa.me/01713788801/?text=Hello There, Whatsup" target="_blank" class="leading-relaxed text-xs lg:text-sm flex items-center">
            <svg class="h-5 w-5" viewBox="-1 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m10.894531 512c-2.875 0-5.671875-1.136719-7.746093-3.234375-2.734376-2.765625-3.789063-6.78125-2.761719-10.535156l33.285156-121.546875c-20.722656-37.472656-31.648437-79.863282-31.632813-122.894532.058594-139.941406 113.941407-253.789062 253.871094-253.789062 67.871094.0273438 131.644532 26.464844 179.578125 74.433594 47.925781 47.972656 74.308594 111.742187 74.289063 179.558594-.0625 139.945312-113.945313 253.800781-253.867188 253.800781 0 0-.105468 0-.109375 0-40.871093-.015625-81.390625-9.976563-117.46875-28.84375l-124.675781 32.695312c-.914062.238281-1.84375.355469-2.761719.355469zm0 0"
                fill="#e5e5e5" />
              <path
                d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"
                fill="#fff" />
              <path
                d="m19.34375 492.625 33.277344-121.519531c-20.53125-35.5625-31.324219-75.910157-31.3125-117.234375.050781-129.296875 105.273437-234.488282 234.558594-234.488282 62.75.027344 121.644531 24.449219 165.921874 68.773438 44.289063 44.324219 68.664063 103.242188 68.640626 165.898438-.054688 129.300781-105.28125 234.503906-234.550782 234.503906-.011718 0 .003906 0 0 0h-.105468c-39.253907-.015625-77.828126-9.867188-112.085938-28.539063zm0 0"
                fill="#64b161" />
              <g fill="#fff">
                <path
                  d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0" />
                <path
                  d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0"
                  fill-rule="evenodd" />
              </g>
            </svg>
            <span class="ml-2">01713788801</span>
          </a>
          <a href="skype:live:pixelsensepark?chat" class="leading-relaxed text-xs lg:text-sm flex items-center mt-1">
            <svg class="h-5 w-5" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366.936.495 2.004.777 3.139.777 4.949 0 8.118-5.133 5.947-9.453zm-11.213 5.332c-2.342 0-4.63-.565-5.984-2.499-2.018-2.854.643-4.282 1.949-3.194 1.09.919.748 3.142 3.949 3.142 1.411 0 3.153-.602 3.153-2.001 0-2.815-6.245-1.483-8.728-4.552-.912-1.124-1.084-3.107.036-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.421 1.202 8.75.827 8.75 5.603-.008 3.357-3.247 4.875-6.703 4.875z"
                fill="#03a9f4" />
            </svg>
            <span class="ml-2">PixeLSense Park</span>
          </a>
          {{-- <p class="leading-relaxed text-xs lg:text-sm flex items-center mt-1">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
            <span class="ml-2">01713788801</span>
          </p> --}}
        </div>
      </div>
    </div>
    
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full mt-8 md:mt-0">
      <h1 class="text-gray-900 text-lg mb-1 font-medium title-font">Get In Touch</h1>
      <p class="leading-relaxed mb-5 text-gray-600">Whether you are exploring options to scale your existing photography business or looking to get into the business, our team is happy to support you
        any way we can.</p>
      <input name="name" value="{{ old('name') }}" form="contact-form" class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name*" type="text" required>
      @error('name')
      <span class="text-red-500 text-xs">{{ $message }}</span>
      @enderror
      <input name="email" value="{{ old('email') }}" form="contact-form" class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mt-4" placeholder="Email*" type="email" required>
      @error('email')
      <span class="text-red-500 text-xs">{{ $message }}</span>
      @enderror
      <textarea name="message" form="contact-form" class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mt-4 resize-none"
        placeholder="Message*">{{ old('name') }}</textarea>
      @error('message')
      <span class="text-red-500 text-xs">{{ $message }}</span>
      @enderror
      <button type="submit" form="contact-form" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-4">Send</button>
      <p class="text-xs text-gray-500 mt-3">PixeLSense Park, Inc. is a leading photo editing company in Asia, Bangladesh. We are committed to providing quality work with the most competitive price.
      </p>

      <form action="{{ route('contact.form') }}" method="POST" id="contact-form">
        @csrf
      </form>
    </div>
  </div>
</section>
@endsection