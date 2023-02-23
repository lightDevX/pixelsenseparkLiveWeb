@extends('layouts.visitor')

@section('content')
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex flex-col items-center relative">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-3xl sm:text-4xl font-medium title-font text-gray-800">Real Estate Photo Editing Services(HDR)</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="w-full h-auto">
      <img class="object-cover object-center rounded-lg w-full h-full shadow-2xl" alt="banner" src="{{ asset('storage/website/services/hdr/hdr_baner.jpg') }}">
    </div>
  </div>
</section>
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded w-full h-full" alt="hdr photo editing" src="{{ asset('storage/website/services/hdr/4.jpg') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <p class="mb-8 leading-relaxed">
        Pixelsense Park has earned a place of its own among various photo editing services. Our high-quality professional photo editing and real estate reconstruction services have helped us achieve this.
        The expert technicians at Pixelsense Park are very experienced in real estate photo editing services and offer very high quality of work and quality. Our image editors are proud to present their services in the real estate sector whether it be individual real estate photographers or various real estate portals and realtors.
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
          <img alt="hdr photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/hdr/1.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="hdr photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/hdr/2.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
      <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="hdr photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/hdr/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="hdr photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/hdr/6.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-800 bg-gray-100 relative">
  <div class="container px-6 md:px-12 py-24 md:py-28 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font">HDR Photo Editing Services At PixeLSense Park</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -my-10">
      <div class="p-4 md:mb-0 mb-6">
        <h2 class="text-xl title-font font-medium mb-3">What is HDR photo editing?</h2>
        <p class="text-gray-700 mb-4">
          High dynamic range (HDR) photography is a method of merging images to create a final photo. The method involves taking a lot of pictures and then sewing them.
        </p>
        <p class="text-gray-700 mb-4">
          Each image captures the scene at different exposures. The image provides accurate exposure overall after merging.
        </p>
        <p class="text-gray-700 mb-4">
          In most cases, this process requires at least three images. The first is to capture the mid-range exposure shot. Meanwhile, the second meter for highlights and the third for shadows.
        </p>
      </div>

      <div class="px-4 py-10 mx-auto">
        <div class="lg:max-w-lg w-full md:w-1/2 mb-4 ml-4 float-right">
          <img class="object-cover object-center rounded w-full h-full" alt="hdr photo editing" src="{{ asset('storage/website/services/hdr/8.jpg') }}">
        </div>
        <p class="text-gray-700 mb-4">
          <strong>Retaining Window Details</strong> -We offer highly affordable HDR retaining window services for your real estate images. Through these services, we can overlap the three different images with high and lower exposure results from one merged well-qualified image. In our high dynamic range services, we adjust the shadows and highlights, brightness, and contrast efficiently and deliver quality outcomes to our customers.
        </p>
        <p class="text-gray-700 mb-4">
          <strong>Highlights To Shadows</strong> -We manually adjust the highlights and shadows of your images using our Photoshop tools. Under such instances, HDR technology that combines with your images allows you to create a larger contrast and provide the possibility of your imaging becoming a natural environment. A combination is done through shadows and highlights, to illuminate the dark areas of real estate photos.
        </p>
        <p class="text-gray-700 mb-4">
          <strong>Blending Multiple Exposures</strong> -Blending the images which were taken at the multiple exposure levels. The image adjustment of the different exposure levels will result in perfectly stable illumination, white balanced photography. Combining multiple exposure techniques encourages your photos to get a natural look. The image is blended into specific areas and contributes to creating more natural and less noisy color images.
        </p>
        <p class="text-gray-700 mb-4">
          <strong>Perspective Image Correction</strong> -Horizontal and vertical distortions in your images cause vision correction when shooting portraits using low-quality cameras. We have an expert team of graphic designers who can digitally modify the vertical and horizontal perspectives on your business portrait and come up with interesting images that look more professional.
        </p>
        <p class="text-gray-700 mb-4">
          <strong>White Balance Adjustment</strong> -Pixelscense Park provides a high dynamic range of white balance adjustment services to our wide clients. We will provide this service for your real estate photograph as well as any entity in the photograph. Through HDR white balance adjustment services, the white things present in the photos are improved.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">When to Use HDR photo services?</h2>
        <p class="text-gray-700 mb-4">
          There are several situations where HDR photography can come in handy when used well. Some of these include interior photography, nightscapes, and dramatic skies.
        </p>
        <p class="text-gray-700 mb-4">
          Since most cases do not, your golden hour photo shows nothing like what you see in real life. Depending on how you set your exposure (manual or auto) you may find:
            <ul class="list-disc ml-4">
              <li>The sky is very bright and the front is quite dark with little details.</li>
              <li>Your foreground is well exposed, but your sky looks washed out.</li>
              <li>The sky is perfect, but the foreground is solid black.</li>
            </ul>
        </p>
        <br/>
        <h2 class="text-xl title-font font-medium mb-3">HDR Photo Editing Services at PixeLSense Park</h2>
        <p class="text-gray-700 mb-4">
          Pixelscense Park has been criticized for color cast removal, image enhancement, HDR image mixing, vision correction, photo mixing, sky change, still image enhancement, panorama stitching, and more.
          A large part of the real estate business is based on aspirations, functionality, and aspirations, the real estate sector relies heavily on various image editing techniques for improved images that can attract potential buyers.
        </p>
        <p class="text-gray-700 mb-4">
          With our real estate image editing and processing techniques, we can force your real estate image buyers to consider your offer. Our professional editors are able to provide a wide variety of real estate photo editing and blending services and our team is proud to take on specific image photo editing challenges that test their image editing skills and ideas.
          They are able to combine and complement the various photo editing processes to give you the best results at the highest quality, low turnaround time, and at the most affordable price. These are among the real estate photo editing services we offer.
        </p>
        <p class="text-gray-700 mb-4">
         Today’s consumers demand quality, and so do we at PixeLSense Park. we pride ourselves on the quality of the finished product — no matter what number images you would like edited.
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