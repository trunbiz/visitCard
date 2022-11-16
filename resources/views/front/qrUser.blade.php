<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Social Network</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
        .img-circle {
            border-radius: 10%;
        }
    </style>
</head>
<body>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">{{$item->username}}</h3>
    <img src="{{isset($item->img)?asset('public/media/'.$item->img):asset('public/images/logo.png')}}" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
    <p>{!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(50)->generate(asset('user/qr/' . $item->id)); !!}</p>
    <h3>{{$item->short_description ?? ''}}</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">What Am I?</h3>
    {!! $item->description !!}
</div>

<div id="services" class="container-fluid text-center" style="color: black">
    <h2>Social Network</h2>
    <h4>Where To Find Me?</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <a href="{{$item->url_facebook}}">
                <i class="fab fa-facebook-square"></i>
                <h4>FACEBOOK</h4>
            </a>
        </div>
        <div class="col-sm-4 col-xs-12">
            <a href="{{$item->url_instagram}}" style="color: red;">
                <i class="fab fa-instagram"></i>
                <h4>INSTAGRAM</h4>
            </a>
        </div>
        <div class="col-sm-4 col-xs-12">
            <a href="{{$item->url_youtube}}" style="color: red;">
                <i class="fab fa-youtube"></i>
                <h4>YOUTUBE</h4>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <a href="{{$item->url_tiktok}}" style="color: black;">
                <i class="fab fa-tiktok"></i>
                <h4>TIKTOK</h4>
            </a>
        </div>
        <div class="col-sm-4 col-xs-12">
        </div>
        <div class="col-sm-4 col-xs-12">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Theme by <a href="https://www.w3schools.com">visitCard</a></p>
</footer>

</body>
</html>
