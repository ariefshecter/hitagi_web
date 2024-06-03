<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";

// jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    // ambil data hasil submit dari form
    $nim            = mysqli_real_escape_string($db, trim($_POST['nim']));
    $nama_mahasiswa = mysqli_real_escape_string($db, trim($_POST['nama_mahasiswa']));
    $prodi          = mysqli_real_escape_string($db, trim($_POST['prodi']));
    $angkatan       = mysqli_real_escape_string($db, trim($_POST['angkatan']));

    // perintah query untuk menampilkan nim dari tabel siswa berdasarkan nim dari hasil submit form
    $query = mysqli_query($db, "SELECT nim FROM tbl_siswa2 WHERE nim='$nim'")
        or die('Ada kesalahan pada query tampil data nim: ' . mysqli_error($db));
    $rows = mysqli_num_rows($query);

    // jika nim sudah ada
    if ($rows > 0) {
        // tampilkan pesan gagal simpan data
        header("location: index.php?alert=4&nim=$nim");
    }
    // jika nim belum ada
    else {  
        // perintah query untuk menyimpan data ke tabel siswa
        $insert = mysqli_query($db, "INSERT INTO tbl_siswa2(nim, nama_mahasiswa, prodi, angkatan)
                                     VALUES('$nim', '$nama_mahasiswa', '$prodi', '$angkatan')")
            or die('Ada kesalahan pada query insert: ' . mysqli_error($db));

        // cek query
        if ($insert) {
            // jika berhasil tampilkan pesan berhasil simpan data
            header("location: index.php?alert=1");
        }
    }
}

// tutup koneksi
mysqli_close($db);   
?>
