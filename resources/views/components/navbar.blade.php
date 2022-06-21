
<style>

    .ml-10{
        margin-left:auto;
    }
</style>

<?php

use App\Http\Controllers\frontend\UserProfileController;
$bool=UserProfileController::checkUser();


?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<!-- Google web font "Open Sans" -->
<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap style -->


<link rel="stylesheet" href="css/tooplate-style.css"> <!-- Templatemo style -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">

                        <nav class="navbar navbar-expand-lg narbar-light">

                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo "class="logo">
                                matrimony
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav  ml-auto mb-2 mb-lg-0 ">
                                  <li class="nav-item-active">
                                    <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  @if (Route::has('login'))
                                  @auth
                                  <li class="nav-item-active">

                        </li>
                    @else
                    <li class="nav-item-active">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item-active">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
</li>
                    @endauth

            @endif
                                  <li class="nav-item-active">
                                    <a class="nav-link" href="{{route('Profiles')}}">Profiles</a>
                                  </li>
                             @if($bool === true)
                                  <li class="nav-item-active">
                                    <a class="nav-link" href="{{route('getprofile')}}">Profile</a>


                                  </li>


                                  @endif
                                       <li class="nav-item-active">
                                    <a class="nav-link" href="#tm-section-6">Contact Us</a>


<li class=" ms-auto">
    <div class="ml-10  "> </li>


                                </ul>

<ul class="navbar-nav  ml-auto mb-2 mb-lg-0 text-end">
    @if(Auth::check()!=false)
    <button class="btn btn-primary p-3" id="add"
    href="{{ route('logout') }}"   onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
Logout

</button>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endif
</div>
</li>
</ul>




                            </div>

                        </nav>

                    </div>
                </div>

            </div>
