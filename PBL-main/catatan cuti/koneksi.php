<?php 
class database_catatan {
 
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "persuratan_dosen";
    var $koneksi = "";

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }

    function tampil_data() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM detail_catatan_cuti");
        $hasil = [];
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nama_catatan_cuti) {
        $query = "INSERT INTO detail_catatan_cuti (nama_catatan_cuti) VALUES ('$nama_catatan_cuti')";
        mysqli_query($this->koneksi, $query) or die(mysqli_error($this->koneksi));
    }

    function get_by_id($catatan_cuti_id) {
        $query = mysqli_query($this->koneksi, "SELECT * FROM detail_catatan_cuti WHERE catatan_cuti_id='$catatan_cuti_id'");
        return mysqli_fetch_array($query);
    }

    function update_data($catatan_cuti_id, $nama_catatan_cuti) {
        $query = "UPDATE detail_catatan_cuti SET nama_catatan_cuti='$nama_catatan_cuti' WHERE catatan_cuti_id='$catatan_cuti_id'";
        if (mysqli_query($this->koneksi, $query)) {
            return true; // Return true jika update berhasil
        } else {
            return false; // Return false jika update gagal
        }
    }

    function delete_data($catatan_cuti_id) {
        $query = "DELETE FROM detail_catatan_cuti WHERE catatan_cuti_id='$catatan_cuti_id'";
        mysqli_query($this->koneksi, $query) or die(mysqli_error($this->koneksi));
    }
}
?>
