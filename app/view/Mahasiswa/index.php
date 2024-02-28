<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach($data["mhs"] as $mhs):?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start"><?= $mhs["nama"];?>
                <a style="color:white" class="badge bg-primary" href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs["id"];?>">detail</a>
                </li>
            </ul>
            <?php endforeach ;?>
        </div>
    </div>
</div>