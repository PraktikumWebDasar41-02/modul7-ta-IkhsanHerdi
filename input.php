<h1>Form Pendaftaran Mahastudent</h1>

<form method="post">
	Nama : <input type="text" name="nama"><br><br>
	NIM : <input type="text" name="nim"><br><br>
	Tanggal Lahir : <input type="date" name="tgl"><br><br>
	Jenis Kelamin : <select name="jk">
		<option>--==Pilih==--</option>
		<option value="laki-laki">Laki-laki</option><br>
		<option value="perempuan">Perempuan</option>
	</select><br><br>

	Program Studi : <select name="pr">
		<option >--==Pilih==--</option>
		<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option><br>
		<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option><br>
		<option value="D3 Informatika">D3 Informatika</option><br>
		<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
	</select><br><br>

	Fakultas : <input type="radio" name="fakultas" value="FIT">FIT 
			   <input type="radio" name="fakultas" value="FKB">FKB 
			   <input type="radio" name="fakultas" value="FEB">FEB 
			   <input type="radio" name="fakultas" value="FIK">FIK
	<br><br>

	Asal : <input type="text" name="asal"><br>

	Moto Hidup : <textarea name="moto"></textarea><br><br>

	<input type="submit" name="submit" value="send">


</form>

<?php 

if (isset($_POST['submit'])) {
	include('konek.php');

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$pr = $_POST['pr'];
	$fk = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

	$que = "INSERT INTO mahasiswa (Nama, NIM, Tanggal_Lahir, Jenis_kelamin, Program_Studi, Fakultas, Asal, Moto_Hidup) VALUES ('$nama', '$nim', '$tgl', '$jk', '$pr', '$fk', '$asal', '$moto')" ;

	$query = mysqli_query($konek, $que);

	if ($nim ==0 || str_word_count($nim)>=1) {
		echo "Inputkan NIM dan Harus Angka";
	}else{
		header('location:2.php');
	}


}

 ?>