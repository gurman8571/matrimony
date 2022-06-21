

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/tailwind.css" />
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>
<style>

    .far,.fa{
margin-left: -25px;

    }

</style>


<body class="body">

    <div
        class=" flex flex-col  items-center justify-center min-h-screen p-4 space-y-4 antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light"
       id="bry" >
          <!-- Brand -->
          <div class="inline-flex">



        </div>
        <a href="#"
            class=" inline-block m-4 object-center text-2xl font-medium tracking-wider lowercase text-dark dark:text-light">

            </a>
        <main>
        <div class="w-full max-w-sm px-4 py-6  shadow-lg space-y-6 bg-white rounded-md dark:bg-darker">

            <p class="text-4xl text-pink   text-center font-bold uppercase">  matrimony</p>


            <form method="POST" action="{{ route('login') }}" class="space-y-6 ">
                @csrf

                @if (session('error'))


                    <div class=" capitalize bg-red-100 border border-red-400 text-red-700 text-center px-4 py-2 br-5" role="alert">
                        <span class="block sm:inline"> {{ session('error') }}</span>

                      </div>


            @endif



             <input style="font-family:'Font Awesome 5 Pro' " id="email" placeholder=" &#xf1fa;  Email address"
                        class="w-full px-4 py-2  shadow-sm border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-pink dark:focus:ring-pink form-control @error('email') is-invalid @enderror"
                        type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                    <span class="invalid-feedback " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror






                     <input id="password"
                     style="font-family:'Font Awesome 5 Pro' "
                     class="w-full px-4 py-2 border shadow-sm rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-pink dark:focus:ring-pink"
                     type="password" name="password" placeholder="&#xf084; Password" required autocomplete="current-password">
                     <span class="absolute mt-2 pt-2 cursor-pointer text-gray-600">
                     <i class="fa fa-eye-slash " id="password_toggle" ></i>
                    </span>


                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


        <div class="flex items-center justify-between">
    <!-- Remember me toggle -->
            <label class="flex items-center">
                <div class="relative inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                        class="w-10 h-4 transition bg-gray-200 border-none rounded-full shadow-inner outline-none appearance-none toggle checked:bg-pink disabled:bg-gray-200 focus:outline-none"
                        {{ old('remember') ? 'checked' : '' }} />
                    <span
                        class="absolute top-0 left-0 w-4 h-4 transition-all transform scale-150 bg-white rounded-full shadow-sm"></span>
                </div>
                <span class="ml-3 text-sm font-normal text-gray-500 dark:text-gray-400">Remember me</span>
            </label>


                @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}


                </a>
                @endif
            </div>



            <div>
                <button type="submit"
                    class="w-full px-4 py-2 font-medium text-center text-white  transition-colors duration-200 rounded-md bg-pink focus:outline-none focus:ring-2 focus:ring-pink focus:ring-offset-1 dark:focus:ring-offset-darker">
                    {{ __('Login') }}
                </button>

            </div>

        </form>
        <div class="flex items-center justify-center space-x-2 flex-nowrap">
              <span class="w-20 h-px bg-gray-300"></span>
              <span>OR</span>
              <span class="w-20 h-px bg-gray-300"></span>
            </div>
            <div class="text-sm text-gray-600 dark:text-gray-400">
              Don't have an account yet? <a href="{{route('register')}}" class="text-blue-600 hover:underline">Register</a>
            </div>
   </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
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
</body>
