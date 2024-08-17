<?php 	
include('koneksi.php');
$db = new database_catatan();
$catatan_cuti_id = $_GET['id'];

if (!is_null($catatan_cuti_id)) {
    $catatan = $db->get_by_id($catatan_cuti_id);
} else {
    header('location:tampil.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Data Catatan Cuti</title>
</head>
<body>
    <h3>Update Data Catatan Cuti</h3>
    <hr/>
    <form method="post" action="simpan.php?action=update">
        <input type="hidden" name="catatan_cuti_id" value="<?php echo $catatan['catatan_cuti_id']; ?>"/>
        <table>
            <tr>
                <td>Nama Catatan Cuti</td>
                <td>:</td>
                <td><input type="text" name="nama_catatan_cuti" value="<?php echo $catatan['nama_catatan_cuti']; ?>"/></td>
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
