<?php

class Mahasiswa_model extends CI_Model {
  // untuk menampilkan seluruh data mahasiswa
  public function getAllMahasiswa() {
    return $this->db->get('mahasiswa')->result_array();
  }
  // menambahkan data mahasiswa
  public function tambahDataMahasiswa() {
    // menyiapkan data yang ingin diinsert (the left column is the name of the table in the database | the right column contains data entered via the input column)
    $data = [
      "nama" => $this->input->post('nama', TRUE),
      "nrp" => $this->input->post('nrp', TRUE),
      "email" => $this->input->post('email', TRUE),
      "jurusan" => $this->input->post('jurusan', TRUE)
    ];
    // insert data ke dalam tabel mahasiswa
    $this->db->insert('mahasiswa', $data);
  }
  // menghapus data mahasiswa
  public function hapusDataMahasiswa($id) {
    $this->db->delete('mahasiswa', array('id' => $id)); 
  }
  // menampilkan data mahasiswa yang dipilih
  public function getDataMahasiswaById($id) {
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }
  public function ubahDataMahasiswa() {
    // menyiapkan data yang ingin diinsert (the left column is the name of the table in the database | the right column contains data entered via the input column)
    $data = [
      "nama" => $this->input->post('nama', TRUE),
      "nrp" => $this->input->post('nrp', TRUE),
      "email" => $this->input->post('email', TRUE),
      "jurusan" => $this->input->post('jurusan', TRUE)
    ];
    // update data ke dalam tabel mahasiswa
    $this->db->update('mahasiswa', $data, ['id' => $this->input->post('id')]);
  }
  // cari data mahasiswa
  public function cariDataMahasiswa() {
    $keyword = $this->input->post('keyword', TRUE);
    $this->db->like('nama', $keyword);
    $this->db->or_like('nrp', $keyword);
    $this->db->or_like('jurusan', $keyword);
    return $this->db->get('mahasiswa')->result_array();
  }
}