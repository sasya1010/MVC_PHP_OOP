<?php

class About extends Controller {
    public function index($nama = "Sasya", $work = "Programmer"){
       $data['nama'] = $nama;
       $data['work'] = $work;
       $data['judul'] = "About";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}