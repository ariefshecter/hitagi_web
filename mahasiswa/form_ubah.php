<?php
// jika tombol ubah diklik
if (isset($_GET['nim'])) {
    // ambil data get dari form
    $nim = $_GET['nim'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan nim
    $query = mysqli_query($db, "SELECT * FROM tbl_siswa2 WHERE nim='$nim'") or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $nim            = $data['nim'];
    $nama_mahasiswa = $data['nama_mahasiswa'];
    $prodi          = $data['prodi'];
    $angkatan       = $data['angkatan'];
}
// tutup koneksi
mysqli_close($db);  
?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data Mahasiswa
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data siswa -->
                <form class="needs-validation" action="proses_ubah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>NIM</label>
                                <input type="text" class="form-control" name="nim" maxlength="5" 
                                       onKeyPress="return goodchars(event,'0123456789',this)" 
                                       autocomplete="off" value="<?php echo $nim; ?>" readonly required>
                                <div class="invalid-feedback">NIM tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mahasiswa" autocomplete="off" 
                                       value="<?php echo $nama_mahasiswa; ?>" required>
                                <div class="invalid-feedback">Nama mahasiswa tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Prodi</label>
                                <select class="form-control" name="prodi" autocomplete="off" required>
                                    <option value="Teknik Informatika" <?php if($prodi == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                                    <option value="Sistem Informasi" <?php if($prodi == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                                    <option value="Teknik Elektro" <?php if($prodi == 'Teknik Elektro') echo 'selected'; ?>>Teknik Elektro</option>
                                    <option value="Statistika" <?php if($prodi == 'Statistika') echo 'selected'; ?>>Statistika</option>
                                </select>
                                <div class="invalid-feedback">Prodi tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Angkatan</label>
                                <select class="form-control" name="angkatan" autocomplete="off" required>
                                    <option value="2016" <?php if($angkatan == '2016') echo 'selected'; ?>>2016</option>
                                    <option value="2017" <?php if($angkatan == '2017') echo 'selected'; ?>>2017</option>
                                    <option value="2018" <?php if($angkatan == '2018') echo 'selected'; ?>>2018</option>
                                    <option value="2019" <?php if($angkatan == '2019') echo 'selected'; ?>>2019</option>
                                    <option value="2020" <?php if($angkatan == '2020') echo 'selected'; ?>>2020</option>
                                    <option value="2021" <?php if($angkatan == '2021') echo 'selected'; ?>>2021</option>
                                    <option value="2022" <?php if($angkatan == '2022') echo 'selected'; ?>>2022</option>
                                    <option value="2023" <?php if($angkatan == '2023') echo 'selected'; ?>>2023</option>
                                    <option value="2024" <?php if($angkatan == '2024') echo 'selected'; ?>>2024</option>
                                </select>
                                <div class="invalid-feedback">Angkatan tidak boleh kosong.</div>
                            </div>
                        </div>
                    </div>

                    <div class="my-md-4 pt-md-1 border-top"></div>

                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="index.php" class="btn btn-secondary btn-reset">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
