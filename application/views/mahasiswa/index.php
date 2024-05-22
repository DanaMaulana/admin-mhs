<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?=base_url();?>mahasiswa/tambah" class="text-capitalize btn btn-primary">tambah data mahasiswa</a>
    </div>
  </div>
  <!-- form cari -->
  <div class="row mt-5">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Cari mahasiswa">
          <button class="btn btn-outline-primary" type="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <h3 class="text-capitalize">Daftar mahasiswa</h3>
      <?php if (empty($mahasiswa)) :?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          Data mahasiswa tidak ditemukan
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif;?>
      <!-- flash data untuk membuat notifikasi bahwa data berhasil diinput ke dalam tabel -->
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <!-- end flash data -->
      <ul class="list-group">
        <?php foreach($mahasiswa as $mhs) : ?>
          <li class="list-group-item">
            <?=$mhs['nama'];?>
            <div class="float-end d-flex flex-row-reverse gap-1">
              <a href="mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ?');">hapus</a>
              <a href="mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-primary btn-sm">edit</a>
              <a href="mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-info btn-sm">detail</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>