<!----------------php code for table of contents------------------------------->
<?php

if ($blog->description) {
    $answer = '';
    $answer1 = '';
    $answer = html_entity_decode($blog->description);
    $answer = utf8_decode($answer);

    //dd($answer);
    $replace = str_replace('<h2>', '<h2>', $answer);
    $finalanswer = str_replace('</h2>', '</h2>', $replace);
    $finalanswer = str_replace('&nsbp;', ' ', $finalanswer);
    $finalanswer = str_replace('<h2><br>', '<h2>', $finalanswer);
    $finalanswer = str_replace('<h2><br />', '<h2>', $finalanswer);
    $finalanswer = str_replace('<h2><br/>', '<h2>', $finalanswer);
    //dd( $finalanswer);
    $matches = [];

    $dom = new DOMDocument();

    $internalErrors = libxml_use_internal_errors(true);
    $dom->loadHTML($finalanswer);
    $matches = [];

    //dd($dom);
    foreach ($dom->getElementsByTagName('h2') as $node) {
        $matches[] = $node->nodeValue;
        $matchesNode[] = $dom->saveHTML($node);
    }
    //dd($matches);
    $i = 1;
    $node = 0;

    if (count($matches)) {
        foreach ($matchesNode as $match) {
            $h2Id = 'Heading' . $i;
            $tableH2 = [
                'id' => $h2Id,
                'text' => str_replace(['<br>', '<br />', '<br/> ', "\n"], '', $matches[$node]),
            ];

            //$dom->setAttribute("id",$h2Id ):
            $h2withId = str_replace('<h2>', " <h2 id=\"$h2Id\">", $match);

            $finalanswer = str_replace($match, $h2withId, $finalanswer);

            $finaltableH2[] = $tableH2;

            $i++;

            $node++;
        }
    }
    $answer1 = $finalanswer;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$blog->title}}</title>
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
    .blog-detail p {
        color:black; !important;
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
    border: 1px solid #EE5057;
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
                    <h1 class="blog-h1" style="margin-bottom: -10px!important;">{{ $blog->title }}</h1>
                    <br>
                    <span style="font-size:11px;">By <strong>{{ $blog->user->name }}</strong> -
                        {{ date('d M Y', strtotime($blog->created_at)) }} <span
                            style="float:right; margin-top: 4px;"><i>Last Updated:
                                {{ date('d M Y', strtotime($blog->updated_at)) }}</i></span></span>
                    <br>
                    <div class="details-item blog-detail">
                        <div class="details-img m-4">

                            <img class=" img-fluid " src="{{ asset('blogs/' . $blog->banner_image) }}" alt="{{ $blog->title }}">


                        </div>
<div>
    <b style="font-size: 30px "> Table of Contents&nbsp;</b>
    <ol>
        @if (!empty($finaltableH2))
           @foreach ($finaltableH2 as $key=>$table)
               <a href="#{{ $table['id'] }}" style="color:#659fc9; font-size:17px" >
                   <li type="1">
                     {{ $table['text'] }}
                   </li>

               </a>
           @endforeach
         @endif
   </ol >
</div>
                        <div class="details-grow">
                            {!! $answer1 !!}

                        </div>

                    </div>



                </div>
<x-enquiry-form/>



            </div>
        </div>
    </div>
    </div>
<br>
<x-footer/>

</body>

</html>
<!--------scipt for table of toc--------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
<script>

    window.addEventListener("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY - 125);
    })
</script>
