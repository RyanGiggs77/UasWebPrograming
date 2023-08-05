<div class="banner">
    <div class="banner-clip-path">
    </div>
    
    <div class="banner-text">
        <h1>Badminton Club</h1>
        <a href="<?= BASEURL; ?>/formulir"><button>Join Now</button></a>
    </div>
</div>
    

<div class="SP">
   
</div>

<div class="container mt-4">
    <div class="row">
        <div class="container">
            <h2 id="schedule">Jadwal Pertandingan</h2>
            <table id="schedule-table" class="table table-striped table-bordered">
                <tr>
                    <th>Tim A</th>
                    <th>Tim B</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                </tr>
                <?php foreach ($data['pertandingan'] as $pertandingan) : ?>
                    <tr>
                        <td><?= $pertandingan['teamPertama']; ?></td>
                        <td><?= $pertandingan['teamKedua']; ?></td>
                        <td><?= $pertandingan['tanggal']; ?></td>
                        <td><?= $pertandingan['waktu']; ?></td>
                        <td><?= $pertandingan['tempat']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


        
    <div class="row">
        <div class="container-fluid">
            <h2 id="members">Informasi Anggota</h2>
            <table id="members-table" class="table table-striped table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Kota</th>
                </tr>
                <?php foreach ($data['pemain'] as $pemain) : ?>
                    <tr>
                        <td><?= $pemain['nama_lengkap']; ?></td>
                        <td><?= $pemain['usia']; ?></td>
                        <td><?= $pemain['jenis_kelamin']; ?></td>
                        <td><?= $pemain['kota']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
   
    
