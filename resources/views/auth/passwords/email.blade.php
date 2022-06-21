<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    *{
        font-family:  'Josefin Sans', sans-serif;
    }


    #bry{
background:url("img/bg-img-1.jpg");
background-attachment: fixed
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
        <link rel="stylesheet" href="/css/tailwind.css" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="../build/css/tailwind.css" />
        <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    </head>

    <body>


          <!-- Brand -->




        <div
            class="flex flex-col items-center justify-center min-h-screen p-4 space-y-4 antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light"
       >
        <div class="inline-flex"  id="bry">

        </div>
            <a href="#"
                class="inline-block mb-6 text-3xl font-bold tracking-wider uppercase text-pink  dark:text-light">
                matrimony
            </a>
            <h1 class="sr-only">Request new password</h1>
            <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
                <p class="text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                    You forgot your password? Here you can easily retrieve a new password.
                </p>

    @if (session('status'))
                <div class="text-blue-700 px-4 py-2 border-0 mb-0 rounded-md  relative bg-blue-200">



                    <span class="inline-block align-middle mr-8 mb-0">
                        <i class="fad fa-lg fa-info-circle"></i>
                      <b class="capitalize">User !</b> {{ session('status') }}
                    </span>

                  </div>
@endif
                <main>

                    <form method="POST" action="{{ route('password.email') }}" >
                        @csrf






                        <input id="email" type="email" class=" w-full px-4 py-2 border rounded-md
                        dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100
                        dark:focus:ring-primary-darker form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email address">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red-700 pt-2">{{ $message }}</strong>
                        </span>
                        @enderror









<br><br>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-pink hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">
                                Request new password
                            </button>
                        </div>

            </form>
        </body>
