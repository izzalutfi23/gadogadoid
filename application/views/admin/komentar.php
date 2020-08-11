<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Komentar</h1>
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
								<h4>Data Komentar</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table align-items-center table-hover" id="tabel">
										<thead class="thead-light">
											<tr>
												<th>No</th>
                                                <th>Nama Game</th>
                                                <th>User</th>
                                                <th>Komentar</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                                $no=1; 
                                                foreach($komen as $data){
                                            ?>
											<tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data->nama_game?></td>
                                                <td><?=$data->username?></td>
                                                <td><?=$data->komentar?></td>
												<td>
													<a href="<?=base_url('dashboard/delkomen/'.$data->id_komen.'/'.$data->id_game)?>"
														class="btn btn-danger">Hapus</a>
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
