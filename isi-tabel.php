<?php  
	
	if($_GET['menu']=='dokpri'){
		//echo "dokpri";
		switch ($_GET['p']) {
			case 'tambah':
				include "modul_upload/upload.php";
				break;
			case 'edit':
				include "modul_perbarui/upload_ulang.php";
				break;			
			default:
			echo "<div class=\"alert-info\" style='margin: 5px;'>
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					  <strong>Informasi</strong> Tipe File yang bisa dipreview hanya berekstensi: .mp3, .flv, .mp4, .pdf, .txt, .png, .gif, dan .jpeg/.jpg
					</div>	";	
				echo "<div class='tombol'><a class='btn btn-inverse' href='?menu=dokpri&p=tambah'><i class='icon-upload icon-white'></i> Upload File</a></div>";
				echo "<div class='box-tabel'>
					<table class='tables table-striped table-bordered dTableR' id=\"dt_a\">
						<thead>
							<tr><th>No.</th><th>Nama File</th><th>Tanggal Upload</th><th>Tanggal Edit</th><th>Tipe File</th><th>Ukuran</th><th width='12%'>Aksi</th></tr>
						</thead><tbody>";
							$g = mysql_query("SELECT dp.* FROM dokumen_pribadi dp, user u WHERE u.id_user=dp.id_user AND u.id_user='$_SESSION[idUser]' ORDER BY dp.tanggal_upload DESC");
							$n=1;
							while ($d = mysql_fetch_array($g)) {
								$t1 = tgl_indo($d['tanggal_upload']);
								$t2 = tgl_indo($d['tanggal_perbarui']);
								$t3 = bytesToSize($d['ukuran_file']);
								$t4 = getTipe($d['tipe_file']);
								echo "<tr>
									<td>$n</td>";									

									//potong karakter...
									$jumlahkardok = strlen($d['nama_asli_dokpri']);
									if($jumlahkardok > 25){
										$tampil_nama_dok = substr($d['nama_asli_dokpri'],0,27);
										$dokfull = $tampil_nama_dok."...";
										echo "<td>$dokfull</td>";
									}elseif($jumlahkardok < 10){
										echo "<td>$d[nama_asli_dokpri]</td>";
									}elseif($jumlahkardok <=25 && $jumlahkardok >=10){				
										echo "<td>$d[nama_asli_dokpri]</td>";
									}

									echo "<td>$t1</td>
									<td>$t2</td>
									<td>$t4</td>
									<td>$t3</td>

									<td>

									<div class='btn-group'>
									  <button class='btn btn-inverse'>Aksi</button>
									  <button class='btn btn-inverse dropdown-toggle' data-toggle='dropdown'>
									    <span class='caret'></span>
									  </button>
									  <ul class='dropdown-menu'>
									  	<li><a href='?menu=dokpri&p=edit&iddok=$d[iddok_pribadi]'><i class='icon-edit'></i> Perbarui</a></li>
									  	<li><a href='modul_download/download.php?menu=dokpri&p=download&iddok=$d[iddok_pribadi]'><i class='icon-download'></i> Unduh</a></li>
									  	<li><a href='modul_view/view.php?menu=dokpri&p=view&iddok=$d[iddok_pribadi]' target='_blank'><i class='icon-eye-open'></i> Lihat</a></li>
									  	<li><a href='modul_hapus/aksi_hapus.php?menu=dokpri&p=delete&iddok=$d[iddok_pribadi]'><i class='icon-remove'></i> Hapus</a></li>
									  </ul>
									</div>

									</td>
								</tr>";
							$n++;
							}
						echo "</tbody>
					</table>
				</div>";
				break;
		}
	}elseif($_GET['menu']=='dokpu'){
		echo ":)";
	}elseif(!isset($_GET['menu'])){
		echo "<div class='area-depan'>Klik Menu Dokumen Pribadi untuk memanajemen Dokumen Pribadi<br>Untuk Dokumen Publik tinggal Anda coba sendiri ya... Caranya sama dengan tiap skrip di Dokumen Pribadi, hanya perbedaannya pada lokasi penyimpanan</div>";
	}

//onclick=\"confirm('Apakah Anda ingin mendownload File $d[nama_asli_dokpri]')\"

?>
