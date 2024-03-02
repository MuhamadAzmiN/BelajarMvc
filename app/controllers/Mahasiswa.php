<?php

class Mahasiswa extends Controller {
    public function index(){
        $data["judul"] = 'Data Mahasiswa';
        $data["nama"] = "agus";
        $data["mhs"] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('template/header', $data);
        $this->view('Mahasiswa/index', $data);
        $this->view('template/footer');
        
    }
    public function detail($id){
        $data["judul"] = 'Detail Mahasiswa';
        $data["nama"] = "agus";
        $data["mhs"] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);

        $this->view('template/header', $data);
        $this->view('Mahasiswa/detail', $data);
        $this->view('template/footer');
        
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0){
            Flasher::setFlash('berhasil','ditambahkan', 'success' );
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;

        }else {
            Flasher::setFlash('gagal','ditambahkan', 'danger' );
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }

    }

    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id)>0){
            Flasher::setFlash('berhasil','dihapus', 'success' );
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;

        }else {
            Flasher::setFlash('gagal','dihapus', 'danger' );
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }

    }

    
}