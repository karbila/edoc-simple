<?php
	
	//2012-10-14 menjadi 14 Oktober 2012 12.00
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;
	}	
	
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			}
	function getTipe($tipe){
		switch ($tipe) {		
			case "image/gif":
				return "gif";
				break;
			case "image/jpeg":
				return "jpg/jpeg";
				break;			
			case "image/png":
				return "png";
				break;
			case "text/plain":
				return "txt";
				break;
			case "application/pdf":
				return "pdf";
				break;
			case "application/octet-stream":
				return "flv*";
				break;
			case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
				return "xlsx";
				break;
			case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
				return "docx";
				break;
			case "application/vnd.openxmlformats-officedocument.presentationml.presentation":
				return "pptx";
				break;
			case "application/msword":
				return "doc";
				break;			
			case "application/vnd.ms-excel":
				return "xls";
				break;
			case "application/vnd.ms-powerpoint":
				return "ppt";
				break;
			case "audio/mp3":
				return "mp3";
				break;
			case "video/mp4":
				return "mp4";
				break;
			case "application/vnd.openxmlformats-officedocument":
				return "docx | xlsx | pptx";
				break;
			default:
				return $tipe;
				break;			

		}
	} 
	
?>
