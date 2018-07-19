

<?php  
	error_reporting(0);
	session_start();
	include "../koneksi.php";		
	if($_GET['menu']='dokpri' && $_GET['aksi']=='upload'){

		$iddoklama = $_POST['iddoklama'];

		//cari dokumen lama
		$data = mysql_fetch_array(mysql_query("SELECT * FROM dokumen_pribadi WHERE iddok_pribadi = '$iddoklama'"));		
		$nmlm = $data['nama_asli_dokpri'];


		$namafile1 = $_FILES['fupload_dokPri']['name'];
		$tipe_file = $_FILES['fupload_dokPri']['type'];
		$ukuranfile = $_FILES['fupload_dokPri']['size'];
		$lokasi_file = $_FILES['fupload_dokPri']['tmp_name'];		
		$tgl_edit = date ("Y-m-d");
		$user = $_SESSION['idUser'];
		//fungsi acak nama dok		
		$nama_dokAcak = $_SESSION['username']."_".$namafile1;
		

		$path = "../files_pri/";

		$pathlama = $path.$nmlm;


		$path1 = $path.$nama_dokAcak;

		if(file_exists($pathlama)){
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
				$tipe_file!="application/vnd.ms-powerpoint" &&
				$tipe_file!="audio/mp3" && $tipe_file!="video/mp4"){
				
				echo "tipe salah<br>::$tipe_file";

			
			}elseif(move_uploaded_file($lokasi_file, "$path1")){
				//delete file lama
				unlink($pathlama);

				$namafile2 = str_replace(array("/", "\\", ":", "*", "?", '"', "<", ">", "|", " "), "_", $nama_dokAcak);	
				$path2 = $path.$namafile2;
				rename($path1, $path2);


				$file = "UPDATE  dokumen_pribadi SET  nama_asli_dokpri =  '$namafile2',
						tanggal_perbarui =  '$tgl_edit',
						ukuran_file =  '$ukuranfile',
						tipe_file =  '$tipe_file' WHERE  dokumen_pribadi.iddok_pribadi ='$iddoklama'";

				//echo "$file";
				
				if(mysql_query($file)){
					//echo "berhasil<br><a href='../halaman1.php'><<-Home</a>";
					header("location:../halaman1.php?menu=dokpri&s=okeedit");
				}else{
					echo "gagal<br>".mysql_error();
				}

			}

		}else{
			echo "file tidak ditemukan";
		}
		


	}elseif($_GET['menu']='dokpu' && $_GET['aksi']=='upload'){
		echo "Maaf, Belum dibuat... :(";
	}


?>