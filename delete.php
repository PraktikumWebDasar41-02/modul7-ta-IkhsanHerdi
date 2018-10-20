<?php 
include('konek.php');
$nim = $_GET['NIM'];

mysqli_query($konek, "DELETE FROM mahasiswa WHERE NIM = $nim");

header('location:2.php');

 ?>