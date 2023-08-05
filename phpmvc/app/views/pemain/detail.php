  <div class="container">
    <div class="content">
      <div class="profile">
        <img src="<?= BASEURL; ?>/<?= $data['pemain']['foto_profil']; ?>" alt="Gambar Profil" class="round-image">
        <div class="name"><?= $data['pemain']['nama_lengkap']; ?></div>
        <div class="country"><?= $data['pemain']['kota']; ?></div>
      </div>
      <div class="schedule">
        <h2>Jadwal Harian</h2>
        <ul>
          <li>Minggu: 07:00 s.d 12:00</li>
          <li>Senin: 15:00 s.d 17:00</li>
          <li>Selasa: 15:00 s.d 17:00</li>
          <li>Rabu: Libur</li>
          <li>Kamis: 15:00 s.d 17:00</li>
          <li>Jumat: 15:00 s.d 17:00</li>
          <li>Sabtu: Libur</li>
        </ul>
      </div>
      <div class="bio">
        <h2>Biodata</h2>
        <p>Nama: <?= $data['pemain']['nama_lengkap']; ?></p>
        <p>Jenis Kelamin: <?= $data['pemain']['jenis_kelamin']; ?></p>
        <p>Alamat: <?= $data['pemain']['alamat']; ?></p>
        <p>Pekerjaan: <?= $data['pemain']['pekerjaan']; ?></p>
        <p>Usia: <?= $data['pemain']['usia']; ?></p>
        <p>Alasan Bergabung: <?= $data['pemain']['alasan']; ?></p>
      </div>
    </div>
  </div>
</body>
</html>
