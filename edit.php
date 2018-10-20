<?php 
include('konek.php');

if (isset($_POST['submit'])) {
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$pr = $_POST['pr'];
	$fk = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

	$hf = "UPDATE mahasiswa SET Nama='$nama', Tanggal_Lahir='$tgl', Jenis_kelamin='$jk', Program_Studi='$pr', Fakultas='$fk', Asal='$asal', Moto_Hidup='$moto' WHERE NIM = '$nim'";
	$wuw = mysqli_query($konek, $hf);

	if ($wuw) {
		header('location:2.php');
	}else{
		echo "Gagal Edit";
	}


}

$op = $_GET['NIM'];
	$que = "SELECT * FROM mahasiswa WHERE NIM = '$op'";

	$query = mysqli_query($konek, $que);
	$ft = mysqli_fetch_array($query);

	//print_r($ft);

 ?>


<form method="post">
	Nama : <input type="text" name="nama" value="<?php echo $ft['Nama']; ?>"><br><br>
	NIM : <input type="text" name="nim" value="<?php echo $ft['NIM']; ?>"><br><br>
	Tanggal Lahir : <input type="date" name="tgl" value="<?php echo $ft['2']; ?>"><br><br>
	Jenis Kelamin : <select name="jk" >
		<option><?php echo $ft['Jenis_kelamin']; ?></option>
		<option value="laki-laki">Laki-laki</option><br>
		<option value="perempuan">Perempuan</option>
	</select><br><br>

	Program Studi : <select name="pr">
		<option ><?php echo $ft['4']; ?></option>
		<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option><br>
		<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option><br>
		<option value="D3 Informatika">D3 Informatika</option><br>
		<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
	</select><br><br>
	Fakultas : <input type="radio" name="fakultas" value="FIT" <?php if ($ft['Fakultas']=="FIT") {
		echo "checked";
	} ?>>FIT 
			   <input type="radio" name="fakultas" value="FKB" <?php if ($ft['Fakultas']=="FKB") {
		echo "checked";
	} ?>>FKB 
			   <input type="radio" name="fakultas" value="FEB" <?php if ($ft['Fakultas']=="FEB") {
		echo "checked";
	} ?>>FEB 
			   <input type="radio" name="fakultas" value="FIK" <?php if ($ft['Fakultas']=="FIK") {
		echo "checked";
	} ?>>FIK
	<br><br>

	Asal : <input type="text" name="asal" value="<?php echo $ft['Asal']; ?>"><br>

	Moto Hidup : <textarea name="moto"><?php echo $ft['7']; ?></textarea><br><br>

	<input type="submit" name="submit" value="Edit">


</form>
