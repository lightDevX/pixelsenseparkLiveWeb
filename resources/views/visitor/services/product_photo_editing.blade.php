@extends('layouts.visitor')

@section('content')
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex flex-col items-center relative">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-3xl sm:text-4xl font-medium title-font text-gray-800">Product Photo-editing Services</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="w-full h-auto">
      <img class="object-cover object-center rounded-lg w-full h-full shadow-2xl" alt="banner" src="{{ asset('storage/website/services/product/product_baner.jpg') }}">
    </div>
  </div>
</section>
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded w-full h-full" alt="product photo editing" src="{{ asset('storage/website/services/product/5.jpg') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <p class="mb-8 leading-relaxed">
        Ecommerce is more popular than ever and online ordering is heavily influenced by visuals, so it's important to take high-quality product photography. Customers who are buying online often, will not have the opportunity to hold the product in person, feel the materials, and set the standard in a realistic way so they make a decision based on the photography of the product. Don't be afraid of the thought of editing product photos is irresistible to you. We're going to show you some serious game-changers when it comes to the editing process!
      </p>
      <p class="mb-8 leading-relaxed">
        Ecommerce and product photo-editing services are helpful for all kinds of situations. You do not have the time, group, or bandwidth to edit your eCommerce photos internally. And if you have a lot of products, it is not uncommon to edit photos of thousands of products. Selling in different marketplaces, each with its own needs, makes the job even bigger.
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
          <img alt="product photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/product/1.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="product photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/product/2.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
      <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="product photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/product/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="product photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/product/4.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-800 bg-gray-100 relative">
  <div class="container px-6 md:px-12 py-24 md:py-28 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font">Product Photo-editing Services At PixeLSense Park</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -my-10">
      <div class="p-4 md:mb-0 mb-6">
        <h2 class="text-xl title-font font-medium mb-3">Improve your online Marketing and Grow your business</h2>
        <p class="text-gray-700 mb-4">
          Product photos help you sell. After all, when customers see products, they are more likely to trust some online shop. They need to make sure they are buying quality items, this is a high-quality picture offer.
        </p>
        <p class="text-gray-700 mb-4">
          We help you increase your ROI by making sure your product images are of excellent quality. Our eCommerce product image editing service prevents you from excluding potential sales due to medium sales photos.
        </p>
      </div>

      <div class="px-4 py-10 mx-auto">
        <div class="lg:max-w-lg w-full md:w-1/2 mb-4 ml-4 float-right">
          <img class="object-cover object-center rounded w-full h-full" alt="product photo editing" src="{{ asset('storage/website/services/product/6.jpg') }}">
        </div>
        <h2 class="text-xl title-font font-medium mb-3">Quality Ecommerce Photo Retouching Service</h2>
        <p class="text-gray-700 mb-4">
          Drawing enduring techniques such as drawing and painting serve as the foundation of our created art. This ensures that the images will still look realistic when we adjust the color or remove any background.
        </p>
        <p class="text-gray-700 mb-4">
          We have also invested in advanced tools and technologies that enhance the skills of our digital artists and editors. Using advanced editing tools, we can easily adapt to a wide variety of photo editing needs and reach more clients around the world.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">When to customize photos of your product</h2>
        <p class="text-gray-700 mb-4">
          <ul class="list-disc ml-4">
            <li>If you sell in various online marketplaces such as Amazon, eBay, Etsy or more, you need your edited images to meet your photo requirements.</li>
            <li>To create a white background for a photo of your product - 38% of online shoppers prefer to see your product in a simple background.</li>
            <li>When you need to remove the background from an image in order to display the products separately and more clearly.</li>
            <li>To resize a huge batch of product photos to speed up the loading of your online store.</li>
            <li>Create a large batch of main product photos, detailed zoom-in images and thumbnails.</li>
            <li>You need to optimize the quality of your product photos to create a better shopping experience for customers.</li>
            <li>If you need to optimize product photos for search, you can edit them to get the right size, quality, file name, and well tags.</li>
          </ul>
          <br/>
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Product Photo-editing Services at PixeLSense Park</h2>
        <p class="text-gray-700 mb-4">
          One of the most important points of eCommerce photo reconstruction is the emphasis on perfecting even the smallest details. PixeLSense Parks' team has enhanced all the features so that potential customers can easily spot the subtleties of the product. For example, if your shoe has an artistic detail that looks a bit dull in the photo, we extend the field of art to life throughout it.
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
            however, that doesn’t mean our quality suffers. Whether you've one photo or a batch of thousands, you’ll have no problem fitting our services into your budget.
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