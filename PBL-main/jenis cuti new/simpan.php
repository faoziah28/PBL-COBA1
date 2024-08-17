<?php
include 'koneksi.php';

// Buat instance dari kelas database_jenis
$database = new database_jenis();

// Tangani aksi berdasarkan parameter 'action'
$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'add') {
    // Tambahkan data baru
    $jenis_cuti = $_POST['jenis_cuti'];
    $database->tambah_data($jenis_cuti);
    header("Location: tampil.php");
    exit();

} elseif ($action == 'update') {
    // Perbarui data yang ada
    $jenis_cuti_id = $_POST['jenis_cuti_id'];
    $jenis_cuti = $_POST['jenis_cuti'];
    
    if ($database->update_data($jenis_cuti_id, $jenis_cuti)) {
        // Jika update berhasil, alihkan kembali ke halaman tampil.php
        header("Location: tampil.php");
        exit();
    } else {
        echo "Gagal mengupdate data!";
    }

} elseif ($action == 'delete') {
    // Hapus data berdasarkan ID
    $jenis_cuti_id = $_GET['id'];
    $database->delete_data($jenis_cuti_id);
    header("Location: tampil.php");
    exit();
}
?>
