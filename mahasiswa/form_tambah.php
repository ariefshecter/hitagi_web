	<div class="row">
        <div class="col-md-12">
			<div class="alert alert-info" role="alert">
  				<i class="fas fa-edit"></i> Input Data Mahasiswa
			</div>

			<div class="card">
			  	<div class="card-body">
			  		<!-- form tambah data siswa -->
			    	<form class="needs-validation" action="proses_simpan.php" method="post" enctype="multipart/form-data" novalidate>
					  	<div class="row">
					    	<div class="col">
					      		<div class="form-group col-md-12">
									<label>NIM</label>
									<input type="text" class="form-control" name="nim" maxlength="15" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required>
									<div class="invalid-feedback">NIM tidak boleh kosong.</div>
								</div>

								<div class="form-group col-md-12">
									<label>Nama Mahasiswa</label>
									<input type="text" class="form-control" name="nama_mahasiswa" autocomplete="off" required>
									<div class="invalid-feedback">Nama mahasiswa tidak boleh kosong.</div>
								</div>
	
								<div class="form-group col-md-12">
									<label>Prodi</label>
									<select class="form-control" name="prodi" autocomplete="off" required>
										<option value="" disabled selected>- Pilih Prodi -</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Sistem Informasi">Sistem Informasi</option>
										<option value="Teknik Elektro">Teknik Elektro</option>
										<option value="Statistika">Statistika</option>
									</select>
									<div class="invalid-feedback">Prodi tidak boleh kosong.</div>
								</div>								

								<div class="form-group col-md-12">
									<label>Angkatan</label>
									<select class="form-control" name="angkatan" autocomplete="off" required>
										<option value="" disabled selected>- Pilih Angkatan -</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
									</select>
									<div class="invalid-feedback">Angkaatn tidak boleh kosong.</div>
								</div>

					    	</div>
					  	</div>

					  	<div class="my-md-4 pt-md-1 border-top"> </div>

						<div class="form-group col-md-12 right">
			                <input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="index.php" class="btn btn-secondary btn-reset"> Batal </a>
				  		</div>
					</form>
			  	</div>
			</div>
        </div>
	</div>
