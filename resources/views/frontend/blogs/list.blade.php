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
    /*.blog-detail{*/
    /*        word-break: break-all;*/
    /*}*/
    .blog-detail table {
        width: 100% !important;
    }

    .blog-details-area .details-item .details-grow {
        word-break: break-word;
        text-align: justify;
    }

    .blog-h1 {
        font-size: 36px !important;
    }

    .blog-detail h2 {
        font-size: 32px !important;
        font-weight: 700 !important;
    }

    .blog-detail h3 {
        font-size: 28px !important;
        font-weight: 600 !important;
    }

    .blog-detail h4 {
        font-size: 24px !important;
    }

    .blog-detail h5 {
        font-size: 22px !important;
    }

    .blog-detail h6 {
        font-size: 18px !important;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    @media only screen and (max-width: 600px) {
        .blog-detail img {
            object-fit: contain;
            height: 100% !important;
            width: 100% !important;
        }

        .mobile-breadcrumb {
            padding-top: 70px !important;
        }
    }
.contact{
    border: 0.4px solid #EE5057;
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
                                </div>
                           </div>
                          @endforeach
                        </div>
               </div>

                </div>



                <div class="col-lg-4">

                    <div class="widget-area" style="position: -webkit-sticky;position: sticky;top: 100px; m-4">


<br>
                        <div class="contact widget-item p-4  ">
                            <br>
                            <h3 class="border-left font-weight-bold" >Get Instant Advice</h3>
                            <hr>
                            <br>
                            <form action="index.html" method="post" class="contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control"
                                        placeholder="Name" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control"
                                        placeholder="Email" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control"
                                        placeholder="Subject" required />
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="9"
                                        placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
                            </form>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
<br>
<x-footer/>

</body>

</html>
