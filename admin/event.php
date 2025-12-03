<?php  
// DATA DUMMY EVENT UNTUK PENGAJU EVENT
$dataEvent = [
    [
        "idEvent" => 1,
        "image" => "../assets/img/cover/hack.png",
        "namaEvent" => "Hackathon Unila 2025",
        "kategori" => "Lomba",
        "kontak" => "0812345678",
        "lokasi" => "Gedung H",
        "harga" => "Rp 150.000",
        "tanggal_aktif" => "belum aktif",
        "tanggal" => "2025-12-23",
        "status" => "Menunggu"
    ],
    [
        "idEvent" => 2,
        "image" => "../assets/img/cover/poster.png",
        "namaEvent" => "Lomba Desain Poster Nasioanl 2025",
        "kategori" => "Lomba",
        "harga" => "Rp 15.000",
        "kontak" => "0812345678",
        "lokasi" => "Gedung H",
        "tanggal_aktif" => "belum aktif",
        "tanggal" => "2025-12-22",
        "status" => "Menunggu Pembayaran"
    ],
    [
        "idEvent" => 3,
        "image" => "../assets/img/cover/donor.jpeg",
        "namaEvent" => "Donor Darah Himatro",
        "kategori" => "Lainnya",
        "harga" => "Rp 0",
        "kontak" => "@himatro.unila",
        "lokasi" => "Gedung H",
        "tanggal_aktif" => "2025-12-20",
        "tanggal" => "2025-11-25",
        "status" => "Aktif"
    ]
];
?>

<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event Saya</h1>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#modal-tambah">
                        <i class="fas fa-plus"></i> Tambah Event
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Event</th>
                            <th>Kategori</th>
                            <th>Kontak</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Aktif Hingga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php foreach($dataEvent as $i => $e): ?>
                        <tr>
                            <td><?= $i+1 ?></td>

                            <td>
                                <img src="<?= $e['image'] ?>" class="img-thumbnail" width="70">
                            </td>

                            <td><?= $e['namaEvent'] ?></td>
                            <td><?= $e['kategori'] ?></td>
                            <td><?= $e['kontak'] ?></td>
                            <td><?= $e['lokasi'] ?></td>
                            <td><?= $e['harga'] ?></td>
                            <td><?= $e['tanggal'] ?></td>
                            <td><?= $e['tanggal_aktif'] ?></td>

                            <td>
                                <span class="badge badge-<?php
                                    if($e['status'] == 'Menunggu') echo 'warning';
                                    else if($e['status'] == 'Menunggu Pembayaran') echo 'info';
                                    else if($e['status'] == 'Aktif') echo 'success';
                                ?>">
                                    <?= ucfirst($e['status']) ?>
                                </span>
                            </td>

                            <td>
                                <!-- STATUS: PENDING -->

                                <?php if($e['status'] == 'Menunggu Pembayaran'): ?>
    <button class="btn btn-success btn-sm btn-bayar"
        data-toggle="modal"
        data-target="#modal-bayar"
        data-id="<?= $e['idEvent'] ?>"
        data-nama="<?= $e['namaEvent'] ?>"
        data-harga="<?= $e['harga'] ?>"
        data-aktif="<?= $e['tanggal'] ?>"
    >
        <i class="fas fa-wallet"></i>
    </button>


                                <!-- STATUS: ACTIVE -->
                                <?php elseif($e['status'] == 'Aktif'): ?>
                                    <button class="btn btn-warning btn-sm btn-status"
                                        data-toggle="modal" data-target="#modal-status"
                                        data-id="<?= $e['idEvent'] ?>"
                                        data-nama="<?= $e['namaEvent'] ?>">
                                        <i class="fas fa-sliders-h"></i>
                                    </button>

                                    <button class="btn btn-info btn-sm btn-edit"
                                        data-toggle="modal" data-target="#modal-edit"
                                        data-id="<?= $e['idEvent'] ?>"
                                        data-nama="<?= $e['namaEvent'] ?>"
                                        data-kategori="<?= $e['kategori'] ?>"
                                        data-harga="<?= $e['harga'] ?>"
                                        data-tanggal="<?= $e['tanggal'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </section>
</div>


<!-- ===========================
    MODAL TAMBAH EVENT
=========================== -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Event Baru</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control" name="namaEvent" required>
                    </div>

                      <div class="form-group">
                        <label>Kategori</label>
                        <select  class="form-control" name="" id="">
                            <option value="">Lomba</option>
                            <option value="">Seminar</option>
                            <option value="">Banzar</option>
                            <option value="">Konser</option>
                            <option value="">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kontak</label>
                        <input type="text" class="form-control" name="namaEvent" required>
                    </div>

                    <div class="form-group">
                        <label>Lokasi Pengadaan</label>
                        <input type="text" class="form-control" name="namaEvent" required>
                    </div>


                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pelaksanaan Event</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Mulai Iklan</label>
                        <input type="date" class="form-control" name="tanggal" required>
                        <small>note: Masukkan tanggal minimal H+1 dari hari ini</small>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Seleai Iklan</label>
                        <input type="date" class="form-control" name="tanggal" required>
                        <small>note : Harga pengiklanan Rp. 2000/hari</small>
                    </div>


                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Tambah Event</button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- ===========================
       MODAL EDIT EVENT
=========================== -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <form method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Event</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="idEvent" id="edit_id">

                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" id="edit_nama" class="form-control" name="namaEvent">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select  class="form-control" name="" id="">
                            <option value="">Lomba</option>
                            <option value="">Seminar</option>
                            <option value="">Banzar</option>
                            <option value="">Konser</option>
                            <option selected value="">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kontak</label>
                        <input type="text" id="edit_nama" value="@himatro.unila" class="form-control" name="namaEvent">
                    </div>

                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" id="edit_nama" value="Gedung H" class="form-control" name="namaEvent">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" id="edit_harga" value="Rp. 0" class="form-control" name="harga">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pelaksanaan</label>
                        <input type="date" value="2025-11-25" id="edit_tanggal" class="form-control" name="tanggal">
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- ===========================
       MODAL STATUS
=========================== -->
<div class="modal fade" id="modal-status">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <form method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Status Event</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="idEvent" id="status_id">

                    <p>Nonaktifkan event <b id="status_nama"></b>?</p>

                    <select class="form-control" name="statusBaru">
                        <option value="active">Aktif</option>
                        <option value="inactive">Nonaktif</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- MODAL PEMBAYARAN -->
<div class="modal fade" id="modal-bayar">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Pembayaran Event</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <input type="hidden" name="idEvent" id="bayar_id">

                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" id="bayar_nama" class="form-control" readonly>
                    </div>

                    <div class="form-group text-center">
                        <label>QRIS Pembayaran</label><br>
                        <img id="bayar_qris" 
                             src="../assets/img/qris.png"
                             class="rounded" width="250">
                    </div>

                    <div class="form-group">
                        <label>Harga Pembayaran</label>
                        <input type="text" value="Rp. 22.000" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Mulai Pengiklanan</label>
                        <input type="text" id="bayar_aktif" value="12 Desember 2025" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Selesai Pengiklanan</label>
                        <input type="text" id="bayar_aktif" value="22 Desember 2025" class="form-control" readonly>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                </div>

            </form>

        </div>
    </div>
</div>



<!-- ===========================
         SCRIPT
=========================== -->


<script>
document.querySelectorAll('.btn-bayar').forEach(btn => {
    btn.addEventListener('click', function() {

        document.getElementById('bayar_id').value = this.dataset.id;
        document.getElementById('bayar_nama').value = this.dataset.nama;
        document.getElementById('bayar_harga').value = this.dataset.harga;
        document.getElementById('bayar_pesan').value = this.dataset.pesan;
        document.getElementById('bayar_aktif').value = this.dataset.aktif;

        // Jika nanti punya QRIS dari database tinggal ganti di sini:
        // document.getElementById('bayar_qris').src = this.dataset.qris;
    });
});
</script>

<script>
// MODAL EDIT
document.querySelectorAll(".btn-edit").forEach(btn => {
    btn.addEventListener("click", function() {
        document.getElementById("edit_id").value = this.dataset.id;
        document.getElementById("edit_nama").value = this.dataset.nama;
        document.getElementById("edit_kategori").value = this.dataset.kategori;
        document.getElementById("edit_harga").value = this.dataset.harga;
        document.getElementById("edit_tanggal").value = this.dataset.tanggal;
    });
});

// MODAL STATUS
document.querySelectorAll(".btn-status").forEach(btn => {
    btn.addEventListener("click", function() {
        document.getElementById("status_id").value = this.dataset.id;
        document.getElementById("status_nama").innerText = this.dataset.nama;
    });
});
</script>

