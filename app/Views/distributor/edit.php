<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit Distributor</h2>
            <form action="/distributor/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="<?= $distributor['nama']; ?>"> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kota" id="kota" placeholder="<?= $distributor['kota']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="<?= $distributor['provinsi']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Negara</label>
                    <div class="col-sm-10"> 
                        <select class="form-select" name="negara" id="negara">
                            <option selected><?= $distributor['nama']; ?>...</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="thailand">Thailand</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="<?= $distributor['telepon']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="<?= $distributor['email']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>