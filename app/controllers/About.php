<?php 



class About extends Controller{
    public function index($nama = "Muhamad Azmi Naziyulloh", $pekerjaan = "programmer"){
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view('about/index', $data);
    }
    public function page(){
        $this->view('about/page');
    }
}