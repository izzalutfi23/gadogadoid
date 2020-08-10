<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit New Game</h1>
		</div>

		<div class="section-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>New Game</h4>
								<div class="card-header-action">
									<a href="<?=base_url('dashboard/new')?>" class="btn btn-primary">
										Kembali
									</a>
								</div>
							</div>
							<div class="card-body">
								<form action="<?php echo base_url('dashboard/proses_editngame'); ?>"
									enctype="multipart/form-data" method="POST">
									<div class="modal-body">
										<div class="form-group">
                                            <label>Nama Game</label>
                                            <input type="hidden" name="id" value="<?=$new->id_ngame?>">
											<input type="text" name="nama" class="form-control"
												value="<?=$new->nama?>">
										</div>
										<div class="form-group">
											<label>Foto (Max 2MB)</label>
											<input type="file" name="foto" class="form-control">
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
