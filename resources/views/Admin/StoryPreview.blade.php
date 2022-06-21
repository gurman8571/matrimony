<head>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

 <div>
    <div class="xl:flex flex-row min-h-screen bg-gray-200 justify-center items-center sm:flex flex-row m-auto p-auto min-h-screen ">


          <div class="w-full  sm:w-full md:w-1/2 xl:w-1/4 p-4 h-full">
            <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
            <div class="relative pb-56 h-3/5 ">
              <img class="absolute inset-0 h-full w-full object-cover h-cover" src="{{asset('wedding stories')}}/{{$data->image}}" alt="Image" id="wedding">
            </div>
            <div class="p-4">
              <span class="inline-block px-2 py-1 leading-none bg-green-200 text-green-800 rounded-full font-semibold uppercase tracking-wide text-xs">Preview</span>
              <h2 class="mt-2 mb-2  font-bold">{{$data->bride}},{{$data->groom}}</h2>
              <p class="text-sm"> {{$data->story}}</p>
              <div class="mt-3 flex items-center">
               <span class="font-bold text-xl">@if($data->ondisplay==1)
                    <span class="inline-block px-2 py-1 leading-none bg-blue-200 text-blue-800 rounded-full font-semibold uppercase tracking-wide text-xs">on Display</span>


             @else
             <span class="inline-block px-2 py-1 leading-none bg-red-200 text-red-800 rounded-full font-semibold uppercase tracking-wide text-xs">not on display</span>
             @endif
                </span>&nbsp;<span class="text-sm font-semibold"></span>
              </div>
            </div>
          </div>
      </div>
 </div>
