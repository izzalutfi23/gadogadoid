<!DOCTYPE html>
<html lang="en">

<head>
	<title><?=$title?></title>
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

        .head-review{
            margin-top: 10px;
        }

		.gambardetail {
			display: block;
			margin-left: auto;
			margin-right: auto;
            width: 50%;
            height: auto;
            padding-bottom: 20px;
		}

		@media screen and (max-width: 800px) {
			.gambar {
				height: auto;
			}

			.gambardetail {
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

			.gambardetail {
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

		.site-footer {
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
							<h1 class="my-0 site-logo"><a href="<?=base_url('home')?>">Gadogado<span
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
