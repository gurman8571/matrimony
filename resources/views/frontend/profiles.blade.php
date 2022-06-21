

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

    </head>
<x-loader/>
    <body class="antialiased bg-gray-200 text-gray-900 font-sans p-6">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                @foreach($data as $item)

                <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 min-w-1/2 min-h-full p-4">
                  <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                  <div class="relative pb-48 overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                  </div>
                  <div class="p-4">
                    <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{$item->age}}yrs ,{{$item->gender}}</span>
                    <span class="inline-block float-right px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs"> @if($item->state_id ==NULL){{$item->country->name}}@else {{$item->state->name}},{{$item->country->name}} @endif</span>

                    <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                    <p class="text-sm">@if($item->summary !=NULL)
                        {{$item->summary}}
                        @endif
                    <div class="mt-3 flex items-center">
                      <span class="text-sm font-semibold">  @if($item->caste_id!=NULL)
                       {{$item->Caste->name}},
                        @endif
                      <span class="font-bold text-sm">  {{$item->Religion->name}}</span>
                      </div>
                      <span class="py-2 flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                          </svg>
                          <p>
                          gurmq3671@fns.slldpp
                        </p>
                      </span>

                      <span class="py-2 flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                          </svg>
                          <p>98781245735</p>
                      </span>


                  </div>
                  <div class="p-4 border-t border-b text-xs text-gray-700">
                    <span class="flex  items=center mb-1 " >
                        <div class="inline-block">
                               <svg xmlns="http://www.w3.org/2000/svg" class="  h-5 w-5 text-red-500 " viewBox="0 0 20 20" fill="currentColor">
                               <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                               </svg>
                          5 likes
                        </div>
                    </div>
                    </div>


                      @endforeach
                </div>



          </div>
        </div>
    </body>
