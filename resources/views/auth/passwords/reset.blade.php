<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        *{
            font-family:  'Josefin Sans', sans-serif;
        }

    </style>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="/css/tailwind.css" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    </head>
    <body>


<div  class=" flex flex-col items-center justify-center min-h-screen p-4 space-y-4 antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light" >


            <div class="inline-flex">
                <img src="{{ URL::asset("img/logo.png") }}" alt="Site logo" class="flex-1" >            </div>

<main>
    <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
        <h1 class="text-xl font-semibold text-center"> {{ __('Reset Password') }}</h1>
                    <form method="POST" action="{{ route('password.update') }}"  class="space-y-6">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">



                                <input id="email" type="email" class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-pink dark:focus:ring-pink form-control  @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror





                                <input id="password" placeholder="new password" type="password" class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-pink dark:focus:ring-pink @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                <input id="password-confirm"  placeholder="password confirm" class=" w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-pink dark:focus:ring-pink"type="password"  name="password_confirmation" required autocomplete="new-password">


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-pink focus:outline-none focus:ring-2 focus:ring-pink focus:ring-offset-1 dark:focus:ring-offset-darker">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
