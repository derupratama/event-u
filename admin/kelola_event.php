<?php  
// DATA DUMMY EVENT UNTUK DESAIN SAJA (BELUM TERHUBUNG DB)
$dataEvent = [
    [
        "idEvent" => 1,
        "namaEvent" => "Hackathon Nasional",
        "organizer" => "Himatro",
        "kontak" => "08123456789",
        "harga" => "Rp 0",
        "deskripsi" => "Kompetisi pemrograman tingkat nasional.",
        "tanggalPesan" => "2025-11-20",
        "tanggalSelesai" => "2025-12-20",
        "status" => "Menunggu"
    ],
    [
        "idEvent" => 2,
        "namaEvent" => "Seminar AI & IoT",
        "organizer" => "Nizam Al- Gifari",
        "kontak" => "08881234566",
        "harga" => "Rp 25.000",
        "deskripsi" => "Seminar nasional dengan pembicara industri.",
        "tanggalPesan" => "2025-11-10",
        "tanggalSelesai" => "2025-12-10",
        "status" => "Menunggu"
    ],
    [
        "idEvent" => 3,
        "namaEvent" => "Workshop Matematika",
        "organizer" => "Himatika",
        "kontak" => "08214567890",
        "harga" => "Rp 50.000",
        "deskripsi" => "Workshop intensif 1 hari Matematika.",
        "tanggalPesan" => "2025-11-05",
        "tanggalSelesai" => "2025-12-05",
        "status" => "Aktif"
    ]
];
?>

<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kelola Event</li>
                    </ol>
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
                            <th>Nama Event</th>
                            <th>Penyelenggara</th>
                            <th>Kontak</th>
                            <th>Harga</th>
                            <th>Tgl Pesan</th>
                            <th>Tgl Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($dataEvent as $i => $e): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $e['namaEvent'] ?></td>
                            <td><?= $e['organizer'] ?></td>
                            <td><?= $e['kontak'] ?></td>
                            <td><?= $e['harga'] ?></td>
                            <td><?= $e['tanggalPesan'] ?></td>
                            <td><?= $e['tanggalSelesai'] ?></td>
                            <td><span class="badge badge-<?php
                            if($e['status'] == 'Menunggu') {
                              echo 'warning';
                            }else if($e['status'] == 'Aktif') {
                              echo 'success';
                            }
                            ?>"><?= $e['status'] ?></span></td>

                            <td>
                                <!-- TOMBOL UBAH STATUS -->
                                <button class="btn btn-primary btn-sm btn-status"
                                    data-toggle="modal"
                                    data-target="#modal-status"
                                    data-id="<?= $e['idEvent'] ?>"
                                    data-nama="<?= $e['namaEvent'] ?>"
                                    data-status="<?= $e['status'] ?>">
                                    <i class="fas fa-sliders-h"></i>
                                </button>

                                <!-- TOMBOL HAPUS -->
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
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

<!-- MODAL UBAH STATUS -->
<div class="modal fade" id="modal-status">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Ubah Status Event</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <input type="hidden" name="idEvent" id="status_id">

                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control" id="status_nama" readonly>
                    </div>

                    <div class="form-group">
                        <label>Pilih Status Baru</label>
                        <select class="form-control" name="statusBaru">
                            <option value="Diterima">Diterima</option>
                            <option value="Ditolak">Ditolak</option>
                            <option value="Pembayaran Diterima">Pembayaran Diterima</option>
                            <option value="Pembayaran Gagal">Pembayaran Gagal</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
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

<script>
// MENGISI MODAL EDIT OTOMATIS
document.querySelectorAll('.btn-status').forEach(btn => {
    btn.addEventListener('click', function() {
        document.getElementById('status_id').value = this.dataset.id;
        document.getElementById('status_nama').value = this.dataset.nama;
    });
});
</script>
