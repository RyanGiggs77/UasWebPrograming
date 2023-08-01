<?php

class Home extends Controller {
    public function index()
    {
        // untuk mengambil data dari model
        $data['judul'] = 'Home';
        $data['jadwal'] = $this->model('Jadwal_model')->getAllJadwal();
        $data['pemain'] = $this->model('Pemain_model')->getLatestPemain();
        
        // untuk mengubah format tanggal
        foreach ($data['jadwal'] as &$jadwal) {
            $jadwal['tanggal'] = date("d-m-Y", strtotime($jadwal['tanggal']));
        }

        // untuk menambahkan titik di point nya
        if (is_array($data['pemain'])) {
            foreach ($data['pemain'] as &$pemain) {
                $pemain['poin'] = number_format($pemain['poin'], 0, ',', '.');
            }
        } else {
            $data['pemain'] = array();
        }

        // untuk activelink navbar nya
        $data['active1'] = 'active';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}