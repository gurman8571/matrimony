<!-- component -->
<style>
  :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }

    img{
        width:1280px;
        max-height:500px;
        min-height:500px;
    }

</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<!---NAV--->



    <div class="w-full text-white bg-main-color">
           <div x-data="{ open: false }"
               class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
               <div class="p-4 flex flex-row items-center justify-between">
                   <a href="#"
                       class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">Image Gallery
                    </a>
                   <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                       <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                           <path x-show="!open" fill-rule="evenodd"
                               d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                               clip-rule="evenodd"></path>
                           <path x-show="open" fill-rule="evenodd"
                               d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                               clip-rule="evenodd"></path>
                       </svg>
                   </button>
               </div>









                       </div>
                   </div>
               </nav>
           </div>
       </div>

<!---IMAGES--->
<body class="bg-gray-200">
@if($data->count())
<section class="overflow-hidden text-gray-700  ">
    <div class="container px-2 py-2 mx-auto lg:pt-12 lg:px-8 ">

        <div class="flex flex-wrap -m-1 md:-m-4">

            @foreach($data as $key => $item)
            <div class="flex flex-wrap w-1/3">

                <div class="w-full p-4 md:p-6">

                    <img alt="gallery" class="block  hover:object-scale-down border-none w-full h-full rounded-lg shadow-lg transform transition duration-500 hover:scale-125 p-6
                    "
                    src="{{ asset('gallery')}}/{{$item}}" >

              </div>


                </div>
                @endforeach
              </div>

        </div>
  </section>
  @else
  <p>No images in gallery of this User</p>
  @endif






</body>
