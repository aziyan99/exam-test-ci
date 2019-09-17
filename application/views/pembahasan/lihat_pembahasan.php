<form action="<?= base_url('pembahasan/simpan'); ?>" method="post" class="shadow-lg p-3 mb-5 bg-white rounded">
	<input type="hidden" name="id" value="<?= $id; ?>">
	<div class="form-group">
		<label>Pembahasan</label>
		<textarea class="form-control" name="pembahasan" cols="30" rows="10" required><?= $pembahasan; ?></textarea>
	</div>

	<button type="submit" class="btn btn-dark">ubah</button>

</form>