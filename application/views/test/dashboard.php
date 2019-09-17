<div class="col-lg-4 col-md-4 col-sm-4 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<h5 class="text-center">PANEL</h5>
			<hr>
			<?= $this->session->flashdata('message'); ?>
			<h4><?= $this->session->userdata('nama'); ?></h4>
			<h6><?= $this->session->userdata('nis'); ?></h6>
			<span class="text-muted text-center">
				<?= $this->session->userdata('kelas') ?>
				<?= " "; ?>
				<?= $this->session->userdata('asal_sekolah') ?>
			</span><br><br>
			<a href="<?= base_url('test/keluar'); ?>" class="text-danger">
				keluar</a>
		</div>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 mt-3">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<p><?= $soal; ?></p>
			<ol type="a">
				<li><?= $jawaban_a; ?></li>
				<li><?= $jawaban_b; ?></li>
				<li><?= $jawaban_c; ?></li>
				<li><?= $jawaban_d; ?></li>
				<li><?= $jawaban_e; ?></li>
			</ol>
			<br>
			<form action="<?= base_url('user/soal') ?>" method="post">
				<input type="hidden" name="id" value="<?= $id; ?>">
				<div class="form-group">
					<label>Pilih jawaban</label>
					<select name="jawaban" id="jawaban" class="form-control">
						<option value="a">a</option>
						<option value="b">b</option>
						<option value="c">c</option>
						<option value="d">d</option>
						<option value="e">e</option>
					</select>
				</div>
				<br>
				<button class="btn btn-dark" type="submit" id="btn_next" disabled>Selanjutnya</button>
			</form>
		</div>
	</div>
</div>
<script>
	$('#jawaban').click(function() {
		$('#btn_next').removeAttr('disabled');
	});
</script>