<?php

class Keanggotaan extends Controller {

    public function index()
    {
        // untuk mengambil data dari model
        $data['judul'] = 'Informasi';

        // untuk activelink navbar nya
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = 'active';
        $data['active5'] = '';

        $data['css'] = 'styleInformasi.css';

        $this->view('templates/header', $data);
        $this->view('keanggotaan/index');
        $this->view('templates/footer');
    }
}