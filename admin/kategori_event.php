<?php  
// DATA DUMMY KATEGORI EVENT
$dataKategori = [
    ["id" => 1, "nama" => "Lomba"],
    ["id" => 2, "nama" => "Seminar"],
    ["id" => 3, "nama" => "Bazar"],
    ["id" => 3, "nama" => "Konser"],
    ["id" => 4, "nama" => "Lainnya"]
];
?>

<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Kategori Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kategori Event</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header text-left">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">
                        <i class="fa fa-plus"></i> Tambah Kategori
                    </button>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10%">No</th>
                            <th style="width: 70%">Nama Kategori</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($dataKategori as $i => $k): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $k['nama'] ?></td>

                            <td class="text-center">
                                <button class="btn btn-warning btn-sm btn-edit-kat"
                                    data-toggle="modal"
                                    data-target="#modal-edit"
                                    data-id="<?= $k['id'] ?>"
                                    data-nama="<?= $k['nama'] ?>">
                                    <i class="fa fa-edit"></i>
                                </button>

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

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="margin: 0 auto;">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="namaKategori" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <input type="hidden" id="edit_id" name="idKategori">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" id="edit_nama" name="namaKategori" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
// MENGISI MODAL EDIT OTOMATIS
document.querySelectorAll('.btn-edit-kat').forEach(btn => {
    btn.addEventListener('click', function() {
        document.getElementById('edit_id').value = this.dataset.id;
        document.getElementById('edit_nama').value = this.dataset.nama;
    });
});
</script>
