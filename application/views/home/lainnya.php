<div class="head" id="showcase">
	<div class="container p-5 mb-5" style="background-color: #FFF;">
		<div class="row mb-5 ">
			<div class="col-md-7 section-title text-center mx-auto">
				<span class="sub-title mb-3 mt-1 d-block" style="font-size: 30px; color: #000;">Semua Game</span>
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


		<!-- Pagination -->
        <?=$this->pagination->create_links();?>


	</div>
</div>
