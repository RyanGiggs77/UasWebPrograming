
    <div class="container" style="margin-top: 100px;">
        <h2 class="form-title">Formulir Pendaftaran Badminton Club</h2>
        <h6 class="required">* Wajib</h6>
        <form action="<?= BASEURL; ?>/Login/tambah" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_lengkap">Nama lengkap<span class="required">*</span>:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username<span class="required">*</span>:</label>
                <input type="username" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password<span class="required">*</span>:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="alamat_email">Alamat Email<span class="required">*</span>:</label>
                <input type="email" class="form-control" id="alamat_email" name="alamat_email" required>
            </div>
            <div class="form-group">
                <label for="usia">Usia<span class="required">*</span>:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin<span class="required">*</span>:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan<span class="required">*</span>:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="kota">Kota<span class="required">*</span>:</label>
                <input type="text" class="form-control" id="kota" name="kota" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat<span class="required">*</span>:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="foto_profil">Foto Profil:</label>
                <input type="file" class="form-control" id="foto_profil" name="foto_profil" accept=".jpg, .jpeg, .png">
            </div>

            <div class="form-group">
                <label for="alasan">Alasan ingin bergabung<span class="required">*</span>:</label>
                <textarea class="form-control" id="alasan" name="alasan" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block btn-submit">Daftar</button>
        </form>
    </div>
