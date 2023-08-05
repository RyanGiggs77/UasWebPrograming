<?php

class Pertandingan extends Controller {

    public function index()
    {
        // untuk mengambil data dari model
        $data['judul'] = 'Pertandingan';
        $data['pertandingan'] = $this->model('Pertandingan_model')->getAllPertandingan();
        
        // untuk mengubah format tanggal
        foreach ($data['pertandingan'] as &$pertandingan) {
            $pertandingan['tanggal'] = date("d-m-Y", strtotime($pertandingan['tanggal']));
        }

        // untuk activelink navbar nya
        $data['active1'] = '';
        $data['active2'] = 'active';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'style.css';

        $this->view('templates/header', $data);
        $this->view('pertandingan/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pertandingan_model')->tambahDataPertandingan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pertandingan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pertandingan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Pertandingan_model')->hapusDataPertandingan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pertandingan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pertandingan');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Pertandingan';
        $data['pertandingan'] = $this->model('Pertandingan_model')->cariDataPertandingan();
        
        // untuk mengubah format tanggal
        foreach ($data['pertandingan'] as &$pertandingan) {
            $pertandingan['tanggal'] = date("d-m-Y", strtotime($pertandingan['tanggal']));
        }

        // untuk activelink navbar nya
        $data['active1'] = '';
        $data['active2'] = 'active';
        $data['active3'] = '';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'style.css';

        $this->view('templates/header', $data);
        $this->view('pertandingan/index', $data);
        $this->view('templates/footer');
    }
}