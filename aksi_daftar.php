<link rel="stylesheet" href="style.css">
<?php  
	include "koneksi.php";

	$nl = $_POST['inputnama'];
	$iu = $_POST['inputuser'];
	$ps = md5($_POST['inputpass']);
	$le = $_POST['level'];

	$query = "INSERT INTO latihan.user (nama_lengkap, username, password, id_level) VALUES ('$nl', '$iu', '$ps', '$le')";
	$hasil = mysql_query($query);
	if($hasil==true){
		echo "<div id='wrapper3'><h1>Daftar Berhasil</h1><br><a href='index.php'>Silahkan Login dengan Username dan Password Anda</a></div>";
	}else{
		echo "<div id='wrapper2'>
			Daftar Gagal
		</div>";
	}
?>