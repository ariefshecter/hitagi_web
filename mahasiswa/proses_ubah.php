<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";

// jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    if (isset($_POST['nim'])) {
        // ambil data hasil submit dari form
        $nim            = mysqli_real_escape_string($db, trim($_POST['nim']));
        $nama_mahasiswa = mysqli_real_escape_string($db, trim($_POST['nama_mahasiswa']));
        $prodi          = mysqli_real_escape_string($db, trim($_POST['prodi']));
        $angkatan       = mysqli_real_escape_string($db, trim($_POST['angkatan']));

        // perintah query untuk mengubah data pada tabel siswa
        $update = mysqli_query($db, "UPDATE tbl_siswa2 SET nama_mahasiswa = '$nama_mahasiswa',
                                                          prodi          = '$prodi',
                                                          angkatan       = '$angkatan'
                                                   WHERE nim             = '$nim'")
            or die('Ada kesalahan pada query update: ' . mysqli_error($db));

        // cek query
        if ($update) {
            // jika berhasil tampilkan pesan berhasil ubah data
            header("location: index.php?alert=2");
        }
    }
}

// tutup koneksi
mysqli_close($db);
?>
