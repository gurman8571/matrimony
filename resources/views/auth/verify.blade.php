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
            <div class="inline-flex">

            </div>
                <a href="#"
                    class="inline-block mb-6 text-3xl font-bold tracking-wider uppercase text-pink  ">
                    matrimony
                </a>

                <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">

                    <div class=" px-4 py-2 border-0 mb-0 rounded-md  relative bg-yellow-200">



                        <span class=" flex align-middle mr-8 mb-0 font-light text-gray-600">


                          <p  >You need to verify your email address to activate your acount</p>
                        </span>

                      </div>
                    <p class="text-lg font-xl  font-bold  text-center text-gray-500 ">
                       Email verification
                    </p>


                    <main>




                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            <br>
                            <br>

                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf

                                <div class="flex justify-center">
                                <button type="submit" class= "bg-pink p-4   text-white rounded-lg ">{{ __('click here to request another') }}</button>.
                            </div>
                            </form>
                        </div>













    <br><br>

                            </div>

                </form>
