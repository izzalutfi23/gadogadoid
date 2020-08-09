<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Game</h1>
		</div>

		<div class="section-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Game</h4>
								<div class="card-header-action">
									<a href="<?=base_url('dashboard/game')?>" class="btn btn-primary">
										Kembali
									</a>
								</div>
							</div>
							<div class="card-body">
								<form action="<?php echo base_url('dashboard/proses_editgame'); ?>"
									enctype="multipart/form-data" method="POST">
									<div class="modal-body">
										<div class="form-group">
                                            <label>Nama Game</label>
                                            <input type="hidden" name="id" value="<?=$game->id_game?>">
											<input type="text" name="nama_game" class="form-control"
												value="<?=$game->nama_game?>">
										</div>
										<div class="form-group">
											<label>Foto (Max 2MB)</label>
											<input type="file" name="foto" class="form-control">
										</div>
										<div class="form-group">
											<label>Keterangan</label>
											<textarea name="keterangan" style="height: 80px;"
												class="form-control"><?=$game->keterangan?></textarea>
										</div>
										<div class="form-group">
											<label>Developer</label>
											<input type="text" name="developer" class="form-control" value="<?=$game->developer?>">
										</div>
										<div class="form-group">
											<label>Publisher</label>
											<input type="text" name="publisher" class="form-control" value="<?=$game->publisher?>">
										</div>
										<div class="form-group">
											<label>Realease</label>
											<input type="date" name="realease" class="form-control" value="<?=$game->realease?>">
										</div>
										<div class="form-group">
											<label>Tag</label>
											<input type="text" name="tag" class="form-control" value="<?=$game->tag?>">
										</div>
										<div class="form-group">
											<label>Rating</label>
											<input type="text" name="rating" class="form-control" value="<?=$game->rating?>">
										</div>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
										<input type="submit" name="tambah" class="btn btn-success" value="Edit">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>
