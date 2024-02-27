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
}