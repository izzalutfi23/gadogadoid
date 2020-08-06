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

		.head-review {
			margin-top: 10px;
		}

		.comments-details button.btn.dropdown-toggle,
		.comments-details .total-comments {
			font-size: 18px;
			font-weight: 500;
			color: #5e5e5e;
		}

		.comments-details {
			padding: 15px 15px;
		}

		.comments .comments .dropdown,
		.comments .dropup {
			position: relative;
		}

		.comments button {
			background-color: transparent;
			border: none;
		}

		.comments .comment-box {
			width: 100%;
			float: left;
			height: 100%;
			background-color: #FAFAFA;
			padding: 10px 10px 10px;
			margin-bottom: 15px;
			border-radius: 5px;
			border: 1px solid #ddd;
		}

		.comments .add-comment {
			background-color: transparent;
			border: none;
			position: relative;
			margin-bottom: 50px;
		}

		.comments .commenter-pic {
			width: 50px;
			height: 50px;
			display: inline-block;
			border-radius: 100%;
			border: 2px solid #fff;
			overflow: hidden;
			background-color: #fff;
		}

		.comments .add-comment .commenter-name {
			width: 100%;
			padding-left: 75px;
			position: absolute;
			top: 20px;
			left: 0px;
		}

		.comments .add-comment input {
			border-top: 0px;
			border-bottom: 1px solid #ccc;
			border-left: 0px;
			border-right: 0px;
			outline: 0px;
			box-shadow: none;
			border-radius: 0;
			width: 100%;
			padding: 0;
			font-weight: normal;
		}

		.comments .add-comment input:focus {
			border-color: #03a9f4;
			border-width: 2px;
		}

		.comments .add-comment button[type=submit] {
			background-color: #03a9f4;
			color: #fff;
			margin-right: 0px;
		}

		.comments .add-comment button {
			background-color: #f5f5f5;
			margin: 10px 5px;
			font-size: 14px;
			text-transform: uppercase;
			float: right;
		}

		.comments .commenter-name .comment-time {
			font-weight: normal;
			margin-left: 8px;
			font-size: 15px;
		}

		.comments p.comment-txt {
			font-size: 15px;
			border-bottom: 1px solid #ddd;
			padding: 0px 0px 15px;
		}

		.comments .commenter-name {
			display: inline-block;
			position: relative;
			top: -20px;
			left: 10px;
			font-size: 16px;
			font-weight: bold;
		}

		.comments .comment-meta {
			font-size: 14px;
			color: #333;
			padding: 2px 5px 0px;
			line-height: 20px;
			float: right;
		}

		.comments .reply-box {
			display: none;
		}

		.comments .replied {
			background-color: #fff;
			width: 95%;
			float: right;
			margin-top: 15px;
		}

		/*======Responsive CSS=======*/
		@media (max-width: 767px) {
			.comments .commenter-name {
				font-size: 13px;
				top: -5px;
			}

			.comments .commenter-pic {
				width: 40px;
				height: 40px;
			}

			.comments .commenter-name a {
				display: block;
			}

			.comments .commenter-name .comment-time {
				display: block;
				margin-left: 0px;
			}
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
