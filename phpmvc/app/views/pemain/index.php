
<div class="container mt-5" style="padding-top: 50px; padding-bottom:100px;">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


  <div class="row mb-3">
    <div class="col-6">
        <form action="<?= BASEURL; ?>/pemain/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="cari anggota.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <h2 id="members">Informasi Anggota</h2>
        <?php foreach ($data['pemain'] as $pemain) : ?>
        <div class="col-md-4">
                <div class="member-card text-center">
                    <img src="<?= BASEURL; ?>/<?= $pemain['foto_profil']; ?>" alt="Member 1">
                    <h4><?= $pemain['nama_lengkap']; ?></h4>
                    <p>Email: <?= $pemain['alamat_email']; ?></p>
                    <p>Umur: <?= $pemain['usia']; ?> years</p>
                    <p>Jenis Kelamin: <?= $pemain['jenis_kelamin']; ?></p>
                    <p>Role: <?= $pemain['role']; ?></p>
                    <p>Alasan Bergabung: <?= $pemain['alasan']; ?></p>
                    <a href="<?= BASEURL; ?>/pemain/detail/<?= $pemain['id']; ?>" class="btn" id="view">View Profile</a>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                        <a href="<?= BASEURL; ?>/pemain/hapus/<?= $pemain['id']; ?>" class="btn" id="delete">Delete Profile</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>















