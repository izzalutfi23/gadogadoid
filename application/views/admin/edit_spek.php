<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Spesifikasi</h1>
		</div>

		<div class="section-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Spesifikasi</h4>
								<div class="card-header-action">
									<a href="<?=base_url('dashboard/spesifikasi')?>" class="btn btn-primary">
										Kembali
									</a>
								</div>
							</div>
							<div class="card-body">
                                <form action="<?php echo base_url('dashboard/proses_editspek'); ?>" method="POST">
                                <input type="hidden" name="id" value="<?=$spek->id_spek?>">
									<div class="modal-body">
										<div class="form-group">
											<label>Pilih Game</label>
											<select name="id_game" class="form-control">
												<?php 
                                                    foreach($game as $ga){
                                                ?>
												<option <?= $ga->id_game == $spek->id_game ? 'selected' : '' ?> value="<?=$ga->id_game?>"><?=$ga->nama_game?></option>
												<?php } ?>
											</select>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<p class="font-weight-bold">Minimum</p>
												<hr>
												<div class="form-group">
													<label>OS</label>
													<input type="text" name="os_min" class="form-control" value="<?=$spek->os_min?>">
												</div>
												<div class="form-group">
													<label>Processor</label>
													<input type="text" name="processor_min" class="form-control"
														value="<?=$spek->processor_min?>">
												</div>
												<div class="form-group">
													<label>Memori</label>
													<input type="text" name="memori_min" class="form-control" value="<?=$spek->memori_min?>">
												</div>
												<div class="form-group">
													<label>Storage</label>
													<input type="text" name="storage_min" class="form-control" value="<?=$spek->storage_min?>">
												</div>
												<div class="form-group">
													<label>Graphic</label>
													<input type="text" name="graphic_min" class="form-control" value="<?=$spek->graphic_min?>">
												</div>
											</div>
											<div class="col-lg-6">
												<p class="font-weight-bold">Recomended</p>
												<hr>
												<div class="form-group">
													<label>OS</label>
													<input type="text" name="os_reco" class="form-control" value="<?=$spek->os_reco?>">
												</div>
												<div class="form-group">
													<label>Processor</label>
													<input type="text" name="processor_reco" class="form-control"
														value="<?=$spek->processor_reco?>">
												</div>
												<div class="form-group">
													<label>Memori</label>
													<input type="text" name="memori_reco" class="form-control" value="<?=$spek->memori_reco?>">
												</div>
												<div class="form-group">
													<label>Storage</label>
													<input type="text" name="storage_reco" class="form-control"
														value="<?=$spek->storage_reco?>">
												</div>
												<div class="form-group">
													<label>Graphic</label>
													<input type="text" name="graphic_reco" class="form-control"
														value="<?=$spek->graphic_reco?>">
												</div>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
										<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
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
