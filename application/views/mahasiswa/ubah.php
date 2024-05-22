<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <input type="hidden" name="id" value="<?=$mahasiswa['id'];?>">
        <div class="card">
          <h5 class="card-header">Form Ubah Data Mahasiswa</h5>
          <div class="card-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?=$mahasiswa['nama']?>">
              <?php if ( form_error('nama') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('nama', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="nrp" class="form-label">Nrp</label>
              <input type="text" class="form-control" id="nrp" name="nrp" value="<?=$mahasiswa['nrp']?>">
              <?php if ( form_error('nrp') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('nrp', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?=$mahasiswa['email']?>">
              <?php if ( form_error('email') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('email', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select id="jurusan" class="form-select" name="jurusan">
                <?php foreach( $jurusan as $j ):?>
                  <?php if( $j == $mahasiswa['jurusan'] ) : ?>
                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                  <?php else : ?>
                    <option value="<?= $j; ?>"><?= $j; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-end">Ubah data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>