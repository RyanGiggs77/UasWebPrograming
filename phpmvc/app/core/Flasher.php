<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
        ];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            $tipe = $_SESSION['flash']['tipe'];
            $pesan = $_SESSION['flash']['pesan'];
            $aksi = $_SESSION['flash']['aksi'];

            echo '<div class="alert alert-' . $tipe . ' alert-dismissible fade show" role="alert">
                    Data <strong>' . $pesan . '</strong> ' . $aksi . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION['flash']);
        }
    }
}
