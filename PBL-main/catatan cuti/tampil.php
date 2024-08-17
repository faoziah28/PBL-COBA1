<?php 	
include('koneksi.php');
$db = new database_catatan();
$catatan = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="../index.html">halaman utama</a> <br>
    <a href="tambah.php">Tambah Catatan Cuti</a>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Catatan Cuti Id</th>
                    <th>Nama Catatan Cuti</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($catatan as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['catatan_cuti_id']; ?></td>
                        <td><?php echo $row['nama_catatan_cuti']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['catatan_cuti_id']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['catatan_cuti_id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>