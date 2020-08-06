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

			.card-img-top {
				height: auto;
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

			.card-img-top {
				height: auto;
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

			.card-img-top {
				height: 330px;
			}
		}


		.capt {
			font-size: 13px;
			font-family: Arial Narrow;
		}

		.display-4 {
			font-size: 30px;
        }
        
        .site-footer{
            padding-top: 5rem;
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
							<h1 class="my-0 site-logo"><a href="index.html">Gadogado<span
										class="text-primary">.id</span> </a></h1>
						</div>
						<div class="col-6 col-md-9">
							<nav class="site-navigation text-right" role="navigation">
								<div class="container">
									<ul class="menuheader">
										<li><a href="<?=base_url('home')?>">Home</a></li>
										<li><a href="#showcase" class="smoothscroll">Showcase</a></li>
                                        <li><a href="#review" class="smoothscroll">Review</a></li>
                                        <li><a href="#newgame" class="smoothscroll">New Game</a></li>
									</ul>

									<div class="drespon">
										<div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#"
												class="site-menu-toggle text-black" id="dropdownMenuLink"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="icon-person h3"></span> <span class="menu-text"
													style="text-transform: unset;">Hello,
													Chan &nbsp;<svg width="1em" height="1em" viewBox="0 0 16 16"
														class="bi bi-chevron-down" fill="currentColor"
														xmlns="http://www.w3.org/2000/svg">
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
										<li><a href="<?=base_url('home')?>" class="nav-link">Home</a></li>
										<li><a href="#head" class="nav-link">Top</a></li>
										<li><a href="#showcase" class="nav-link">Showcase</a></li>
										<li><a href="#review" class="nav-link">Review</a></li>
										<li><a href="#newgame" class="nav-link">New Game</a></li>
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
							<img src="<?=base_url()?>asset/images/vainglory1.jpg" class="gambar" width="100%"
								height="425px">
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
									<img src="<?=base_url()?>asset/images/dota2.jpg" class="gambar" width="100%"
										height="200px">
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
									<img src="<?=base_url()?>asset/images/pubg.jpg" class="gambar" width="100%"
										height="200px">
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


		<div class="head" id="showcase">
			<div class="container p-5" style="background-color: #FFF;">
				<div class="row mb-5 ">
					<div class="col-md-7 section-title text-center mx-auto">
						<span class="sub-title mb-3 mt-1 d-block" style="font-size: 30px; color: #000;">Showcase</span>
					</div>
				</div>

				<div class="row mb-md-2">
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/smashbros.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/crossing.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/fortnite.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/zelda.jpg" class="card-img-top" alt="image"> </a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/smashbros.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/crossing.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/fortnite.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/zelda.jpg" class="card-img-top" alt="image"> </a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="row py-4 mt-md-5">
					<div class="col text-center">
						<a href="#" class="btn btn-lg shadow btn-primary mt-1">Find Another Game <svg width="1em"
								height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
								<path fill-rule="evenodd"
									d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
							</svg></a>
					</div>
				</div>

			</div>
		</div>

		<!-- End Showcase -->

		<div class="head" id="review">
			<div class="container p-5" style="background-color: #FFF;">
				<div class="row mb-5 ">
					<div class="col-md-7 section-title text-center mx-auto">
						<span class="sub-title mb-3 mt-1 d-block" style="font-size: 30px; color: #000;">Review</span>
					</div>
				</div>

				<div class="row mb-md-2">
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/smashbros.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/crossing.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/fortnite.jpg" class="card-img-top" alt="image">
							</a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card shadow-sm border-light mb-4">
							<a href="#" class="position-relative">
								<img src="<?=base_url()?>asset/images/zelda.jpg" class="card-img-top" alt="image"> </a>
							<div class="card-body">
								<div class="post-meta"><span class="small lh-120 font-italic">Los-Angeles, Hollywood,
										USA</span>
								</div>
								<a href="#">
									<p class="font-weight-normal text-black">Coworking Workspace</p>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="head" id="newgame">
			<div class="container p-5 mb-5" style="background-color: #FFF;">
				<div class="row">
					<div class="col-lg-6">
						<div class="display-4 text-lg-left text-black">New Game</div>
						<div class="display-3 text-lg-left text-black font-weight-bold">Dota 2</div>
					</div>
					<div class="col-lg-6">
						<a href="#" class="position-relative">
							<img src="<?=base_url()?>asset/images/fortnite.jpg" class="card-img-top" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div> <!-- END .site-section -->

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<div class="row mb-5">
							<div class="col-12">
								<h3 class="footer-heading mb-4">About Us</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia. It is a
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
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>

							<form method="post" class="form-subscribe">
								<div class="form-group mb-3">
									<input type="text" class="form-control border-white text-white bg-transparent"
										placeholder="Enter full name" aria-label="Enter Email"
										aria-describedby="button-addon2">
								</div>
								<div class="form-group mb-3">
									<input type="text" class="form-control border-white text-white bg-transparent"
										placeholder="Enter email" aria-label="Enter Email"
										aria-describedby="button-addon2">
								</div>
								<div class="form-group">
									<button class="btn btn-primary px-5" type="submit">Subscribe</button>
								</div>
							</form>

						</div>




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
