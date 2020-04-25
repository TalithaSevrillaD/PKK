<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hi Brain!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="template/dash/fonts/icomoon/style.css">

  <link rel="stylesheet" href="template/dash/css/bootstrap.min.css">
  <link rel="stylesheet" href="template/dash/css/jquery-ui.css">
  <link rel="stylesheet" href="template/dash/css/owl.carousel.min.css">
  <link rel="stylesheet" href="template/dash/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="template/dash/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="template/dash/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="template/dash/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="template/dash/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="template/dash/css/aos.css">
  <link href="template/dash/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="template/dash/css/style.css">



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
                <li>
                  <a href="{{url('/dashboard2')}}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{url('#')}}" class="nav-link text-left">Our Teachers</a>
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


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('template/dash/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="template/dash/images/courses/HTML.png" alt="Image" class="img-fluid"></a>
                        <div class="category" align="center"><h3>HTML</h3><h3>{Hypertext Markup Language}</h3></div>
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>Membuat Web Menggunakan HTML</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">HTML merupakan kode dasar yang harus dipahami
                          ketika ingin belajar pemrograman web, kode-kode dasar dalam html
                          merupakan pengenalan awal sebelum nantinya belajar bahasa pemrograman
                          web tingkat tinggi seperti PHP, dan lain sebagainya.</p>
                        <p><a href="{{url('htmlcourse')}}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="template/dash/images/courses/CSS3.jpg" alt="Image" class="img-fluid"></a>
                        <div class="category" align="center"><h3>CSS</h3><h3>{Cascading Style Sheets}</h3></div>
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>Membuat Web lebih Dinamis Menggunakan CSS</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">CSS berfungsi untuk mengatur
                          tampilan elemen yang tertulis dalam bahasa markup.</p>
                        <p><a href="{{url('csscourse')}}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="template/dash/images/courses/PHP.png" alt="Image" class="img-fluid"></a>
                        <div class="category" align="center"><h3>PHP</h3><h3>{Hypertext Preprocessor}</h3></div>
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>Membuat Web Dinamis dengan Mudah</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">PHP merupakan singkatan dari Hypertext Preprocessor adalah bahasa pemrograman yang digunakan untuk membuat sebuah website yang dinamis. </p>
                        <p><a href="{{url('phpcourse')}}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('template/dash/images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="template/dash/images/brain4.png" alt="Image" class="img-fluid"></p>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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
  <div id="loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
  <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
  <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/>
  </svg></div>

  <script src="template/dash/js/jquery-3.3.1.min.js"></script>
  <script src="template/dash/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="template/dash/js/jquery-ui.js"></script>
  <script src="template/dash/js/popper.min.js"></script>
  <script src="template/dash/js/bootstrap.min.js"></script>
  <script src="template/dash/js/owl.carousel.min.js"></script>
  <script src="template/dash/js/jquery.stellar.min.js"></script>
  <script src="template/dash/js/jquery.countdown.min.js"></script>
  <script src="template/dash/js/bootstrap-datepicker.min.js"></script>
  <script src="template/dash/js/jquery.easing.1.3.js"></script>
  <script src="template/dash/js/aos.js"></script>
  <script src="template/dash/js/jquery.fancybox.min.js"></script>
  <script src="template/dash/js/jquery.sticky.js"></script>
  <script src="template/dash/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="template/dash/js/main.js"></script>

</body>

</html>