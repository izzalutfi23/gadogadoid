<div class="head" id="newgame">
	<div class="container p-5" style="background-color: #FFF;">
		<div class="row mb-5 ">
			<div class="col-md-7 section-title text-center mx-auto">
				<span class="sub-title mb-3 mt-1 d-block" style="font-size: 30px; color: #000;"><?=$detail->nama_game?></span>
			</div>
		</div>
		<p class="text-black font-weight-bold"><?=$detail->keterangan?></p>
		<div class="row mt-5">
			<div class="col-lg-4">
				<a href="#" class="position-relative">
					<img src="<?=base_url()?>asset/images/game/<?=$detail->foto?>" class="card-img-top" alt="image">
				</a>
			</div>
			<div class="col-lg-8 pl-5">
				<!-- About Game -->
				<p class="font-weight-bold text-black pt-3">About Game</p>
				<div class="row">
					<div class="col-lg-6">
						<div>Developer</div>
						<p class="font-weight-bold text-black"><?=$detail->developer?></p>
					</div>
					<div class="col-lg-6">
						<div>Publisher</div>
						<p class="font-weight-bold text-black"><?=$detail->publisher?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Release Date</div>
						<p class="font-weight-bold text-black"><?=date('d M Y', strtotime($detail->realease))?></p>
					</div>
					<div class="col-lg-6">
						<div>Tags</div>
						<p class="font-weight-bold text-black"><?=$detail->tag?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Rating</div>
						<p class="font-weight-bold text-black"><?=$detail->rating?></p>
					</div>
				</div>
				<!-- End About -->

				<hr>

				<!-- Specifications Game -->
				<p class="font-weight-bold text-black pt-3">Specification</p>
				<div class="row pb-4">
					<div class="col-lg-6">
						<div>Minimum</div>
					</div>
					<div class="col-lg-6">
						<div>Recomended</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>OS</div>
						<p class="font-weight-bold text-black"><?=$detail->os_min?></p>
					</div>
					<div class="col-lg-6">
						<div>OS</div>
						<p class="font-weight-bold text-black"><?=$detail->os_reco?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Processor</div>
						<p class="font-weight-bold text-black"><?=$detail->processor_min?></p>
					</div>
					<div class="col-lg-6">
						<div>Processor</div>
						<p class="font-weight-bold text-black"><?=$detail->processor_reco?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Memory</div>
						<p class="font-weight-bold text-black"><?=$detail->memori_min?></p>
					</div>
					<div class="col-lg-6">
						<div>Memory</div>
						<p class="font-weight-bold text-black"><?=$detail->memori_reco?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Storage</div>
						<p class="font-weight-bold text-black"><?=$detail->storage_min?></p>
					</div>
					<div class="col-lg-6">
						<div>Storage</div>
						<p class="font-weight-bold text-black"><?=$detail->storage_reco?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div>Graphic</div>
						<p class="font-weight-bold text-black"><?=$detail->graphic_min?></p>
					</div>
					<div class="col-lg-6">
						<div>Graphic</div>
						<p class="font-weight-bold text-black"><?=$detail->graphic_reco?></p>
					</div>
				</div>
				<!-- End Specifications -->
			</div>
		</div>
	</div>
</div> <!-- END .site-section -->


<div class="head-review">
	<div class="container p-5 mb-5" style="background-color: #FFF;">
		<div class="row mb-5 ">
			<div class="col-md-7 section-title text-center mx-auto">
				<span class="sub-title mb-3 mt-1 d-block" style="font-size: 30px; color: #000;">Review</span>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="comments">
					<div class="comments-details">
						<span class="total-comments comments-sort">11 Reviewer</span>
					</div>
					<div class="comment-box add-comment">
						<span class="commenter-pic">
							<img src="<?=base_url()?>asset/images/avatar.png" class="img-fluid">
						</span>
						<span class="commenter-name">
							<input type="text" placeholder="Add a public comment" name="Add Comment">
							<button type="submit" class="btn btn-default">Comment</button>
							<button type="cancel" class="btn btn-default">Cancel</button>
						</span>
					</div>
					<div class="comment-box">
						<span class="commenter-pic">
							<img src="<?=base_url()?>asset/images/avatar.png" class="img-fluid">
						</span>
						<span class="commenter-name">
							<a href="#">Happy uiuxStream</a>
						</span>
						<p class="comment-txt more">Suspendisse massa enim, condimentum sit amet maximus quis, pulvinar
							sit amet ante. Fusce eleifend dui mi, blandit vehicula orci iaculis ac.</p>
						<div class="comment-meta">
							<p>6 August 2020</p>
						</div>
					</div>
					<div class="comment-box">
						<span class="commenter-pic">
							<img src="<?=base_url()?>asset/images/avatar.png" class="img-fluid">
						</span>
						<span class="commenter-name">
							<a href="#">Happy uiuxStream</a>
						</span>
						<p class="comment-txt more">Suspendisse massa enim, condimentum sit amet maximus quis, pulvinar
							sit amet ante. Fusce eleifend dui mi, blandit vehicula orci iaculis ac.</p>
						<div class="comment-meta">
							<p>6 August 2020</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
