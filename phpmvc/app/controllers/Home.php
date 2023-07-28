<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['jadwal'] = $this->model('Jadwal_model')->getAllJadwal();
        $data['pemain'] = $this->model('Pemain_model')->getAllPemain();
        
        foreach ($data['jadwal'] as &$jadwal) {
            $jadwal['tanggal'] = date("d-m-Y", strtotime($jadwal['tanggal']));
        }

        foreach ($data['pemain'] as &$pemain) {
            $pemain['point'] = number_format($pemain['point'], 0, ',', '.');
        }
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}