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
#trash{

   float: right;
   top:-8%;
   right:3%;
}
    #img{
        width:1280px;
        max-height:500px;
        min-height:500px;
    }
    #i{

column-gap:10px;
    }

</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">



<x-loader/>

<!----image popup---->
<div class=" capitalize  hidden min-w-screen h-screen overflow-scroll animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat
 bg-center bg-cover"  style=" background-color: rgba(0, 0, 0, 0.2);" id="addimage">
    <div class="absolute  inset-0 z-0" id="mo"></div>
 <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">

     <!--footer-->
     <label class="inline-block mb-2 text-gray-500">Add
        Image(jpg,png,svg,jpeg)</label>
        <br>
        @error('image')
        <span class="text-red-500">*{{$message}}</span>
        @enderror
 <div class="flex items-center justify-center w-full p-2">
                        <label class="flex flex-col w-full h-96  border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <img id="preview" class="hidden w-full h-80 object-cover ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600" id="img-label">
                                    Select a photo</p>

                            </div>
                            <form action="{{route('User.galleryInsert')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <input type="file" class="opacity-0" name="image" id='profile-image'accept="image/png,image/jpeg,image/bmp,image/gif" required >


                            <input type="hidden" name="id" value={{Auth::id()}}>
                        </label>
                    </div>

                    <div class="flex p-2 space-x-4">
                        <button onclick="hide('image-edit')" type="button" class="px-4 py-2 text-white bg-red-500 rounded shadow-xl  focus:outline-none">Cancel</button>
                        <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl  focus:outline-none" type="submit">Create</button>
                    </div>
                </form>
 </div>
</div>
<!--nav-->
<x-ProfileNavbar/>
<!----profile--->









                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- End of Navbar -->

<body class="bg-gray-300">
   <div class="bg-gray-300 m-4">
    <x-alert/>
</div>

<div class="bg-gray-300">





      @if($data->count())
      <section class="overflow-hidden text-gray-700 bg-gray-300  ">
        <div class="  flex justify-center mt-16  bg-gray-300 ">
            <button class=" flex p-6 bg-yellow-500 m-auto text-white rounded-lg focus:outline-none" onclick="show()">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                </svg>
            Add image
            </button>
            </div>
      <div class="bg-gray-300">
    <div class="container px-2 py-2 mx-auto lg:pt-12 lg:px-0 ">

        <div class="flex flex-wrap -m-1 md:-m-4">

            @foreach($data as $key => $item)
            <div class="flex flex-wrap w-1/3">

                <div class="w-full p-4 md:p-8 bg-gray-300">

                    <img alt="gallery" class=" cursor-pointer block hover:object-scale-down border-none object-center w-full h-full rounded-lg shadow-lg transform transition duration-500 hover:scale-125 p-8
                    " id="img"
                    src="{{ asset('gallery')}}/{{$item}}" >

                    <a class="ml-8" href="{{route('User.image.delete',[$key])}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 relative ml-12 mt-3" id="trash" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                    </a>
              </div>


                </div>
                @endforeach
              </div>

        </div>
  </section>
</div>
@else
<div class="m-auto flex flex-col justify-center pt-32 items-center bg-gray-300">
    <i class="fad fa-10x fa-image text-gray-600"></i>


    <p class="text-xl">No image in gallery    <strong onclick="show()" class="text-blue-500 cursor-pointer">add </strong>   some </p>




@endif
</div>

<div class="flex flex-row justify-center m-4 bg-gray-300">
    @if($data->count())
    <a class="px-4 flex   my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring  cursor:pointer transition text-white hover:border-red-600 text-white bg-red-600 active:bg-red-700 hover:ring-red-300"  href="{{route('User.gallery.reset')}}">
 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
  </svg>Delete ALL</a>

<div>
@endif
<a class="px-4 flex   mx-4 my-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring cursor:pointer transition text-white hover:border-ORANGE-600 text-white bg-ORANGE-600  hover:ring-blue-600" href="{{ROUTE('getprofile')}}">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>Profile</a></div>


</div>



<!-- End of profile tab -->
</div>

</body>



<script>

function  hide() {
    let modal=   document.getElementById("addimage");
    let preview=document.getElementById('preview');
    preview.src=' ';

 modal.style.display="none";
    }

        function show(){
            let modal=   document.getElementById("addimage");
            modal.style.display="flex";

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
