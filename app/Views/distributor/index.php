<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container other" id="other">
  <h1 class="">Daftar Distributor</h1>
    <div class="row">
        <div class="col">      
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Bean</th>
                <th scope="col">Description</th>
                <th scope="col">Price/Unit</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($Distributor as $d) : ?>
                <tr>
                  <td><?= $d['nama']; ?></td>
                  <td><?= $d['kota']; ?></td>
                  <td>
                    <a href="/proyek/<?= $d['nama']; ?>" class="btn btn-success">Edit</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/distributor/create" class="btn btn-primary mb-3">Tambah</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>