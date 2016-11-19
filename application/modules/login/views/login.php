<div id="fh5co-contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Login</h2>
				<p><span>Assalamualaikum, silahkan pilih jenis akun anda</span></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="bs-docs-example" style="margin-bottom: 10px">
				    <ul id="myTab" class="nav nav-tabs">
				       	<li class="active"><a href="#host" data-toggle="tab">Host</a></li>
				       	<li><a href="#viewer" data-toggle="tab">Viewer</a></li>
				    </ul>
				</div>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="host">
						<?php echo $this->session->flashdata('status'); ?>
						<form class="login-form" action="<?=base_url('login/cek_login')?>" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="username" placeholder="Username" type="text">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="password" placeholder="Password" type="password">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input value="Submit" class="btn btn-primary" type="submit">
									</div>
								</div>
								<div class="col-md-12">
									<p><span>Belum punya akun ? <a href="#">Register</a></span></p>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="viewer">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" placeholder="Phone Number" type="number">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" placeholder="Password (PIN)" type="password">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input value="Submit" class="btn btn-primary" type="submit">
									<button class="btn btn-info">Request PIN</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>