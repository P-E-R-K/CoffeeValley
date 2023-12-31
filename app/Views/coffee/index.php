<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container other" id="other">
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