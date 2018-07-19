<?php  
	error_reporting(0);
	session_start();

	include "../koneksi.php";
			
	if($_GET['menu']='dokpri' && $_GET['aksi']=='upload'){
		$namafile1 = $_FILES['fupload_dokPri']['name'];
		$tipe_file = $_FILES['fupload_dokPri']['type'];
		$ukuranfile = $_FILES['fupload_dokPri']['size'];
		$lokasi_file = $_FILES['fupload_dokPri']['tmp_name'];
		$tgl_up = date("Y-m-d");
		$tgl_edit = date ("Y-m-d");
		$user = $_SESSION['idUser'];

		$ext = pathinfo($path, PATHINFO_EXTENSION);

		//fungsi acak nama dok		
		$nama_dokAcak = $_SESSION['username']."_".$namafile1;

		$path = "../files_pri/";
		$path1 = $path.$nama_dokAcak;		

		echo "-->".$ext;
		
		if($tipe_file!="image/gif" && 
			$tipe_file!="image/jpeg" && 
			$tipe_file!="image/pjpeg" && 
			$tipe_file!="image/png" && 
			$tipe_file!="text/plain" && 
			$tipe_file!="application/pdf" && 
			$tipe_file!="application/octet-stream" && 
			$tipe_file!="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" && 
			$tipe_file!="application/vnd.openxmlformats-officedocument.wordprocessingml.document" && 
			$tipe_file!="application/vnd.openxmlformats-officedocument.presentationml.presentation" && 
			$tipe_file!="application/msword" && 
			$tipe_file!="application/vnd.openxmlformats-officedocument" && 
			$tipe_file!="application/vnd.ms-excel" && 
			$tipe_file!="application/octet-stream" && 
			$tipe_file!="application/vnd.ms-powerpoint" & 
			$tipe_file!="audio/mp3" && 
			$tipe_file!="video/mp4"
			&&
			$tipe_file!="video/3gpp" && 
			$tipe_file!="video/avi" && 
			$tipe_file!="video/quicktime" && 
			$tipe_file!="video/mpeg" && 
			$tipe_file!="audio/x-ms-wma" && 
			$tipe_file!="video/x-ms-wmv"
			){
			echo "tipe salah<br>::$tipe_file<br>";

		}elseif(move_uploaded_file($lokasi_file, "$path1")){
			$namafile2 = str_replace(array("/", "\\", ":", "*", "?", '"', "<", ">", "|", " "), "_", $nama_dokAcak);	
			
			$path2 = $path.$namafile2;
			
			rename($path1, $path2);

			$file = "INSERT INTO dokumen_pribadi (iddok_pribadi, nama_asli_dokpri, tanggal_upload, tanggal_perbarui, ukuran_file, tipe_file, id_user) VALUES ('', '$namafile2', '$tgl_up', '$tgl_edit', '$ukuranfile', '$tipe_file', '$user')";

			//echo "$file";
			if(mysql_query($file)){
				//echo "berhasil<br><a href='../halaman1.php'><<-Home</a>";
				header("location:../halaman1.php?menu=dokpri&s=okeup");
			}else{
				echo "gagal<br>".mysql_error();
			}

		}
		


	}elseif($_GET['menu']='dokpu' && $_GET['aksi']=='upload'){
		echo "Maaf, Belum dibuat... :(";
	}


?>