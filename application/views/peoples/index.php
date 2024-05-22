<div class="container">
  <h3 class="mt-3">List of peoples</h3>

  <div class="row mt-5">
    <div class="col-md-6">
      <form action="<?=base_url('peoples');?>" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Search keyword.." autocomplete="off" autofocus>
          <div class="input-group-append">
            <input class="btn btn-outline-primary" type="submit" name="submit" value="Cari">
            <input class="btn btn-danger" type="submit" name="submit" value="Clear">
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-10">
      <table class="table">
        <h5>Hasil : <?=$total_rows;?></h5>
        <thead>
          <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          <?php if(empty($peoples)): ?>
            <tr>
              <td colspan="4">
                <div class="alert alert-warning" role="alert">
                  Data yang anda cari tidak valid!
                </div>
              </td>
            </tr>
          <?php endif; ?>
          <?php foreach( $peoples as $people ) : ?>
          <tr>
            <th><?= ++$start; ?></th>
            <td><?= $people['name'] ?></td>
            <td><?= $people['email'] ?></td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">Detail</a>
              <a href="#" class="btn btn-sm btn-secondary">Edit</a>
              <a href="#" class="btn btn-sm btn-danger">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>