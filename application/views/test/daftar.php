<div class="col-lg-4 col-md-4 col-sm-4 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<h5 class="text-center">PANEL</h5>
			<hr>
			
		</div>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<form action="<?= base_url('test/daftar'); ?>" method="post">
				<div class="form-group">
					<label>Nis</label>
					<input type="text" class="form-control" name="nis" value="<?= set_value('nis'); ?>" required>
					<?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" required>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select type="text" class="form-control" name="kelas" required>
						<option>X</option>
						<option>XI</option>
						<option>XII</option>
					</select>
				</div>
				<div class="form-group">
					<label>Asal Sekolah</label>
					<input type="text" class="form-control" name="asal_sekolah" value="<?= set_value('asal_sekolah'); ?>" required>
				</div>
				<div class="form-group">
					<label>Kata Sandi</label>
					<input type="password" class="form-control" name="password" required>
				</div>
				<button type="submit" class="btn btn-dark">Daftar</button><br><br>
				Sudah punya akun ? Masuk <a href="<?= base_url('test'); ?>">Disini</a>
			</form>
		</div>
	</div>
</div>

