<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";
// jika tombol hapus diklik
if (isset($_GET['nim'])) {
    // ambil data get dari form 
    $nim = $_GET['nim'];
    // perintah query untuk menampilkan data foto siswa berdasarkan nis
        $delete =mysqli_query($db, "DELETE FROM tbl_siswa2 WHERE nim='$nim'") 
                                    or die('Ada kesalahan pada query delete : '.mysqli_error($db));
        // cek hasil query
        if ($delete) {
            // jika berhasil tampilkan pesan berhasil delete data
            header("location: index.php?alert=3");
        }
    }
// tutup koneksi
mysqli_close($db);  
?>