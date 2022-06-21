<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

</head>
<style>
#main{
    background-color:#f2f2f2;
}
*{
    text-transform: capitalize;
}
</style>
<body>
    <x-header/>

    <div class=" w-full bg-#f2f2f2 flex justify-center" id="main">
        <section class=" mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h2 class="text-base font-bold text-indigo-600">
                   {{$count}} Profies match your search
                </h2>
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
                    Check our awesome members

                </h1>

<p>
                    <div class="p-4">
                        <label for="amount">Price range:</label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                      </p>


                </div>



            </div>
            <div id="slider-range"></div>
            @foreach($data as $key=>$item)
            <div class="flex flex-col">
                <div class="w-full bg-white rounded-sm shadow-lg overflow-hidden flex flex-col md:flex-row text-gray-700 capitalize">
                    <div class="w-full md:w-2/5 h-80">
                        <img class="object-center object-cover w-full h-full"  alt=" user-image" @if($item['image'] ==NULL)src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        @else
                        src="{{ asset('uploads')}}/{{$item['image']}}"
                        @endif
                        alt="photo">
                    </div>
                      <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">

                       <div >
                        @if($item->source == "matrimony.com")

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-4 float-right text-gray-500 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                          <a href="Profile/detail/{{$item->id}}" class=" text-gray-500 float-right font-bold">view profile</a>


                         @endif


                       <p class="text-xl  font-bold"> {{$item->name}},{{$item->gender}}</p>
                       </div>


                        <hr class="p-2">

                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3">{{$item['age']}} Years,{{$item['height']}}"</p>
                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3 float-right">
                            @if($item->education_id !=NULL)


                               {{$item->education->name}}


                            @endif

                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3">
                            @if($item->state_id !=NULL)

{{$item->country->name}} ,{{$item->state->name}}


  @else
 {{$item->country->name}}
@endif
</p>
                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3 float-right">

                            @if($item->occupation_id !=NULL)
                            {{$item->Occupation->name}}

                @endif
                        </p>

                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3">{{$item->religion->name}}

                            @if($item->caste_id!=NULL)
                            ,{{$item->religion->name}}:{{$item->caste->name}}</p>



                            @endif
                        <p class="text-base leading-relaxed text-gray-600 font-normal px-3">

                            @if($item->mothertongue!=NULL)
                            {{$item->mothertongue->name}}
                            @endif
                        </p>

                        <p class=" text-base leading-relaxed text-gray-600 font-normal pl-3">

                            @if($item->prefrence!=NULL && $item->source != "matrimony.com")
                            prefrence:{{$item->prefrence}}
                            @endif
                        </p>

<form    id="Profile_like" class="like" data-id="{{$item->id}}" >
    @csrf

    <input type="hidden" name="profile_id"  id="profile" class="profile" >

<div class="flex justify-end space-x-1 ">

    @if(in_array($item->id, $liked))

    <button class="float-right mt-2 cursor-pointer focus:outline-none focus:border-none border-none outline-none" type="submit" id="like-btn" >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 " class="heart" id="heart-like" fill="currentcolor" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
    </button>
    @else
    <button class="float-right mt-2 cursor-pointer" type="submit" data-stat="unlike" id="dislike-btn">

       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 focus:outline-none focus:border-none border-none outline-none "   id="heart-dislike" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
      </svg>

    </button>

    @endif

    @php
    $likes=count($item->Likes->Toarray());
    @endphp
    <p class="mt-2" id="likes">
    {{$likes}}
    </p>

</div>

</form>


<br>
<br>
            </div>
                </div>
                <br>
                <br>


@endforeach
<input type="hidden" id="tokan" value="{{csrf_token()}}">
        </section>
        </div>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var tokan = $("#tokan").val();
    //var profile= $(this).val();
$(".like").submit(function(e){
    e.preventDefault();
    var profile = $(this).data('id');
      var stat=$(this).find("svg");
      var like=$(this).find("#likes");
      var likes=$(this).find("#likes").html();
      //var btn=stat.attr('id');
     //console.log(likes.html());

    $.ajax({

url:'{{route('User.like')}}' ,

data: {'profile_id':profile,'_token':tokan},
type: "POST",
//contentType: "application/json; charset=utf-8",
//dataType: "json",
success: function(response){
//$('#heart').attr( 'fill','none' );
if(response == 1){
stat.attr('fill','currentcolor');
likes++;
like.html(likes);
}
else{
    stat.attr('fill','none');
    likes--;
      if(likes<0){
          likes=0;
      }
like.html(likes);
}

}


});
});







    </script>
