<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?=$title?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<?=base_url()?>asset/admin/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link href="<?=base_url()?>asset/swal/dist/sweetalert2.min.css" rel="stylesheet">
	<!-- CSS Libraries -->

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?=base_url()?>asset/admin/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>asset/admin/css/components.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
</head>

<body>
	<div class="main-wrapper">
		<div class="navbar-bg"></div>
		<nav class="navbar navbar-expand-lg main-navbar">
			<form class="form-inline mr-auto">
				<ul class="navbar-nav mr-3">
					<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
					</li>
				</ul>
			</form>
			<ul class="navbar-nav navbar-right">
				<li class="dropdown"><a href="#" data-toggle="dropdown"
						class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<img alt="image" src="<?=base_url()?>asset/admin/img/avatar/avatar-1.png"
							class="rounded-circle mr-1">
						<div class="d-sm-none d-lg-inline-block">Hi, <?=$this->session->userdata('user')?></div>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-title">Logged in 5 min ago</div>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item has-icon text-danger" href="<?=base_url('auth/logout')?>">
							<i class="fas fa-sign-out-alt"></i> Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<div class="main-sidebar">
			<aside id="sidebar-wrapper">
				<div class="sidebar-brand">
					<a href="<?=base_url('dashboard')?>">Gadogado.id</a>
				</div>
				<div class="sidebar-brand sidebar-brand-sm">
					<a href="<?=base_url('dashboard')?>">Gado2</a>
				</div>
				<ul class="sidebar-menu">
					<li class="menu-header">Menu Administrator</li>
					<li class="<?=$this->uri->segment(2) == '' ? 'active' : '' ?>">
						<a class="nav-link" href="<?=base_url('dashboard')?>">
							<i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="<?=$this->uri->segment(2) == 'banner' ? 'active' : '' ?>">
						<a class="nav-link" href="<?=base_url('dashboard/banner')?>">
							<i class="fa fa-image"></i><span>Banner</span>
						</a>
					</li>
					<li
						class="nav-item dropdown <?=$this->uri->segment(2) == 'game' || $this->uri->segment(2) == 'spesifikasi' ? 'active' : '' ?>">
						<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-gamepad"></i>
							<span>Game</span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="<?=base_url('dashboard/game')?>">Game</a></li>
							<li><a class="nav-link" href="<?=base_url('dashboard/spesifikasi')?>">Spesifikasi</a></li>
						</ul>
					</li>
					<li class="<?=$this->uri->segment(2) == 'anggota' ? 'active' : '' ?>">
						<a class="nav-link" href="<?=base_url('dashboard/anggota')?>">
							<i class="fas fa-users"></i><span>Anggota</span>
						</a>
					</li>
					<li class="<?=$this->uri->segment(2) == 'peminjam' ? 'active' : '' ?>">
						<a class="nav-link" href="<?=base_url('dashboard/peminjam')?>">
							<i class="fas fa-database"></i><span>Peminjam</span>
						</a>
					</li>
				</ul>
			</aside>
		</div>
