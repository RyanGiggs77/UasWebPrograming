      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Badminton</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Match</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Player</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner-container">
        <h1>Badminton Indonesia</h1>
        <button class="btn btn-danger">Join Now</button>
    </div>  

    <div class="container mt-5">
        <h2 id="schedule" class="text-center">Jadwal Pertandingan</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Tim A</th>
                        <th>Tim B</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['jadwal'] as $jadwal) : ?>
                        <tr>
                            <td><?= $jadwal['teamPertama']; ?></td>
                            <td><?= $jadwal['teamKedua']; ?></td>
                            <td><?= $jadwal['tanggal']; ?></td>
                            <td><?= $jadwal['waktu']; ?></td>
                            <td><?= $jadwal['tempat']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div class="container mt-5">
        <h2 id="members">Informasi Pemain</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Rank</th>
                        <th>Nama</th>
                        <th>Negara</th>
                        <th>Point</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['pemain'] as $pemain) : ?>
                        <tr>
                            <td><?= $pemain['rank']; ?></td>
                            <td><?= $pemain['nama']; ?></td>
                            <td><?= $pemain['negara']; ?></td>
                            <td><?= $pemain['point']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>