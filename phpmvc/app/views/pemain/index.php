
<div class="container mt-5" style="padding-top: 50px;" >
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

  <div class="row mb-3">
    <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Pemain
        </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-6">
        <form action="<?= BASEURL; ?>/pemain/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
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
                <th>Point</th>
                <th>Action</th>
            </tr>
            <?php foreach ($data['pemain'] as $pemain) : ?>
                <tr>
                    <td><?= $pemain['rank']; ?></td>
                    <td><?= $pemain['nama']; ?></td>
                    <td><?= $pemain['negara']; ?></td>
                    <td><?= $pemain['poin']; ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Detail</a>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= BASEURL; ?>/pemain/hapus/<?= $pemain['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/pemain/tambah" method="post">
      <input type="hidden" name="id" id="id">

      <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
      </div>
      
      <div class="form-group">
          <label for="negara">Negara</label>
          <input type="text" class="form-control" id="negara" name="negara">
      </div>

      <div class="form-group">
          <label for="rank">Point</label>
          <input type="number" class="form-control" id="rank" name="rank"> 
      </div>

      <div class="form-group">
          <label for="poin">Rank</label>
          <input type="number" class="form-control" id="poin" name="poin"> 
      </div>

      

      <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</div>
</form> 
</div>
</div>
</div>










