<?php 	
include('koneksi.php');
$db = new database_jenis();
$jenis_cuti_id = $_GET['id'];

if (!is_null($jenis_cuti_id)) {
    $jenis = $db->get_by_id($jenis_cuti_id);
} else {
    header('location:tampil.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Data Jenis Cuti</title>
</head>
<body>
    <h3>Update Data Jenis Cuti</h3>
    <hr/>
    <form method="post" action="simpan.php?action=update">
        <input type="hidden" name="jenis_cuti_id" value="<?php echo $jenis['jenis_cuti_id']; ?>"/>
        <table>
            <tr>
                <td>Jenis Cuti</td>
                <td>:</td>
                <td><input type="text" name="jenis_cuti" value="<?php echo $jenis ['jenis_cuti']; ?>"/></td>
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
