

<?php 
	
	error_reporting(0);
	session_start();

	include "../koneksi.php";

	$dok = mysql_query("SELECT * FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'");
	$datadok = mysql_fetch_array($dok);
	$d = "../files_pri/";	
	$path = $d.$datadok['nama_asli_dokpri'];
	if (file_exists($path)) {
		unlink($path);
		$del = mysql_query("DELETE FROM dokumen_pribadi WHERE dokumen_pribadi.iddok_pribadi = '$_GET[iddok]'");
		if($del){
			//echo "berhasil";
			header("location:../halaman1.php?menu=dokpri&s=deloke");
		}else{
			echo "gagal<br>".mysql_error();
		}
	}else{
		echo "file hilang :(";
	}


?>