

<?php

use App\Http\Controllers\frontend\UserProfileController;
$bool=UserProfileController::checkUser();


?>

<html>
    <head>
        @if( $bool === false)

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
<div class="header paddt20">matrimony
    <br></div>

<form  action={{route('User.Profile')}} method="POST" id="form1">


@csrf

       <!-- Header End -->
       <!-- Container Start-->

    <div id="form0" >
        <br>
        <div class="paddb30"></div>
        <div class="regis-level" style=" font-size:25px ; margin-bottom:3px" >Great! You have completed <span class="fs30">20% </span> </div>
        <div class="regis-container" >
           <div class="txt-center regis-left" style="background : #EE5057 ;color:white;font-size: 25px;">
              <div class="paddb30 mobcouplft iconspaddtop"><i class="fad fa-heart white animate__animated animate__heartBeat animate__infinite"></i></div>
              <div class="paddb40 mobcouprgt white qoute " id="qoute1" style=" font-size:26px;"> </div>
           </div>
           <div class="regis-right">
              <div class="paddl5 paddt35 mob-rgtpadd">
                 <div class="paddlh2  " ><h2 style=" color: #EE5057">Please provide us with your personal details </h2></div>



                 <div class="paddt50">
                    <div class="regis-col1 paddt10">Making Profile For</div>
                     <div class="regis-col4 regis-radio "style="  display: flex;
                        flex-direction: row;">
                        <div class="radio">

                      <input type="radio" id="Groom"  name="Gender"  value="male"  >
                      <label for="Groom" class="radio-label" style="font-size:15px;">Groom</label>
                      </div>
                      <div class="radio">
                        <input type="radio" id="Bride" name="Gender" value="Female">
                        <label for="Bride"  class="radio-label" style="font-size:15px">Bride</label>
                    </div>

                                      <div>


                      </div>
                     </div>

                     <div class="clear"></div>
                     <div class="regis-errtxt" id="ms_err"></div>
                  </div>

                 <div class="paddt10 h50">
                     <div class="regis-col1 paddt7">Religion* </div>
                     <div class="regis-col2 regis-select" id="Religion-border">
                        <select name="Religion"value="{{old('religion')}}" id="Religion" size="1" class="paddl5" style="color:#000;">
                                                                                  <option value="0">---Select---</option>


                                                              @foreach($data['religion'] as $key=>$item)

                                                              <option value="{{$key}}">{{$item}}</option>
                                                                    @endforeach



                                                      </select>
                     </div>
                    <div class="clear"></div>
                    <div class="regis-errtxt" >

                        @error('religion')
                        *{{$message}}
                        @enderror
                    </div>                 </div>


    <div class="paddt10 h50">
                     <div class="regis-col1 paddt7">Caste* </div>
                     <div class="regis-col2 regis-select" id="Religion-border">
                        <select name="Caste" id="Caste" size="1" class="paddl5" style="color:#000;" >
                                                                                  <option value="0" style="color:grey;">---Select---</option>


                                                              @foreach($data['caste'] as $key=>$item)

                                                              <option value="{{$key}}">{{$item}}</option>
                                                                    @endforeach



                                                      </select>
                     </div>
                     <div class="clear"></div>
                     <div class="regis-errtxt" >

                        @error('caste')
                        *{{$message}}
                        @enderror
                    </div>
                 </div>

                 <div class="paddt10 h50">
                    <div class="regis-col1 paddt7">Mother Tongue </div>
                    <div class="regis-col2 regis-select" id="mothertongue-border">
                       <select name="language" id="MOTHERTONGUE" size="1" class="paddl5" style="color:#000;">
                                                                                 <option value="0">---Select---</option>



                                                             @foreach($data['language'] as $key=>$item)

                                                             <option value="{{$key}}">{{$item}}</option>
                                                                   @endforeach




                                                     </select>
                    </div>

                    <div class="clear"></div>

                 </div>

                 <div class="paddt10 h50">
                    <div class="regis-col1 paddt7">Country* </div>
                    <div class="regis-col2 regis-select">
                       <select name="country" id="country" value="{{old('country')}}" size="1" class="paddl5" style="color:#000;">
                                                                                 <option value="0">---Select---</option>



                                                             @foreach($data['country'] as $key=>$item)

                                                             <option value="{{$key}}">{{$item}}</option>
                                                                   @endforeach




                                                     </select>
                    </div>

                    <div class="clear"></div>
                    <div class="regis-errtxt" >

                        @error('country')
                        *{{$message}}
                        @enderror
                    </div>                 </div>


                 <div id="states">

                </div>

                 <div class="paddt10 h50">
                    <div class="regis-col1 paddt7">Age*</div>
                    <div class="regis-col2 posrelative" id="email-border">
                        <input type="number" name="age" id="age" placeholder="age" class="regis-input " value="{{old('age')}}"style="color:black">

                    </div>



                    <div class="clear"></div>

                    <div class="regis-errtxt" >

                        @error('age')
                        *{{$message}}
                        @enderror
                    </div>

                 </div>





                    <div class="paddt10 ">
                        <div class="regis-col1 paddt7">height*</div>
                           <div class="regis-col2 regis-select" id="Religion-border">
                              <select name="height" id="height" value="{{old('height')}}"size="1" class="paddl5" style="color:#000;">
                                                  <option value="0">---Select---</option>

                                                  <option value="4'0">4'0"</option>
                                                  <option value= "4'1">4'1"</option>
                                                  <option value="4'2">4'2"</option>
                                                  <option value="4'3">4'3"</option>
                                                  <option value="4'4">4'4"</option>
                                                  <option value="4'5">4'5"</option>
                                                  <option value="4'6">4'6"</option>
                                                  <option value="4'7">4'7"</option>
                                                  <option value="4'8">4'8"</option>
                                                  <option value="4'9">4'9"</option>
                                                  <option value="4'10">4'10"</option>
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
                                                  <option value="5'9">5'9"</option>
                                                  <option value="5'10">5'10"</option>
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
                                                  <option value="6'9">6'9"</option>
                                                  <option value="6'10">6'10"</option>

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
                                                            </select>
                           </div>
                          <div class="clear"></div>
                          <div class="regis-errtxt" >

                            @error('height')
                            *{{$message}}
                            @enderror
                        </div>
                       </div>




                 <div class="paddt30 paddb30 txt-center">
                    <button class="hp-button" alt="Continue" type="button" id="next1">Continue</button>
                 </div>
              </div>
           </div>
           <div class="clear"></div>

        </div>
    </div>



    </div>
</div>
       <!---div2--->



       <!-- Container End-->
    </div>
    <div id="form2">
    <div class="regis-level" style="font-size:25px ; margin-bottom:3px" >Great! You have completed <span class="fs30" >50%</span> </div>
    <div class="regis-container" >
       <div class="txt-center regis-left" style="background : #00a650;color:;font-size: 25px; height: 97%; margin-top:14px;">

          <div class="paddb30 mobcouplft iconspaddtop"><i class="fad fa-kiss-wink-heart white animate__animated animate__jello animate__infinite"></i></div>
          <div class="paddb40 mobcouprgt white" id="qoute2"  style="font-size:26px"> </div>
       </div>
       <br>
       <div class="regis-right">
          <div class="paddl5 paddt35 mob-rgtpadd">
             <div class="paddlh2 "><h2 style="color : #00a650 ;font-size:26px;" > Please provide us with your occupational details </h2></div>


             <div class="paddt40 h50">
             <div class="regis-col1 paddt7">Education Level*</div>
                <div class="regis-col2 regis-select" id="Religion-border">
                   <select name="education_level"value="{{old('education_level')}}" id="education_level" size="1" class="paddl5" style="color:#000;">
                                       <option value="0">---Select---</option>
                                       <Option  value="matric">Matric</Option>
                                       <option value="+2 pass">Intermediate</option>
                                       <option value="Diploma">Diploma</option>
                                       <Option value="U.G" >Undergraduate</Option>
                                       <Option value="P.G" >Postgraduate</Option>
                                       <option value="Never went to school">Never went to school</option>
                                                 </select>
                </div>
               <div class="clear"></div>
               <div class="regis-errtxt" >

                @error('education_level')
                *{{$message}}
                @enderror
            </div>
            </div>

             <div class="paddt40 h50">
                <div class="regis-col1 paddt7">Highest Degree </div>
                <div class="regis-col2 regis-select" id="Religion-border">
               <select name="degree" value="{{old('degree')}}" class="paddl5" style="color:#000;">

                <option value="0">---Select---</option>



                @foreach($data['degree'] as $key=>$item)

                <option value="{{$key}}">{{$item}}</option>
                      @endforeach
               </select>

            </div>
                <div class="clear"></div>

             </div>


             <div class="paddt10 h50">
                 <div class="regis-col1 paddt7">occupation </div>
                 <div class="regis-col2 regis-select" id="Religion-border">
                    <select name="occupation" id="occupation" size="1" value="{{old('occupation')}}"class="paddl5" style="color:#000;">
                                                                              <option value="0">---Select---</option>



                                                          @foreach($data['occupation'] as $key=>$item)

                                                          <option value="{{$key}}">{{$item}}</option>
                                                                @endforeach




                                                  </select>
                 </div>
                <div class="clear"></div>
                <div class="regis-errtxt" id="religion-err"></div>
             </div>


<div class="paddt10 h50">
                 <div class="regis-col1 paddt7">Annual Income </div>
                 <div class="regis-col2 regis-select" id="Religion-border">
                    <select name="income" id="Income" size="1" class="paddl5" value="{{old('income')}}" style="color:#000;" >
                                                                              <option value="0">---Select---</option>




                                                          <option value="0-1 Lakhs">0 - 1 Lakh</option>
                                                          <option value="1-5 Lakhs">1 - 5 Lakhs</option>

                                                          <option value="5-10 Lakhs">5 - 10 Lakhs</option>

                                                          <option value="10-15 Lakhs">10 - 15 Lakhs</option>
                                                          <option value="15-20 Lakhs">15 - 20 Lakhs</option>

                                                          <option value="20-30 Lakhs">20 - 30 Lakhs</option>
                                                          <option value="30-50 Lakhs">30 - 50 Lakhs</option>


                                                          <option value="50lakh-1crore">50 Lakhs - 1 Crore</option>

                                                          <option value="above 1crore">1 Crore &amp; Above</option>                  </select>




                 </div>
                 <div class="clear"></div>
             </div>








             <div class="paddt30 paddb30 txt-center">
                 <br>
                 <br>
                 <br>
                 <br>

                <button type="button" class="submit" id="prev1" style="margin-right:7px;">previous</button>

                <button type="button" class="hp-button" id="next2">continue</button>

             </div>
          </div>
       </div>
       <div class="clear"></div>

    </div>
</div>
</div>
</div>
<!------------div 3------------->
<div id="form4">
    <div class="regis-level" style="font-size:25px ; margin-bottom:3px"; >Great! You have completed <span class="fs30" >80%</span> </div>
    <div class="regis-container" >
       <div class="txt-center regis-left" style="background : rgb(18, 109, 245); font-size:25px; height: 97%; margin-top:14px;">
          <div class="paddb30 mobcouplft iconspaddtop"><i class="fad fa-rings-wedding white animate__animated animate__tada animate__infinite"></i></div>
          <div class="paddb40 mobcouprgt white" > A good marriage is one where each partner secretly suspects they got the better deal</div>
       </div>
       <br>
       <div class="regis-right">
          <div class="paddl5 paddt35 mob-rgtpadd">
             <div class="paddlh2 "><h2 style="color : " > Please provide us with some more  details </h2></div>


             <div class="paddt40 h3">
             <div class="regis-col1 paddt7">Martial Status*</div>
                <div class="regis-col2 regis-select" id="Religion-border">
                   <select name="marital_status" value="{{old('marital_status')}}" size="1" class="paddl5" style="color:#000;">
                                       <option value="0">---Select---</option>
                                       <Option  value="Never Married">Never Married </Option>
                                       <option value="Divorced">Divorced</option>
                                       <option value="Awaitng Divorce">Awaiting Divorce</option>
                                       <Option value="Widowed" >Widowed</Option>

                                                 </select>
                </div>
               <div class="clear"></div>
               <div class="regis-errtxt" >

                @error('marital_status')
                *{{$message}}
                @enderror
            </div>
            </div>

            <div class="paddt40">
                <div class="regis-col1 paddt10">Drink and Smoke</div>
                 <div class="regis-col4 regis-radio "style="  display: flex;
                    flex-direction: row;">
                    <div class="radio">

                  <input type="radio" id="yes"  name="Drink_and_smoke"  value="1" >
                  <label for="yes" class="radio-label">Yes</label>
                  </div>
                  <div class="radio">
                    <input type="radio" id="no" name="Drink_and_smoke" value="0">
                    <label for="no"  class="radio-label">	No</label>
                </div>

                                  <div>


                  </div>
                 </div>

                 <div class="clear"></div>

              </div>





<div class="paddt10 h50">
                 <div class="regis-col1 paddt7">Diet </div>
                 <div class="regis-col2 regis-select" id="Religion-border">
                    <select name="diet" id="diet" size="1" class="paddl5" value="{{old('diet')}}" style="color:#000;" >
                                                                              <option value="0">---Select---</option>




                                                                              <option value="veg">Vegetarian</option>
                                                                              <option value="non-Veg">Non-Vegetarian</option>
                                                                              <option value="non-Veg">Eggeterian</option>
                                                                              <option value="vegan">Vegan</option>
                                   </select>




                                                  </select>
                 </div>
                 <div class="clear"></div>
                 <div class="regis-errtxt" id="religion-err"></div>
             </div>

             <div class="paddt10 h50">
                <div class="regis-col1 paddt7">Summary </div>
                <div class="regis-col2 regis-select" id="Religion-border">
                    <div class="regis-radiocol2 regis-radio margt-10" > <textarea class="regis-abttxtarea"value="{{old('summary')}}" title="spellcheck" name="summary" id="summary" ></textarea>
                        <div class="reg_small_font">
                         </div>


                </div>
            </div>

        </div>







        <div class="clear"></div>
        <div class="regis-errtxt" id="religion-err"></div>
    </div>




             <div class="paddt30 paddb30 txt-center">
                 <br>
                 <br>

                <!-- <input class="hp-button" alt="Continue" value="Continue"  onclick="return validateregistrationform(2);" type="submit"> -->

<div class="btn-box" style="display:flex;">
                <button type="button" class="hp-button" id="prev2" >previous</button>
                <button type="submit" class="submit" >Submit</button>

            </div>
             </div>

          </div>

       <div class="clear"></div>

    </div>
</div>
</div>
</div>

</form>
<input type="hidden" id="tokan" value="{{csrf_token()}}">

@else
<div >
<h1 class="paddt30">you have completed profile</h1>
</div>
@endif

 <!---*/---->

        <script>



    var next1=document.getElementById("next1");
    var form0=document.getElementById("form0");
    var form2=document.getElementById("form2");
    var next2=document.getElementById("next2");
     var qoute1=document.getElementById("qoute1");

     var qoute2=document.getElementById("qoute2");
     var desccount=document.getElementById("desccount");
     var Desc=document.getElementById("DESCRIPTION");
     var prev1=document.getElementById("prev1");
     var prev2=document.getElementById("prev2");
     var country=document.getElementById("country");





    next1.addEventListener("click",()=>{


form2.style.left="192px";
form0.style.display="none";

    });


    next2.addEventListener("click",()=>{

        form2.style.left="-1200px";
        form4.style.left="192px";

    });


prev1.addEventListener("click",()=>{


    form0.style.display="block";
    form2.style.left="-1400px";


})
prev2.addEventListener("click",()=>{

    form4.style.left="-1200px";
        form2.style.left="192px";
})
    const array=["A happy marriage is a long conversation which always seems too short","Happy is the man who finds a true friend, and far happier is he who finds that true friend in his wife"," get the full value of joy you must have someone to divide it with",

"The highest happiness on earth is marriage"
                            ];
var qoute=array[Math.floor(Math.random()*array.length)];
qoute1.innerHTML = qoute;
qoute2.innerHTML = qoute;




//<!----ajAX code here----->//

$(document).ready(function() {
        $('#country').on('change', function() {
var country_id = $(this).val();
console.log(country_id);

var tokan = $("#tokan").val();

$.ajax({
url:'/getstate',
type: "POST",
dataType: "HTML",
//contentType: "application/json;",
data:{'country_id':country_id, '_token':tokan },
// data:{'country_id='+country_id+'&_token={{csrf_token()}}',
success: function(result){


$('#states').html(
    result
);

}

})
        })

    })

</script>



