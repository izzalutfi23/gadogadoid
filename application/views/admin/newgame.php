<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>New Game</h1>
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
								<h4>Data New Game</h4>
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
                                                foreach($new as $data){
                                            ?>
											<tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data->nama?></td>
                                                <td><img src="<?=base_url()?>asset/images/new/<?=$data->foto?>"
														width="100px"></td>
												<td>
													<a href="<?=base_url('dashboard/editnew/'.$data->id_ngame)?>"
														class="btn btn-warning">Edit</a>
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
