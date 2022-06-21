<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    *{
        font-family:  'Josefin Sans', sans-serif;
    }
    body{
background:url("img/bg-img-1.jpg") ;
background-attachment: fixed blur(5px)
;
background-size:cover;
background-position:center;
background-blend-mode:overlay;

    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/tailwind.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>
<style>

</style>
<body>
    <div
        class="flex flex-col items-center justify-center min-h-screen p-4 space-y-4 antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light"
        >
          <!-- Brand -->
          <div class="inline-flex">







    </div>
    <p class="text-4xl text-pink font-bold uppercase  text-center">  matrimony</p>
    <a href="#"
        class=" capitalize font-medium  text-xl text-gray-500">
        Enter details to start journey with us...
        </a>
        <main>
        <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md shadow-lg">


            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <input id="username" type="text" placeholder="Username" class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darkerform-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong  class="text-red-700"> {{ $message }}</strong>
    </span>
@enderror

                    <input id="email" placeholder="Email address"
                        class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker form-control @error('email') is-invalid @enderror"
                        type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong  class="text-red-700">{{ $message }}</strong>
                    </span>
                    @enderror






                <input id="password"
                    class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                    type="password" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red-700">{{ $message }}</strong>
                </span>
                @enderror
                <input

                placeholder="Confirm Password"
                id="password-confirm" type="password" class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker" name="password_confirmation" required autocomplete="new-password">


        <div class="flex items-center justify-between">
    <!-- Remember me toggle -->


            </div>



            <div>
                <button type="submit"
                    class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-pink  focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">
                    {{ __('register') }}
                </button>

            </div>

        </form>
        <div class="flex items-center justify-center space-x-2 flex-nowrap">
              <span class="w-20 h-px bg-gray-300"></span>
              <span>OR</span>
              <span class="w-20 h-px bg-gray-300"></span>
            </div>
            <div class="text-sm text-gray-600 dark:text-gray-400">
              Already have an account ? <a href="{{route('login')}}" class="text-blue-600 hover:underline">Login</a>
            </div>
</div>
    </div>
    </div>
    </div>
    </div>
    </div>
