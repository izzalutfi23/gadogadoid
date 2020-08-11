<div class="head" id="head">
	<div class="container content-header" style="background-color: #FFF;">
		<!-- Photo Grid -->
		<div class="row">
			<div class="col-sm-8 mt-4">
				<div class="content">
					<img src="<?=base_url()?>asset/images/banner/<?=$banner1->foto?>" class="gambar" width="100%" height="425px">
					<div class="carousel-caption">
						<div class="text-lg-left capt">Review and Showcase:</div>
						<div class="display-4 text-lg-left text-light"><?=$banner1->nama?></div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mt-4">
				<div class="row">
					<div class="col-sm-12">
						<div class="sidebar-top">
							<img src="<?=base_url()?>asset/images/banner/<?=$banner2->foto?>" class="gambar" width="100%" height="200px">
							<div class="carousel-caption">
								<div class="text-lg-left capt">Review and Showcase:
								</div>
								<div class="display-4 text-lg-left text-light"><?=$banner2->nama?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 mt-4">
						<div class="sidebar-bottom">
							<img src="<?=base_url()?>asset/images/banner/<?=$banner3->foto?>" class="gambar" width="100%" height="200px">
							<div class="carousel-caption">
								<div class="text-lg-left capt">Review and Showcase:
								</div>
								<div class="display-4 text-lg-left text-light"><?=$banner3->nama?></div>
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
			<?php
				foreach($game as $data){
			?>
			<div class="col-md-6 col-lg-3">
				<div class="card shadow-sm border-light mb-4">
					<a href="<?=base_url('home/detail/'.$data->id_game)?>" class="position-relative">
						<img src="<?=base_url()?>asset/images/game/<?=$data->foto?>" class="card-img-top" alt="image">
					</a>
					<div class="card-body">
						<div class="post-meta"><span class="small lh-120 font-italic"><?=$data->developer?></span>
						</div>
						<a href="<?=base_url('home/detail/'.$data->id_game)?>">
							<p class="font-weight-normal text-black"><?=$data->nama_game?></p>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
		<div class="row py-4 mt-md-5">
			<div class="col text-center">
				<a href="#" class="btn btn-lg shadow btn-primary mt-1">Find Another Game <svg width="1em" height="1em"
						viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
						<path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
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

			<?php 
				foreach($review as $dreview){
			?>
			<div class="col-md-6 col-lg-3">
				<div class="card shadow-sm border-light mb-4">
					<a href="<?=base_url('home/detail/'.$dreview->id_game)?>" class="position-relative">
						<img src="<?=base_url()?>asset/images/game/<?=$dreview->foto?>" class="card-img-top" alt="image">
					</a>
					<div class="card-body">
						<div class="post-meta"><span class="small lh-120 font-italic"><?=$dreview->developer?></span>
						</div>
						<a href="<?=base_url('home/detail/'.$dreview->id_game)?>">
							<p class="font-weight-normal text-black"><?=$dreview->nama_game?></p>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>


		</div>

	</div>
</div>

<div class="head" id="newgame">
	<div class="container p-5 mb-5" style="background-color: #FFF;">
		<div class="row">
			<div class="col-lg-6">
				<div class="display-4 text-lg-left text-black">New Game</div>
				<div class="display-3 text-lg-left text-black font-weight-bold"><?=$newgame->nama?></div>
			</div>
			<div class="col-lg-6">
				<a href="#" class="position-relative">
					<img src="<?=base_url()?>asset/images/new/<?=$newgame->foto?>" class="card-img-top" alt="image">
				</a>
			</div>
		</div>
	</div>
</div> <!-- END .site-section -->
