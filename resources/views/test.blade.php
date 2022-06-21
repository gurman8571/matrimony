<html>

    <head><link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
rel="stylesheet" />
    </head>
<style>  .far,.fa{
    margin-top: -50px;
    margin-left:200px;

        }
        *{
font-family:'Cairo', sans-serif;

        }
        .bg-pink{
background-color: #ee5057;
        }
        .text-pink{
            color: #ee5057;
        }
        </style>
    <section class="overflow-hidden m-auto bg-gray-200">
        <div class=" lg:flex min-h-screen overflow-hidden sm:min-h-min lg:mx-64 lg:mt-8 lg:mb-8 shadow-lg bg-white border border-gray-300">
          <div class="relative flex-1 hidden w-0 overflow-hidden lg:block">
            <img class="absolute inset-0 object-cover w-full h-full " src="{{asset('img')}}/bg-img-1.jpg" alt="">
          </div>
          <div class="
        flex flex-col
        justify-center
        flex-1
        px-4
        py-12

        sm:px-6
        lg:flex-none lg:px-20
        xl:px-24
      ">
            <div class="w-full max-w-xl mx-auto lg:w-64">
              <div>
                <a href="/" class="text-pink text-lg">Matrimony</a>
                <h2 class="mt-6 text-3xl font-extrabold text-neutral-600"> Sign in. </h2>
              </div>
              <div class="mt-8">
                <div class="mt-6">
                    <form method="POST" action="{{ route('login') }}" class="space-y-6 ">
                        @csrf

                        @if (session('error'))


                    <div class=" capitalize bg-red-100 border border-red-400 text-red-700 text-center px-4 py-2 br-5" role="alert">
                        <span class="block sm:inline"> {{ session('error') }}</span>

                      </div>


            @endif

                    <div>
                      <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                      <div class="mt-1">
                        <input id="email"style="font-family:'Font Awesome 5 Pro' "  name="email" type="email" placeholder=" &#xf1fa;" value="{{ old('email') }}" required autocomplete="email" autofocus  class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-500
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-gray-300
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-gray-500
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                    @error('email')
                    <span class="invalid-feedback " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                      </div>

                    </div>
                    <div class="space-y-1">
                      <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                      <div class="mt-1">
                        <input type="password" style="font-family:'Font Awesome 5 Pro' "  id="password" name="password" placeholder="&#xf084;"  required autocomplete="current-password" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-500
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-gray-300
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-gray-500
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                    <span class="absolute mt-2 pt-2 cursor-pointer text-gray-600">
                        <i class="fa fa-eye-slash " id="password_toggle" ></i>
                       </span>


                   @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <div class="text-sm">
                            @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}


                            </a>
                            @endif                          </div>

                      </div>

                    </div>
                    <div>
                      <button type="submit" class="
                    flex
                    items-center
                    justify-center
                    w-full
                    px-10
                    py-4
                    text-base
                    font-medium
                    text-center text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    bg-pink
                    rounded-xl

                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-blue-500
                  "> Sign in </button>
                    </div>
                  </form>
                  <div class="relative my-4">
                    <div class="absolute inset-0 flex items-center">
                      <div class="w-full  border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">

                      <div class="text-sm text-gray-600">
                        Don't have an account yet? <a href="{{route('register')}}" class="text-blue-600 hover:underline">Register</a>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="
                  w-full
                  items-center
                  block
                  px-10
                  py-3.5
                  text-base
                  font-medium
                  text-center text-blue-600
                  transition
                  duration-500
                  ease-in-out
                  transform
                  border-2 border-white
                  shadow-md
                  rounded-xl
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-gray-500
                ">
                      <div class="flex items-center justify-center">

                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>

        let togglebtn=document.querySelector('#password_toggle');
        const password=document.querySelector('#password');
        var state=false;

        togglebtn.addEventListener('click',()=>{


        if(state){
        password.setAttribute('type','password');
        togglebtn.setAttribute('class','fa fa-eye-slash')
        state=false;
        }

        else{
            password.setAttribute('type','text');
            togglebtn.setAttribute('class','far fa-eye')
           state=true;

        }
        })

            </script>
