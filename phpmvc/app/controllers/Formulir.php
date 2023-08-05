<?php

class Formulir extends Controller {
    
        public function index()
        {
            // untuk mengambil data dari model
            $data['judul'] = 'Formulir';
    
            // untuk activelink navbar nya
            $data['active1'] = '';
            $data['active2'] = '';
            $data['active3'] = '';
            $data['active4'] = '';
            $data['active5'] = '';

            $data['css'] = 'styleFormulir.css';
    
            $this->view('templates/header', $data);
            $this->view('formulir/index');
            $this->view('templates/footer');
        }
}