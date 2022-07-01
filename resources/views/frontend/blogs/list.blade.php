<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- Bootstrap style -->

    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}"> <!-- Templatemo style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<style>
   .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
</style>


<header>
    <x-navbar />
</header>
<br>
<body>
    <x-loader/>

    <!-- End Page Title -->

    <!-- Blog Details -->
    <div class="blog-details-area pb-100 pt-20 blog-detail-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


                    <div class="card-group m-2">

                        <div class="flex row">
                           @foreach($blogs as $item)
                           <div class="m-2 row">
                              <div class="card" style="width: 22rem; m-2">

                                  <img class="card-img-top" src="{{asset('blogs/'.$item->banner_image)}}" alt="Card image cap">
                                  <div class="card-body">

                                      <div class="d-flex">
                                        <p class="p-0">
                                            <i class="fad fa-calendar" style="color:#EE5057"></i>
                                            {{ date('d-M, Y',strtotime($item->created_at)) }}
                                        </p>
                                        <p class="ml-auto ">
                                            <i class="fad fa-user" style="color:#EE5057"></i> by {{ $item->user->name }}
                                        </p>

                                      </div>

                                    </ul>
                                    <h5 class="card-title">{{$item->title}}</h5>
                                    <br>
                                    <a href="detail/{{$item->id}}" class="btn btn-primary">Read More</a>

                                  </div>
                                  <div class="card-footer">
                                    <small class="text-muted">Last updated ,{{date('d-M, Y',strtotime($item->updated_at))}}</small>
                                  </div>
                                </div>
                           </div>

                          @endforeach

                        </div>

               </div>

                </div>



               <x-enquiry-form/>

            </div>
        </div>
    </div>
    <br/>

    <div class="d-flex justify-content-center" >
        {{$blogs->links('pagination::semantic-ui')}}
        </div>
    </div>

<br>

<x-footer/>

</body>

</html>
