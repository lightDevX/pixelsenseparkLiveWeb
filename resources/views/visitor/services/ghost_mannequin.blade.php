@extends('layouts.visitor')

@section('content')
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex flex-col items-center relative">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-3xl sm:text-4xl font-medium title-font text-gray-800">Ghost Mannequin Services</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="w-full h-auto">
      <img class="object-cover object-center rounded-lg w-full h-full shadow-2xl" alt="banner" src="{{ asset('storage/website/services/mannequin/mannequin_baner.jpg') }}">
    </div>
  </div>
</section>
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded w-full h-full" alt="mannequin" src="{{ asset('storage/website/services/mannequin/7.jpg') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
    <p class="mb-8 leading-relaxed">
      The ghost mannequin effect is a post-production technique often used to show clothing and accessories for e-commerce stores.
    </p>
    <p class="mb-8 leading-relaxed">
      During the photoshoot, all products need to be shot on a dummy doll or a mannequin. Firstly, the product is captured from the front then it's to be turned inside out to get a photo of the tags and also the lower back. During the post-production, the mannequin will be 
      edited out of the image to focus the eye on the particular product.
    </p>
    <p class="mb-8 leading-relaxed">
      In the next step, these 2 photos will be combined by getting stitched together on editing software like photoshop. More specifically, the front of the clothing needs to be placed on the back to provide the looks that an invisible person is wearing the garments.
      The combination of the two photos will create the product look realistic and provides it a 3D look. It is vital to capture all photos from an equivalent angle and distance to facilitate the editing method.
    </p>
  </div>
  </div>
</section>
<section class="text-gray-800 body-font">
  <div class="container px-6 md:px-12 py-24 md:pt-28 md:pb-32 mx-auto flex flex-wrap">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font text-gray-800 uppercase">Our sample works</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
    <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="mannequin" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/mannequin/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="mannequin" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/mannequin/1.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
      <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="mannequin" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/mannequin/2.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="mannequin" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/mannequin/4.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-800 bg-gray-100 relative">
  <div class="container px-6 md:px-12 py-24 md:py-28 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font">Ghost Mannequin Services At PixeLSense Park</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -my-10">
      <div class="p-4 md:mb-0 mb-6">
        <h2 class="text-xl title-font font-medium mb-3">Advantages of using a ghost mannequin.</h2>
        <ul class="list-disc ml-4">
          <li>It is a cost-effective technique that gives a consistent look to the website.</li>
          <li>Helps customer not get distracted by the model or background.</li>
          <li>Online shoppers have the ability to visualise the product and imagine how it would look on them.</li>
          <li>The mannequin gives the clothing article a shape resembling a person without the cost of a real model. </li>
          <li>Less editing time of the photos as the mannequin is instantly removed. A traditional model needs more editing on their body and face to remove imperfections.</li>
        </ul>
      </div>
      <div class="px-4 py-10 mx-auto">
        <div class="lg:max-w-lg w-full md:w-1/2 mb-4 ml-4 float-right">
          <img class="object-cover object-center rounded w-full h-full" alt="mannequin" src="{{ asset('storage/website/services/mannequin/63.jpg') }}">
        </div>
        <h2 class="text-xl title-font font-medium mb-3">Disadvantages of using a ghost mannequin.</h2>
        <ul class="list-disc ml-4">
          <li>Models can promote the style and identity of the company where mannequins can’t.</li>
          <li>Ghost mannequins do not promote a branding strategy.</li>
        </ul><br/>
        <p class="text-gray-700 mb-4">
          Typically, it's best to use a combination of ghost mannequin and live models. The ghost mannequin provides consistency for your main product thumbnails and photos on websites or in catalogs, However, live models add a human and relatability factor. It additionally puts the product into context for shoppers.
        </p>

        <h2 class="text-xl title-font font-medium mb-3">Ghost mannequin services at PixeLSense Park</h2>
        <p class="text-gray-700 mb-4">
          Whether you shot the image using a clear, wire, or non-transparent mannequin, we can work with your files to achieve the most natural-looking image. We’ll help you bring your products to life, add texture, and ultimately help you grow your business — all while taking a tedious task off your hands.
        </p>
        <p class="text-gray-700 mb-4">
          To this date, we’ve edited more than 6 million images — and counting. That means you receive images edited by highly skilled and experienced photo editors. Trust us and let us help you meet even the most aggressive deadlines, whether you have a job of one or one thousand photos.
        </p>
        <p class="text-gray-700 mb-4">
          We know how important it is to achieve real-looking images so you can sell more products. Online stores, print catalogs — and everything in between.
        </p>
      </div>
    </div>
</section>
{{-- how it works --}}
<section class="text-gray-400 bg-gray-800 relative">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font uppercase">Why PixeLSense Park?</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/quality.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Quality</h2>
          <p class="leading-relaxed text-base">Clipping paths accomplished with poor quality and no attention to detail will hurt your reputation and your brand.
            Our business is made upon glorious clipping path and retouching services that convert customers and impress clients.
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/time.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Time</h2>
          <p class="leading-relaxed text-base">We’ll assist you to meet your tightest deadlines. We’ll provide quick quotes, speedy customer service, and fast results. In fact, we tend to deliver a
            quote for each project in 45 minutes or less.
            As per the clients' requirement, we'd to deliver the soonest time possible. Our standard turnaround time is 24 hours.
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/price.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Price</h2>
          <p class="leading-relaxed text-base">We offer high-quality photo editing services at affordable prices. Affordable clipping path and photo retouching services are what we’re renowned for,
            however, that doesn’t mean our quality suffers.
            Whether you've one photo or a batch of thousands, you’ll have no problem fitting our services into your budget.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- get free quote --}}
<section class="bg-gray-100 text-gray-800 body-font overflow-hidden">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font text-gray-800 uppercase">Get Your Free Quote Now</h2>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fill out this form, Within or less than 45 minutes of the request for a quote, you'll get an email for acknowledgment with your customized
        quote.</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex lg:space-x-4 justify-center w-full flex-wrap mx-auto px-8 lg:px-0 -m-4">
      <input name="quantity" min="0" class="form-input w-full lg:w-auto rounded-full border-gray-700 mb-4" placeholder="Quantity*" type="number">
      <select name="service" class="form-select w-full lg:w-auto rounded-full border-gray-700 mb-4">
        <option selected disabled class="text-gray-400">Choose a Select*</option>
        <option value="1">Clipping Path Services</option>
        <option value="1">Color Variants & Color Correction</option>
        <option value="1">Drop Shadow Services</option>
        <option value="1">Ghost Mannequin Services</option>
        <option value="1">Image Masking Services</option>
        <option value="1">Jewelry Photo Editing Services</option>
        <option value="1">Product Photo-editing Services</option>
        <option value="1">Photo Retouching Services</option>
        <option value="1">Real Estate Photo Editing Services(HDR)</option>
      </select>
      <input name="email" class="form-input w-full lg:w-auto rounded-full border-gray-700 mb-4" placeholder="Email*" type="email">
      <a href="{{ route('user.quote') }}" class="btn-brand focus:outline-none w-full lg:w-auto rounded-full text-lg text-center whitespace-no-wrap mb-4">Get Your Quote</a>
    </div>
  </div>
</section>
@endsection