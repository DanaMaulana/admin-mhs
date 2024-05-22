<?php

class Mahasiswa extends CI_Controller {
  // method ini secara difault akan digunakan untuk seluruh fungsi yang ada didalam kelas/kontroler Mahasiswa
  public function __construct() {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
  }
  // method default
  public function index() {
    // $data['judul'] => 'judul' jadi nama variabel
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
    if ( $this->input->post('keyword')) {
      $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer');
  }
  // method tambah data
  public function tambah() {
    $data['judul'] = 'Halaman tambah data mahasiswa';
    // untuk menvalidasi data yang akan dikirimkan ke tabel
    $this->form_validation->set_rules(
      'nama', 'Nama', 'required|min_length[3]', [
        'required' => 'Masukkan nama Anda', 'min_length' => 'Minimal nama berisi 3 karakter'
      ]);
    $this->form_validation->set_rules(
      'nrp', 'NRP', 'required|numeric|min_length[8]', [
        'required' => 'NRP harus diisi', 'numeric' => 'Harus berisi angka', 'min_length' => 'NRP minimal 8 karakter'
      ]);
    $this->form_validation->set_rules(
      'email', 'Email', 'required|valid_email', [
        'required' => 'Masukkan email Anda', 'valid_email' => 'Isi format email dengan benar'
      ]);
    if ($this->form_validation->run() == FALSE) {
      // jika data tidak valid maka data gagal ditambahkan dan halaman akan dikembalikan ke mahasiswa/tambah
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('templates/footer');
    }
    // jika TRUE data akan di insert ke dalam database
    else {
      $this->Mahasiswa_model->tambahDataMahasiswa();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('mahasiswa');
    }
  }
  // method hapus data
  public function hapus($id) {
    $this->Mahasiswa_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('mahasiswa');
  }
  // detail mahasiswa
  public function detail($id) {
    $data['judul'] = 'Detail data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getDataMahasiswaById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/detail', $data);
    $this->load->view('templates/footer');
  }
  // method ubah data
  // ubah($id) -> id diambil dari url dikirim ke model, setelah diproses dimodel jangan lupa diuse ke view ubah
  public function ubah($id) {
    $data['judul'] = 'Halaman ubah data mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getDataMahasiswaById($id);
    $data['jurusan'] = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Kendaraan Ringan', 'Tataboga', 'Akutansi', 'Broadcast'];
    // untuk menvalidasi data yang akan dikirimkan ke tabel
    $this->form_validation->set_rules(
      'nama', 'Nama', 'required|min_length[3]', [
        'required' => 'Masukkan nama Anda', 'min_length' => 'Minimal nama berisi 3 karakter'
      ]);
    $this->form_validation->set_rules(
      'nrp', 'NRP', 'required|numeric|min_length[8]', [
        'required' => 'NRP harus diisi', 'numeric' => 'Harus berisi angka', 'min_length' => 'NRP minimal 8 karakter'
      ]);
    $this->form_validation->set_rules(
      'email', 'Email', 'required|valid_email', [
        'required' => 'Masukkan email Anda', 'valid_email' => 'Isi format email dengan benar'
      ]);
    if ($this->form_validation->run() == FALSE) {
      // jika data tidak valid maka data gagal ditambahkan dan halaman akan dikembalikan ke mahasiswa/tambah
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/ubah', $data);
      $this->load->view('templates/footer');
    }
    // jika TRUE data akan di insert ke dalam database
    else {
      $this->Mahasiswa_model->ubahDataMahasiswa();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('mahasiswa');
    }
  }
}