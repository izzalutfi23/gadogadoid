<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Game</h1>
		</div>

		<div class="section-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if($this->session->flashdata('msg')){ ?>
						<div class="alert alert-primary alert-dismissible show fade">
							<div class="alert-body">
								<button class="close" data-dismiss="alert">
									<span>&times;</span>
								</button>
								<?=$this->session->flashdata('msg');?>
							</div>
						</div>
						<?php }?>
						<div class="card">
							<div class="card-header">
								<h4>Data Game</h4>
								<div class="card-header-action">
									<a href="#tambah" data-toggle="modal" class="btn btn-primary">
										Tambah
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table align-items-center table-hover" id="tabel">
										<thead class="thead-light">
											<tr>
												<th>No</th>
												<th>Nama Game</th>
												<th>Foto</th>
												<th>Keterangan</th>
												<th>Developer</th>
												<th>Publisher</th>
												<th>Realease</th>
												<th>Tag</th>
												<th>Rating</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                                $no=1; 
                                                foreach($game as $data){
                                            ?>
											<tr>
												<td><?=$no++?></td>
												<td><?=$data->nama_game?></td>
												<td><img src="<?=base_url()?>asset/images/game/<?=$data->foto?>"
														width="100px"></td>
												<td><?=substr($data->keterangan, 0, 30)?>...</td>
												<td><?=$data->developer?></td>
												<td><?=$data->publisher?></td>
												<td><?=$data->realease?></td>
												<td><?=$data->tag?></td>
												<td><?=$data->rating?></td>
												<td>
													<a href="<?=base_url('dashboard/editgame/'.$data->id_game)?>"
														class="btn btn-warning">Edit</a>
													<a onclick="return confirm('Data akan dihapus!')"
														href="<?=base_url('dashboard/delgame/'.$data->id_game)?>" onclick=""
														class="btn btn-danger ml-2">
														Hapus
													</a>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>

<!-- Modal tambah anggota -->
<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php echo base_url('dashboard/addgame'); ?>" enctype="multipart/form-data" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Game</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Game</label>
						<input type="text" name="nama_game" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Foto (Max 2MB)</label>
						<input type="file" name="foto" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" style="height: 80px;" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Developer</label>
						<input type="text" name="developer" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Publisher</label>
						<input type="text" name="publisher" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Realease</label>
						<input type="date" name="realease" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tag</label>
						<input type="text" name="tag" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Rating</label>
						<input type="text" name="rating" class="form-control" required>
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
<!-- Modal tambah anggota end -->
