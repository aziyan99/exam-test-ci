<div class="col-lg-4 col-md-4 col-sm-4 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<h5 class="text-center">PANEL</h5>
			<hr>
			<?= $this->session->flashdata('message'); ?>
			<form action="<?= base_url('test/cek_login'); ?>" method="post">
				<div class="form-group">
					<label>Nis</label>
					<input type="text" class="form-control" name="nis" required>
				</div>
				<div class="form-group">
					<label>Kata Sandi</label>
					<input type="password" class="form-control" name="password" required>
				</div>
				<button type="submit" class="btn btn-dark">Masuk</button><br><br>
				Belum terdaftar ? Daftar <a href="<?= base_url('test/daftar'); ?>">Disini</a>
			</form>
		</div>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<h3 class="text-center">Selamat Datang di tes MLIMA</h3>
		</div>
	</div>
</div>