<?php 
include('koneksi.php'); // Koneksi ke database
$db = new database_cuti(); // Instansiasi kelas database_cuti
$cuti_id = $_GET['id']; // Ambil id dari query string

if (!is_null($cuti_id)) {
    $cuti = $db->get_by_id($cuti_id); // Ambil data cuti berdasarkan id
} else {
    header('Location: tampil.php'); // Redirect jika id tidak ada
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Data Cuti</title>
</head>
<body>
    <h3>Update Data Cuti</h3>
    <hr/>
    <form method="post" action="simpan.php?action=update">
        <input type="hidden" name="cuti_id" value="<?php echo $cuti['cuti_id']; ?>"/>
        <table>
            <tr>
                <td>Tanggal Pengisian Form</td>
                <td>:</td>
                <td><input type="date" name="tgl_pengisian_form" value="<?php echo $cuti['tgl_pengisian_form']; ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $cuti['nama']; ?>"/></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" value="<?php echo $cuti['jabatan']; ?>"/></td>
            </tr>
            <tr>
                <td>Unit Kerja</td>
                <td>:</td>
                <td><input type="text" name="unit_kerja" value="<?php echo $cuti['unit_kerja']; ?>"/></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" value="<?php echo $cuti['nip']; ?>"/></td>
            </tr>
            <tr>
                <td>Masa Kerja</td>
                <td>:</td>
                <td><input type="text" name="masa_kerja" value="<?php echo $cuti['masa_kerja']; ?>"/></td>
            </tr>
            <tr>
                <td>Jenis Cuti</td>
                <td>:</td>
                <td><input type="text" name="jenis_cuti_id" value="<?php echo $cuti['jenis_cuti_id']; ?>"/></td>
            </tr>
            <tr>
                <td>Alasan Cuti</td>
                <td>:</td>
                <td><input type="text" name="alasan_cuti" value="<?php echo $cuti['alasan_cuti']; ?>"/></td>
            </tr>
            <tr>
                <td>Catatan Cuti</td>
                <td>:</td>
                <td><input type="text" name="catatan_cuti_id" value="<?php echo $cuti['catatan_cuti_id']; ?>"/></td>
            </tr>
            <tr>
                <td>Alamat Selama Cuti</td>
                <td>:</td>
                <td><input type="text" name="alamat_selama_cuti" value="<?php echo $cuti['alamat_selama_cuti']; ?>"/></td>
            </tr>
            <tr>
                <td>Perubahan</td>
                <td>:</td>
                <td><input type="text" name="perubahan" value="<?php echo $cuti['perubahan']; ?>"/></td>
            </tr>
            <tr>
                <td>Ditangguhkan</td>
                <td>:</td>
                <td><input type="text" name="ditangguhkan" value="<?php echo $cuti['ditangguhkan']; ?>"/></td>
            </tr>
            <tr>
                <td>TTD Dosen</td>
                <td>:</td>
                <td><input type="text" name="ttd_dsn" value="<?php echo $cuti['ttd_dsn']; ?>"/></td>
            </tr>
            <tr>
                <td>TTD Atasan</td>
                <td>:</td>
                <td><input type="text" name="ttd_atasan" value="<?php echo $cuti['ttd_atasan']; ?>"/></td>
            </tr>
            <tr>
                <td>Awal Cuti</td>
                <td>:</td>
                <td><input type="date" name="awal_cuti" value="<?php echo $cuti['awal_cuti']; ?>"/></td>
            </tr>
            <tr>
                <td>Akhir Cuti</td>
                <td>:</td>
                <td><input type="date" name="akhir_cuti" value="<?php echo $cuti['akhir_cuti']; ?>"/></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" name="status" value="<?php echo $cuti['status']; ?>"/></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telepon" value="<?php echo $cuti['telepon']; ?>"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="keterangan" value="<?php echo $cuti['keterangan']; ?>"/></td>
            </tr>
            <tr>
                <td>Dosen</td>
                <td>:</td>
                <td><input type="text" name="dosen_id" value="<?php echo $cuti['dosen_id']; ?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Update"/></td>
            </tr>
        </table>
    </form>
</body>
</html>
