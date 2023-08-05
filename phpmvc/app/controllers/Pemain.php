<?php

class Pemain extends controller {

    
    public function index()
    {
        $data['judul'] = 'Pemain';
        $data['pemain'] = $this->model('User_model')->getAllPemain();

        // untuk menambahkan titik di point nya
        

        
        // untuk activelink navbar nya
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'stylePemain.css';

        $this->view('templates/header', $data);
        $this->view('pemain/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('Pemain_model')->tambahDataPemain($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        }
    }

    public function hapus($id)
    {
        if ( $this->model('User_model')->hapusDataUser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pemain';
        $data['pemain'] = $this->model('User_model')->getUserById($id);


        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'styleDetail.css';

        $this->view('templates/header', $data);
        $this->view('pemain/detail', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Pemain';
        $data['pemain'] = $this->model('User_model')->cariDataUser();

        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
        $data['active5'] = '';

        $data['css'] = 'stylePemain.css';

        $this->view('templates/header', $data);
        $this->view('pemain/index', $data);
        $this->view('templates/footer');
    }

}