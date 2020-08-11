<div class="head" id="head">
	<div class="container content-header mb-5" style="background-color: #FFF;">
		<div class="row" id="main">
			<div class="col-md-4 well" id="leftPanel">
				<div class="row">
					<div class="col-md-12">
						<div>
							<img src="<?=base_url()?>asset/images/avatar.png" alt="Texto Alternativo"
								class="img-thumbnail" style="border-radius: 100%; margin: 10px; width: 250px;">
							<h2><?=$user->nama?></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 well" id="rightPanel">
				<div class="row">
					<div class="col-md-12">
						<form role="form">
							<h2>Edit your profile</h2>
							<hr class="colorgraph">
							<div class="form-group">
								<label for="email">Nama</label>
								<input type="text" name="nama" class="form-control input-lg" value="<?=$user->nama?>"
									tabindex="4">
							</div>
							<div class="form-group">
							<label for="email">Email</label>
								<input type="email" name="email" class="form-control input-lg" value="<?=$user->email?>"
									tabindex="4">
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
									<label for="email">Username</label>
										<input type="text" name="username"
											class="form-control input-lg" value="<?=$user->username?>" tabindex="5">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
									<label for="email">Password</label>
										<input type="text" name="password"
											class="form-control input-lg" placeholder="New Password" tabindex="6">
									</div>
								</div>
							</div>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"></div>
								<div class="col-xs-12 col-md-6"><a href="#"
										class="btn btn-success btn-block btn-lg">Ubah</a></div>
							</div>
						</form>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
							</div>
							<div class="modal-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
									aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
									tempore possimus ipsa porro delectus quidem dolorem ad.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
		</div>
	</div> <!-- END .site-section -->
