<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['sis'] ['nama'] ;?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['sis'] ['nisn'] ;?></h6>
    <p class="card-text"><?= $data['sis'] ['tgl_lahir'] ;?></p>
    <p class="card-text"><?= $data['sis'] ['jp'] ;?></p>
    <p class="card-text"><?= $data['sis'] ['email'] ;?></p>
    <a href="<?= BASEURL ?>/siswa" class="card-link">Back</a>
  </div>
</div>

</div>