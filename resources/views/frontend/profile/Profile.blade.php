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

</style>
<x-loader/>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- This example requires Tailwind CSS v2.0+ -->


<div class=" capitalize hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none overflow-scroll bg-no-repeat
bg-center bg-cover"  style=" background-color: rgba(0, 0, 0, 0.2);" id="image-edit">
   <div class="absolute  inset-0 z-0" id="mo"></div>
<div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">

    <label class="inline-block mb-2 text-gray-500">Add
       Image(jpg,png,svg,jpeg)</label>
       <br>
       @error('image')
       <span class="text-red-500">*{{$message}}</span>
       @enderror
<div class="flex items-center justify-center w-full p-2">
                       <label class="flex flex-col w-full h-auto border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                           <div class="flex flex-col items-center justify-center pt-7">
                               <img id="preview" class="hidden w-full h-full object-cover ">
                               <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                   <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                               </svg>
                               <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600" id="img-label">
                                   Select a photo</p>

                           </div>
                           <form action="{{route('User.ProfilePicture.edit')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                           <input type="file" class="opacity-0" name="image" id='profile-image'accept="image/png,image/jpeg,image/bmp,image/gif" required >


                       </label>
                   </div>

                   <div class="flex p-2 space-x-4">
                       <button onclick="hide('image-edit')" type="button" class="px-4 py-2 text-white bg-red-500 rounded shadow-xl  focus:outline-none">Cannel</button>
                       <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl  focus:outline-none" type="submit">Create</button>
                   </div>
               </form>
</div>
</div>
<!--deactivate--popup-->
<div class=" capitalize hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style=" background-color: rgba(0, 0, 0, 0.2);" id="modal-deactivate">
    <div class="absolute  inset-0 z-0" id="mo"></div>
 <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
   <!--content-->
   <div class="">
     <!--body-->
     <div class="text-center p-5 flex-auto justify-center">

        <svg class="w-16 h-16 flex items-center text-red-500 mx-auto bg-red-200 p-2 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
                     <h2 class="text-xl font-bold py-4 ">Deactivate Acoount ?</h3>
                     <p class="text-sm text-gray-500 px-8">your content would be no longer live and should not be searchable online</p>
     </div>



     <!--footer-->
     <div class="p-3  mt-2 text-center space-x-4 md:block">
         <button onclick="hide('modal-deactivate')" class=" mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm   font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100 focus:outline-none">
             Cancel
         </button>
         <a class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600" href="{{route('profileDeactivate')}}">Deactivate</a>
     </div>
   </div>
 </div>
</div>

<!---delete popup--->
<div class=" capitalize hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style=" background-color: rgba(0, 0, 0, 0.2);" id="modal-id">
    <div class="absolute  inset-0 z-0" id="mo"></div>
 <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
   <!--content-->
   <div class="">
     <!--body-->
     <div class="text-center p-5 flex-auto justify-center">

             <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
                     <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                     <p class="text-sm text-gray-500 px-8">Do you really want to delete your account?
             This process cannot be undone</p>
     </div>



     <!--footer-->
     <div class="p-3  mt-2 text-center space-x-4 md:block">
         <button onclick="hide('modal-id')" class=" mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm   font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100 focus:outline-none">
             Cancel
         </button>
         <a class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600" href="profile/delete">Delete</a>
     </div>
   </div>
 </div>
</div>

<x-ProfileNavbar/>

@foreach($data as $item)





    <!-- End of Navbar -->
<body class="bg-gray-300">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="{{ asset('uploads')}}/{{$item->image}} "
                            alt="">

                                <div class="flex mt-2 text-blue-500" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                      </svg>
                            <p class="text-blue-500 cursor-pointer" onclick="show('image-edit')">

                                edit profile picture</p>
                            </div>
                    </div>
                    <h4 class="text-gray-900 font-bold text-xl leading-8 my-1 capitalize">{{Auth::user()->name}}</h4>
                    <h3 class="text-gray-900 font-4xl text-semibold leading-6">  {{$item->occupation->name}}</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{$item['summary']}}</p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>

                            <span class="ml-auto">
                                @if($item['status'] == 1)
                                <span

                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                                    @else
                                    <span class="bg-red-500 py-1 px-2 rounded text-white text-sm">Inactive</span></span>
                                    @endif

                        </li>
                        <li class="flex items-center py-3">
                            <span>Liked By</span>
                            <span class="ml-auto">{{$likes}} Users</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                <div class="bg-white p-3 hover:shadow">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>Similar Profiles</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                alt="">
                            <a href="#" class="text-main-color">Kojstantin</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png"
                                alt="">
                            <a href="#" class="text-main-color">James</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">

                            <a href="#" class="text-main-color">Natie</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png"
                                alt="">
                            <a href="#" class="text-main-color">Casey</a>
                        </div>
                    </div>
                </div>
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm mb-4">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Name</div>
                                <div class="px-4 py-2">{{$item['name']}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Height</div>
                                <div class="px-4 py-2">{{$item['height']}}"</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">{{$item['gender']}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">{{$item['phone']}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold capitalize"> Current Country</div>
                                <div class="px-4 py-2">{{$item->country->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold normal-case">Current State</div>
                                <div class="px-4 py-2">{{$item->state->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800">{{Auth::user()->email}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Age</div>
                                <div class="px-4 py-2">{{$item->age}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Diet</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800">{{$item->diet}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Drink/Smoke</div>
                                @if($item['drink']== 1)
                                <div class="px-4 py-2">Yes</div>

                                @elseif($item['drink']== 0)
                                <div class="px-4 py-2">No</div>
                                @else
                                <div class="px-4 py-2">Not known</div>
                                @endif

                            </div>
                        </div>
                    </div>
<br>

                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-1 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">


                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>

                                </li>

                               <div class="flex items-center space-x-1 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                          </svg>
                                    </span>

                                    <span class="tracking-wide">Annual income</span>
                                </div>


                                <ul class="list-inside space-y-2">

                                    <li>
                                        <div class="text-teal-600">{{$item->income}}</div>

                                    </li>

                                </ul>


                        </div>

                        <div>
                            <div class="flex items-center space-x-1 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>

                            </div>
                            <ul class="list-inside space-y-2 mb-3">
                                <li>
                                    <div class="text-teal-600 text-capitalize">{{$item->education_level}},{{$item->education->name}}</div>
                                </li>

                            </ul>


                            <div class="flex items-center space-x-1 font-semibold text-gray-900 leading-8 mb-1">
                                <span clas="text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                </span>

                                <span class="tracking-wide ">Marital Status</span>
                            </div>
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <div>
                                        <div class="text-teal-600">{{$item->Marital_Status}}</div>
                                    </div>

                                    </li>

                                </ul>
                            </div>



                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                    <div class="my-4"></div>
                    <div class="bg-white p-3 shadow-sm rounded-sm s h-auto p-3">


                        <div class="flex px-3 items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                              </svg>
                            <h4 class=" text-grey-900">Caste and religion</h4>
                        </div>
                        <div class="p-2">
                            <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Religion</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800">{{$item->religion->name}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Caste</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800">{{$item->caste->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="my-4"></div>
                <!-- Experience and education -->
                @if($item['prefrence']!='none')


                <div class="bg-white p-3 shadow-sm rounded-sm s h-auto p-3">


<div class="flex px-3 items-center space-x-1">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
      </svg>
    <h4 class=" text-grey-900">Prefrence</h4>
</div>
<div class="p-2">
{{$item['prefrence']}}
</div>


<br>

               </div>
               @endif

               <div>
                    <BUTTON class="px-4 flex float-right  my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring  cursor:pointer transition text-white hover:border-red-600 text-white bg-red-600 active:bg-red-700 hover:ring-red-300" onclick="show('modal-id')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                  </svg>Delete Account</a></div>
                </BUTTON>
                <div>

                <a class="px-4 flex  float-right mx-4 my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring cursor:pointer transition text-white hover:border-blue-600 text-white bg-blue-600  hover:ring-blue-600"href="profile/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                      </svg> Edit Profile</a></div>



                        @if($item->status == 1)
                        <button class="px-4 flex  float-right mx-4 my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring cursor:pointer transition text-white hover:border-red-600 text-white bg-red-600  hover:ring-red-600" onclick="show('modal-deactivate')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                          </svg>
                           Deactivate Profile
                        </button>
                        @else
                        <a class="px-4 flex  float-right mx-4 my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring cursor:pointer transition text-white hover:border-green-600 text-white bg-green-600  hover:ring-blue-600"href="{{route('profileDeactivate')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                              </svg>
                          activate Profile
                        </a>
                        @endif


                      <a class="px-4 flex  float-right mx-4 my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring cursor:pointer transition text-white hover:border-yellow-600 text-white bg-yellow-600  hover:ring-yellow-600"href="{{route('User.gallery')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                          </svg> Gallery</a></div>
            </div>



                <!-- End of profile tab -->
            </div>


        </div>
    </div>
</div>
<div>



</div>

</body>
@endforeach

<script>


function  show(id) {
    let modal=document.getElementById(id);
modal.style.display="flex";
    }
    function  hide(id) {
        let modal=document.getElementById(id);
modal.style.display="none";

let img=document.getElementById('preview');

img.removeAttribute("src");
    }




        let imglabel=document.getElementById('img-label');
let img=document.getElementById('profile-image');
img.addEventListener('change', function(event){
    if (event.target.files.length>0) {
    let src =URL.createObjectURL(event.target.files[0]);
    let preview=document.getElementById('preview');
    preview.src=src;
    preview.style.display="block"
imglabel.style.display="none";
    }
})


    </script>
