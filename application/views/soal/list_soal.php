<div class="mb-5">
	<div class="mb-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?= $this->session->flashdata('message'); ?>
				<a href="<?= base_url('soal/v_tambah'); ?>" class="btn btn-dark shadow-lg p-3 mb-5 bg-dark rounded">Tambah</a>
				<table class="table table-bordered table-hover shadow-lg p-3 mb-5 bg-white rounded">
					<thead class="thead-dark">
						<tr>
							<th>Soal</th>
							<th>#</th>		
						</tr>
					</thead>
					<tbody id="reload">
						<?php foreach ($soal as $data): ?>
							<tr>
								<td><?= $data['soal']; ?></td>
								<td>
									<a href="<?= base_url('soal/v_ubah/').$data['id']; ?>"  class="btn btn-xs btn-primary">ubah</a>
									<a href="<?= base_url('pembahasan/lihat/').$data['id']; ?>" class="btn btn-dark">pembahasan</a>
									<a href="<?= base_url('soal/hapus/').$data['id']; ?>" onclick="return confirm('hapus data ini ? ');" class="btn btn-xs btn-danger">hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


