<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

* {
    font-family: 'Josefin Sans', sans-serif;
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>

<div
    class="flex flex-col items-center justify-center min-h-screen p-4 space-y-4 antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
    <a href="#" class="inline-block mb-6 text-3xl font-bold tracking-wider uppercase text-primary-dark dark:text-light">
        matrimony
    </a>
    <h1 class="sr-only">Confirm password</h1>
    <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
        <p class="text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            {{ __('Please confirm your password before continuing.') }}
        </p>
        <main>




            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf

                <div class>


                    <div>
                        <input id="password" placeholder="Enter password" type="password" class=" w-full px-4 py-2 border rounded-md
                        dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100
                        dark:focus:ring-primary-darker form-control  @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">
                            {{ __('Confirm Password') }}
                        </button>

                    @if (Route::has('password.request'))
                        <div class="text-center p-3">
                        <br>
                            <a class="mt-3 center" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
            </form>
    </div>
</div>
</div>
</div>
</div>
