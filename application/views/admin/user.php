<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>User</h1>
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
								<h4>Data User</h4>
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
												<th>Nama</th>
												<th>Email</th>
												<th>Username</th>
												<th>Role</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                                $no=1; 
                                                foreach($user as $data){
                                            ?>
											<tr>
												<td><?=$no++?></td>
												<td><?=$data->nama?></td>
												<td><?=$data->email?></td>
												<td><?=$data->username?></td>
                                                <td><?=$data->role?></td>
												<td>
                                                    <?php if($this->session->userdata('user')!=$data->username){ ?>
													<a onclick="return confirm('Data akan dihapus!')"
														href="<?=base_url('dashboard/deluser/'.$data->id_user)?>" onclick=""
														class="btn btn-danger ml-2">
														Hapus
													</a>
                                                    <?php }else{?>
                                                    <button class="btn btn-primary ml-2">Loged In</button>
                                                    <?php } ?>
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

<!-- Modal tambah user -->
<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php echo base_url('dashboard/adduser'); ?>" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Tambah User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" required>
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
<!-- Modal tambah user end -->
