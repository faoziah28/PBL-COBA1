<?php
include('koneksi.php'); // Ganti dengan path yang sesuai jika berbeda

// Buat instance dari database_cuti
$db_cuti = new database_cuti();

// Ambil data dari tabel cuti_dosen
$data_cuti = $db_cuti->tampil_data();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Data Cuti dosen</h3>
		<hr/>
			<form method="post" action="simpan.php?action=add">
				<table>
				<table>
        <form action="simpan.php?action=add" method="post">
            <tr>
            <td>
            <label>Tanggal</label>
</td>
<td>
            <input type="date" value="<?php echo date('Y-m-d') ?>" readonly name="tgl">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nama</label>
</td>
<td>
            <input type="text" name="nama">
            </td>
            </tr>
            <tr>
            <td>
            <label>Jabatan</label>
</td>
<td>
            <input type="text" name="jabatan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Unit Kerja</label>
</td>
<td>
            <input type="text" name="unit_kerja">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nip</label>
</td>
<td>
            <input type="text" name="nip">
            </td>
            </tr>
            <tr>
            <td>
            <label>Masa Kerja</label>
</td>
<td>
            <input type="text" name="masa_kerja">
            </td>
            </tr>
            <tr>
            <td>
            <label for="jenis_cuti">Jenis Cuti:</label>
<select name="jenis_cuti_id" id="jenis_cuti">
    <option value="">Pilih</option>
    <?php foreach ($jenis_cuti as $jenis) {
        echo '<option value="' . $jenis['jenis_cuti_id'] . '">' . $jenis['nama_jenis_cuti'] . '</option>';
    } ?>
</select><br/>
            </td>
            </tr>
            <tr>
            <td>
            <label>Alasan Cuti</label>
</td>
<td>
            <textarea name="alasan_cuti"></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label for="catatan_cuti">Catatan Cuti:</label>
<select name="catatan_cuti_id" id="catatan_cuti">
    <option value="">Pilih</option>
    <?php foreach ($catatan_cuti as $catatan) {
        echo '<option value="' . $catatan['catatan_cuti_id'] . '">' . $catatan['deskripsi_catatan_cuti'] . '</option>';
    } ?>
</select><br/>

            </td>
            </tr>
            <tr>
            <td>
            <label>Alamat selama cuti</label>
</td>
<td>
            <textarea name="alamat_selama_cuti"></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Perubahan</label>
</td>
<td>
            <input type="text" name="perubahan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Ditangguhkan</label>
</td>
<td>
            <input type="text" name="ditangguhkan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Dosen</label>
</td>
<td>
            <input type="text" name="ttd_dsn">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Atasan</label>
</td>
<td>
            <input type="text" name="ttd_atasan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Awal Cuti</label>
</td>
<td>
            <input type="date" name="awal_cuti">
            </td>
            </tr>
            <tr>
            <td>
            <label>Akhir Cuti</label>
</td>
<td>
            <input type="date" name="akhir_cuti">
            </td>
            </tr>
            <tr>
            <td>
            <label>Status</label>
</td>
<td>
            <input type="text" name="status">
            </td>
            </tr>
            <tr>
            <td>
            <label>Telepon</label>
</td>
<td>
            <input type="text" name="telepon">
            </td>
            </tr>
            <tr>
            <td>
            <label>Keterangan</label>
</td>
<td>
            <input type="text" name="keterangan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Dosen</label>
</td>
<td>
            <select name="dosen_id" >
            <option selected>pilih</option>
            <option value="1">Dosen TI</option>
            <option value="2">Dosen Elektro</option>
            <option value="2">Dosen TPPL</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>
            <a href="index.php"><input type="button" value="kembali"></a>
            <button type="submit" name="submit">Submit</button>
</td>
            </tr>
        </form>
    </table>
</body>
</html>