<?php
// ================================
// KONEKSI DATABASE
// ================================
session_start();
chdir(__DIR__);
$db = new SQLite3(__DIR__ . "/event_platform.sqlite");
$db->exec("PRAGMA foreign_keys = ON;");


// ================================
// TABEL USER
// ================================
$db->exec("
    CREATE TABLE IF NOT EXISTS User (
        idUser INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        namaLengkap TEXT,
        alamat TEXT,
        role TEXT
    )
");


// ================================
// TABEL KATEGORI EVENT
// ================================
$db->exec("
    CREATE TABLE IF NOT EXISTS kategoriEvent (
        idKategoriEvent INTEGER PRIMARY KEY AUTOINCREMENT,
        namaKategoriEvent TEXT NOT NULL
    )
");


// ================================
// TABEL EVENT
// ================================
$db->exec("
    CREATE TABLE IF NOT EXISTS event (
        idEvent INTEGER PRIMARY KEY AUTOINCREMENT,
        idKategoriEvent INTEGER NOT NULL,
        idUser INTEGER NOT NULL,
        namaEvent TEXT NOT NULL,
        tanggalPelaksanaan TEXT,
        harga INTEGER,
        lokasi TEXT,
        kontak TEXT,
        deskripsi TEXT,
        tanggalPesanIklan TEXT,
        tanggalSelesaiIklan TEXT,
        status TEXT,
        gambarEvent TEXT,     -- 🔥 ditambahkan sesuai permintaan
        FOREIGN KEY(idKategoriEvent) REFERENCES kategoriEvent(idKategoriEvent)
            ON UPDATE CASCADE ON DELETE CASCADE,
        FOREIGN KEY(idUser) REFERENCES User(idUser)
            ON UPDATE CASCADE ON DELETE CASCADE
    )
");


// ================================
// TABEL PEMBAYARAN EVENT
// ================================
$db->exec("
    CREATE TABLE IF NOT EXISTS pembayaranEvent (
        idPembayaranEvent INTEGER PRIMARY KEY AUTOINCREMENT,
        idEvent INTEGER NOT NULL,
        gambarLinkPembayaran TEXT,
        totalPembayaran INTEGER,
        FOREIGN KEY(idEvent) REFERENCES event(idEvent)
            ON UPDATE CASCADE ON DELETE CASCADE
    )
");


// ================================
// FUNGSI QUERY
// ================================
function query($sql) {
    global $db;

    if (stripos($sql, 'select') === 0) {
        $result = $db->query($sql);
        $rows = [];

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }

        return $rows; 
    } else {
        return $db->exec($sql);
    }
}

// // ================================
// // INSERT DATA DUMMY USER
// // ================================
// $db->exec("
//     INSERT INTO User (username, password, namaLengkap, alamat, role) VALUES
//     ('deru', 'deru', 'Deru Pratama', 'Metro, Lampung', 'admin'),
//     ('nizam', 'nizam', 'Nizam Al- Gifari', 'Metro, Lampung', 'user')
// ");


// // ================================
// // INSERT DATA DUMMY KATEGORI EVENT
// // ================================
// $db->exec("
//     INSERT INTO kategoriEvent (namaKategoriEvent) VALUES
//     ('Lomba'),
//     ('Seminar'),
//     ('Workshop'),
//     ('Konser'),
//     ('Exhibition')
// ");


// // ================================
// // INSERT DATA DUMMY EVENT
// // ================================
// $db->exec("
//     INSERT INTO event (
//         idKategoriEvent, idUser, namaEvent, tanggalPelaksanaan,
//         harga, lokasi, kontak, deskripsi, tanggalPesanIklan,
//         tanggalSelesaiIklan, status, gambarEvent
//     ) VALUES

//     (1, 2, 'Hackathon Nasional 2025', '2025-12-15',
//      0, 'Universitas Indonesia', '08123456789',
//      'Kompetisi pemrograman tingkat nasional dengan hadiah 50 juta.',
//      '2025-11-20', '2025-12-20', 'aktif', 'hackathon.jpg'),

//     (2, 3, 'Seminar Nasional AI & IoT', '2025-12-10',
//      25000, 'Universitas Lampung', '082178909876',
//      'Seminar nasional dengan pembicara dari praktisi industri.',
//      '2025-11-18', '2025-12-10', 'aktif', 'seminar_ai.jpg'),

//     (3, 3, 'Workshop UI/UX untuk Pemula', '2025-12-05',
//      50000, 'Bandar Lampung', '089561234567',
//      'Workshop intensif 1 hari untuk pemula yang ingin belajar UI/UX.',
//      '2025-11-15', '2025-12-05', 'aktif', 'workshop_uiux.jpg'),

//     (4, 2, 'Konser Musik Lampung Fest', '2026-01-12',
//      150000, 'GSG Lampung', '081345677654',
//      'Konser musik dengan artis lokal dan nasional.',
//      '2025-12-01', '2026-01-12', 'aktif', 'konser_lampung.jpg'),

//     (5, 3, 'Exhibition Startup & UMKM 2025', '2025-12-20',
//      0, 'Lampung Walk', '082234567890',
//      'Pameran bisnis dan startup terbesar di Lampung tahun 2025.',
//      '2025-11-22', '2025-12-20', 'aktif', 'expo_startup.jpg')
// ");


// // ================================
// // INSERT DATA DUMMY PEMBAYARAN EVENT
// // ================================
// $db->exec("
//     INSERT INTO pembayaranEvent (idEvent, gambarLinkPembayaran, totalPembayaran) VALUES
//     (1, 'bukti_hackathon.jpg', 50000),
//     (2, 'bukti_seminarAI.jpg', 25000),
//     (3, 'bukti_workshopUIUX.jpg', 50000),
//     (4, 'bukti_konserLampung.jpg', 150000)
// ");


?>
