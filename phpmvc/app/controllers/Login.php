<?php

class Login extends Controller {

    public function index()
    {
        $data['css'] = 'styleLogin.css';
        $data['judul'] = 'Login';
        $this->view('login/index');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                Flasher::setFlash('Username atau Password tidak boleh kosong', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }

            // cek login untuk admin
            if ($username === 'admin' && $password === 'admin123') {
                session_start();
                $_SESSION['user_id'] = 1;
                $_SESSION['username'] = 'admin';
                $_SESSION['role'] = 'admin';
                header('Location: ' . BASEURL . '/home');
                return;
            }

            $userModel = $this->model('User_model');
            $user = $userModel->getAllUser($username);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['role'] = 'user';
                    header('Location: ' . BASEURL . '/home');
                    return;
                } else {
                    Flasher::setFlash('Password', 'salah', 'danger');
                    header('Location: ' . BASEURL . '/login');
                    exit;
                }
            } else {
                Flasher::setFlash('Username', 'tidak ditemukan', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;   
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/home');
    }

    public function tambah()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('Data user berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/login');
            exit;
        } else {
            Flasher::setFlash('Data user gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/formulir');
            exit;
        }
    }
}