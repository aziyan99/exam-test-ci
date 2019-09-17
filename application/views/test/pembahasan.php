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
                Pembahasan
            </h2>
            <p><?= $pembahasan; ?></p>


            <small>Anda bisa keluar <a href="<?= base_url('test/keluar'); ?>">disini</a></small><br>
            <small>Anda bisa kembali <a href="<?= base_url('user/soal'); ?>">disini</a></small>
        </div>
    </div>
</div>