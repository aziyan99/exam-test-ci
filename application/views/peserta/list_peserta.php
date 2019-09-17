<?= $this->session->flashdata('message'); ?>

<table class="table table-bordered table-hover shadow-lg p-3 mb-5 bg-white rounded">
	<thead class="thead-dark">
		<tr>
			<th>Nama</th>
			<th>Nis</th>
			<th>Kelas</th>
			<th>Asal Sekolah</th>
			<th>#</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($siswa as $data): ?>
			<tr>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['nis']; ?></td>
				<td><?= $data['kelas']; ?></td>
				<td><?= $data['asal_sekolah']; ?></td>
				<td><a href="<?= base_url('peserta/hapus/') . $data['nis']; ?>"  onclick="return confirm('Hapus data ini ?');" class="btn btn-danger">hapus</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>