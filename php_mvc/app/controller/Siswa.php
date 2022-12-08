<?php
class Siswa extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Siswa';
        $data['sis'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Siswa';
        $data['sis'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function insert(){
        if( $this->model('Siswa_model')->insertDataSiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function delete($id){
        if( $this->model('Siswa_model')->deleteDataSiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function getUbah()
    {
      echo json_encode($this->model('Siswa_model')->getSiswaById($data['id']));
    }
    public function ubah()
    {
        if ($this->model('Siswa_model')->UbahDataSiswa($data) > 0 )
        {
            Flasher::setFlash('berhasil','diubah','success');
            header('Location: '.BASEURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal','diubah','danger');
            header('Location: '.BASEURL. '/siswa');
            exit; 
        }
    }
}