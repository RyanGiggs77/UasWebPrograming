
<div class="container mt-5" style="padding-top: 50px;" >
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

  <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
  <div class="row mb-3">
    <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Pertandingan
        </button>
    </div>
  </div>
  <?php endif; ?>

  <div class="row mb-3">
    <div class="col-6">
        <form action="<?= BASEURL; ?>/pertandingan/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="cari pertandingan.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  <div class="row">
    <div class="container-fluid">
        <h2 id="members">Informasi Pertandingan</h2>
        <table id="members-table" class="table table-striped table-bordered">
            <tr>
                <th>Team A</th>
                <th>Team B</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Tempat</th>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                <th>Action</th>
                <?php endif; ?>
            </tr>
            <?php foreach ($data['pertandingan'] as $pertandingan) : ?>
                <tr>
                <td><?= $pertandingan['teamPertama']; ?></td>
                <td><?= $pertandingan['teamKedua']; ?></td>
                <td><?= $pertandingan['tanggal']; ?></td>
                <td><?= $pertandingan['waktu']; ?></td>
                <td><?= $pertandingan['tempat']; ?></td>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                    <td>
                        <a href="<?= BASEURL; ?>/pertandingan/hapus/<?= $pertandingan['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                <?php endif; ?>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Pertandingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/pertandingan/tambah" method="post">
      <input type="hidden" name="id" id="id">

      <div class="form-group">
          <label for="teamPertama">Team A</label>
          <input type="text" class="form-control" id="teamPertama" name="teamPertama">
      </div>
      
      <div class="form-group">
          <label for="teamKedua">Team B</label>
          <input type="text" class="form-control" id="teamKedua" name="teamKedua">
      </div>

  <!-- Input tanggal -->
       <div class="form-group">
           <label for="tanggal">Tanggal</label>
           <input type="date" class="form-control" id="tanggal" name="tanggal">
       </div>

          <!-- Input waktu -->
          <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu">
          </div>  

        <div class="form-group">
          <label for="tempat">Tempat</label>
          <input type="text" class="form-control" id="tempat" name="tempat">
        </div>
      

      <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</div>
</form> 
</div>
</div>
</div>










