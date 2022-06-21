


<?php

use App\Http\Controllers\frontend\UserProfileController;
$bool=UserProfileController::checkUser();


?>
@if ($bool === true)

<html>
    <head>


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset("css/createprofile.css") }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

      <img src="{{ URL::asset("img/logo.png") }}" alt="Site logo" class="flex-1" >
    </script>



    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
</head>
<style>

  </style>

  <div class="regis-width" >
    <!-- Header Start -->

    <div class="regis-header" style="width:1150px !important;">




    </div>
    <div class="clear"></div>
<br>
<br>
<br>
<br>

    <form  action={{route('User.contact')}} method="POST" enctype="multipart/form-data" class="margt15" id="form1">


@csrf

       <!-- Header End -->
       <!-- Container Start-->
    <div id="form0">
        <div class="regis-level" style=" font-size:25px ; margin-bottom:3px" >Great! You have completed <span class="fs30">100% </span> </div>
        <div class="regis-container" >
           <div class="txt-center regis-left" style="background : #EE5057 ;color:white;font-size: 25px;">
              <div class="paddb30 mobcouplft iconspaddtop"><i class="fad fa-address-book"></i></div>
              <div class="paddb40 mobcouprgt white qoute " id="qoute1" style=" font-size:26px;"></div>
           </div>
           <div class="regis-right">
              <div class="paddl5 paddt35 mob-rgtpadd">
                 <div class="paddlh2  " ><h2 style=" color: #EE5057">Please provide us with your contact details </h2></div>





                <div class="paddt30 ">
                        <div class="regis-col1 paddt7">height*</div>
                           <div class="regis-col2 regis-select" id="Religion-border">
                            <input type="text" name="phone" id="phone" placeholder="Whatsapp.No" class="regis-input " value="{{old('age')}}"style="color:black">

                           </div>
                          <div class="clear"></div>
                          <div class="regis-errtxt" >

                            @error('phone')
                            *{{$message}}
                            @enderror
                        </div>
                       </div>


                       <div class="paddt30 ">
                        <div class="regis-col1 paddt7">Profile image*</div>
                           <div class="regis-col2 regis-select" id="Religion-border">
                            <input type="file" name="image"   class="regis-input" style="color:black">


                           </div>
                          <div class="clear"></div>
                          <div class="regis-errtxt" >

                            @error('phone')
                            *{{$message}}
                            @enderror
                        </div>
                       </div>
                       <div class="paddt30 h50">
                       <div class="regis-col1 paddt7">Prefrence </div>
                <div class="regis-col2 regis-select" id="Religion-border">
                    <div class="regis-radiocol3 regis-radio margt-10" > <textarea class="regis-abttxtarea"value="{{old('prefrence')}}" title="spellcheck" name="prefrence" id="prefrence" ></textarea>
                        <div class="reg_small_font">
                         </div>


                </div>
            </div>
</div>
<br>


                 <div class="paddt50 paddb30 txt-center">
                    <button style="background-color:#EE5057 " alt="Continue" type="submit" class="submit"  id="submit">submit</button>
                 </div>
              </div>
           </div>
           <div class="clear"></div>

        </div>
    </div>
</div>

</form>
<input type="hidden" id="tokan" value="{{csrf_token()}}">
@else
<script>
    window.location = "{route('{User.Profile')}}";

    </script>


@endif






