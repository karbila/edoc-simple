<div class='tombol'>Form Edit File (Mengganti File)</div>
<div class='box-tabel2'>

	<table>
		<thead><tr><th>Informasi File yang Anda akan ganti</th></tr></thead>

		<tbody>
			<?php  
				$data = mysql_fetch_array(mysql_query("SELECT * FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'"));
				$t3 = bytesToSize($data['ukuran_file']);
				$t1 = tgl_indo($data['tanggal_upload']);
				echo "
				<tr><td>Nama File</td> <td>: <strong>$data[nama_asli_dokpri]</strong></td></tr>
				<tr><td>Tipe File</td> <td>: <strong>$data[tipe_file]</strong></td></tr>
				<tr><td>Ukuran</td> <td>: <strong>$t3</strong></td></tr>
				<tr><td>Tanggal Upload</td> <td>: <strong>$t1</strong></td></tr>
				";
			?>	

		</tbody>

	</table>
	<br><br>
	<form action="modul_perbarui/aksi_upload_ulang.php?menu=dokpri&aksi=upload" enctype="multipart/form-data" method='POST'>
	<table style='width: 100%;'>
		<tbody>
			<tr><td>Upload File Baru</td><td><input type="file" class='btn' name='fupload_dokPri'></td></tr>
			<tr><td colspan='2'><input type="submit" name="upload" value="Upload" class='btn btn-success'>
				<td><input type="hidden" name='iddoklama' value="<?=$data['iddok_pribadi']?>"></td>
			</td></tr>
		</tbody>
	</table>
	</form>	
	<div class="alert">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Ekstensi File yang bisa diunggah:</strong>
	  <ul>
	  	<li>gif</li>
	  	<li>jpeg/jpg</li>
	  	<li>pjpeg</li>
	  	<li>png</li>
	  	<li>txt</li>
	  	<li>pdf</li>	  	
	  	<li>pptx</li>
	  	<li>docx</li>
	  	<li>xlsx</li>
	  	<li>doc</li>
	  	<li>ppt</li>
	  	<li>xls</li>
	  	<li>mp3</li>
	  	<li>mp4</li>
	  	<li>flv</li>	  	
	  </ul>
	</div>		
</div>