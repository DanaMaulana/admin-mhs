<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="card">
          <h5 class="card-header">Form Tambah Data Mahasiswa</h5>
          <div class="card-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
              <?php if ( form_error('nama') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('nama', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="nrp" class="form-label">Nrp</label>
              <input type="text" class="form-control" id="nrp" name="nrp">
              <?php if ( form_error('nrp') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('nrp', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email">
              <?php if ( form_error('email') ) : ?>
                <!-- form_error -> parameter pertama diisi sesuai name pada form input -->
                <?= form_error('email', '<div class="form-text rounded" style="background-color:#fff3cd;text-color:#6d550c;padding-left:5px;" role="alert">', '</div>'); ?>
              <?php endif; ?>
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select id="jurusan" class="form-select" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Kendaraaan Ringan">Teknik Kendaraaan Ringan</option>
                <option value="Tataboga">Tataboga</option>
                <option value="Akutansi">Akutansi</option>
                <option value="Broadcast">Broadcast</option>
              </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>