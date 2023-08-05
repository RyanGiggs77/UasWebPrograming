<?php

class Home extends Controller {
    public function index()
    {
        // untuk mengambil data dari model
        $data['judul'] = 'Home';
        $data['pertandingan'] = $this->model('Pertandingan_model')->getAllPertandingan();
        $data['pemain'] = $this->model('User_model')->getLatestUser();
        
        // untuk mengubah format tanggal
        foreach ($data['pertandingan'] as &$pertandingan) {
            $pertandingan['tanggal'] = date("d-m-Y", strtotime($pertandingan['tanggal']));
        }

        // untuk activelink navbar nya
        $data['active1'] = 'active';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'style.css';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}