<?php 	
include('koneksi.php');
$db = new database_jenis();
$jenis = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="../index.html">halaman utama</a> <br>
    <a href="tambah.php">Tambah Jenis Cuti</a>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>jenis Cuti Id</th>
                    <th>jenis Cuti</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($jenis as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['jenis_cuti_id']; ?></td>
                        <td><?php echo $row['jenis_cuti']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['jenis_cuti_id']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['jenis_cuti_id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>