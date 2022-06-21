<html>
    <style>

.shadow-light,
.hover\:shadow-light:hover {
  text-shadow: 1px 1px 0 rgba(244, 244, 240, 1), 2px 2px 0 rgba(81, 76, 77, .3);
}

input:focus,
select:focus,
textarea:focus {
  box-shadow: inset 0 0 6px rgba(0,0,0,.4);
  outline: none;
 }


input,select,textarea{
    border-radius: 12px;

}
/* @apply doesn't work on code pen. */
/* The above renders out to: */
.button {
    display: inline-block;
    margin-top: 1.5rem;
    border-radius: .25rem;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.10);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    text-decoration: none;
    border: 0;
}
#one {

    display:none;
}

}
:root {
        color: #4a76a8;
    }

    .color{
        color: #4a76a8;
    }
    .bg-main-color {
        background-color:  #4a76a8;
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }

    </style>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <x-loader/>
    <body class=" bg-gray-200">


        </div>
    </div>
</div>
</div>

    <main class="flex-1 bg-gray-200 mt-8">
    <section class="bg-cream-lighter p-4 shadow-md rounded-lg">
    <div class="md:flex">
      <h2 class="md:w-1/3 uppercase tracking-wide lg:text-3xl sm:text-4xl mb-6 mt-6">Edit Profile</h2>
    </div>
    <form method="POST" action="{{route('Update.profile')}}">
        @csrf
      <div class="md:flex mb-8">
        <div class="md:w-1/3">
          <legend class="uppercase tracking-wide text-sm text-gray-800">Personal</legend>
          <p class="text-xs font-light text-red">Edit Your Personal Details.</p>
        </div>
      <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
        <div class="md:flex mb-4">
            <div class="md:flex-1 md:pr-3">
              <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Name</label>
              <input  type="text" name="address_street" class="w-full shadow-inner p-4 border-0" value="{{$data['User']['name']}}" placeholder="edit height" required>
            </div>
            <input type="hidden" name="id" value="{{$data['User']['id']}}" id="">
            <div class="md:flex-1 md:pl-3">
              <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Marital status</label>
              <select class="w-full shadow-inner p-4 border-0" name="marital_status">

                <option value="{{$data['User']['Marital_Status']}}"id="one" >{{$data['User']['Marital_Status']}}</option>
                                           <option value="Divorced">Divorced</option>
                                           <Option  value="Never Married">Never Married </Option>
                                           <option value="Awaitng Divorce">Awaiting Divorce</option>
                                           <Option value="Widowed" >Widowed</Option>



               </select>
            </div>
          </div>

        <div class="md:flex mb-4">
          <div class="md:flex-1 md:pr-3">
            <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Height</label>
            <select class="w-full shadow-inner p-4 border-0" name="height">
                <option value="{{$data['User']['height']}}"id="one" >
                    {{$data['User']['height']}}  </option>
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
          <div class="md:flex-1 md:pl-3">
            <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Age</label>
            <input class="w-full shadow-inner p-4 border-0" type="text" name="age" placeholder="edit age" value="{{$data['User']['age']}}" required>
@error('age')
<p class="text-red-600 ">*{{$message}}</p>
@enderror
          </div>
        </div>
        <div class="md:flex mb-4">
          <div class="md:flex-1 md:pr-3">
              <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Drink/smoke</label>
              <select class="w-full shadow-inner p-4 border-0" name="Drink_and_smoke">

                <option value="{{$data['User']['drink']}}"id="one" >
                    @if($data['User']['drink'] == 0)
                No
                @else
              Yes
              @endif
                </option>

                <option value="1">yes</option>
                <option value="0">No</option>
              </select>
            </div>
            <div class="md:flex-1 md:pl-3">
                <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Diet</label>
                <select class="w-full shadow-inner p-4 border-0" name="diet">

                  <option value="{{$data['User']['diet']}}"id="one" >{{$data['User']['diet']}}</option>

                  <option value="veg">Vegetarian</option>
                  <option value="non-Veg">Non-Vegetarian</option>
                  <option value="non-Veg">Eggeterian</option>
                  <option value="vegan">Vegan</option>


                 </select>
              </div>
          </div>
        </div>
      </div>
      <div class="md:flex mb-8">
        <div class="md:w-1/3">
          <legend class="uppercase tracking-wide text-sm">Contact</legend>
          <p class="text-xs font-light text-red">Edit Your Contact Details.</p>
        </div>
        <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
          <div class="mb-4">
            <label class="block uppercase tracking-wide text-xs font-bold">Phone</label>
            <input class="w-full shadow-inner p-4 border-0" type="tel" name="phone" value="{{$data['User']['phone']}}" required>
          </div>


        </div>
      </div>
      <div class="md:flex">
        <div class="md:w-1/3">
          <legend class="uppercase tracking-wide text-sm">Social</legend>
          <p class="text-xs font-light text-red">Edit Your Social Details.</p>
        </div>
        <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
          <div class="md:flex mb-4">
            <div class="md:flex-1 md:pr-3">
              <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Religion</label>
              <div class="w-full flex">

<select class="flex-1 shadow-inner p-4 border-0" name="Religion">
    @foreach($data['data']['data']['religion'] as $key=>$item)

    <option value="{{$data['User']['religion_id']}}"id="one" >{{$data['User']->religion->name}}</option>
    <option value="{{$key}}">{{$item}}</option>
                    @endforeach
</select>        </div>
            </div>
            <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
              <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Caste</label>
              <div class="w-full flex">

                <select class="flex-1 shadow-inner p-4 border-0" name="Caste">
                    @foreach($data['data']['data']['caste'] as $key=>$item)

                    <option value="{{$data['User']['caste_id']}}"id="one" >{{$data['User']->caste->name}}</option>
                    <option value="{{$key}}">{{$item}}</option>
                                    @endforeach
                </select>
              </div>
            </div>
          </div>
<br>


            </div>
          </div>
        </div>
        <br>
        <div class="md:flex">
            <div class="md:w-1/3">
              <legend class="uppercase tracking-wide text-sm">Education and occupation</legend>
              <p class="text-xs font-light text-red">Edit Your Educational and occupational  Details.</p>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Highest Education Level</label>
                  <div class="w-full flex">

    <select class="flex-1 shadow-inner p-4 border-0" name="education_level">
        <option value="{{$data['User']['education_level']}}"id="one" >{{$data['User']['education_level']}}</option>
                                       <Option  value="matric">Matric</Option>
                                       <option value="+2 pass">+2 pass</option>
                                       <option value="Diploma">Diploma</option>
                                       <Option value="U.G" >Undergraduate</Option>
                                       <Option value="P.G" >Postgraduate</Option>
                                       <option value="Never went to school">Never went to school</option>
    </select>        </div>
                </div>
                <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                    <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Highest Degree</label>
                    <div class="w-full flex">

      <select class="flex-1 shadow-inner p-4 border-0" name=degree>
          @foreach($data['data']['data']['degree'] as $key=>$item)

                          <option value="{{$data['User']['education_id']}}"id="one" >{{$data['User']->education->name}}</option>
                          <option value="{{$key}}">{{$item}}</option>
                                          @endforeach
      </select>
                  </div>
                </div>
              </div>
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Occupation</label>
                  <div class="w-full flex">
                    <select class="flex-1 shadow-inner p-4 border-0" name="occupation">
                        @foreach($data['data']['data']['occupation'] as $key=>$item)

                        <option value="{{$data['User']['occupation_id']}}"id="one" >{{$data['User']->occupation->name}}</option>
                        <option value="{{$key}}">{{$item}}</option>
                                        @endforeach
                    </select>              </div>
                </div>
                <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Annual Income</label>
                    <div class="w-full flex">

                        <select class="flex-1 shadow-inner p-4 border-0" name="income">

                            <option value="{{$data['User']['income']}}"id="one" >{{$data['User']['income']}}</option>

                            <option value="0-1 Lakhs">0 - 1 Lakh</option>
                                                          <option value="1-5 Lakhs">1 - 5 Lakhs</option>

                                                          <option value="5-10 Lakhs">5 - 10 Lakhs</option>

                                                          <option value="10-15 Lakhs">10 - 15 Lakhs</option>
                                                          <option value="15-20 Lakhs">15 - 20 Lakhs</option>

                                                          <option value="20-30 Lakhs">20 - 30 Lakhs</option>
                                                          <option value="30-50 Lakhs">30 - 50 Lakhs</option>


                                                          <option value="50lakh-1crore">50 Lakhs - 1 Crore</option>

                                                          <option value="above 1crore">1 Crore &amp; Above</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
        <div class="md:flex mb-6">
          <div class="md:w-1/3">
            <legend class="uppercase tracking-wide text-sm">Summary</legend>
          </div>
          <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
            <textarea class="w-full shadow-inner p-4 border-0" placeholder="We build fine acmes." rows="6" name="summary" required>{{$data['User']['summary']}}</textarea>
          </div>
        </div>
        <div class="md:flex mb-6">
            <div class="md:w-1/3">
              <legend class="uppercase tracking-wide text-sm">Prefrence</legend>
            </div>

            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
              <textarea class="w-full shadow-inner p-4 border-0"  rows="6" name="prefrence" required>{{$data['User']['prefrence']}}</textarea>
            </div>
          </div>



          </div>
        </div>

          <div class="md:flex-1 px-3 text-center md:text-right">
            <input type="hidden" name="sponsor" value="0">

            <button type="submit" class="button   text-white  px-8 bg-red-400 hover:bg-brick-dark focus:outline-none" >Save</button>
          </div>

      </form>
    </section>
    </main>
  </body>
</div>
