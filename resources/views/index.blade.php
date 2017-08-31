<!DOCTYPE html>
<html lang="en">
<!-- <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Learning Management System</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head> -->
@include('layout.internal')
@yield('head')
<body class="homepage">
  @yield('header')
  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(images/slider/bg1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h1 class="animation animated-item-1">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
                </div>
              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/img1.png" class="img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item" style="background-image:url(images/slider/bg2.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/img2.png" class="img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item" style="background-image:url(images/slider/bg3.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/img3.png" class="img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>

  </section>
  
  
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
</body>
</html>
