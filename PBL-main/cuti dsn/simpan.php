<?php 
include('koneksi.php');
$koneksi = new database_cuti();

$action = $_GET['action'];

if ($action == "add") {
    // Mengambil data dari POST request
    $cuti_id = $_POST['cuti_id'];
    $tgl_pengisian_form = $_POST['tgl_pengisian_form'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $unit_kerja = $_POST['unit_kerja'];
    $nip = $_POST['nip'];
    $masa_kerja = $_POST['masa_kerja'];
    $jenis_cuti_id = $_POST['jenis_cuti_id'];
    $alasan_cuti = $_POST['alasan_cuti'];
    $catatan_cuti_id = $_POST['catatan_cuti_id'];
    $alamat_selama_cuti = $_POST['alamat_selama_cuti'];
    $perubahan = $_POST['perubahan'];
    $ditangguhkan = $_POST['ditangguhkan'];
    $ttd_dsn = $_POST['ttd_dsn'];
    $ttd_atasan = $_POST['ttd_atasan'];
    $awal_cuti = $_POST['awal_cuti'];
    $akhir_cuti = $_POST['akhir_cuti'];
    $status = $_POST['status'];
    $telepon = $_POST['telepon'];
    $keterangan = $_POST['keterangan'];
    $dosen_id = $_POST['dosen_id'];

    // Menambahkan data
    $koneksi->tambah_data($cuti_id, $tgl_pengisian_form, $nama, $jabatan, $unit_kerja, $nip, $masa_kerja, $jenis_cuti_id, $alasan_cuti, $catatan_cuti_id, $alamat_selama_cuti, $perubahan, $ditangguhkan, $ttd_dsn, $ttd_atasan, $awal_cuti, $akhir_cuti, $status, $telepon, $keterangan, $dosen_id);
    header('Location: tampil.php');
    exit();
}
elseif ($action == "update") {
    // Mengambil data dari POST request
    $cuti_id = $_POST['cuti_id'];
    $tgl_pengisian_form = $_POST['tgl_pengisian_form'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $unit_kerja = $_POST['unit_kerja'];
    $nip = $_POST['nip'];
    $masa_kerja = $_POST['masa_kerja'];
    $jenis_cuti_id = $_POST['jenis_cuti_id'];
    $alasan_cuti = $_POST['alasan_cuti'];
    $catatan_cuti_id = $_POST['catatan_cuti_id'];
    $alamat_selama_cuti = $_POST['alamat_selama_cuti'];
    $perubahan = $_POST['perubahan'];
    $ditangguhkan = $_POST['ditangguhkan'];
    $ttd_dsn = $_POST['ttd_dsn'];
    $ttd_atasan = $_POST['ttd_atasan'];
    $awal_cuti = $_POST['awal_cuti'];
    $akhir_cuti = $_POST['akhir_cuti'];
    $status = $_POST['status'];
    $telepon = $_POST['telepon'];
    $keterangan = $_POST['keterangan'];
    $dosen_id = $_POST['dosen_id'];

    // Memperbarui data
    $koneksi->update_data($cuti_id, $tgl_pengisian_form, $nama, $jabatan, $unit_kerja, $nip, $masa_kerja, $jenis_cuti_id, $alasan_cuti, $catatan_cuti_id, $alamat_selama_cuti, $perubahan, $ditangguhkan, $ttd_dsn, $ttd_atasan, $awal_cuti, $akhir_cuti, $status, $telepon, $keterangan, $dosen_id);
    header('Location: tampil.php');
    exit();
}
elseif ($action == "delete") {
    // Mengambil ID dari query string
    $cuti_id = $_GET['id'];

    // Menghapus data
    $koneksi->delete_data($cuti_id);
    header('Location: tampil.php');
    exit();
}
?>

<?php 
include('koneksi.php');
$koneksi = new database_cuti();
 
$id = $_GET['action'];
if($id == "add") 
{
	$koneksi->tambah_data($_POST['cuti_id'], $_POST['tgl_pengisian_form'],$_POST['nama'],$_POST['jabatan'],$_POST['unit_kerja'],$_POST['nip'],$_POST['masa_kerja'],$_POST['jenis_cuti_id'],$_POST['alasan_cuti'], $_POST['catatan_cuti_id'],$_POST['alamat_selama_cuti'],$_POST['perubahan'], $_POST['ditangguhkan'],$_POST['ttd_dsn'],$_POST['ttd_atasan'],$_POST['awal_cuti'],$_POST['akhir_cuti'], $_POST['status'], $_POST['telepon'], $_POST['keterangan'],$_POST['dosen_id']);
	header('location:tampil.php');
}
elseif($id=="update") 
{
	$koneksi->update_data($_POST['cuti_id'], $_POST['tgl_pengisian_form'],$_POST['nama'],$_POST['jabatan'],$_POST['unit_kerja'],$_POST['nip'],$_POST['masa_kerja'],$_POST['jenis_cuti_id'],$_POST['alasan_cuti'], $_POST['catatan_cuti_id'],$_POST['alamat_selama_cuti'],$_POST['perubahan'], $_POST['ditangguhkan'],$_POST['ttd_dsn'],$_POST['ttd_atasan'],$_POST['awal_cuti'],$_POST['akhir_cuti'], $_POST['status'], $_POST['telepon'], $_POST['keterangan'],$_POST['dosen_id']);
	header('location:tampil.php');
}
elseif($id=="delete") 
{
	$cuti_id = $_GET['id'];
	$koneksi->delete_data($cuti_id);
	header('location:tampil.php');
}
?>
