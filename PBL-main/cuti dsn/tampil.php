<?php
include 'koneksi.php';
$db = new database_cuti();
$cuti = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Cuti Dosen</title>
</head>
<body>
    <a href="tambah.php">Tambah Cuti</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Cuti id</th>
            <th>Tanggal Pengisian Form</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>NIP</th>
            <th>Masa Kerja</th>
            <th>Jenis Cuti</th>
            <th>Alasan Cuti</th>
            <th>Catatan Cuti</th>
            <th>Alamat Selama Cuti</th>
            <th>Perubahan</th>
            <th>Ditangguhkan</th>
            <th>TTD Dosen</th>
            <th>TTD Atasan</th>
            <th>Awal Cuti</th>
            <th>Akhir Cuti</th>
            <th>Status</th>
            <th>Telepon</th>
            <th>Keterangan</th>
            <th>Dosen</th>
            <th>Aksi</th>
        </tr>
        <?php 
                $no = 1;
                foreach($cuti as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['cuti_id']; ?></td>
                        <td><?php echo $row['tgl_pengisian_form']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['masa_kerja']; ?></td>
                        <td><?php echo $row['jenis_cuti_id']; ?></td>
                        <td><?php echo $row['alasan_cuti']; ?></td>
                        <td><?php echo $row['catatan_cuti_id']; ?></td>
                        <td><?php echo $row['alamat_selama_cuti']; ?></td>
                        <td><?php echo $row['perubahan']; ?></td>
                        <td><?php echo $row['ditangguhkan']; ?></td>
                        <td><?php echo $row['ttd_dsn']; ?></td>
                        <td><?php echo $row['ttd_atasan']; ?></td>
                        <td><?php echo $row['awal_cuti']; ?></td>
                        <td><?php echo $row['akhir_cuti']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['telepon']; ?></td>
                        <td><?php echo $row['keterangan']; ?></td>
                        <td><?php echo $row['dosen_id']; ?></td>
                      
                        <td>
                            <a href="edit.php?id=<?php echo $row['cuti_id']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['cuti_id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>