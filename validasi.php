<?php  
	session_start();
	include "koneksi.php";

	$user=$_POST['inputuser'];
	$pass=md5($_POST['inputpass']);

	$sql = " SELECT u.*, l.*
			FROM user u, level l
			WHERE l.id_level = u.id_level
			AND username =  '$user'
			AND password =  '$pass'";
	
	$hasil = mysql_query($sql);

	$jumbaris = mysql_num_rows($hasil);
	if($jumbaris == 1){		
		$data = mysql_fetch_array($hasil);

		// session_register("NamaLengkap");
		// session_register("Level");
		// session_register("idLevel");
		// session_register("idUser");
		// session_register("username");

		$_SESSION['NamaLengkap']=$data['nama_lengkap'];
		$_SESSION['Level']=$data['nama_level'];
		$_SESSION['idLevel']=$data['id_level'];
		$_SESSION['idUser']=$data['id_user'];
		$_SESSION['username']=$data['username'];

		if($_SESSION['idLevel']=='1'){
			header("location:halaman1.php");
		}elseif($_SESSION['idLevel']=='2'){
			header("location:halaman2.php");
		}elseif($_SESSION['idLevel']=='3'){
			header("location:halaman3.php");
		}elseif($_SESSION['idLevel']=='4'){
			header("location:halaman4.php");
		}elseif($_SESSION['idLevel']=='5'){
			header("location:halaman5.php");
		}

	}else{
		echo "
			<link rel=\"stylesheet\" href=\"style.css\">
			<div id='wrapper2'><h1>Login Tidak Berhasil</h1><br><br><a href='index.php'>Login Lagi Brow...</a></div>";		
	}



?>