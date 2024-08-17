<?php
include 'koneksi.php';

// Buat instance dari kelas database_catatan
$database = new database_catatan();

// Tangani aksi berdasarkan parameter 'action'
$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'add') {
    // Tambahkan data baru
    $nama_catatan_cuti = $_POST['nama_catatan_cuti'];
    $database->tambah_data($nama_catatan_cuti);
    header("Location: tampil.php");
    exit();

} elseif ($action == 'update') {
    // Perbarui data yang ada
    $catatan_cuti_id = $_POST['catatan_cuti_id'];
    $nama_catatan_cuti = $_POST['nama_catatan_cuti'];
    
    if ($database->update_data($catatan_cuti_id, $nama_catatan_cuti)) {
        // Jika update berhasil, alihkan kembali ke halaman tampil.php
        header("Location: tampil.php");
        exit();
    } else {
        echo "Gagal mengupdate data!";
    }

} elseif ($action == 'delete') {
    // Hapus data berdasarkan ID
    $catatan_cuti_id = $_GET['id'];
    $database->delete_data($catatan_cuti_id);
    header("Location: tampil.php");
    exit();
}
?>
