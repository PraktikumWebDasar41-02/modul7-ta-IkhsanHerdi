<br><br><br>
<center><h2><a href="input.php">==> Input Data <==</a></h2></center>
<br><br>
<form method="post" align="center">
	<input type="text" name="search" placeholder="Masukan Sesuai NIM"><input type="submit" name="submit" value="cari">
</form>


<?php 
include('konek.php');
$query;

if (isset($_POST['submit'])) {
	$search = $_POST['search'];

	$view = "SELECT * FROM mahasiswa WHERE NIM = '$search'";
	$query = mysqli_query($konek, $view);

}else{
	$view = "SELECT * FROM mahasiswa";
$query = mysqli_query($konek, $view);

}


echo "<table border='1' align='center' cellspacing='3'>";
	foreach ($query as $key) {
		echo "<tr>";
			echo "<td>".$key['NIM']."</td>";
			echo "<td>".$key['Nama']."</td>";
			echo "<td>".$key['Program_Studi']."</td>";
			if (isset($_POST['submit'])) {
			echo "<td>".$key['Tanggal_Lahir']."</td>";
			echo "<td>".$key['Jenis_kelamin']."</td>";
			echo "<td>".$key['Fakultas']."</td>";
			echo "<td>".$key['Asal']."</td>";
			echo "<td>".$key['Moto_Hidup']."</td>";
			}

			echo "<td>"."<a href='delete.php?NIM=".$key['NIM']."'>"."Hapus</a>"."</td>";
			echo "<td>"."<a href='edit.php?NIM=".$key['NIM']."'>Edit</a></td>";

		echo "</tr>";
	}
echo "</table>";

if (isset($_POST['submit'])) {
		echo "<center><a href='2.php'>Back</a></center>";
	}


 ?>

