@extends('layouts.visitor')

@section('content')
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex flex-col items-center relative">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-3xl sm:text-4xl font-medium title-font text-gray-800">Jewelry Photo Editing Services</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="w-full h-auto">
      <img class="object-cover object-center rounded-lg w-full h-full shadow-2xl" alt="banner" src="{{ asset('storage/website/services/jewelry/jewelry_banner.jpg') }}">
    </div>
  </div>
</section>
<section class="text-gray-700 body-font">
  <div class="container px-6 md:px-12 pt-24 pb-10 md:pt-32 mx-auto flex md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded w-full h-full" alt="jewelry photo editing" src="{{ asset('storage/website/services/jewelry/3.jpg') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <p class="mb-8 leading-relaxed">
        Design of the piece but also the shine and sparkle of the gemstones. Good photography, along with our superb jewelry photo editing services, makes the jewelry pieces stand out in stunning detail and drama.
      </p>
      <p class="mb-8 laeding-relaxed">
        Our jewelry photo editing services can make your jewelry photos utterly breathtaking, all while looking as realistic as possible. At PixeLSense Park, we pay attention to the smallest details, regardless of whether the jewelry piece photographed is an intricate Riviere necklace or a pair of simple stud earrings.
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
          <img alt="jewelry photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/jewelry/2.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="jewelry photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/jewelry/1.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
      <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="jewelry photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/jewelry/4.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="jewelry photo editing" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/jewelry/5.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-800 bg-gray-100 relative">
  <div class="container px-6 md:px-12 py-24 md:py-28 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font">Jewelry Photo Editing Services At PixeLSense Park</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -my-10">
      <div class="p-4 md:mb-0 mb-6">
        <h2 class="text-xl title-font font-medium mb-3">Make Your Jewelry Come to Life with Our Exceptional Jewelry Retouching Services</h2>
        <p class="text-gray-700 mb-4">
          At PixeLSense Park, we make your jewelry photos come to brilliant life, despite the conditions in which the pieces were photographed or the gear used. We ensure that your photos do justice to the beauty and uniqueness of each jewelry piece. With our high-end jewelry retouching services, your jewelry photos will catch the eye of your target audience and dazzle them.
        </p>
        <p class="text-gray-700 mb-4">
           Our retouching services are available for print, Internet marketing, or e-commerce websites. No matter where the photos end up, we guarantee that they will appear better than you imagined.
        </p>
      </div>
      <div class="px-4 py-10 mx-auto">
        <div class="lg:max-w-lg w-full md:w-1/2 mb-4 ml-4 float-right">
          <img class="object-cover object-center rounded w-full h-full" alt="jewelry photo editing" src="{{ asset('storage/website/services/jewelry/6.jpg') }}">
        </div>
        <p class="text-gray-700 mb-4">
        <strong>
          We offer an array of photo editing services, from dust cleaning to background removal, among others. Have a look at our services:
        </strong>
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Dust and Scratch Cleaning</h2>
        <p class="text-gray-700 mb-4">
          Dust is everywhere and scratches can appear om just about anything, even on brand-new products. These little imperfections can negatively affect the advertising potential of your photos. As a jewelry retouching provider, we can remove these tiny defects so that your jewelry looks flawless in photos.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Reflection Removal</h2>
        <p class="text-gray-700 mb-4">
          The gems and metals in jewelry may catch unwanted reflections. With PixeLSense Park, this isn’t a problem; we will pore over every inch of your photo and remove any reflections we notice. In the end, you can be sure that the only glow cast in the photo is the jewelries’ shine and luster.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Diamond and Gems Polishing</h2>
        <p class="text-gray-700 mb-4">
          The way that diamonds shine is truly unique, they have an inner sparkle that is gray and white and, when light bounces off of them, they reflect rainbow-colored light on other surfaces. Trying to capture this natural shine in a photograph is tricky and only a professional jewelry retouching company like PixeLSense Park can edit back any brilliance that may have been compromised in the taking of the photo. Aside from diamonds, we also edit any other precious or semi-precious gemstones to ensure beauty and brilliance.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Jewelry Shadow Creation</h2>
        <p class="text-gray-700 mb-4">
          Shadows can add depth to your jewelry photo and make your brooch or bangle stand out from the background. It takes Adobe Photoshop and Lightroom experts, like Jewelry Retouchers, to put believable shadows underneath jewelry. We can add several kinds of shadows to your image, such as the following:
          <ul class="list-disc ml-4">
            <li>
              <strong>Natural Shadow </strong> – Looks just like your jewelry’s normal shadow.
            </li>
            <li>
              <strong>Reflection Shadow </strong> – Makes it appear as though your jewelry was put on a reflective surface, like a mirror.
            </li>
            <li>
              <strong>Drop Shadow </strong> – Makes it seem like your jewelry is floating.
            </li>
          </ul>
          <br/>
          These three kinds of shadows can make your two-dimensional photo look three-dimensional. The rings and earrings in your photos will surely pop with shadows underneath them. Trust us to create perfectly balanced shadows for your jewelry pieces.
        </p>
        <br/>
        <h2 class="text-xl title-font font-medium mb-3">Jewelry Color Correction and Color Variants</h2>
        <p class="text-gray-700 mb-4">
          Less than ideal lighting can make your jewelry look dull in photos. As a jewelry retouching company, PixeLSense Park sees to it that your necklaces, bracelets, earrings, and brooches sparkle and shine in photos just as in real life. Plus, you can trust us to consult with you every step of the way to recreate the right color, shade, and brilliance of the jewelry in the photo.
        </p>
        <p class="text-gray-700 mb-4">
          Most online jewelry shops offer customized and bespoke designs and sizes for the jewelry that they carry. More often than not, they have jewelry in the same style but in different metals. Using Adobe Photoshop, we can convert a photograph of jewelry made of white gold metal into jewelry of silver, rose gold, platinum, gold-plated, or 24-karat gold metal, and vice versa. This way, you don’t have to take photos of each variation of the piece. Additionally, we have the expertise and experience to easily keep the metal colors consistent across the entire collection.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Background Cleaning and Removal</h2>
        <p class="text-gray-700 mb-4">
          To fully present the beauty of the jewelry, most online jewelry shops rely on a stand or some other form of support. Jewelry pieces like earrings, necklaces, bracelets, and rings, are usually propped from the back by a stand or other such elevation.
        </p>
        <p class="text-gray-700 mb-4">
          As an expert jewelry retouching provider, we can isolate the piece from its background. We will erase and edit out any unwanted objects and backgrounds so that the jewelry is presented on its own, as if upright without support.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Repainting Shine on Metal</h2>
        <p class="text-gray-700 mb-4">
          The metal part of jewelry is reflective and may mirror unwanted images, such as the photographer or the background. Because of the reflections, the surfaces of the piece won’t look as shiny and smooth as you would want it to. Fortunately, we can restore the metal’s sheen by manually repainting it. This will restore the metal to its natural texture and shine.
        </p>
        <h2 class="text-xl title-font font-medium mb-3">Jewelry Photo Editing Services At PixeLSense Park</h2>
        <p class="text-gray-700 mb-4">
          Our professional team is highly proficient in photo editing programs such as Adobe Lightroom, Adobe Photoshop, and Logic Pro. With our exceptional photo editing skills, we can make any jewelry photo stand out. As a jewelry retouching provider, we give your jewelry pieces the attention they deserve through our superb retouching services. We can provide whatever photo editing service you need, whatever it may be. If you need reflection removal, background cleaning, or shadow creation, among others, you can turn to us.
        </p>
        <p class="text-gray-700 mb-4">
          Rely on our dependable staff to keep you up-to-date with the progress of your project and to deliver the output right on schedule. With us, your jewelry will sparkle and shine in photographs just as do in real life. Get in touch with us today for more information on our high-end jewelry retouching services. We would love to hear from you
        </p>
        <p class="text-gray-700 mb-4">
          Today’s consumers demand quality, and so can we at PixeLSense Park. we pride ourselves on the standard of the finished product — no matter what number of photos you would like to be edited.
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