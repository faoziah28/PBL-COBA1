<?php 
class database_cuti {
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
        $hasil = []; // Inisialisasi variabel hasil
        $data = mysqli_query($this->koneksi, "SELECT * FROM cuti_dosen");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($cuti_id, $tgl_pengisian_form, $nama, $jabatan, $unit_kerja, $nip, $masa_kerja, $jenis_cuti_id, $alasan_cuti, $catatan_cuti_id, $alamat_selama_cuti, $perubahan, $ditangguhkan, $ttd_dsn, $ttd_atasan, $awal_cuti, $akhir_cuti, $status, $telepon, $keterangan, $dosen_id) {
        mysqli_query($this->koneksi, "INSERT INTO cuti_dosen 
            VALUES ('$cuti_id', '$tgl_pengisian_form', '$nama', '$jabatan', '$unit_kerja', '$nip', '$masa_kerja', '$jenis_cuti_id', '$alasan_cuti', '$catatan_cuti_id', '$alamat_selama_cuti', '$perubahan', '$ditangguhkan', '$ttd_dsn', '$ttd_atasan', '$awal_cuti', '$akhir_cuti', '$status', '$telepon', '$keterangan', '$dosen_id')");
    }

    function get_by_id($cuti_id) {
        $query = mysqli_query($this->koneksi, "SELECT * FROM cuti_dosen WHERE cuti_id='$cuti_id'");
        return $query->fetch_array();
    }

    function update_data(
        $cuti_id,
        $tgl_pengisian_form,
        $nama,
        $jabatan,
        $unit_kerja,
        $nip,
        $masa_kerja,
        $jenis_cuti_id, 
        $alasan_cuti, 
        $catatan_cuti_id, 
        $alamat_selama_cuti, 
        $perubahan, 
        $ditangguhkan, 
        $ttd_dsn,
        $ttd_atasan, 
        $awal_cuti, 
        $akhir_cuti, 
        $status, 
        $telepon, 
        $keterangan, 
        $dosen_id
    ) {
        $query = mysqli_query(
            $this->koneksi,
            "UPDATE cuti_dosen SET 
                tgl_pengisian_form='$tgl_pengisian_form',
                nama='$nama',
                jabatan='$jabatan',
                unit_kerja='$unit_kerja',
                nip='$nip', 
                masa_kerja='$masa_kerja',
                jenis_cuti_id='$jenis_cuti_id',
                alasan_cuti='$alasan_cuti',
                catatan_cuti_id='$catatan_cuti_id',
                alamat_selama_cuti='$alamat_selama_cuti',
                perubahan='$perubahan',
                ditangguhkan='$ditangguhkan',
                ttd_dsn='$ttd_dsn',
                ttd_atasan='$ttd_atasan',
                awal_cuti='$awal_cuti',
                akhir_cuti='$akhir_cuti',
                status ='$status',
                telepon='$telepon',
                keterangan='$keterangan',
                dosen_id='$dosen_id'
            WHERE cuti_id='$cuti_id'"
        );
    }

    function delete_data($cuti_id) {
        $query = mysqli_query($this->koneksi, "DELETE FROM cuti_dosen WHERE cuti_id='$cuti_id'");
    }
}
?>
