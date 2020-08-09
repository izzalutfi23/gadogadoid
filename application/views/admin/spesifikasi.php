<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Spesifikasi</h1>
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
								<h4>Data Spesifikasi</h4>
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
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                                $no=1; 
                                                foreach($spek as $data){
                                            ?>
											<tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data->nama_game?></td>
                                                <td><img src="<?=base_url()?>asset/images/game/<?=$data->foto?>"
														width="100px"></td>
												<td>
													<a href="<?=base_url('dashboard/editspek/'.$data->id_spek)?>"
														class="btn btn-warning">Detail/Edit</a>
													<a onclick="return confirm('Data akan dihapus!')"
														href="<?=base_url('dashboard/delgame/'.$data->id_spek)?>"
														onclick="" class="btn btn-danger ml-2">
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
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="<?php echo base_url('dashboard/addspek'); ?>" enctype="multipart/form-data" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Spesifikasi</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Pilih Game</label>
						<select name="id_game" class="form-control">
                            <?php 
                                foreach($game as $ga){
                            ?>
                            <option value="<?=$ga->id_game?>"><?=$ga->nama_game?></option>
                            <?php } ?>
                        </select>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p class="font-weight-bold">Minimum</p>
							<hr>
							<div class="form-group">
								<label>OS</label>
								<input type="text" name="os_min" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Processor</label>
								<input type="text" name="processor_min" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Memori</label>
								<input type="text" name="memori_min" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Storage</label>
								<input type="text" name="storage_min" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Graphic</label>
								<input type="text" name="graphic_min" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-6">
							<p class="font-weight-bold">Recomended</p>
							<hr>
							<div class="form-group">
								<label>OS</label>
								<input type="text" name="os_reco" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Processor</label>
								<input type="text" name="processor_reco" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Memori</label>
								<input type="text" name="memori_reco" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Storage</label>
								<input type="text" name="storage_reco" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Graphic</label>
								<input type="text" name="graphic_reco" class="form-control" required>
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
<!-- Modal tambah anggota end -->
