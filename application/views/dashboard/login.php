<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('adm/cek_login'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark">Masuk</button>
            </form>
        </div>
    </div>
</div>