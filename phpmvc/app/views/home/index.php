
    <!--LANDING-->
<div class="banner">
    <div class="banner-clip-path">
    </div>
    
    <div class="banner-text">
        <h1>Badminton Indonesia</h1>
        <button>comming match</button>
    </div>
</div>
    

<div class="SP">
   
</div>

<hr>
<div class="container">
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
                <?php foreach ($data['jadwal'] as $jadwal) : ?>
                    <tr>
                        <td><?= $jadwal['teamPertama']; ?></td>
                        <td><?= $jadwal['teamKedua']; ?></td>
                        <td><?= $jadwal['tanggal']; ?></td>
                        <td><?= $jadwal['waktu']; ?></td>
                        <td><?= $jadwal['tempat']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


        
    <div class="row">
        <div class="container-fluid">
            <h2 id="members">Informasi Pemain</h2>
            <table id="members-table" class="table table-striped table-bordered">
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Negara</th>
                    <th>Poin</th>
                </tr>
                <?php foreach ($data['pemain'] as $pemain) : ?>
                    <tr>
                        <td><?= $pemain['rank']; ?></td>
                        <td><?= $pemain['nama']; ?></td>
                        <td><?= $pemain['negara']; ?></td>
                        <td><?= $pemain['poin']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
   
    
