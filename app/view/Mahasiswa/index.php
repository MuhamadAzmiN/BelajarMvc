<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
          <?= Flasher::flash();?>
        </div>
    </div>





    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
    Tambah Mahasiswa
</button>

            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data["mhs"] as $mhs): ?>
              <ul class="list-group ">
                  <li class="list-group-item">
                      <?= $mhs["nama"]; ?>
                      <a style="color:white" class="badge bg-danger float-right ml-2" onclick="return confirm('yakin')" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>">Hapus</a>
                      <a style="color:white" class="badge bg-primary float-right ml-2" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>">Detail</a>
                  </li>
              </ul>
          <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabelTambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelTambah">Tambahkan Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ;?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan Anda</label>
            <select class="form-select form-select-sm" id="jurusan" name="jurusan" aria-label=".form-select-sm example">
              <option selected>Jurusan Anda</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Teknik Sipil">Teknik Sipil</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- fitur ubah -->
<div class="modal fade" id="ubah" tabindex="-1" aria-labelledby="exampleModalLabelUbah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelUbah">Ubah Nama Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ;?>/mahasiswa/ubah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text"  value="<?= $mhs["nama"];?>" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="<?= $mhs["email"];?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan Anda</label>
            <select value="<?= $mhs["jurusan"];?>" class="form-select form-select-sm" id="jurusan" name="jurusan" aria-label=".form-select-sm example">
              <option selected>Jurusan Anda</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Teknik Sipil">Teknik Sipil</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- fitur ubah -->
<!-- ubah -->
