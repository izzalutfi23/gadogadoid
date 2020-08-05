<!DOCTYPE html>
<html lang="en">

<head>
  <title>Grunt &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>asset/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/animate.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap-datepicker.css">


  <link rel="stylesheet" href="<?=base_url()?>asset/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?=base_url()?>asset/css/aos.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
  <style type="text/css">
    .head {
      margin-top: 50px;
    }

    @media screen and (max-width: 800px) {
      .gambar {
        height: auto;
      }

      .mrespon {
        display: block;
      }

      .content-header {
        padding: 10px;
      }

      .capt {
        text-align: left;
      }

      .display-4 {
        text-align: left;
      }

      .menuheader {
        display: none;
      }
    }

    @media screen and (max-width: 600px) {
      .gambar {
        height: auto;
      }

      .mrespon {
        display: block;
      }

      .drespon {
        display: none;
      }

      .content-header {
        padding: 10px;
      }

      .capt {
        text-align: left;
      }

      .display-4 {
        text-align: left;
      }

      .menuheader {
        display: none;
      }
    }

    @media screen and (min-width: 800px),
    screen and (min-width: 600px) {
      .mrespon {
        display: none;
      }

      .content-header {
        padding: 35px;
      }

      .menuheader {
        padding: 0;
        list-style: none;
        float: left;
        margin-top: 20px;
      }

      .menuheader li {
        float: left;
        /* border: 1px solid#000; */
        padding-right: 40px;
      }

      .menuheader li:hover {
        font-weight: bold;
        transition: all 50ms linear;
      }
    }


    .capt {
      font-size: 13px;
      font-family: Arial Narrow;
    }

    .display-4 {
      font-size: 30px;
    }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: #f6f1f1">



  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <h1 class="my-0 site-logo"><a href="index.html">Gadogado<span class="text-primary">.id</span> </a></h1>
            </div>
            <div class="col-6 col-md-9">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <ul class="menuheader">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Showcase</a></li>
                    <li><a href="#">Review</a></li>
                  </ul>

                  <div class="drespon">
                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#"
                        class="site-menu-toggle text-black" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="icon-person h3"></span> <span class="menu-text"
                          style="text-transform: unset;">Hello,
                          Chan &nbsp;<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                          </svg></span>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Show Profile</a>
                          <a class="dropdown-item" href="#">Logout</a>
                        </div>
                      </a></div>
                  </div>

                  <!-- Mobile device -->
                  <div class="mrespon">
                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#"
                        class="site-menu-toggle js-menu-toggle text-black">
                        <span class="icon-menu h3"></span> <span class="menu-text"
                          style="text-transform: unset;">Menu</span>
                      </a></div>
                  </div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#head" class="nav-link">What We Do</a></li>
                    <li><a href="#about-section" class="nav-link">About Us</a></li>
                    <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                    <li><a href="#studio-section" class="nav-link">Gallery</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->

    <div class="head" id="head">
      <div class="container content-header" style="background-color: #FFF;">
        <!-- Photo Grid -->
        <div class="row">
          <div class="col-sm-8 mt-4">
            <div class="content">
              <img src="<?=base_url()?>asset/images/vainglory1.jpg" class="gambar" width="100%" height="425px">
              <div class="carousel-caption">
                <div class="text-lg-left capt">Review and Showcase:</div>
                <div class="display-4 text-lg-left text-light">Vainglory</div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 mt-4">
            <div class="row">
              <div class="col-sm-12">
                <div class="sidebar-top">
                  <img src="<?=base_url()?>asset/images/dota2.jpg" class="gambar" width="100%" height="200px">
                  <div class="carousel-caption">
                    <div class="text-lg-left capt">Review and Showcase:
                    </div>
                    <div class="display-4 text-lg-left text-light">Dota 2</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 mt-4">
                <div class="sidebar-bottom">
                  <img src="<?=base_url()?>asset/images/pubg.jpg" class="gambar" width="100%" height="200px">
                  <div class="carousel-caption">
                    <div class="text-lg-left capt">Review and Showcase:
                    </div>
                    <div class="display-4 text-lg-left text-light">PUBG</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->


    <div class="head" id="portfolio-section">
      <div class="container p-5" style="background-color: #FFF;">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-5 d-block" style="font-size: 30px; color: #000;">Showcase</span>
          </div>
        </div>
        jhvjhvj

      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Testimonials</span>
            <h2 class="title text-primary mb-3">Our Client Sayings</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the
                  coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary
                    regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into
                  your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary
                    regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into
                  your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the
                  coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section" id="studio-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Photos</span>
            <h2 class="title text-primary mb-3">Studio Gallery</h2>
          </div>
        </div>

        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_1.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_1.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_2.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_2.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_3.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_3.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_4.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_4.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_5.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_5.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_6.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_6.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_7.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_7.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_9.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_9.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_10.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_10.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_11.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_11.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_12.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_12.jpg">
            </a>
          </div>


        </div>
      </div>
    </div> <!-- END .site-section -->

    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="" class="contact-form">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Get In Touch</span>
            <h2 class="title text-primary">Contact Us</h2>
          </div>

          <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" class="form-control" placeholder="Email">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-md">Send Message</button>
            </div>
          </div>

        </form>
      </div>
    </div> <!-- END .site-section -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                  paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </div>



          </div>
          <div class="col-lg-3 ml-auto">

            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#what-we-do-section" class="smoothscroll">What We Do</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#team-section" class="smoothscroll">Team</a></li>
                </ul>
              </div>

            </div>

          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent"
                    placeholder="Enter full name" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent"
                    placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div>




          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="<?=base_url()?>asset/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>asset/js/popper.min.js"></script>
  <script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>asset/js/aos.js"></script>
  <script src="<?=base_url()?>asset/js/jquery.sticky.js"></script>
  <script src="<?=base_url()?>asset/js/stickyfill.min.js"></script>
  <script src="<?=base_url()?>asset/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>asset/js/isotope.pkgd.min.js"></script>

  <script src="<?=base_url()?>asset/js/jquery.fancybox.min.js"></script>
  <script src="<?=base_url()?>asset/js/main.js"></script>


</body>

</html>