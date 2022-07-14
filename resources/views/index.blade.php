<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\frontend\UserProfileController;

$users=SearchController::calculateuser();
$bool=UserProfileController::checkUser();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

    .mt-20{
        margin-top:100px;
    }
    #wedding{

       max-height:250px;
       min-height:250px;
       min-width: 300px;
       max-width: 300px;
       border-radius:10px;

    }
    #add{

        border-radius:10px;
    }

</style>

    <!--

Tooplate 2095 matrimony

https://www.tooplate.com/view/2095-matrimony

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap style -->

    <link rel="stylesheet" href="css/tooplate-style.css"> <!-- Templatemo style -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<x-loader/>
<body >

   <div id="content">
    <div class="modal fade mt-20  " data-easein="swing" id="exampleModalCenter"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered bg-light" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bold text-danger" id="exampleModalLongTitle"><i class="fad fa-heart"></i> Add your weeding story</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body  text-danger">
                <ul id="errorlist">
                </ul>
<form action="{{route('Create.story')}}" method="POST" id="form" enctype="multipart/form-data"  >

   @if($errors->any())

   <p class="text-danger">please take care of the following errors</p>
   <ul >

    @foreach($errors->all() as $error )

    <li>{{$error}}</li>
    @endforeach
   </ul>
   @endif
    @csrf
<div class="form-group">
    <label for="exampleInputPassword1"><i class="fad fa-female"></i> Bride's name*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('bride')}}" name="bride" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >  <i class="fad fa-male"></i> Groom's Name*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('groom')}}" name="groom" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><i class="fad fa-rings-wedding"></i> Wedding story*</label>
    <textarea class="form-control" id="story" rows="3"value="{{old('story')}}" name="story" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"><i class="fad fa-image"></i> Wedding image*</label>
    <input type="file" class="form-control-file"  id="wedding_story_image" name="image" value="{{old('image')}}" required accept="image/png,image/jpeg,image/bmp,image/gif"

    id="exampleFormControlFile1">
    <img src="" alt="" id="preview">
  </div>
  <script>


  </script>
<button class="btn btn-primary" id="post"  type="submit">Post</button>

</form>

</div>
            <div class="modal-footer">


            </div>
          </div>
        </div>
      </div>

    <x-navbar />
    <!-- Button trigger modal -->


  <!-- Modal -->

    <div class="tm-section tm-bg-img" id="tm-section-1">
        <div class=" animate__animated animate__backInLeft tm-bg-white ie-container-width-fix-2 mt-5">
            <div class="container ie-h-align-center-fix">
                <div class="row">
                    <div class="   ml-auto mr-auto ie-container-width-fix">
                        <form action="{{route('search_results')}}" method="post" class="tm-search-form tm-section-pad-2">
                            @csrf
                            <div class="form-row tm-search-form-row">

                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="gender" class="form-control tm-select " id="gender">
                                       <option value=""> looking for</option>
                                       <option value="female"> Bride</option>
                                       <option value="male"> Groom</option>



<br>






                                    </select>
                                    <i class="fad fa-2x fa-user tm-form-element-icon"></i>
                                </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="country_id" class="form-control tm-select" id="country">
                                            <option value="">Country</option>




                                            @foreach($country as $key => $item)
                                            <option value="{{$key}}">{{$item}}</option>
                                            @endforeach

                                        </select>

                                        <i class="fad fa-2x fa-globe-americas tm-form-element-icon"></i>

                                    </div>


                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="mothertongue_id" class="form-control tm-select" id="language">
                                        <option value="">Mother Tongue</option>
                                        @foreach($language as $key => $item)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa fa-2x fa-language tm-form-element-icon"></i>

                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="height" class="form-control tm-select " id="height">
                                        <option value="">height</option>
                                        <option value="4'0">4'0"</option>
                                        <option value= "4'1">4'1"</option>
                                        <option value="4'2">4'2"</option>
                                        <option value="4'3">4'3"</option>
                                        <option value="4'4">4'4"</option>
                                        <option value="4'5">4'5"</option>
                                        <option value="4'6">4'6"</option>
                                        <option value="4'7">4'7"</option>
                                        <option value="4'8">4'8"</option>
                                        <option value="4'10">4'9"</option>
                                        <option value="4'11">4'11"</option>
                                        <option value="5'0">5'0"</option>
                                        <option value= "5'1">5'1"</option>
                                        <option value="5'2">5'2"</option>
                                        <option value="5'3">5'3"</option>
                                        <option value="5'4">5'4"</option>
                                        <option value="5'5">5'5"</option>
                                        <option value="5'6">5'6"</option>
                                        <option value="5'7">5'7"</option>
                                        <option value="5'8">5'8"</option>
                                        <option value="5'10">5'9"</option>
                                        <option value="5'11">5'11"</option>
                                        <option value="6'0">6'0"</option>
                                        <option value= "6'1">6'1"</option>
                                        <option value="6'2">6'2"</option>
                                        <option value="6'3">6'3"</option>
                                        <option value="6'4">6'4"</option>
                                        <option value="6'5">6'5"</option>
                                        <option value="6'6">6'6"</option>
                                        <option value="6'7">6'7"</option>
                                        <option value="6'8">6'8"</option>
                                        <option value="6'10">6'9"</option>
                                        <option value="6'11">6'11"</option>
                                        <option value="7'0">7'0"</option>
                                        <option value= "7'1">7'1"</option>
                                        <option value="7'2">7'2"</option>
                                        <option value="7'3">7'3"</option>
                                        <option value="7'4">7'4"</option>
                                        <option value="7'5">7'5"</option>
                                        <option value="7'6">7'6"</option>
                                        <option value="7'7">7'7"</option>
                                        <option value="7'8">7'8"</option>



<br>






                                    </select>

                                    <i class="fad fa-2x fa-arrows-v tm-form-element-icon"></i>
                                </div>

                            </div>

                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-2">

                                    <select name="occupation_id" class="form-control tm-select" id="occupation">
                                        <option value="">occupation</option>

                                        @foreach($occupation as $key => $item)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                    <i class="fad fa-2x fa-user-md tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="religion_id" class="form-control tm-select" id="religion">
                                        <option value="">Religion</option>
                                        @foreach($religion as $key => $item)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endforeach
                                    </select>

                                    <i class="fa fa-2x  fa-pray tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">

                                    <select name="caste_id" class="form-control tm-select" id="caste">
                                        <option value="">caste</option>
                                        @foreach($caste as $key => $item)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endforeach


                                    </select>
                                    <i class="fad fa-2x fa-people-arrows tm-form-element-icon"></i>

                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <button type="submit" class="btn btn-primary tm-btn-search">Check
                                        Availability</button>
                                </div>
                            </div>
                            <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                <p class="tm-margin-b-0">Search from our <b>{{$users}}</b> profiles </p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-section-2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="tm-section-title shadow-lg">We are here to help you?</h2>
                    @if($bool === false || Auth::check()===false)
                    <p class="tm-color-white tm-section-subtitle">Next Step Complete Your profile</p>
                    <a href="{{route('userprofile')}}" class="tm-color-white tm-btn-white-bordered">Complete Profile</a>
                    @else
                    <p class="tm-color-white tm-section-subtitle"> you have completed your profile</p>
                    <a href="#" class="tm-color-white tm-btn-white-bordered">Check some of our profiles</a>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="tm-section tm-position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
            class="tm-section-down-arrow">
            <polygon fill="#ee5057" points="0,0  100,0  50,60"></polygon>
        </svg>
        <div class="container tm-pt-5 tm-pb-4">
            <div class="row text-center">
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                    <i class="fa tm-fa-6x fa-user-check tm-color-primary tm-margin-b-20"></i>

                    <h3 class="tm-color-primary tm-article-title-1">
                        100% Manually verified Profiles</h3>
                    <p>Search by location, community, profession & more from lakhs of active profiles</p>
                </article>
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                    <i class="fad tm-fa-6x fa-handshake tm-color-primary tm-margin-b-20"></i>
                    <h3 class="tm-color-primary tm-article-title-1">
                        trusted by users</h3>
                    <p>Special listing of profiles verified by our agents through personal visits</p>

                </article>
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                    <i class="fa tm-fa-6x fa-user-lock tm-color-primary tm-margin-b-20"></i>
                    <h3 class="tm-color-primary tm-article-title-1">Control over Privacy</h3>
                    <p>Restrict unwanted access to contact details & photos/videos</p>
                </article>
            </div>
        </div>
    </div>



    <div class=" animate__animated animate__backInLeft container col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-recommended-container">
        <div class="tm-bg-white">
            <div class="tm-bg-primary tm-sidebar-pad">
                <h3 class="tm-color-white tm-sidebar-title">Our clients</h3>
                <p class="tm-color-white tm-margin-b-0 tm-font-light">Our clients are from
                    </p>
            </div>
            <div class="tm-sidebar-pad-2">
                <a href="#" class="media tm-media tm-recommended-item">
                    <img src="img/tn-img-01.jpg" alt="Image">
                    <div class="media-body tm-media-body tm-bg-gray">
                        <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">India</h4>
                    </div>
                </a>
                <a href="#" class="media tm-media tm-recommended-item">
                    <img src="img/tn-img-02.jpg" alt="Image">
                    <div class="media-body tm-media-body tm-bg-gray">
                        <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">Australia</h4>
                    </div>
                </a>
                <a href="#" class="media tm-media tm-recommended-item">
                    <img src="img/tn-img-03.jpg" alt="Image">
                    <div class="media-body tm-media-body tm-bg-gray">
                        <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">Canada</h4>
                    </div>
                </a>
                <a href="#" class="media tm-media tm-recommended-item">
                    <img src="img/tn-img-04.jpg" alt="Image">
                    <div class="media-body tm-media-body tm-bg-gray">
                        <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">U.S.A</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-xs-12 col-md-12 col-lg-9 col-xl-9 mt-0 mt-sm-3">
        <div class="ml-auto tm-bg-white-shadow tm-pad tm-media-container">
            @foreach($stories as $key=>$data)
            <article class="media tm-margin-b-20 tm-media-1">
                <img src="{{asset('wedding stories')}}/{{$data->image}}" alt="Image" id="wedding">
                <div class="media-body tm-media-body-1 tm-media-body-v-center">
                    <h3 class="tm-font-semibold tm-color-primary tm-article-title-3">  {{$data['groom']}} and {{$data->bride}}
                       </h3>
                    <p>
                        {{$data['story']}}


                    </p>
                </div>
                </article>
          @endforeach

            <div class="flex justify-center  text-center container m-auto">
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="add" class="btn btn-primary"><i class="fal fa-plus"></i> Add Yours</a>

            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>

<x-footer/>

</body>

</html>
   <!-- load JS files -->
   <script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
   <script src="js/popper.min.js"></script> <!-- https://popper.js.org/ -->
   <script src="js/bootstrap.min.js"></script> <!-- https://getbootstrap.com/ -->
<script>
//to append errors in form
let form=document.getElementById('form');
let story=document.getElementById('story');
let ul=document.getElementById('errorlist');
let error=document.createElement('li')
form.addEventListener('submit',(e)=>{
    val=story.value;
    function countWords(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi,"");
    str = str.replace(/[ ]{2,}/gi," ");
    str = str.replace(/\n /,"\n");
    return str.split(' ').length;
 }
 let ans=countWords(val);

if (ans<30 || ans>50) {
    e.preventDefault();
error.innerHTML="story must be between 30 and 50 characters"
ul.append(error);
}




})
//image preview code
let img = document.getElementById('wedding_story_image');
    img.addEventListener('change', function(event) {
        if (event.target.files.length > 0) {
            let src = URL.createObjectURL(event.target.files[0]);
            let preview = document.getElementById('preview');
            preview.src = src;
            preview.style.display = "block"

        }
    })



</script>
