<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container other" id="other">
  <h1 class="">Daftar Proyek</h1>
  <a href="/coffee/create" class="btn btn-primary mb-3">Tambah</a>
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
              <?php foreach($Coffee as $c) : ?>
                <tr>
                  <td><?= $c['nama']; ?></td>
                  <td><?= $c['description']; ?></td>
                  <td><?= $c['sale_price']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
      </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>