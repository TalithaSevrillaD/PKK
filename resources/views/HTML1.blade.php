<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hi Brain!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="{{url('Template/dash/images/brain.ico')}}"/>

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{url('template/dash/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/aos.css')}}">
  <link href="{{url('template/dash/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{url('template/dash/css/style.css')}}">

  <style>
      blockquote {
          background: #f9f9f9;
          border-left: 10px solid #ccc;
          margin: 1.5em 10px;
          padding: 0.5em 10px;
          quotes: "\201C""\201D""\2018""\2019";
      }
      blockquote:before {
          color: #ccc;
          content: open-quote;
          font-size: 4em;
          line-height: 0.1em;
          margin-right: 0.25em;
          vertical-align: -0.4em;
      }
      blockquote p {
          display: inline;
          font-style: italic;
      }
      blockquote h6 {
          font-weight: 700;
          padding: 0;
          margin: 0 0 .25rem;
      }
      .child-comment {
          padding-left: 50px;
      }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> hibrain@gmail.com</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="{{url('logout')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="fa-fa-sign-out"></span>Log Out</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{url('/dashboard2')}}" class="d-block">
              <img src="{{url('template/dash/images/brain3.png')}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{url('/dashboard2')}}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{url('/courses')}}" class="nav-link text-left">Courses</a>
                </li>
                <?php if(Session::get('level')=="admin") { ?>
                <li class="active">
                  <a href="{{ route('register.index') }}" class="nav-link text-left">Data-User</a>
                </li>
                <?php } ?>
                <li>
                    <a href="#" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Mengetahui lebih lanjut tentang HTML</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="carousel slide" data-ride="carousel" id="slide">
              <!-- indikator slide -->
              <ul class="carousel-indicators">
                  <li data-target="#slide" data-slide-to="0" class="active"></li>
                  <!-- class active berarti elemen tersebut yang pertama kali ditampilkan saat load halaman -->
                  <li data-target="#slide" data-slide-to="1"></li>
                  <li data-target="#slide" data-slide-to="2"></li>
                  <li data-target="#slide" data-slide-to="3"></li>
                  <li data-target="#slide" data-slide-to="4"></li>
                  <li data-target="#slide" data-slide-to="5"></li>
                  <li data-target="#slide" data-slide-to="6"></li>
                  <li data-target="#slide" data-slide-to="7"></li>
                  <li data-target="#slide" data-slide-to="8"></li>
              </ul>

              <!-- gambar slide -->
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="template/dash/images/courses/Materi HTML/1.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/2.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/3.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/4.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/5.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/6.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/7.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/8.png" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                      <img src="template/dash/images/courses/Materi HTML/9.png" width="100%" height="500" alt="">
                  </div>
              </div>

              <!-- navigasi slide -->
              <a href="#slide" data-slide="prev" class="carousel-control-prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a href="#slide" data-slide="next" class="carousel-control-next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
      </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="{{url('template/dash/images/brain4.png')}}" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{url('template/dash/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery-ui.js')}}"></script>
  <script src="{{url('template/dash/js/popper.min.js')}}"></script>
  <script src="{{url('template/dash/js/bootstrap.min.js')}}"></script>
  <script src="{{url('template/dash/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.countdown.min.js')}}"></script>
  <script src="{{url('template/dash/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{url('template/dash/js/aos.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.sticky.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.mb.YTPlayer.min.js')}}"></script>




  <script src="{{url('template/dash/js/main.js')}}"></script>

</body>

</html>
