<table class="table table-bordered table-hover" id="table">
    <thead>
        <tr class="thead-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Jawaban</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hasil as $data) : ?>
            <tr>
                <td><?= $data['id_soal']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['jawaban']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>