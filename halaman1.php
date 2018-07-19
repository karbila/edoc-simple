<?php 
	error_reporting(0);
	session_start();
	include "koneksi.php";
	include "fungsi_indotgl.php";
	include "fungsi_konversi_bit.php";

	$tg = date("Y-m-d");
	$tgindo = tgl_indo($tg);
 ?>

<html>
<head>
<title>Halaman <?php echo "$_SESSION[NamaLengkap] - Level $_SESSION[Level]"; ?></title>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.png">

<script src="jquery.js"></script>
<script src="bootstrap-alert.js"></script>
<script src='bootstrap-dropdown.js'></script>
<script src='bootstrap-button.js'></script>



</head>
<body>
<!-- <div class="top">
<strong class='modul'>MODUL 1</strong>                
</div> -->
<?php  
	if(!isset($_SESSION['idLevel'])){
		?>
		<div id="wrapper2">
			<?php  
				echo "<h2>Hayooo..... Anda Belum Login<br>Login Dulu Brow....</h2>";
				echo "<br><a href='index.php'>Login disini</a>";
			?>
		</div>
		<?php		
	

	}elseif($_SESSION['idLevel']!='1'){
		?>
	<div id="wrapper2">
	<?php
		echo "<h1>Maaf, Ini bukan Halaman Anda</h1><br>Untuk kembali halaman Hak Akses Anda, <a href='halaman$_SESSION[idLevel].php'>Klik disini</a>";
	?>
	</div>
		<?php
	}else{
		?>
	<div id="wrapper">
		<div id="content">
			<div id="menu-atas">
				<div id='menu-dalam'>
					<a href='<?=$_SERVER['PHP_SELF']?>' class='owner'><i class='icon-white icon-home' style='margin: 5px 5px 5px 0px;'></i><?=$_SESSION['NamaLengkap']?></a>
					<div class='menu-kecil'>
						<ul class='nav'>
							<li><a href='?menu=dokpri' class='active'>Dokumen Pribadi</a></li>
							<li><a href='?menu=dokpu'>Dokumen Publik</a></li>
						</ul>	
					</div>
				</div>
				<ul class="nav pull-right">
		        	<li class="dropdown">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Go To <b class="caret"></b></a>
		        		<ul class="dropdown-menu">
		        			<li><a href="halaman6.php">Halaman Bersama</a></li>
		        			<li class="divider"></li>
		        			<li><a href="logout.php">Keluar</a></li>
		        		</ul>
		        	</li>
		        </ul>
			</div>

			<div class='clear'></div>
			<div id='tables'>
				<?php
					if($_GET['s']=='okeup'){
						echo "<div class=\"alert-success\" style='margin: 5px;'>
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					  <strong>Upload Berhasil</strong> Dokumen telah tersimpan di server dan Database.
					</div>	";
					}elseif($_GET['s']=='deloke'){
						echo "<div class=\"alert-success\" style='margin: 5px;'>
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					  <strong>Hapus Berhasil</strong> Dokumen telah terhapus di server dan Database.
					</div>	";
					}elseif ($_GET['s']=='okeedit') {
						echo "<div class=\"alert-success\" style='margin: 5px;'>
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
					  <strong>Edit Dokumen Berhasil</strong> Dokumen telah diperbarui di server dan Database.
					</div>	";
					}					
					include "isi-tabel.php";
				?>
			</div>	
		</div>
	</div>
			<!-- datatable -->
            <script src="./jquery.dataTables.min.js"></script>
            <script src="./Scroller.min.js"></script>
            <!-- datatable functions -->
            <script src="./gebo_datatables.js"></script>            
</body>
</html>
<?php

}
?>

















