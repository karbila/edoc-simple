<?php
	error_reporting(0);
	session_start();
	include "../koneksi.php";

	$dok = mysql_query("SELECT * FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'");
	$datadok = mysql_fetch_array($dok);	
	
	$direktori = "../files_pri/"; 
	
	$filename = "$datadok[nama_asli_dokpri]";

	if(file_exists($direktori.$filename)){
	
		//cara untuk supaya langsung deteksi plugin downloader browser tanpa melihatnya..
		$file_extension = strtolower(substr(strrchr($filename,"."),1));

		switch($file_extension){
		  case "pdf": $ctype="application/pdf"; break;
		  case "exe": $ctype="application/octet-stream"; break;
		  case "zip": $ctype="application/zip"; break;
		  case "rar": $ctype="application/rar"; break;
		  case "doc": $ctype="application/msword"; break;
		  case "xls": $ctype="application/vnd.ms-excel"; break;
		  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
		  case "docx" : $ctype="application/vnd.openxmlformats-officedocument"; break;
		  case "pptx" : $ctype="application/vnd.openxmlformats-officedocument"; break;
		  case "xlsx" : $ctype="application/vnd.openxmlformats-officedocument"; break;
		  case "gif": $ctype="image/gif"; break;
		  case "png": $ctype="image/png"; break;
		  case "jpeg":
		  case "jpg": $ctype="image/jpg"; break;
		  default: $ctype="application/proses";
		}

		if ($file_extension=='php'){
		  echo "<h1>Access forbidden!</h1>
				<p>Maaf, file yang Anda download sudah tidak tersedia atau filenya (direktorinya) telah diproteksi. <br />
				Silahkan hubungi Administrator Sistem.</p>";
		  exit;
		}
		else{		  
		  header("Content-Type: octet/stream");
		  header("Pragma: private"); 
		  header("Expires: 0");
		  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		  header("Cache-Control: private",false); 
		  header("Content-Type: $ctype");
		  header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
		  header("Content-Transfer-Encoding: binary");
		  header("Content-Length: ".filesize($direktori.$filename));
		  
		  readfile("$direktori$filename");
		  
		  exit();   
		}
	}else{	  
		echo "file hilang...<br>$direktori$filename";
		//header('location:../../../client/manajemen-dok.php?mode=md_publik&p=dokpu&s=no&m=dokumenhilang');
		exit;
	}

?>

