<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- Bootstrap style -->

    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}"> <!-- Templatemo style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<style>
    /*.blog-detail{*/
        button:focus.btn:active {
  outline: none!important;
}

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    @media only screen and (max-width: 600px) {
        .blog-detail img {
            object-fit: contain;
            height: 100% !important;
            width: 100% !important;
        }

        .mobile-breadcrumb {
            padding-top: 70px !important;
        }
    }
.contact{
    border: 0.4px solid #EE5057;
}

</style>


<header>
    <x-navbar />
</header>
<br>
<body>
    <x-loader/>

    <!-- End Page Title -->

    <!-- Blog Details -->
    <div class="blog-details-area pb-100 pt-20 blog-detail-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


                    <div class="card-group m-2">

                        <div class="flex row">
                            @foreach($data as $key=>$item)
                           <div class="m-2 row">
                              <div class="card" style="width: 22rem; m-2">

                                  <img class="card-img-top img-fluid"  alt=" user-image" @if($item['image'] ==NULL)src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                                  @else
                                  src="{{ asset('uploads')}}/{{$item['image']}}"
                                  @endif
                                  alt="photo">
                                  <div class="card-body">


                                      <div class="d-flex">
                                        <p class="p-0">
                                            <i class="fad fa-calendar" style="color:#EE5057"></i>
                                           {{$item->gender}}
                                        </p>
                                        <p class="ml-auto ">
                                            <i class="fad fa-user" style="color:#EE5057"></i>  {{ $item->religion->name }}
                                            @if($item->caste_id!=NULL)
                                           {{$item->caste->name}}</p>
                                            @endif
                                        </p>
                                        <p class="ml-auto ">
                                            @if($item->Occupation!=NULL)
                                            <i class="fad fa-user" style="color:#EE5057"></i>  {{ $item->Occupation->name }}
                                            @endif
                                        </p>

                                      </div>

                                    </ul>
                                    <h5 class="card-title"> @if($item->education_id !=NULL)


                                        {{$item->education->name}}


                                     @endif</h5>
                                     <div class="d-flex">
                                                              <p>{{$item['height']}}</p>
                                       <p class="ml-auto">{{$item['age']}} Years</p>

                                     </div>

                                    @if($item->state_id !=NULL)

                                    {{$item->country->name}} ,{{$item->state->name}}


                                      @else
                                     {{$item->country->name}}
                                    @endif

                                  </div>
                                  <div class="card-footer">
                                    <small class="text-muted"> <form    id="Profile_like" class="like" data-id="{{$item->id}}" >
                                        @csrf

                                        <input type="hidden" name="profile_id"  id="profile" class="profile" >

                                        <div class="d-flex">

                                        @if(in_array($item->id, $liked))

                                        <button class="bg-transparent border-0 text-primary" type="submit" id="like-btn" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                              </svg>
                                        </button>
                                        @else
                                        <button class="bg-transparent border-0 text-primary" type="submit" data-stat="unlike" id="dislike-btn">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                              </svg>
                                        </button>

                                        @endif

                                        @php
                                        $likes=count($item->Likes->Toarray());
                                        @endphp
                                        <p class="mt-1 h6" id="likes">
                                        {{$likes}}
                                        </p>

                                          </div>




                                    </form></small>
                                  </div>
                                </div>

                           </div>
                          @endforeach
                        </div>
               </div>

                </div>


<x-enquiry-form/>


            </div>
        </div>
    </div>
    </div>
<br>
<x-footer/>

</body>
<input type="hidden" id="tokan" value="{{csrf_token()}}">
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var tokan = $("#tokan").val();
    //var profile= $(this).val();
$(".like").submit(function(e){
    e.preventDefault();
    var profile = $(this).data('id');
      var stat=$(this).find("path");
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
stat.attr('d','M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z');
likes++;
like.html(likes);
}
else{
    stat.attr('d','M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z');
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
