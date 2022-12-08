<div class="container mt-3" >

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Siswa </button>
            <br><br>
            <h3>Daftar Siswa</h3>
                <ul class="list-group">
                    <?php foreach($data['sis'] as $sis): ?>
                        <li class="list-group-item">
                            <?= $sis['nama'];?>
                            <a href="<?= BASEURL; ?>/siswa/delete/<?= $sis['id']; ?>" class="badge bg-danger" style = "float: right;" onclick="return confirm('are u sure want to delete this data?');">Delete</a>
                            <a href="<?= BASEURL; ?>/siswa/detail/<?= $sis['id']; ?>" class="badge bg-warning tampilSiswa" style ="float: right;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sis['id'];?>">Edit</a>
                            <a href="<?= BASEURL; ?>/siswa/detail/<?= $sis['id']; ?>" class="badge bg-primary" style ="float: right;">Detail</a>
                        </li>
                    <?php endforeach;?>
                </ul>
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formmodalLabel">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/siswa/insert" method="post" id="formUbah">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name ="nama">
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name ="nisn">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name ="tgl_lahir">
        </div>
        <div class="mb-3">
            <label for="jp" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jp" name ="jp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name ="email">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
        </from>
        </div>
    </div>
  </div>
</div>
