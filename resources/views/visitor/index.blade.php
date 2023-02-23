@extends('layouts.visitor')

@push('scripts')
  <script>
    document.getElementById('offer_modal_close_btn').addEventListener('click', function() {
      document.getElementById('offer_modal').classList.add('hidden');
    });
  </script>
@endpush

@section('content')

<div id="offer_modal" class="mx-auto space-y-4 w-full h-screen fixed flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-black bg-opacity-50">
  <div class="max-w-screen-sm md:max-w-screen-md max-h-screen rounded-2xl relative">
    <img src="{{ asset('images/Pixelsensepark.jpg') }}" alt="" class="h-full w-full rounded-2xl">
    <button class="absolute top-0 right-0 mr-2 mt-2 md:mr-4 md:mt-4 focus:outline-black" id="offer_modal_close_btn">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
</div>

{{-- /slider --}}
<section class="relative bg-gradient-gray-white text-gray-800 body-font overflow-hidden">
  <div class="container px-6 md:px-12 pt-32 pb-24 md:py-40 mx-auto flex flex-col-reverse md:flex-row items-center relative z1">
    <div class="md:w-2/5 flex flex-col items-start mt-8 md:mt-0">
      <h1 class="text-4xl lg:text-4xl leading-normal mb-5"><strong class="font-semibold">Making Image</strong> <br> Taste Better</h1>
      <p class="mb-6 md:mb-20 lg:text-lg">Hand-Drawn clipping path and image-editing services specializing in eCommerce and product photography <br>— all starting at just $0.29 USD/image</p>
      <a href="{{ route('user.quote') }}" class="font-semibold text-lg rounded-full btn-brand">Start Free Trial</a>
    </div>
    <div class="md:w-3/5">
      <svg id="f2557a61-56ef-4ee7-9811-4cdcc73688e4" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1121.80595 699.0818">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" style="stop-color:#f8f9fa;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#667fea;stop-opacity:1" />
          </linearGradient>
        </defs>
        <circle cx="852.80585" cy="367.99943" r="253.9999" fill="#f8f9fa" />
        <circle cx="137.80597" cy="97.00003" r="97.00003" fill="#ff6584" />
        <circle cx="311.80585" cy="266.99943" r="253.9999" fill="url(#grad1)" />
        <ellipse cx="299.80595" cy="520" rx="279" ry="15" fill="#3f3d56" />
        <ellipse cx="243.80595" cy="520.51724" rx="209" ry="10.34483" opacity="0.1" />
        <ellipse cx="842.80595" cy="624.5" rx="279" ry="16.5" fill="#3f3d56" />
        <ellipse cx="786.80595" cy="625.06897" rx="209" ry="11.37931" opacity="0.1" />
        <ellipse cx="400.90297" cy="586" rx="178.04348" ry="9" fill="#3f3d56" />
        <ellipse cx="85.90297" cy="556" rx="85.90297" ry="4.34235" fill="#3f3d56" />
        <ellipse cx="952.92685" cy="691" rx="159.8791" ry="8.0818" fill="#3f3d56" />
        <rect x="615.80595" y="433" width="320" height="190" fill="#3f3d56" />
        <circle cx="718.80595" cy="530" r="72" fill="#6c63ff" />
        <rect x="812.80595" y="463" width="24" height="24" fill="#6c63ff" />
        <rect x="842.80595" y="463" width="24" height="24" fill="#6c63ff" opacity="0.5" />
        <rect x="872.80595" y="463" width="24" height="24" fill="#6c63ff" opacity="0.2" />
        <rect x="812.80595" y="493" width="24" height="24" fill="#2f2e41" />
        <rect x="842.80595" y="493" width="24" height="24" fill="#2f2e41" opacity="0.5" />
        <rect x="872.80595" y="493" width="24" height="24" fill="#2f2e41" opacity="0.2" />
        <rect x="812.80595" y="523" width="24" height="24" fill="#ff6584" />
        <rect x="842.80595" y="523" width="24" height="24" fill="#ff6584" opacity="0.5" />
        <rect x="872.80595" y="523" width="24" height="24" fill="#ff6584" opacity="0.2" />
        <path d="M757.903,558.4591v144c39.76453,0,74-32.23553,74-72S797.6675,558.4591,757.903,558.4591Z" transform="translate(-39.09703 -100.4591)" fill="#3f3d56" opacity="0.5" />
        <path d="M1043.403,546.9591s42,19,27,41-60,64-61,73-7,17-7,17-20-21-18-23,22-21,23-26,31-44,31-44l-27-24Z" transform="translate(-39.09703 -100.4591)" fill="#ffb9b9" />
        <path d="M1043.403,546.9591s42,19,27,41-60,64-61,73-7,17-7,17-20-21-18-23,22-21,23-26,31-44,31-44l-27-24Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M990.403,588.9591s29,12,27,31,35,73,35,73,4,13,3,17,26,3,26,3v-9s-21-36-23-46-14-49-14-49-4-35-24-35A37.5,37.5,0,0,0,990.403,588.9591Z" transform="translate(-39.09703 -100.4591)"
          fill="#ffb9b9" />
        <path d="M991.903,498.4591s60,49,58,53-31,19-36,20-40.37795-73-40.37795-73Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path d="M991.903,498.4591s60,49,58,53-31,19-36,20-40.37795-73-40.37795-73Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M926.903,508.4591s-6,27,10,38,43,54,46,54,46-23,44-27-24-39-24-39l-7-37S934.903,495.4591,926.903,508.4591Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path d="M991.903,420.4591l9,58,16,41s24,25,10,27-22-27-22-27l-13-24Z" transform="translate(-39.09703 -100.4591)" fill="#ffb9b9" />
        <path d="M991.903,420.4591l9,58,16,41s24,25,10,27-22-27-22-27l-13-24Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M958.403,355.9591s0,21-7,23,28,29,28,29-4-35,10-44Z" transform="translate(-39.09703 -100.4591)" fill="#ffb9b9" />
        <path d="M958.403,355.9591s0,21-7,23,28,29,28,29-4-35,10-44Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <circle cx="935.30595" cy="249.5" r="23" fill="#ffb9b9" />
        <path d="M975.403,397.9591s-21-26-24-25-25,23-27,30-6,57-3,67,3,36,2,38-7,7-1,7,27-15,41-12,33-1,34-3-1-54,0-58-2-24-3-28-1-20-11-24l-4.264-.42136-.23882,9.89157Z"
          transform="translate(-39.09703 -100.4591)" fill="#6c63ff" />
        <path d="M931.403,449.9591s2,31,17,44,47,35,49,39,21,25,25,16a14.96181,14.96181,0,0,0,.80194-8.86675,22.05314,22.05314,0,0,0-9.90344-14.41279l-8.8985-5.72046-44-46-2-24Z"
          transform="translate(-39.09703 -100.4591)" fill="#ffb9b9" />
        <path d="M988.903,651.4591s-11.5-2.5-15.5,4.5,4,26,4,26,23,48,27,42-3-28-3-28,10-22,6-23S988.903,663.4591,988.903,651.4591Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path d="M1059.403,708.9591s-6-3-7,0-7,18,0,20,76,4,74,0-13-9-20-11-25-17-25-17S1071.403,713.9591,1059.403,708.9591Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path
          d="M997.57221,331.70484a6.15938,6.15938,0,0,0-2.67142-3.48695,14.13565,14.13565,0,0,0-.564-4.60169c-1.46952-4.34444-4.95079-4.09542-8.23546-6.01618-1.42509-.83335-1.33707-1.56988-2.07894-2.93864a10.90653,10.90653,0,0,0-4.20254-4.28786c-2.10732-1.34264-4.3318-2.72537-6.82474-2.8953-5.239-.35709-9.25573,4.57054-14.263,6.152-2.2071.697-4.57869.72578-6.79744,1.38476s-4.43236,2.23247-4.763,4.52325c-.15265,1.05758.11666,2.14252-.03817,3.19981-.30781,2.10139-2.15145,3.57314-3.38563,5.30155-2.72923,3.82216-2.41707,9.22181-.23451,13.38047a18.80958,18.80958,0,0,0,1.57379,2.46278,15.14954,15.14954,0,0,0,1.66167,5.62586c2.18256,4.15865,5.93822,7.26624,9.86148,9.84805a23.277,23.277,0,0,1-.58191-4.19944,2.89682,2.89682,0,0,1,.17857-1.39142c.43691-.91332,1.59141-1.15622,2.47166-1.65643,1.8232-1.03606,2.53817-3.32891,2.59089-5.42527s-.39154-4.19618-.1719-6.28163a3.43233,3.43233,0,0,1,1.175-2.52484,4.05855,4.05855,0,0,1,2.21524-.52815c3.73556-.1524,7.63864-.221,10.93363-1.98755a16.20347,16.20347,0,0,1,3.40312-1.7215c2.80021-.73022,5.66219,1.23245,7.276,3.63455s2.41844,5.26063,3.90742,7.74207,4.0613,4.69432,6.94016,4.40032a1.15205,1.15205,0,0,0,.85976-.38231,1.28879,1.28879,0,0,0,.15838-.73249l.16085-11.00458A16.63363,16.63363,0,0,0,997.57221,331.70484Z"
          transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path d="M940.403,398.9591s22,10,21,31,6,23-11,25-21,0-22,2-7-46-3-51S940.403,398.9591,940.403,398.9591Z" transform="translate(-39.09703 -100.4591)" fill="#6c63ff" />
        <circle cx="458.80595" cy="97" r="32" fill="#2f2e41" />
        <path d="M519.403,547.9591l-18,49s-15,12-6,16,27-4,27-4l14-36-2-25Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path d="M519.403,547.9591l-18,49s-15,12-6,16,27-4,27-4l14-36-2-25Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M520.903,257.4591l15,2s7,55,4,59-18,20-24,16S520.903,257.4591,520.903,257.4591Z" transform="translate(-39.09703 -100.4591)" fill="#575a89" />
        <path d="M377.403,357.9591s-21,9-25,10-10,11-3,13,34-18,34-18Z" transform="translate(-39.09703 -100.4591)" fill="#a0616a" />
        <path d="M526.403,567.9591l11,41s1,15,6,16,20-5,20-7-6-18-6-18,0-12-6-17-11.40551-21.74959-11.40551-21.74959Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path
          d="M540.403,473.9591c2.02,4.71,1.77,38.88-.43994,61.62-1.07007,11.05-2.60009,19.4-4.56006,20.38l-14.33007-3.58-5.66993-1.42-.15-12.44-.85-68.56-17-71v-18l43,4,6.82007,10.71.17993.29S537.403,466.9591,540.403,473.9591Z"
          transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <path
          d="M531.403,495.9591c2.14,3.21,5.71,22.43,8.56006,39.62-1.07007,11.05-2.60009,19.4-4.56006,20.38l-14.33007-3.58c-.22-.46-.43994-.94-.66993-1.42-1.83007-3.84-3.55-8.08-5.15-12.44l-.85-68.56-17-71v-18l43,4,6.82007,10.71-39.82007-2.71,9,39,11,41S527.403,489.9591,531.403,495.9591Z"
          transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M460.403,340.9591s-14,31,6,74a874.08921,874.08921,0,0,1,33,82s7,33,17,54,8,22,8,22l16-9s-9-62-13-68-4-23-4-23l-11-41-9-39,44,3s0-57-20-68Z" transform="translate(-39.09703 -100.4591)"
          fill="#2f2e41" />
        <path d="M476.903,212.4591s0,16-5,17-15,1-18,6,23,71,23,71l27-17,9-45s-13-8-13-12v-18Z" transform="translate(-39.09703 -100.4591)" fill="#a0616a" />
        <path d="M476.903,212.4591s0,16-5,17-15,1-18,6,23,71,23,71l27-17,9-45s-13-8-13-12v-18Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <circle cx="453.30595" cy="105.5" r="24" fill="#a0616a" />
        <path d="M479.903,286.4591s-9-57-11-57-30,6-32,7-9,10-9,10l14,40s6,28,10,33,12,19,8,21-8,5-4,5,37-6,39-3,35-11,35-12-4-48-4-48l10-23-30-21Z" transform="translate(-39.09703 -100.4591)"
          fill="#575a89" />
        <path d="M437.903,241.4591l-10,5s-28,64-30,65-12,20-13,24-3,17-6,19a51.953,51.953,0,0,1-5,3s6,10,9,10,13-14,13-14,22,14,28,3,21-81,21-81Z" transform="translate(-39.09703 -100.4591)"
          fill="#575a89" />
        <path d="M516.403,271.9591s-14-34-22-30,6,28,15,32Z" transform="translate(-39.09703 -100.4591)" fill="#a0616a" />
        <path d="M502.403,272.9591l14.03051-3.17174L519.403,284.9591s13,23,10,33-21,26-27,17-11-23-7-31S505.403,276.9591,502.403,272.9591Z" transform="translate(-39.09703 -100.4591)" opacity="0.1" />
        <path d="M505.403,270.9591l14.03051-3.17174L522.403,282.9591s13,23,10,33-21,26-27,17-11-23-7-31S508.403,274.9591,505.403,270.9591Z" transform="translate(-39.09703 -100.4591)" fill="#575a89" />
        <ellipse cx="498.90297" cy="190.9591" rx="11.5" ry="24" transform="translate(75.23657 461.27749) rotate(-64.8987)" fill="#2f2e41" />
        <circle cx="477.80595" cy="70" r="14" fill="#2f2e41" />
        <path d="M503.903,165.4591a13.99971,13.99971,0,0,1,12.5-13.91724,14,14,0,1,0,0,27.83448A13.99971,13.99971,0,0,1,503.903,165.4591Z" transform="translate(-39.09703 -100.4591)" fill="#2f2e41" />
        <rect x="64.80595" y="277" width="350" height="243" fill="#3f3d56" />
        <rect x="92.80595" y="301" width="46" height="46" fill="#f2f2f2" />
        <rect x="92.80595" y="376" width="46" height="46" fill="#6c63ff" />
        <rect x="92.80595" y="451" width="46" height="46" fill="#f2f2f2" />
        <rect x="160.80595" y="315.5" width="219" height="4" fill="#f2f2f2" />
        <rect x="160.80595" y="328.5" width="68" height="4" fill="#f2f2f2" />
        <rect x="160.80595" y="390.5" width="219" height="4" fill="#f2f2f2" />
        <rect x="160.80595" y="403.5" width="68" height="4" fill="#f2f2f2" />
        <rect x="160.80595" y="465.5" width="219" height="4" fill="#f2f2f2" />
        <rect x="160.80595" y="478.5" width="68" height="4" fill="#f2f2f2" />
        <path
          d="M1028.903,769.39173c0,20.35636-12.09988,27.46356-27.02822,27.46356-.34578,0-.69155-.005-1.03485-.01246-.69157-.01492-1.37816-.04725-2.05479-.09451-13.47306-.95277-23.93856-8.42565-23.93856-27.35659,0-19.58768,25.03064-44.30737,26.91626-46.14076l.00249-.00249c.07215-.07213.10945-.107.10945-.107S1028.903,749.03785,1028.903,769.39173Z"
          transform="translate(-39.09703 -100.4591)" fill="#6c63ff" />
        <path
          d="M1000.88966,793.74075l9.88588-13.81138-9.91077,15.32884-.02487,1.58462c-.69157-.01492-1.37816-.04725-2.05479-.09451l1.0647-20.36384-.00745-.1592.01741-.02737.102-1.92543-9.93562-15.36616,9.96547,13.92333.02488.408.80351-15.38607-8.50525-15.8786,8.60972,13.17952.83834-31.90151.00249-.10945v.107l-.13931,25.155,8.46794-9.97295-8.50277,12.1397-.22388,13.77655,7.9082-13.22182-7.94054,15.24924-.12438,7.65945,11.47549-18.40357-11.52027,21.0753Z"
          transform="translate(-39.09703 -100.4591)" fill="#3f3d56" />
        <path
          d="M151.903,630.39173c0,20.35636-12.09988,27.46356-27.02822,27.46356-.34578,0-.69155-.005-1.03485-.01246-.69157-.01492-1.37816-.04725-2.05479-.09451-13.47306-.95277-23.93856-8.42565-23.93856-27.35659,0-19.58768,25.03064-44.30737,26.91626-46.14076l.00249-.00249c.07215-.07213.10945-.107.10945-.107S151.903,610.03785,151.903,630.39173Z"
          transform="translate(-39.09703 -100.4591)" fill="#6c63ff" />
        <path
          d="M123.88966,654.74075l9.88588-13.81138-9.91077,15.32884-.02487,1.58462c-.69157-.01492-1.37816-.04725-2.05479-.09451l1.0647-20.36384-.00745-.1592.01741-.02737.102-1.92543-9.93562-15.36616,9.96547,13.92333.02488.408.80351-15.38607-8.50525-15.8786,8.60972,13.17952.83834-31.90151.00249-.10945v.107l-.13931,25.155,8.46794-9.97295-8.50277,12.1397-.22388,13.77655,7.9082-13.22182-7.94054,15.24924-.12438,7.65945,11.47549-18.40357-11.52027,21.0753Z"
          transform="translate(-39.09703 -100.4591)" fill="#3f3d56" />
      </svg>
    </div>
  </div>
  <svg class="w-full svg-h-10 absolute inset-x-0" viewBox="0 0 1440 320" preserveAspectRatio="none" style="bottom: -1px">
    <path fill="#2d3748" fill-opacity="1"
      d="M0,128L60,144C120,160,240,192,360,218.7C480,245,600,267,720,272C840,277,960,267,1080,234.7C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
    </path>
  </svg>
</section>
{{-- how it works --}}
<section class="text-gray-400 bg-gray-800 body-font overflow-hidden relative">
  <div class="container px-6 md:px-12 pb-32 pt-24 md:pb-48 md:pt-40 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font uppercase">How It Works</h2>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Focus on creativity and your business as you continue your photo editing activities in Pixelsense Park
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/quote.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Request a Quote</h2>
          <p class="leading-relaxed text-base">Request a quote for the images you need edited
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/custom.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Customize your quote</h2>
          <p class="leading-relaxed text-base">Within or less than 45 minutes of the request for a quote, you'll get an email for acknowledgment.
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/approval.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Approval</h2>
          <p class="leading-relaxed text-base">After the acknowledgment, you'll get a sample image for approval according to your instructions. Give us the green light to move forward with your
            project.
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/estimate.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Estimate time</h2>
          <p class="leading-relaxed text-base">Get your images within 24 hours or as per the client's requirements.
          </p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-700 text-blue-400 mb-5 flex-shrink-0">
          <img src="{{ asset('storage/website/services/logo/feedback.png') }}" alt="icon" class="h-12">
        </div>
        <div class="flex-grow">
          <h2 class="text-white text-lg title-font font-medium mb-3">Feedback</h2>
          <p class="leading-relaxed text-base">Share your feedback if you have any concerns about quality. Clients' satisfaction is our happiness. Sell lots of products and make your clients happy!
          </p>
        </div>
      </div>
    </div>
  </div>
  <svg class="w-full svg-h-10 absolute inset-x-0" viewBox="0 0 1440 320" preserveAspectRatio="none" style="bottom: -1px">
    <path fill="#d6e2eb" fill-opacity="1"
      d="M0,96L40,128C80,160,160,224,240,240C320,256,400,224,480,176C560,128,640,64,720,64C800,64,880,128,960,133.3C1040,139,1120,85,1200,80C1280,75,1360,117,1400,138.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
</section>

<section class="text-gray-800 body-font bg-gradient-white-gray">
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
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/retouch/7.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/product/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/color/1.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/hdr/1.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
      <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
        <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/jewelry/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/mannequin/7.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/masking/3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full h-24 sm:h-32 md:h-48 lg:h-80">
          <img alt="gallery" class="w-full h-full object-cover object-center block shadow-2xl" src="{{ asset('storage/website/services/shadow/5.jpg') }}">
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
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fill out this form, Within or less than 45 minutes of the request for a quote, you'll get an email for acknowledgement with your customized quote.
      </p>
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
        <option value="1">Photo Retouching Services</option>
        <option value="1">Product Photo-editing Services</option>
        <option value="1">Real Estate Photo Editing Services(HDR)</option>
      </select>
      <input name="email" class="form-input w-full lg:w-auto rounded-full border-gray-700 mb-4" placeholder="Email*" type="email">
      <a href="{{ route('user.quote') }}" class="btn-brand focus:outline-none w-full lg:w-auto rounded-full text-lg text-center whitespace-no-wrap mb-4">Get Your Quote</a>
    </div>
  </div>
</section>
{{-- Price List --}}
<section class="text-gray-800 body-font overflow-hidden">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font text-gray-800 uppercase">Pricing</h2>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We carefully fulfil every order by hand. Each job is different, and the price varies, too. Price always depends on image complexity. Enter a few details below to get a ballpark range instantly. <br/>
      Please convert it into your currency.
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center -m-4">
      <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
        <div class="h-full p-6 rounded-lg border border-gray-400 hover:border-indigo-500 flex flex-col relative overflow-hidden">
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Clipping Path</h2>
          <h2 class="text-2xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>$0.29-$10</span>
            <span class="text-lg ml-1 font-normal text-gray-500">/per image</span>
          </h2>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Basic Clipping
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Compound Clipping Path
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Complex Path
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>3 Step quality control
          </p>
          <a href="{{ route('user.quote') }}" class="flex items-center btn-brand mt-auto border-0 w-full rounded-full" style="padding: 8px 16px">Free Trial
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
        <div class="h-full p-6 rounded-lg border border-gray-400 hover:border-indigo-500 flex flex-col relative overflow-hidden">
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Color Variants</h2>
          <h2 class="text-2xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>$1-$5</span>
            <span class="text-lg ml-1 font-normal text-gray-500">/per image</span>
          </h2>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Basic Color Correction
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Jewelry Color Correction
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Real Estate Color Correction
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>3 Step quality control
          </p>
          <a href="{{ route('user.quote') }}" class="flex items-center btn-brand mt-auto border-0 w-full rounded-full" style="padding: 8px 16px">Free Trial
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
        <div class="h-full p-6 rounded-lg border border-gray-400 hover:border-indigo-500 flex flex-col relative overflow-hidden">
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Drop Shadow Services</h2>
          <h2 class="text-2xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>$0.25-$4</span>
            <span class="text-lg ml-1 font-normal text-gray-500">/per image</span>
          </h2>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Drop shadow
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Natural shadow
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Cast shadow | Reflection
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>3 Step quality control
          </p>
          <a href="{{ route('user.quote') }}" class="flex items-center btn-brand mt-auto border-0 w-full rounded-full" style="padding: 8px 16px">Free Trial
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="flex">
      <a href="{{ route('price') }}" class="btn-brand focus:outline-none rounded-full text-lg mx-auto mt-16">See All Pricing</a>
    </div>
  </div>
</section>
{{-- how it works --}}
<section class="text-gray-400 bg-gray-800 relative">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto">
    <div class="text-center mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font uppercase">Why Pixel Sense Park?</h2>
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
{{-- Latest Tips --}}
<section class="text-gray-800 body-font overflow-hidden">
  <div class="container px-6 md:px-12 py-24 md:py-32 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-3xl sm:text-4xl font-medium title-font text-gray-800 uppercase">Read Our Latest Tips</h2>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap -m-4">
      @foreach ($posts as $item)
      <div class="p-4 md:w-1/3">
        <a href="{{ url("blog/posts/" . $item->slug) }}" class="group">
          <div class="h-full transition duration-300 ease-in-out transform hover:-translate-y-1 shadow-lg hover:shadow-2xl bg-white rounded-lg overflow-hidden">
            @if ($item->featured_image)
            <img class="lg:max-h-52 md:h-36 w-full object-cover object-center" src="{{ $item->featured_image }}" alt="blog">
            @endif
            <div class="p-6">
              {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2> --}}
              <h2 class="title-font text-xl font-medium mb-3 underline">{{ Str::limit($item->title, 80, '...') }}</h2>
              <p class="leading-relaxed mb-3">{!! Str::limit($item->body, 200, '...') !!}</p>
              <div class="flex items-center flex-wrap ">
                <p class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>

      @endforeach

    </div>
  </div>
</section>

@endsection