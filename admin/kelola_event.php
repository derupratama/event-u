<?php  
// DATA DUMMY EVENT UNTUK DESAIN SAJA (BELUM TERHUBUNG DB)
$dataEvent = [
    [
        "idEvent" => 1,
        "namaEvent" => "Futsal Portela 2025",
        "organizer" => "HIMATRO UNLA",
        "kontak" => "@himatro.unila",
        "harga" => "Rp 150.000",
        "deskripsi" => "Kompetisi futsal tingkat kampus untuk mahasiswa dan umum",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-15",
        "status" => "Aktif",
        "lokasi" => "Gedung Serba Guna, Universitas Lampung",
        "kategori" => "lomba",
        "image" => "../assets/img/cover/portela.png"
    ],
    [
        "idEvent" => 2,
        "namaEvent" => "Himatro Business Outdor",
        "organizer" => "Deru Pratama",
        "kontak" => "@himatro.unila",
        "harga" => "Gratis",
        "deskripsi" => "Bazar kegiatan mahasiswa yang menyediakan banyak macam makanan dan minuman hits.",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-20",
        "status" => "Aktif",
        "lokasi" => "Parkiran Mektan",
        "kategori" => "bazar",
        "image" => "../assets/img/cover/bazar.jpeg"
    ],
    [
        "idEvent" => 3,
        "namaEvent" => "COMVAGANZA 2025",
        "organizer" => "Himakom",
        "kontak" => "+62 812-3456-7890",
        "harga" => "Rp 150.000",
        "deskripsi" => "Konser musik akbar menampilkan band-band kampus dan artis nasional. Nikmati malam penuh musik, kuliner, dan kebersamaan.",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-25",
        "status" => "Aktif",
        "lokasi" => "Lapangan Bola Unila",
        "kategori" => "konser",
        "image" => "../assets/img/cover/konser.jpeg"
    ],
    [
        "idEvent" => 4,
        "namaEvent" => "Donor Darah Himatro",
        "organizer" => "Nizam Al- Gifari",
        "kontak" => "Fathan Syahbana(0812345678)",
        "harga" => "Gratis",
        "deskripsi" => "Donor darah Himatro X KSR Unila. Mari donorkan darah anda untuk menyelamatkan nyawa yang membutuhkan.",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-25 ",
        "status" => "Aktif",
        "lokasi" => "Gedung H, Fakultas Teknik",
        "kategori" => "lainnya",
        "image" => "../assets/img/cover/donor.jpeg"
    ],
    [
        "idEvent" => 5,
        "namaEvent" => "Seminar Nasional - Futura",
        "organizer" => "Himtaro Unila",
        "kontak" => "Nizam Al-Gifari(0812345678)",
        "harga" => "Gratis",
        "deskripsi" => "Implementasi teknologi di era digital 5.0",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-25",
        "status" => "Aktif",
        "lokasi" => "Zoom",
        "kategori" => "seminar",
        "image" => "../assets/img/cover/seminar.jpeg"
    ],
    [
        "idEvent" => 6,
        "namaEvent" => "Seminar Kebangsaan",
        "organizer" => "Unila",
        "kontak" => "Davi tholiatul Jaizy(0812345678)",
        "harga" => "Gratis",
        "deskripsi" => "Kebudayaan dan cinta tanah air",
        "tanggalPesan" => "2025-12-04",
        "tanggalSelesai" => "2025-12-30",
        "status" => "Aktif",
        "lokasi" => "GSG Unila",
        "kategori" => "seminar",
        "image" => "../assets/img/cover/seminar-kebangsaan.png"
    ],
    [
        "idEvent" => 7,
        "image" => "../assets/img/cover/hack.png",
        "namaEvent" => "Hackathon Unila 2025",
        "kategori" => "Lomba",
        "organizer" => "Nizam Al- Gifari",
        "kontak" => "0812345678",
        "lokasi" => "Gedung H",
        "harga" => "Rp 150.000",
        "tanggalPesan" => "2025-12-12",
        "tanggalSelesai" => "2025-12-23",
        "tanggal" => "2025-12-23",
        "status" => "Menunggu"
    ],
    [
        "idEvent" => 8,
        "image" => "../assets/img/cover/poster.png",
        "namaEvent" => "Lomba Desain Poster Nasioanl 2025",
        "kategori" => "Lomba",
        "organizer" => "Nizam Al- Gifari",
        "lokasi" => "Gedung H",
        "harga" => "Rp 15.000",
        "kontak" => "0812345678",
        "tanggalPesan" => "2025-12-06",
        "tanggalSelesai" => "2025-12-22",
        "tanggal" => "2025-12-22",
        "status" => "Menunggu Pembayaran"
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
                            }else if($e['status'] == 'Menunggu Pembayaran') echo 'info';
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
