<?php

class Pemain extends controller {
    public function index()
    {
        $data['judul'] = 'Pemain';
        $data['pemain'] = $this->model('Pemain_model')->getAllPemain();

        // untuk menambahkan titik di point nya
        if (is_array($data['pemain'])) {
            foreach ($data['pemain'] as &$pemain) {
                $pemain['poin'] = number_format($pemain['poin'], 0, ',', '.');
            }
        } else {
            $data['pemain'] = array();
        }

        
        // untuk activelink navbar nya
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
        $data['active5'] = '';
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
        if ( $this->model('Pemain_model')->hapusDataPemain($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pemain');
            exit;
        }
    }

}