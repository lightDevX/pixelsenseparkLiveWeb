<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="google-site-verification" content="uurkx49vrrfrMvLiAAC0I9E_1v8xCXGsGf7Lq364z_U"/>
  <meta name="google" content="nositelinkssearchbox" />
  <meta name="description" content="PixeLSense Park is a leading photo editing company in Asia, Bangladesh. We are providing quality work around the clock. Cut-outs, Retouching &amp; more within one roof">
  <meta property="og:site_name" content="PixelSense Park">
  <meta property="og:url" content="https://pixelsensepark.com/">
  <meta property="og:title" content="Bulk Photo Editing for eCommerce | Image &amp; Photo Editing">
  <meta property="og:type" content="website">
  <meta property="og:description" content="PixeLSense Park is a leading photo editing company in Asia, Bangladesh. We are providing quality work around the clock. Cut-outs, Retouching &amp; more within one roof">
  <title>{{ config('app.name', 'Pixel Sense Park') }}</title>
  <link rel="canonical" href="http://pixelsensepark.com/">
  {{-- Favicons --}}
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="manifest" href="/favicon/site.webmanifest">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- schema scripts start-->
  <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "PixeLSense Park, Inc.",
        "url": "pixelsensepark.com",
        "potentialAction": [{
            "@type": "SearchAction",
            "target": "https://www.pixelsensepark.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        },
        {
            "@type": "SearchAction",
            "target": "https://www.pixelsensepark.com/service/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }]
        
    }
    </script>
    <!-- schema scripts end-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197678216-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197678216-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Ads: 384220223 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-384220223"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-384220223');
</script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-alata h-screen antialiased preload">
  <div id="app">
    {{-- header --}}
    <header class="body-font text-gray-800 w-full h-24 md:h-32 flex items-center fixed z-10 top-0 {{ url()->current() != request()->root() ? 'notHome' : null }}">
      <div class="container mx-auto px-6 md:px-12 flex items-center justify-between">
        <div class="font-bold text-2xl flex items-center logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/website/services/logo/logo-icon.png') }}" class="h-12 mr-8">
            </a>
        </div>
        <div class="flex items-center">
          <nav class="text-base hidden lg:flex items-center">
            <a href="{{ url('/') }}" class="py-2 px-3 flex text-indigo-500">HOME</a>
            <li class="relative dropdown list-none hover:text-indigo-500" id="button_moderate">
              <a class="py-2 px-3 flex items-center" href="javascript:void(false)">
                SERVICES
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </a>
              <ul class="absolute right-0 top-0 min-w-6 mt-10 py-2 rounded-lg shadow-lg bg-white z-10 hidden dropdown-hover:block">
                <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 mr-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                </svg>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service1') }}" class="px-4 py-2 flex">
                    Clipping Path Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service2') }}" class="px-4 py-2 flex">
                    Color Variants & Color Correction
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service3') }}" class="px-4 py-2 flex">
                    Drop Shadow Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service4') }}" class="px-4 py-2 flex">
                    Ghost Mannequin Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service5') }}" class="px-4 py-2 flex">
                    Image Masking Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service6') }}" class="px-4 py-2 flex">
                    Jewelry Photo Editing Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service7') }}" class="px-4 py-2 flex">
                    Photo Retouching Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service8') }}" class="px-4 py-2 flex">
                    Product Photo-editing Services
                  </a>
                </li>
                <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                  <a href="{{ route('service.service9') }}" class="px-4 py-2 flex">
                    Real Estate Photo Editing Services(HDR)
                  </a>
                </li>
              </ul>
            </li>
            <a href="{{ route('price') }}" class="py-2 px-3 flex hover:text-indigo-500">PRICING</a>
            <a href="{{ route('user.quote') }}" class="py-2 px-3 flex hover:text-indigo-500">GET QUOTE</a>
            <a href="{{ route('contact') }}" class="py-2 px-3 flex hover:text-indigo-500">CONTACT US</a>
            @if(Route::has('login'))
            @auth
            <a href="{{ isAdmin() ? url('/admin') : url('/user') }}" class="py-2 px-3 flex hover:text-indigo-500">{{ __('MY ACCOUNT') }}</a>
            @else
            <a href="{{ route('login') }}" class="py-2 px-3 flex hover:text-indigo-500">{{ __('LOGIN') }}</a>
            @endauth
            @endif
          </nav>
          <button class="lg:hidden focus:outline-none" id="toggle-btn">
            <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </header>
    {{-- mobile menu start --}}
    <nav class="text-base lg:hidden items-center text-gray-800 body-font overflow-hidden" id="mobile-menu">
      <a href="{{ url('/') }}" class="py-2 px-3 flex text-indigo-500">HOME</a>
      <li class="relative mobile-dropdown list-none hover:text-indigo-500">
        <a class="py-2 px-3 flex items-center" href="javascript:;">
          SERVICES
          <svg class="h-4 w-4 ml-auto" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <ul class="sub-dropdown border-t border-b text-xs hidden">
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service1') }}" class="px-3 py-2 flex">
              Clipping Path Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service2') }}" class="px-3 py-2 flex">
              Color Variants & Color Correction
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service3') }}" class="px-3 py-2 flex">
              Drop Shadow Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service4') }}" class="px-3 py-2 flex">
              Ghost Mannequin Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service5') }}" class="px-3 py-2 flex">
              Image Masking Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service6') }}" class="px-3 py-2 flex">
              Jewelry Photo Editing Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service7') }}" class="px-3 py-2 flex">
              Photo Retouching Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service8') }}" class="px-3 py-2 flex">
              Product Photo-editing Services
            </a>
          </li>
          <li class="whitespace-no-wrap text-gray-600 hover:text-gray-900 hover:bg-gray-100">
            <a href="{{ route('service.service9') }}" class="px-3 py-2 flex">
              Real Estate Photo Editing Services(HDR)
            </a>
          </li>
        </ul>
      </li>
      <a href="{{ route('price') }}" class="py-2 px-3 flex hover:text-indigo-500">PRICING</a>
      <a href="{{ route('user.quote') }}" class="py-2 px-3 flex hover:text-indigo-500">GET QUOTE</a>
      <a href="{{ route('contact') }}" class="py-2 px-3 flex hover:text-indigo-500">CONTACT US</a>
      @if(Route::has('login'))
      @auth
      <a href="{{ isAdmin() ? url('/admin') : url('/user') }}" class="py-2 px-3 flex hover:text-indigo-500">{{ __('MY ACCOUNT') }}</a>
      @else
      <a href="{{ route('login') }}" class="py-2 px-3 flex hover:text-indigo-500">{{ __('LOGIN') }}</a>
      @endauth
      @endif
    </nav>
    <div id="mobile-menu-overlay" class="hidden"></div>
    {{-- mobile menu end --}}

    <main>
      @yield('content')
    </main>

    {{-- footer --}}
    <footer class="text-gray-400 bg-gray-800 border-t border-gray-700 body-font overflow-hidden">
      <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
            {{-- <img src="{{ asset('storage/website/services/logo/Logo_icon.png') }}" class="h-6 mr-4"> --}}
            <span class="w-6 h-6 rounded-full bg-gradient-indigo-blue mr-4"></span>
            <span class="text-xl">PixeLSense Park, Inc.</span>
          </a>
         {{-- <p class="mt-2 text-sm text-gray-500">A leading photo editing company in Asia-Bangladesh</p> --}}
          <p class="mt-2 leading-relaxed">Bangladesh Office</p>
          <hr>
          <p class="leading-relaxed">House: 57 (4<sup>th</sup>Floor); 1/1, Puran Hospital Lean; Gaibandha <br/> Bangladesh</p><br/>
          <p class="leading-relaxed">Canada Office</p>
          <hr>
          <p class="leading-relaxed">9750 82 Ave NW, Edmonton, Alberta, T6E1Y5 <br /> Canada</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">INFORMATION</h2>
            <nav class="list-none mb-10">
              <li><a class="text-gray-500 hover:text-white" href="{{ route('about') }}">About Us</a></li>
              <li><a class="text-gray-500 hover:text-white" href="{{ route('terms') }}">Terms of Service</a></li>
              <li><a class="text-gray-500 hover:text-white" href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
              <li><a class="text-gray-500 hover:text-white" href="{{ url('blog') }}">Blog</a></li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SUPPORT</h2>
            <nav class="list-none mb-10">
              <li><a class="text-gray-500 hover:text-white">Help & Support</a></li>
              <li><a class="text-gray-500 hover:text-white">Trust & Safety</a></li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-2/4 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SERVICES</h2>
            <nav class="list-none mb-10">
              <li><a href="{{ route('service.service1') }}" class="text-gray-500 hover:text-white">Clipping Path</a></li>
              <li><a href="{{ route('service.service2') }}" class="text-gray-500 hover:text-white">Color Variants</a></li>
              <li><a href="{{ route('service.service3') }}" class="text-gray-500 hover:text-white">Drop Shadow</a></li>
              <li><a href="{{ route('service.service4') }}" class="text-gray-500 hover:text-white">Ghost Mannequin</a></li>
              <li><a href="{{ route('service.service5') }}" class="text-gray-500 hover:text-white">Image Masking</a></li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-2/4 w-full px-4">
            <nav class="list-none mb-10 mt-8">
              <li><a href="{{ route('service.service6') }}" class="text-gray-500 hover:text-white">Jewelry Photo Editing</a></li>
              <li><a href="{{ route('service.service7') }}" class="text-gray-500 hover:text-white">Photo Retouching</a></li>
              <li><a href="{{ route('service.service8') }}" class="text-gray-500 hover:text-white">Product Photo-editing</a></li>
              <li><a href="{{ route('service.service9') }}" class="text-gray-500 hover:text-white">Real Estate Photo Edting</a></li>
            </nav>
          </div>
        </div>
      </div>
      <div class="bg-gray-900">
        <div class="container mx-auto py-4 px-6 md:px-12 flex flex-wrap flex-col sm:flex-row">
          <p class="text-gray-600 text-sm text-center sm:text-left">&copy; 2017- <?php echo date("Y");?> | PixeLSense Park, Inc.</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
            <a href="https://www.facebook.com/pixelsensepark" class="text-gray-600" target="_blank">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a href="https://twitter.com/IncPixelsense" class="ml-3 text-gray-600" target="_blank">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a href="https://www.instagram.com/pixelsensepark" class="ml-3 text-gray-600" target="_blank">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a href="https://www.linkedin.com/company/pixelsensepark" class="ml-3 text-gray-600" target="_blank">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
  </div>

  @stack('scripts')
</body>

</html>