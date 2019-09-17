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
            <h2>
                Terima Kasih
            </h2>
            <h4 class="text-center">Data Jawaban Anda</h4>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="thead">
                        <th>No</th>
                        <th>Jawaban Anda</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jawaban as $data) :  ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data['jawaban']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <h4 class="text-center">Data Jawaban yang Benar</h4>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="thead">
                        <th>No</th>
                        <th>Jawaban yang benar</th>
                        <th>Pembahasan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($benar as $data) :  ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data['jawaban_yang_benar']; ?></td>
                            <td>
                                <a href="<?= base_url('user/pembahasan/') . $data['id'] ?>" class="badge badge-dark">pergi</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <small>Anda bisa keluar <a href="<?= base_url('test/keluar'); ?>">disini</a></small>
        </div>
    </div>
</div>